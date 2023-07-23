@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Check Card Status</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Contact Center</li>
    <li class="breadcrumb-item active">Check Card Status</li>
@endsection

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <div class="row breadcrumbs-top d-inline-block"></div>
            </div>
        </div>
       <div class="row">
            <div class="col-sm-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Search For Card :</h3>
                    </div>
                    <div class="card-block d-flex flex-column justify-content-center">
                        <br>
                        <br>
                        <form method="POST" action="{{ route('sascardlog') }}">
                            @csrf
                            <input wire:model.lazy="cardpin" type="text" class="form-control" id="pin" name="pin" placeholder="Enter Card PIN" value="">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Card Status :</h3>
                        @if ($used_at)
                            <style>
                                .highlighted {
                                    background-color: #C24641;
                                }
                            </style>
                        @elseif ($serialnumber && $pin)
                            <style>
                                .highlighted {
                                    background-color: green;
                                }
                            </style>
                        @endif
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Serial Number</th>
                                        <th>PIN</th>
                                        <th>Used At</th>
                                        <th>Used By (User)</th>
                                        <th>Used By (Manager)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="highlighted">
                                        <td>{{ $serialnumber ?? '' }}</td>
                                        <td>{{ $pin ?? '' }}</td>
                                        <td>{{ $used_at ?? '' }}</td>
                                        <td>{{ $username ?? '' }}</td>
                                        <td>{{ $mangeruser ?? '' }}</td>
                                    </tr>
                                </tbody>
                            </table>
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
