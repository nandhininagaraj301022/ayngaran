@extends('layouts.app')

@section('styles')

        <!-- INTERNAL ion.rangeSlider css -->
        <link href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">RangeSllider</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">RangeSlider</li>
								</ol>
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="#" class="btn btn-primary btn-icon text-white me-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
								</a>
								<a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

						<!--div-->
						<div class="card">
							<div class="card-header border-bottom-0">
								<div class="card-title">
									Range Slider
								</div>
							</div>
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider2" name="example_name" type="text" value="">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mt-4">
										<input class="rangeslider3" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider4" name="example_name" type="text" value="">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-header border-bottom-0">
								<div class="card-title">
									Range Slider (Modern Skin)
								</div>
							</div>
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mt-4">
										<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-header border-bottom-0">
								<div class="card-title">
									Range Slider (Outline Skin)
								</div>
							</div>
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mt-4">
										<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

@endsection('content')

@section('scripts')

        <!-- INTERNAL ion.rangeSlider.min js -->
        <script src="{{ asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
		<script src="{{ asset('assets/js/rangeslider.js') }}"></script>

@endsection
