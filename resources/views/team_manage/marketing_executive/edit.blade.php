@extends('layouts.app')
@section('content')
    <div class="row row-sm mt-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Marketing Executive</div>
                </div>
                <div class="card-body">
                    <form id="Edit_marketingExecutiveForm" class="p-3">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Reference Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="reference_code" id=""
                                        value="{{ !empty($marketing_executive->reference_code) ? $marketing_executive->reference_code : '' }}"
                                        readonly>
                                </div><small class="text-danger reference_code"></small>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" id="marketing_executive_id" value="{{ $marketing_executive->id }}">
                                <label class="form-label">Name <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" id=""
                                        placeholder="Name"
                                        value="{{ !empty($marketing_executive->name) ? $marketing_executive->name : '' }}">
                                </div>
                                <small class="text-danger name"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" id=""
                                        value="{{ !empty($marketing_executive->email) ? $marketing_executive->email : '' }}">
                                </div><small class="text-danger email"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Mobile No <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mobile_no" id=""
                                        placeholder="Mobile No"
                                        value="{{ !empty($marketing_executive->mobile_no) ? $marketing_executive->mobile_no : '' }}">
                                </div>
                                <small class="text-danger mobile_no"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Alternate Mobile<span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="alternate_mobile" id=""
                                        placeholder="Alternate Mobile"
                                        value="{{ !empty($marketing_executive->alternate_mobile) ? $marketing_executive->alternate_mobile : '' }}">
                                </div>
                                <small class="text-danger alternate_mobile"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Address <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" id=""
                                        placeholder="Address"
                                        value="{{ !empty($marketing_executive->address) ? $marketing_executive->address : '' }}">
                                </div>
                                <small class="text-danger address"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">D.O.B <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date"
                                        name="dob"
                                        value="{{ !empty($marketing_executive->dob) ? $marketing_executive->dob : '' }}">
                                </div>
                                <small class="text-danger dob"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Gender<span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="gender" class="form-control SlectBox">
                                        <option value="">Select Gender</option>
                                        <option value="1" {{ $marketing_executive->gender == 1 ? 'selected' : '' }}>
                                            Male</option>
                                        <option value="0" {{ $marketing_executive->gender == 0 ? 'selected' : '' }}>
                                            Female
                                        </option>
                                    </select>
                                </div>
                                <small class="text-danger gender"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Pincode <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pincode" id="pincode"
                                        placeholder="Pincode" value="{{ $marketing_executive->pincode }}">
                                </div>
                                <small class="text-danger pincode"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Area <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="area" id="area" class="form-control SlectBox">
                                        <option value="">Select area</option>
                                        @foreach ($areas as $area)
                                            <option value="{{ $area->id }}"
                                                {{ !empty($area->id == $marketing_executive->area) ? 'selected' : '' }}>
                                                {{ $area->area }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-danger area"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">State <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="state_id" class="form-control SlectBox">
                                        <option value="">Select State</option>
                                        <option value="{{ $state->id }}" selected>{{ $state->state }}</option>
                                    </select>
                                </div>
                                <small class="text-danger state_id"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">City <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="city_id" id="city_id" class="form-control SlectBox">
                                        <option value="">Select City</option>
                                        <option value="{{ $city->id }}" selected>{{ $city->city }}</option>
                                    </select>
                                </div>
                                <small class="text-danger city_id"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Country <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="country_id" class="form-control SlectBox">
                                        <option value="">Select Country</option>
                                        <option value="1"
                                            {{ $marketing_executive->country_id == 1 ? 'selected' : '' }}>India</option>
                                    </select>
                                </div>
                                <small class="text-danger country_id"></small>
                            </div>
                            <div class="col-md-4" style="margin-top: 35px;">
                                <div class="input-group ">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
