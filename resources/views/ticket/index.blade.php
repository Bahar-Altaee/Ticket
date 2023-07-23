@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    
@endsection

@section('style')

@livewireStyles

@endsection

@section('breadcrumb-title')
    <h3>Help Desk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Netowk Operation Center</li>
    <li class="breadcrumb-item active">Help Desk</li>
@endsection

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6 text-md-start text-xs">
          <h5 class="mb-1">Gamming Issue</h5>
          <div class="d-flex flex-column">
            <p class="m-0">UserName: 9641575121 </p>
            <p class="m-0">Status: <span class="badge badge-danger">Open</span></p>
            <p class="m-0">Dept: Contact center</p>
            <p class="m-0">Problem: General Issue</p>
          </div>
        </div>
        <div class="col-md-6 text-md-end text-xs">
          <h5>Ticket #<span class="counter" href="#">1069</span></h5>
          <p>created: May<span> 27, 2015</span><br> Last update: June <span>27, 2015</span></p>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="new-users-social">
            <div class="media">
              <img class="rounded-circle image-radius m-r-15" src="../assets/images/user/1.jpg" alt="">
              <div class="media-body">
                <h6 class="mb-0 f-w-700">Worood Naif</h6>
                <p class="m-0">Network Operation Center</p>
                <p>January, 12,2019</p>
              </div>
              <span class="pull-right mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                  <circle cx="12" cy="12" r="1"></circle>
                  <circle cx="12" cy="5" r="1"></circle>
                  <circle cx="12" cy="19" r="1"></circle>
                </svg>
              </span>
            </div>
          </div>
          <div class="timeline-content">
            <h5>اتصل بخصوص مشكلة بالحدمة وبلغتة يجيك الراوتر من يمة ويي اتصل بخصوص يجيك الراوتر من يمة ويي</h5>
            <div class="">
              <span><i class="fa font-danger"></i></span>
              <span class="pull-right comment-number"><span> </span></span>
              <span class="pull-right comment-number"><span>10 </span><span><i class="fa fa-comments-o"></i></span></span>
            </div>
            <div class="social-chat">
              <!-- reply div -->
              <div class="your-msg">
                <div class="media">
                  <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="../assets/images/user/1.jpg">
                  <div class="media-body">
                    <span class="f-w-600">Jason Borne <span>1 Year Ago <i class="fa fa-reply font-primary"></i></span></span><br>
                    <p class="fa font-primary">Contact Center</p>
                    <h6 class="f-w-500">we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                  </div>
                </div>
              </div>
              <div class="your-msg">
                <div class="media">
                  <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="../assets/images/user/1.jpg">
                  <div class="media-body">
                    <span class="f-w-600">Jason Borne <span>1 Year Ago <i class="fa fa-reply font-primary"></i></span></span><br>
                    <p class="fa font-primary">Contact Center</p>
                    <h6 class="f-w-500">we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                  </div>
                </div>
              </div>
              <!--end reply div -->
              <div class="text-center"><a href="#">More Comments</a></div>
            </div>
            <!-- reply section -->

@livewire('ticket-reply')



@endsection

@section('script')
@livewireScripts
@endsection
