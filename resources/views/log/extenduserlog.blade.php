@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Change Users Expiration Log</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Radius Log</li>
    <li class="breadcrumb-item active">Change Users Expiration</li>
@endsection

@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="row mt-3">
            <div class="col-12">
                <a href="{{ route('sasextenlogs.export') }}" class="btn btn-primary">Export as Excel</a>
            </div>
        </div>
        <br>
        <div class="card-block row">
            <div class="col-sm-12 col-lg-12 col-xl-12">
            @livewire('search-sasextenlogs', ['search' => $search])
            </div>
        </div>
    </div>
    <nav aria-label="...">
    <ul class="pagination">
        <li class="page-item {{ $sasextenlogs->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $sasextenlogs->appends(['search' => $search])->previousPageUrl() }}">Previous</a>
        </li>

        @php
            $start = max($sasextenlogs->currentPage() - 5, 1);
            $end = min($sasextenlogs->currentPage() + 5, $sasextenlogs->lastPage());
        @endphp

        @if ($start > 1)
            <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        @endif

        @for ($page = $start; $page <= $end; $page++)
            <li class="page-item {{ $page == $sasextenlogs->currentPage() ? 'active' : '' }}" aria-current="page">
                <a class="page-link" href="{{ $sasextenlogs->appends(['search' => $search])->url($page) }}">{{ $page }}</a>
            </li>
        @endfor

        @if ($end < $sasextenlogs->lastPage())
            <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        @endif

        <li class="page-item {{ $sasextenlogs->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $sasextenlogs->appends(['search' => $search])->nextPageUrl() }}">Next</a>
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
