@extends('layouts.app')
@section('content')
    <div class="row row-sm mt-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Marketing Manager</div>
                </div>
                <div class="card-body">
                    <form id="Add_marketingmanagerForm" class="p-3">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Reference Code</label>
                                <div class="input-group">
                                    @if ($count == 0)
                                        <input type="text" class="form-control" name="reference_code" id=""
                                            value="MM-001" readonly>
                                    @else
                                        <input type="text" class="form-control" name="reference_code" id=""
                                            value="MM-00{{ $count + 1 }}" readonly>
                                    @endif
                                </div>
                                <small class="text-danger reference_code"></small>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" id="url" value="{{ route('marketing_manager_store') }}">
                                <label class="form-label">Name <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" id=""
                                        placeholder="Name">
                                </div>
                                <small class="text-danger name"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" id=""
                                        placeholder="Email">
                                </div><small class="text-danger email"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Mobile No <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mobile_no" id=""
                                        placeholder="Mobile Number">
                                </div>
                                <small class="text-danger mobile_no"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Alternate Mobile <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="alternate_mobile" id=""
                                        placeholder="Alternate Mobile">
                                </div>
                                <small class="text-danger alternate_mobile"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Address <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" id=""
                                        placeholder="Address">
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
                                        name="dob">
                                </div>
                                <small class="text-danger dob"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Gender<span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="gender" class="form-control SlectBox">
                                        <option value="">Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                                <small class="text-danger gender"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Pincode <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pincode" id="pincode"
                                        placeholder="Pincode">
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
                                    </select>
                                </div>
                                <small class="text-danger area"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">City <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="city_id" id="city_id" class="form-control SlectBox">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                                <small class="text-danger city_id"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">State <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="state_id" id="state_id" class="form-control SlectBox">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                                <small class="text-danger state_id"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Country <span class="text-red">*</span></label>
                                <div class="input-group">
                                    <select name="country_id" class="form-control SlectBox">
                                        <option value="">Select Country</option>
                                        <option value="1">India</option>
                                    </select>
                                </div>
                                <small class="text-danger country_id"></small>
                            </div>
                            <div class="col-md-4" style="margin-top: 35px;">
                                <div class="input-group ">
                                    <button type="submit" class="btn btn-primary ms-2">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
