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

<div class="content-body">
    
            <!-- Zero configuration table -->
            <section id="file-export">
                <div class="card">
                    <div class="card-header">
                    <form method="GET" action="{{ route('sasextenlogs') }}" id="searchForm">
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
                                            
                                            <th>Employee Name</th>
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>SAS Expiration</th>
                                            <th>SAS new Expiration</th>
                                            <th>Date</th>
                                           
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sasextenlogs as $x)
                                            <tr>
                                                
                                                <td>{{ $x->username }}</td>
                                                <td>{{ $x->pppoename }}</td>
                                                <td>{{ $x->firstname }}</td>
                                                <td>{{ $x->oldexpiration }}</td>
                                                <td>{{ $x->expiration }}</td>
                                                <td>{{ $x->updated_at }}</td>
                                               
                                         
                                                

@endforeach


                                </table>
                            </div>
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
