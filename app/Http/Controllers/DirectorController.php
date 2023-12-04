<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Pincode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorController extends Controller
{
    public function index()
    {
        try {
            $directors = Director::all();
            return view('team_manage.directors.index', compact('directors'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function create()
    {
        try {
            $count = Director::count();
            return view('team_manage.directors.add', compact('count'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'reference_code' => 'required',
            'name' => 'required',
            'email' => 'required|unique:directors,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required|digits:6',
            'area' => 'required',
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        Director::create($validate);
        return response()->json(['status' => true, 'message' => 'Director Created Successfully!']);
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $director = Director::where('id', $id)->first();
            $areas  = Pincode::where('pincode', $director->pincode)->get();
            $state  = Pincode::select('id', 'state')->where('pincode', $director->pincode)->first();
            $city  = Pincode::select('id', 'city')->where('pincode', $director->pincode)->first();
            // dd($state);
            return view('team_manage.directors.edit', compact('director', 'areas', 'state', 'city'));
        }
        return response()->json(['status' => false, 'message' => 'Director not found!']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|exists:directors,email',
            'mobile_no' => 'required|numeric|digits:10',
            'alternate_mobile' => 'required|numeric|digits:10',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'state_id' => 'required',
            'city_id' => 'required',
            'country_id' => 'required',
            'pincode' => 'required|digits:6',
            'area' => 'required',
        ], [
            'state_id.required' => 'The state field is required.',
            'city_id.required' => 'The city field is required.',
            'country_id.required' => 'The country field is required.'
        ]);

        Director::where('id', $id)->update($validate);
        return response()->json(['status' => true, 'message' => 'Director Updated Successfully!']);
    }
    public function delete($id)
    {
        if (!empty($id)) {
            $director = Director::where('id', $id)->first();
            $director->delete();
            return response()->json(['status' => 200, 'message' => 'Director Deleted Success!'], 200);
        }
    }
}
