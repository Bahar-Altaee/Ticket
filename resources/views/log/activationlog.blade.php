@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@livewireStyles

@endsection

@section('breadcrumb-title')
    <h3>Last 3 days activations</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Quality</li>
    <li class="breadcrumb-item active">Last 3 days activations</li>

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
            <!-- Zero configuration table -->
            <section id="file-export">
                <div class="card">
                    <div class="card-header">
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
                                <table class="table table-striped table-bordered file-export">
                                    <thead>
                                        <tr>
                                            
                                            <th>Emploee name</th>
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Parent</th> 
                                            <th>Contract ID</th>
                                            <th>Phone</th>
                                            <th>gps_lng</th>
                                            <th>gps_lat</th>
                                            <th>Date</th>
                                            <th>Visited</th>
                                           
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($zteactivation as $x)
                                            <tr>
                                                
                                                <td>{{ $x->emploee }}</td>
                                                <td>{{ $x->username }}</td>
                                                <td>{{ $x->firstname }}</td>
                                                <td>{{ $x->profile_id }}</td>
                                                <td>
                                                    {{ $x->lastname }}
</a>
                                                </td>
                                                <td>{{ $x->phone }}</td>
                                                <td>{{ $x->contract_id }}</td>
                                                <td>{{ $x->gps_lat }}</td>
                                                
                                                </td>
                                                <td>{{ $x->created_at }}</td>
                                                <td>
                                                @livewire('update-visited-checkbox', ['zteactivationId' => $x->id, 'visited' => $x->Visited])
                                                </td>
                                               
                                         
                                                

@endforeach


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

        @endsection


        @section('script')
        @livewireScripts

<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
@endsection
