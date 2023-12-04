<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarketingExecutive;
use App\Models\Pincode;

class MarketingExecutiveController extends Controller
{
    public function index()
    {
        try {
            $marketing_executives = MarketingExecutive::orderBy('id', 'asc')->get();
            return view('team_manage.marketing_executive.index', compact('marketing_executives'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function create()
    {
        try {
            $count = MarketingExecutive::count();
            return view('team_manage.marketing_executive.add', compact('count'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'reference_code' => 'required',
            'name' => 'required',
            'email' => 'required|unique:marketing_executives,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'gender' => 'required',
            'area' => 'required'
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        MarketingExecutive::create($validate);
        return response()->json(['status' => true, 'message' => 'Marketing Executive Created Successfully!']);
    }
    public function edit($id)
    {
        if (!empty($id)) {
            $marketing_executive = MarketingExecutive::where('id', $id)->first();
            $areas = Pincode::select('id', 'area')->where('pincode', $marketing_executive->pincode)->get();
            $state  = Pincode::select('id', 'state')->where('pincode', $marketing_executive->pincode)->first();
            $city  = Pincode::select('id', 'city')->where('pincode', $marketing_executive->pincode)->first();
            return view('team_manage.marketing_executive.edit', compact('marketing_executive', 'areas', 'state', 'city'));
        }
        return response()->json(['status' => false, 'message' => 'Marketing Executive not found!']);
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|exists:marketing_executives,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required',
            'gender' => 'required',
            'area' => 'required'
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        MarketingExecutive::where('id', $id)->update($validate);
        return response()->json(['status' => true, 'message' => 'Marketing Executive Updated Successfully!']);
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $marketing_executive = MarketingExecutive::where('id', $id)->first();
            $marketing_executive->delete();
            return response()->json(['status' => 200, 'message' => 'Marketing Executive Deleted Success!'], 200);
        }
    }
}
