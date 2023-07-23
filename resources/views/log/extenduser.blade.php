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
            <div class="col-12">
                <a href="{{ route('sasextenlogs.export') }}" class="btn btn-primary">Export as Excel</a>
            </div>
        </div>
        <br>
         
                    @livewire('search-extendlog', ['search' => $search])

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
