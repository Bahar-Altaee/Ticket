@extends('layouts.simple.master')


@section('title', 'Hala FTTH')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Add ONT</h3>

@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">ONT's</li>
    <li class="breadcrumb-item active">Calix ONT</li>

	@if (session()->has('systemuser_added'))
    <div id="success-message" class="alert alert-success">
        @if(is_array(session('systemuser_added')))
            <ul>
                @foreach (session('systemuser_added') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session('systemuser_added') }}
        @endif
      
    </div>
    <?php session()->forget('systemuser_added'); ?>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000); 
    </script>
@endif




@endsection



@section('content')


        <div class="content-body">
        @if($totfullname > 0)
        <div class="col-xl-12 col-lg-12">
        <div class="alert bg-danger alert-dismissible order-mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>Full Name is Duplicated in the SAS!</strong>
								</div>  
                                </div>  

                  @endif
                  @if($totphone > 0)
                  <div class="col-xl-12 col-lg-12">
                                <div class="alert bg-danger alert-dismissible order-mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>Phone Number is Duplicated in the SAS!</strong>
								</div>  
                                </div>
@endif
@if($totdesc > 0)
                                       <div class="col-xl-12 col-lg-12">
                                        <div class="alert bg-danger alert-dismissible order-mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>RC/DP/District/Street is Duplicated in the SAS!</strong>
								</div> 
                                 </div> 
@endif


@if($cordination > 0)
                                       <div class="col-xl-12 col-lg-12">
                                        <div class="alert bg-danger alert-dismissible order-mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>The user has been found to be in close proximity to another user, or in the same location!</strong>
								</div>  
                                </div>  
@endif

                   
                                
<div class="col-md-12 order-md-1">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">User Information</h4>
						</div>
						<div class="card-content">
							<div class="card-body">
								<form action="{{ route('xmlcalix.activaterev') }}" method="POST">
                    {{method_field('POST')}}
                    @csrf


                    
									<div class="row">
										<div class="col-md-3 mb-4">
											<label for="firstName">OLT</label>
											<input name="oltid" type="text" class="form-control" id="oltid" name="oltid" placeholder="" value="{{$data['oltid']}}" readonly>
										</div>
										<div class="col-md-3 mb-4">
											<label for="lastName">Serial Number</label>
											<input type="text" class="form-control" id="serial"  name="serial" placeholder="" value="{{$data['serial']}}" readonly>
										</div>
                                        <div class="col-md-1 mb-4">
											<label for="lastName">RC</label>
                                            
											<input type="text" class="form-control" id="rc" name="rc" placeholder="" value="{{$data['rc']}}"  readonly>
                                            
										</div>

                                        <div class="col-md-1 mb-3">
											<label for="lastName">DP</label>
											<input type="text" class="form-control" id="dp" name="dp" placeholder="" value="{{$data['dp']}}" readonly>
										</div>

                                        <div class="col-md-1 mb-3">
											<label for="lastName">DP Port</label>
											<input type="text" class="form-control" id="pdp" name="pdp" placeholder="" value="{{$data['pdp']}}" readonly>
										</div>


                                            <div class="col-md-1 mb-4">
											<label for="lastName">District</label>
											<input type="text" class="form-control" id="group_id" name="group_id" placeholder="" value="{{$data['group_id']}}" readonly>
										</div>


                                       <div class="col-md-1 mb-4">
											<label for="lastName">Street</label>
											<input type="text" class="form-control" id="Street" name="Street" placeholder="" value="{{$data['Street']}}" readonly>
										</div>

                                            <div class="col-md-1 mb-4">
											<label for="lastName">House</label>
											<input type="text" class="form-control" id="house" name="house" placeholder="" value="{{$data['house']}}" readonly>
										</div>

                                        <div class="col-md-1 mb-4">
											<label for="firstName">OLT/Slot/Port</label>
											<input name="slot" type="text" class="form-control" id="slot" name="slot" placeholder="" value="{{$data['slot']}}" readonly>
										</div>
										<div class="col-md-3 mb-4">
											<label for="lastName">Phone</label>
											<input type="text" class="form-control" id="phone"  name="phone" placeholder="" value="{{$data['phone']}}" readonly>
										</div>
                                <div class="col-md-1 mb-4">  
                                <label for="exampleInputEmail1">First Name</label>
                                <input value="{{$data['finame']}}" type="text" class="form-control" id="finame" name="finame" readonly >
</div>
                <div class="col-md-1 mb-4">  

                                <label for="exampleInputEmail1">Second Name</label>
                                <input value="{{$data['sename']}}" type="text" class="form-control" id="sename" name="sename" readonly>
</div>                                  
<div class="col-md-1 mb-4">  
                                <label for="exampleInputEmail1">Third Name</label>
                                <input value="{{$data['thname']}}" type="text" class="form-control" id="thname" name="thname" readonly>
</div>
<div class="col-md-1 mb-4">  
                                <label for="exampleInputEmail1">Fourth Name</label>
                                <input value="{{$data['foname']}}" type="text" class="form-control" id="foname" name="foname" readonly>
</div>
										<div class="col-md-2 mb-4">
											<label for="lastName">Latitude</label>
											<input   type="text" class="form-control" id="gps_lat"  name="gps_lat" placeholder="" value="{{$data['gps_lat']}}" readonly>
										</div>

                                        <div class="col-md-2 mb-4">
											<label for="lastName">Longitude</label>
											<input type="text" class="form-control" id="gps_lng"  name="gps_lng" placeholder="" value="{{$data['gps_lng']}}" readonly>
										</div>
                                         
                                        <div class="col-md-3 mb-4">
											<label for="lastName">Offer</label>
											<input type="text" class="form-control" id="offer"  name="offer" placeholder="" value="{{$data['offer']}}" readonly>
										</div>


                                        <div class="col-md-3 mb-4">
											<label for="lastName">Profile</label>
											<input type="text" class="form-control" id="profile"  name="profile" placeholder="" value="{{$data['profile']}}" readonly>
										</div>


                                       <div class="col-md-3 mb-4">
											<label for="lastName">PPPOE</label>
											<input type="text" class="form-control" id="pppoeuser"  name="pppoeuser" placeholder="" value="{{$data['pppoeuser']}}" readonly>
										</div>


                                       <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="serial"  name="serial" placeholder="" value="{{$data['serial']}}" hidden>
										</div>

                                     <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="emploee"  name="emploee" placeholder="" value="{{$data['emploee']}}" hidden>
										</div>

                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="cardpin"  name="cardpin" placeholder="" value="{{$data['cardpin']}}" hidden>
										</div>



                                       <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="manger"  name="manger" placeholder="" value="{{$data['manger']}}" hidden>
										</div>


                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="fifname"  name="fifname" placeholder="" value="{{$data['fifname']}}" hidden>
										</div>

                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="cordination"  name="cordination" placeholder="" value="{{$cordination}}" hidden>
										</div>

                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="totdesc"  name="totdesc" placeholder="" value="{{$totdesc}}" hidden>
										</div>

                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="totphone"  name="totphone" placeholder="" value="{{$totphone}}" hidden>
										</div>

                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="totfullname"  name="totfullname" placeholder="" value="{{$totfullname}}" hidden>
										</div>
                                        <div class="col-md-3 mb-4">
											<input type="text" class="form-control" id="ticketid"  name="ticketid" placeholder="" value="{{$data['ticketid']}}" hidden>
										</div>


                                        



									</div>

									</div>
									<button class="btn btn-danger btn-lg" >Continue to Activation</button>
								</form>

<form action="{{ route('home') }}" method="get">
                                <button class="btn btn-info btn-lg" type="submit">Cancel Activation</button>
</form>
							</div>
						</div>
					</div>
				</div>        



    @endsection

@section('script')
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>





      <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
      <script src="../../../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>


    @endsection










      

