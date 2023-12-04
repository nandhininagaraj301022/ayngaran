<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Permission;
use App\Models\UserType;
use DB;

class PermissionController extends Controller
{
    public function index()
    {
        
        
         try {
            $user_details = Permission::leftjoin('user_type as u','u.id','permissions.user_role')
            ->select('u.user_type','u.id as role_id')->distinct()->get();
            
              return view('permissions.index', compact('user_details'));
             
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
        
       
    }
    
    public function create()
    {
        try {
            $user_type = UserType::orderBy('id', 'asc')->get();
            
            $parent_pages = Pages::where('is_parent',1)->orderBy('id', 'asc')->get();
            
            $sub_pages = Pages::where('is_parent',0)->orderBy('id', 'asc')->get();
            
            return view('permissions.add', compact('user_type','parent_pages','sub_pages'));
            
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    

    public function store(Request $request)
    {
        $validator = $request->validate([
            'user_role' => 'required',
       
        ]);
        
       if(isset($request->permissions))
       {
           foreach($request->permissions as $permission)
           {
               
           
            $permission = Permission::create([
                'user_role' => $request->user_role,
                'page_id' => $request->page_id,
                'action_name' => $permission,
                'status' => 1
                ]);
           }
       }
        
        return response()->json(['status' => true, 'message' => 'Permission Added Successfully!'], 200);    
      
        
    }

    public function edit($id)
    {
         try {
            $user_type = UserType::orderBy('id', 'asc')->get();
            
            $parent_pages = Pages::where('is_parent',1)->orderBy('id', 'asc')->get();
            
            $sub_pages = Pages::where('is_parent',0)->orderBy('id', 'asc')->get();
            
            $permission = DB::table('permissions')->where('user_role',$id)->get();
             $role_permissions = [];
            foreach ($permission as $role_perm) {
            $role_permissions[] = $role_perm->action_name;
              }
              
         
            $role_id = $id;
            
            return view('permissions.edit', compact('user_type','parent_pages','sub_pages','permission','role_id','role_permissions'));
            
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }

    public function update(Request $request, $id)
    {
         $validator = $request->validate([
            'user_role' => 'required',
       
        ]);
        
        $existig = Permission::where('user_role',$id)->get();
        $role_permissions = [];
            foreach ($existig as $role_perm) {
            $role_permissions[] = $role_perm->action_name;
              }
              
        $not_exist = array_diff($request->permissions,$role_permissions);
        
        $not_in = array_diff($role_permissions,$request->permissions);
      
       if(!empty($not_exist))
       {
           foreach($not_exist as $permission)
           {
            $permission = Permission::create([
                'user_role' => $request->user_role,
                'page_id' => $request->page_id,
                'action_name' => $permission,
                'status' => 1
                ]);
           }
       }
       
       if(!empty($not_in))
       {
         foreach($not_in as $permission)
           {
          $permission = Permission::where('user_role',$id)->where('page_id',$request->page_id)
                           ->where('action_name',$permission)->delete();
           } 
       }
        return response()->json(['status' => true, 'message' => 'Permission Updated Successfully!'], 200); 
    }

    public function delete($id)
    {

        if (!empty($id)) {
            $project = Permission::where('user_role',$id)->delete();
            
            return response()->json(['status' => 200, 'message' => 'Permission Deleted Successfully!'], 200);
        }
    }
}

 