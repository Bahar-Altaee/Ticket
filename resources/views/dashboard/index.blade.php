@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')

@foreach ([$area] as $i => $value)


<div class="container-fluid">
        <div class="row widget-grid">
<div class="col-xxl-8 col-sm-6 box-col-6">
                    <div class="card profile-box">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="greeting-user">
                                        <h4 class="f-w-600">Welcome {{Auth::user()->name}}</h4>
                                        <p>Here whats happing in your account today</p>
                                        <div class="whatsnew-btn"><a class="btn btn-outline-white">Whats New !</a></div>
                                    </div>
                                </div>
                                <div>
				<div class="clockbox">
				  <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
					<g id="face">
					  <circle class="circle" cx="300" cy="300" r="253.9"></circle>
					  <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"></path>
					  <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
					</g>
					<g id="hour">
					  <path class="hour-hand" d="M300.5 298V142"></path>
					  <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
					</g>
					<g id="minute">
					  <path class="minute-hand" d="M300.5 298V67"></path>
					  <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
					</g>
					<g id="second">
					  <path class="second-hand" d="M300.5 350V55"></path>
					  <circle class="sizing-box" cx="300" cy="300" r="253.9">   </circle>
					</g>
				  </svg>
				</div>
                                    <div class="badge f-10 p-0" id="txt"></div>
                                </div>
                            </div>
                            <div class="cartoon"><img class="img-fluid" src="https://laravel.pixelstrap.com/cuba/assets/images/dashboard/cartoon.svg" alt="vector women with leptop"></div>
                        </div>
                    </div>
                </div>     
              <div class="row">     
                <div class="col-xxl-sm-6 col-xl-3 col-sm-6 box-col-6">    
              <div class="col-xl-12">
                <div class="card widget-1">
                  <div class="card-body">
                    <div class="widget-content">
                      <div class="widget-round success">
                        <div class="bg-round">
                          <svg class="svg-fill">
                            <use href="assets/svg/icon-sprite.svg#customers"> </use>
                          </svg>
                          <svg class="half-circle svg-fill">
                            <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h4>{{$value['total']}}</h4><span class="f-light">Total Users</span>
                      </div>

                    </div>
                    <div class="font-secondary f-w-500"></div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round secondary">
                          <div class="bg-round">
                            <svg class="svg-fill">
                              <use href="assets/svg/icon-sprite.svg#income"> </use>
                            </svg>
                            <svg class="half-circle svg-fill">
                              <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                        <div>
                         <h4>{{$value['expired']}}</h4><span class="f-light">Expired Users</span>

                        </div>

                      </div>
                      <div class="font-success f-w-500"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
               
          <div class="col-xxl-sm-6 col-xl-3 col-sm-6 box-col-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card widget-1">
                  <div class="card-body">
                    <div class="widget-content">
                      <div class="widget-round primary">
                        <div class="bg-round">
                          <svg class="svg-fill">
                            <use href="assets/svg/icon-sprite.svg#24-hour"> </use>
                          </svg>
                          <svg class="half-circle svg-fill">
                            <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h4>{{$value['online']}}</h4><span class="f-light">Online Users</span>
                      </div>

                    </div>
                    <div class="font-warning f-w-500"></div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round warning">
                          <div class="bg-round">
                            <svg class="svg-fill">
                              <use href="assets/svg/icon-sprite.svg#return-box"> </use>
                            </svg>
                            <svg class="half-circle svg-fill">
                              <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4>{{$value['expiring_soon']}}</h4><span class="f-light">Expiring Soon</span>
                        </div>

                      </div>
                      <div class="font-primary f-w-500"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <div class="col-xxl-sm-6 col-xl-3 col-sm-6 box-col-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card widget-1">
                  <div class="card-body">
                    <div class="widget-content">
                      <div class="widget-round warning">
                        <div class="bg-round">
                          <svg class="svg-fill">
                            <use href="assets/svg/icon-sprite.svg#user-visitor"> </use>
                          </svg>
                          <svg class="half-circle svg-fill">
                            <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                      <h4>{{$value['active']}}</h4><span class="f-light">Active Users</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round success">
                          <div class="bg-round">
                            <svg class="svg-fill">
                              <use href="assets/svg/icon-sprite.svg#rate"> </use>
                            </svg>
                            <svg class="half-circle svg-fill">
                              <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4>{{$value['expiring_today']}}</h4><span class="f-light">Expiring Today</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- </div> -->
        
        <div class="col-xxl-sm-6 col-xl-3 col-sm-6 box-col-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card widget-1">
                  <div class="card-body">
                    <div class="widget-content">
                      <div class="widget-round warning">
                        <div class="bg-round">
                          <svg class="svg-fill">
                            <use href="assets/svg/icon-sprite.svg#course-1"> </use>
                          </svg>
                          <svg class="half-circle svg-fill">
                            <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                      <h4>{{$value['fup']}}</h4><span class="f-light">OnlineNoNet</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round success">
                          <div class="bg-round">
                            <svg class="svg-fill">
                              <use href="assets/svg/icon-sprite.svg#course-2"> </use>
                            </svg>
                            <svg class="half-circle svg-fill">
                              <use href="assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4>{{$value['managers']}}</h4><span class="f-light">Managers</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
      </div>
      @endforeach
      

@endsection

@section('script')
<script src="{{ asset('assets/js/clock.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
@endsection
