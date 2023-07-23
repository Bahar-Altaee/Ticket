@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
    @livewireStyles
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
    <div class="row">
        <div class="col-md-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5>ADD ONT INFO</h5>
                </div>
                @livewire('script-olt')
                @yield('content')
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('script')
@livewireScripts

    <script>
        function copyOutput() {
            var outputElement = document.getElementById('output');
            outputElement.select();
            document.execCommand('copy');
        }
    </script>
@endsection
