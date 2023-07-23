@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>User Profile</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Account</li>
<li class="breadcrumb-item active">User Profile</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="user-profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="card hovercard text-center">
                <div class="cardheader" style="height: 470px; overflow: hidden;">
                    <img src="{{ asset('assets/images/uni.jpg') }}" alt="Card Header Image" style="width: 100%; height: auto;">
                </div>
               

                    <div class="user-image">
                        <div class="avatar">
                            <img alt="" src="{{ asset('uploads/profiles/' . Auth()->user()->image) }}">
                        </div>
                        <div class="icon-wrapper">
                            <i class="icofont icofont-pencil-alt-5"></i>
                        </div>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;Email</h6>
                                            <span>{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Join</h6>
                                            <span>{{Auth::user()->created_at}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                <div class="user-designation">
                                    <div class="title">
                                        <a target="_blank" href="" data-bs-original-title="" title="">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="desc">{{Auth::user()->department}}</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Phone</h6>
                                            <span> +964 </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ttl-info text-start">
                                            <h6><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;Location</h6>
                                            <span>Baghdad - Iraq</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="social-media">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/" target="_blank" data-bs-original-title=""
                                        title=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://accounts.google.com/" target="_blank" data-bs-original-title=""
                                        title=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://twitter.com/" target="_blank" data-bs-original-title=""
                                        title=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/" target="_blank" data-bs-original-title=""
                                        title=""><i class="fa fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://rss.app/" target="_blank" data-bs-original-title=""
                                        title=""><i class="fa fa-rss"></i></a>
                                </li>
                            </ul>
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
