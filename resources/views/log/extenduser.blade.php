@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Extend Users Log</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Radius Log</li>
    <li class="breadcrumb-item active">Extend Users Log</li>
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
<div class="col-sm-12">
    <div class="card">
        <div class="row mt-3">
        
                    <div class="card-header">
                    <form method="GET" action="{{ route('extenduser') }}" id="searchForm">
                <div class="form-group m-0">
                <label>Search User Log :</label>
                    <input class="form-control" type="text" name="search" placeholder="Use ( Username for search ) ..." value="{{ request('search') }}" data-original-title="" title="" data-bs-original-title="" id="searchInput">
                    <button type="submit" style="position: absolute; left: -9999px;">Search</button>
                </div>
                </form>

                <script>
                document.getElementById('searchInput').addEventListener('keyup', function(event) {
                    event.preventDefault();
                    if (event.keyCode === 13) {
                    document.getElementById('searchForm').submit();
                    }
                });
                </script>
                <br>
            
        </div>
        <br>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                   
        <div class="card-content collapse show">

        <div class="card-body card-dashboard">

        <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                            <th>Employee Name</th>
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Days</th>
                                            <th>Date</th>
                                           
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($extendusers as $x)
                                    <tr>
                                    <td>{{ $x->username }}</td>
                                                <td>{{ $x->pppoename }}</td>
                                                <td>{{ $x->firstname }}</td>
                                                <td>
                                                    @if($x->sasprofileid == 11)
                
                                                        1 Day

                                                    @elseif($x->sasprofileid == 12)

                                                    2 Days
                                                    @elseif($x->sasprofileid == 13)
                
                                                        3 Days
                                                    @elseif($x->sasprofileid == 14)
                                                                 
                                                        4 Days
                                                    @elseif($x->sasprofileid == 15)
                                                                     
                                                            5 Days  
                                                    
                                                    @endif
                                                </td>
                                                <td>{{ $x->updated_at }}</td>
                                    </tr>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
     
<nav aria-label="...">
    <ul class="pagination">
        <li class="page-item {{ $extendusers->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $extendusers->appends(['search' => $search])->previousPageUrl() }}">Previous</a>
        </li>

        @php
            $start = max($extendusers->currentPage() - 5, 1);
            $end = min($extendusers->currentPage() + 5, $extendusers->lastPage());
        @endphp

        @if ($start > 1)
            <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        @endif

        @for ($page = $start; $page <= $end; $page++)
            <li class="page-item {{ $page == $extendusers->currentPage() ? 'active' : '' }}" aria-current="page">
                <a class="page-link" href="{{ $extendusers->appends(['search' => $search])->url($page) }}">{{ $page }}</a>
            </li>
        @endfor

        @if ($end < $extendusers->lastPage())
            <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        @endif

        <li class="page-item {{ $extendusers->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $extendusers->appends(['search' => $search])->nextPageUrl() }}">Next</a>
        </li>
    </ul>
</nav>
</div>    
@endsection

@section('script')
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
