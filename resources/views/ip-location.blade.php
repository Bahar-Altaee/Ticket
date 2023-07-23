@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>IP Information</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">CONTACT CENTER</li>
    <li class="breadcrumb-item active">IP Info</li>

@endsection




@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <div class="row breadcrumbs-top d-inline-block">
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-md-6">
                <!-- Card Code -->
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Enter IP Address:</h1>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('ip-location') }}">
                            <div class="form-group">
                                <lable > Example IP:   8.8.8.8 </lable>
                                <input type="text" id="ip" name="ip" class="form-control" required>
                            </div>
                            <br>
                            <br>
                            <br>
                            

                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#locationModal">Get Info</button>
                        </form>
                    </div>
                </div>
                <!-- End of Card Code -->
            </div>
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-header">
                        IP - Information
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">IP:</th>
                                        <td>{{ $ip }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country Name:</th>
                                        <td>{{ $country_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country Code:</th>
                                        <td>{{ $country_code2 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ISP:</th>
                                        <td>{{ $isp }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection


  @section('script')
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>


@endsection