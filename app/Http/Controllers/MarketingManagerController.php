<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarketingManager;
use App\Models\Pincode;

class MarketingManagerController extends Controller
{
    public function index()
    {
        try {
            $marketing_managers = MarketingManager::orderBy('id', 'asc')->get();
            return view('team_manage.marketing_manager.index', compact('marketing_managers'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function create()
    {
        try {
            $count = MarketingManager::count();
            return view('team_manage.marketing_manager.add', compact('count'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'reference_code' => 'required',
            'name' => 'required',
            'email' => 'required|unique:marketing_managers,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'area' => 'required'
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        MarketingManager::create($validate);
        return response()->json(['status' => true, 'message' => 'Marketing Manager Created Successfully!']);
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $marketing_manager = MarketingManager::where('id', $id)->first();
            $areas  = Pincode::where('pincode', $marketing_manager->pincode)->get();
            $state  = Pincode::select('id', 'state')->where('pincode', $marketing_manager->pincode)->first();
            $city  = Pincode::select('id', 'city')->where('pincode', $marketing_manager->pincode)->first();
            return view('team_manage.marketing_manager.edit', compact('marketing_manager', 'areas', 'state', 'city'));
        }
        return response()->json(['status' => false, 'message' => 'Marketing Manager not found!']);
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|exists:marketing_managers,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'area' => 'required',
            'gender' => 'required'
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        MarketingManager::where('id', $id)->update($validate);
        return response()->json(['status' => true, 'message' => 'Marketing Manager Updated Successfully!']);
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $marketing_manager = MarketingManager::where('id', $id)->first();
            $marketing_manager->delete();
            return response()->json(['status' => 200, 'message' => 'Marketing Manager Deleted Success!'], 200);
        }
    }
}
