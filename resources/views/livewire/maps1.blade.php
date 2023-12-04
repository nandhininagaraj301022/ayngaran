@extends('layouts.app')

@section('styles')

        <!-- INTERNAL leaflet Css-->
        <link href="{{ asset('assets/plugins/leaflet/leaflet.css') }}" rel="stylesheet">

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Maps</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Maps</li>
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

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map">
									<div class="card-header">
										<div class="card-title">Basic</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet1" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map2">
									<div class="card-header">
										<div class="card-title">With Popup</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet2" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card" id="map1">
									<div class="card-header">
										<div class="card-title">Map With Circle</div>
									</div>
									<div class="card-body">
										<div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL leaflet js -->
		<script src="{{ asset('assets/plugins/leaflet/leaflet.js') }}"></script>
		<script src="{{ asset('assets/js/map-leafleft.js') }}"></script>

		<!-- C3 CHART JS -->
		<script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
		
@endsection
