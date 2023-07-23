@extends('layouts.simple.master')


@section('title', 'Hala FTTH')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@livewireStyles

@endsection

@section('breadcrumb-title')
    <h3>Hala-FTTH-SAS Check Card</h3>

@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">SAS</li>
    <li class="breadcrumb-item active">Check Card</li>



@endsection



@section('content')

        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="file-export">
                <div class="card">
                    <div class="card-header">
                    <h1 class="card-title">Enter Card PIN: </h1>

                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                            <div class="table-responsive">
                                
@livewire('sascard')

                            </div>
                        </div>
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


    @livewireScripts
    @endsection
