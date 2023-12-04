<?php

namespace App\Http\Controllers;

use App\Models\MarketingSupervisor;
use App\Models\Pincode;
use Illuminate\Http\Request;

class MarketingSupervisorController extends Controller
{
    public function index()
    {
        try {
            $marketing_supervisors = MarketingSupervisor::orderBy('id', 'asc')->get();
            return view('team_manage.marketing_supervisor.index', compact('marketing_supervisors'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function create()
    {
        try {
            $count = MarketingSupervisor::count();
            return view('team_manage.marketing_supervisor.add', compact('count'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'reference_code' => 'required',
            'name' => 'required',
            'email' => 'required|unique:marketing_supervisors,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'gender' => 'required',
            'area' => 'required',
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        MarketingSupervisor::create($validate);
        return response()->json(['status' => true, 'message' => 'Marketing Supervisor Created Successfully!']);
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $marketing_supervisor = MarketingSupervisor::where('id', $id)->first();
            $areas = Pincode::select('id', 'area')->where('pincode', $marketing_supervisor->pincode)->get();
            $state  = Pincode::select('id', 'state')->where('pincode', $marketing_supervisor->pincode)->first();
            $city  = Pincode::select('id', 'city')->where('pincode', $marketing_supervisor->pincode)->first();
            return view('team_manage.marketing_supervisor.edit', compact('marketing_supervisor', 'areas', 'state', 'city'));
        }
        return response()->json(['status' => false, 'message' => 'Marketing Supervisor not found!']);
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|exists:marketing_supervisors,email',
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

        MarketingSupervisor::where('id', $id)->update($validate);
        return response()->json(['status' => true, 'message' => 'Marketing Supervisor Updated Successfully!']);
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $marketing_supervisor = MarketingSupervisor::where('id', $id)->first();
            $marketing_supervisor->delete();
            return response()->json(['status' => 200, 'message' => 'Marketing Supervisor Deleted Success!'], 200);
        }
    }
}
