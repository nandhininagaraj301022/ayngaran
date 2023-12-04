<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Designation;
use App\Models\Director;
use App\Models\MarketingExecutive;
use App\Models\MarketingManager;
use App\Models\MarketingSupervisor;
use App\Models\Pincode;
use App\Models\Staff_Detail;
use Illuminate\Http\Request;

class StaffdetailController extends Controller
{
    public function index()
    {
        try {
            $staff_details = Staff_Detail::leftjoin('branch','branch.id','staff_details.branch')
            ->leftjoin('designation','designation.id','staff_details.designation')
            ->select('staff_details.*','designation.designation','branch.branch_name')->get();
             return view('staff_details.index', compact('staff_details'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function create()
    {
        try {
            $directors = Director::all();
            $m_managers = MarketingManager::all();
            $m_supervisors = MarketingSupervisor::all();
            $m_executives = MarketingExecutive::all();
            $branches = Branch::all();
            $designations = Designation::all();
            return view('staff_details.add', compact('branches', 'designations', 'directors', 'm_managers', 'm_supervisors', 'm_executives'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'staff_code' => 'required',
            'director_id' => 'required',
            'marketing_manager_id' => 'required',
            'marketing_supervisor_id' => 'required',
            'marketing_executive_id' => 'required',
            'branch' => 'required',
            'email' => 'required|email|unique:staff_details,email',
            'staff_name' => 'required',
            'designation' => 'required',
            'mobile' => 'required|numeric|digits:10',
            'dob' => 'required',
            'gender' => 'required',
            'street' => 'required',
            'area' => 'required',
            'city_id' => 'required',
            'district_id' => '',
            'state_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'alternate_mobile' => 'required|numeric|digits:10',
            'attendace_applicable' => 'required',
            'food_allowance' => 'required',
            'salary' => 'required',
            'eligible_level' => 'required',
        ], [
            'director_id.required' => 'The director field is required.',
            'marketing_manager_id.required' => 'The marketing manager field is required.',
            'marketing_supervisor_id.required' => 'The marketing supervisor field is required.',
            'marketing_executive_id.required' => 'The marketing executive field is required.',
            'district_id.required' => 'The district field is required.',
            'state_id.required' => 'The state field is required.',
            'country_id.required' => 'The country field is required.',
            'city_id.required' => 'The city field is required.'
        ]);
        Staff_Detail::create($validate);
        return response()->json(['status' => true, 'message' => 'Staff Detail Created Successfully!'], 200);
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $staff_detail = Staff_Detail::where('id', $id)->first();
            $directors = Director::all();
            $m_managers = MarketingManager::all();
            $m_supervisors = MarketingSupervisor::all();
            $m_executives = MarketingExecutive::all();
            $branches = Branch::all();
            $designations = Designation::all();
            $areas  = Pincode::where('pincode', $staff_detail->pincode)->get();
            $state  = Pincode::select('id', 'state')->where('pincode', $staff_detail->pincode)->first();
            $city  = Pincode::select('id', 'city')->where('pincode', $staff_detail->pincode)->first();
            return view('staff_details.edit', compact('staff_detail', 'branches', 'designations', 'directors', 'm_managers', 'm_supervisors', 'm_executives', 'areas', 'state', 'city'));
        }
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'staff_code' => 'required',
            'director_id' => 'required',
            'marketing_manager_id' => 'required',
            'marketing_supervisor_id' => 'required',
            'marketing_executive_id' => 'required',
            'branch' => 'required',
            'email' => 'required|email|exists:staff_details,email',
            'staff_name' => 'required',
            'designation' => 'required',
            'mobile' => 'required|numeric|digits:10',
            'dob' => 'required',
            'gender' => 'required',
            'street' => 'required',
            'area' => 'required',
            'city_id' => 'required',
            'district_id' => '',
            'state_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'alternate_mobile' => 'required|numeric|digits:10',
            'attendace_applicable' => 'required',
            'food_allowance' => 'required',
            'salary' => 'required',
            'eligible_level' => 'required',
        ], [
            'director_id.required' => 'The director field is required.',
            'marketing_manager_id.required' => 'The marketing manager field is required.',
            'marketing_supervisor_id.required' => 'The marketing supervisor field is required.',
            'marketing_executive_id.required' => 'The marketing executive field is required.',
            'district_id.required' => 'The district field is required.',
            'state_id.required' => 'The state field is required.',
            'country_id.required' => 'The country field is required.',
            'city_id.required' => 'The city field is required.'
        ]);
        Staff_Detail::where('id', $id)->update($validate);
        return response()->json(['status' => true, 'message' => 'Staff Detail Updated Successfully!'], 200);
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $Staff_Detail = Staff_Detail::where('id', $id)->first();
            $Staff_Detail->delete();
            return response()->json(['status' => 200, 'message' => 'Staff Detail Deleted Success!'], 200);
        }
    }
}
