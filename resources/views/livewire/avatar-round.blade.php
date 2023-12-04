@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Avatar-Rounded</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Avatar-Rounded</li>
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

						<!-- ROW-1 OPEN -->
						<div class="row ">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Round avatar</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar  brround cover-image" data-bs-image-src="{{ asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-bs-image-src="{{ asset('assets/images/users/13.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-bs-image-src= "{{ asset('assets/images/users/11.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-bs-image-src= "{{ asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-bs-image-src= "{{ asset('assets/images/users/14.jpg')}}"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">RoundAvatars list</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/12.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/1.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/19.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/2.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar brround cover-image bg-primary">+8</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row ">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">RoundAvatar size</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/15.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/13.jpg')}}"></span>
													<span class="avatar avatar-md brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/16.jpg')}}"></span>
													<span class="avatar avatar-lg brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/17.jpg')}}"></span>
													<span class="avatar avatar-xl brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar avatar-xxl brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/18.jpg')}}"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">RoundAvatar status</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/19.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/15.jpg')}}">
														<span class="avatar-status bg-secondary"></span>
													</span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/20.jpg')}}">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/11.jpg')}}">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar brround cover-image"  data-bs-image-src="{{ asset('assets/images/users/17.jpg')}}">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div><!-- COL END -->

@endsection('content')

@section('scripts')

@endsection
