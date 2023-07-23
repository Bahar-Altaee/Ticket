@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>SAS System Log</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">SAS</li>
    <li class="breadcrumb-item active">System Log</li>

@endsection
@section('content')
<div class="container">
    <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
            <div class="content-header-right col-md-10 col-12">
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Zero configuration table -->
    <section id="file-export">
        <div class="card">
        <div class="col-md-12 col-sm-12">
          <div class="card-header">
            <form method="GET" action="{{ route('sassyslog') }}" id="searchForm">
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
                <form action="{{ route('sassyslog') }}" method="GET">
                    <div class="dataTables_length" id="keytable_length">
                        <label>Show Entries</label>
                        <select name="keytable_length" aria-controls="keytable" class="form-control form-control-sm" onchange="this.form.submit()">
                            @foreach($perPageOpt as $opt)
                                <option value="{{ $opt }}" {{ request('keytable_length') == $opt ? 'selected' : '' }}>{{ $opt }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
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
                                    <th>Date</th>
                                    <th>Event</th>
                                    <th>Manager</th>
                                    <th>Descreption</th>
                                    <th>IP</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($paginator as $i)                                            
                            <tr>
                                    <td>{{ $i['created_at'] }}</td>
                                    <td>{{ $i['event'] }}</td>
                                    <td>{{ $i['manager_details']['username'] }}</td>
                                    <td>{{ $i['description']}}</td>
                                    <td>{{ $i['ip']  }}</td>
                                               
                             </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>

            </div>
            
       
  

       
    </section>
  
    <nav aria-label="..." >
  <ul class="pagination">
    <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a>
    </li>

    @php
      $start = max($paginator->currentPage() - 5, 1);
      $end = min($paginator->currentPage() + 5, $paginator->lastPage());
    @endphp

    @if ($start > 1)
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
    @endif

    @for ($page = $start; $page <= $end; $page++)
      <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}" aria-current="page">
        <a class="page-link" href="{{ $paginator->url($page) }}">{{ $page }}</a>
      </li>
    @endfor

    @if ($end < $paginator->lastPage())
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
    @endif

    <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
    </li>
  </ul>
</nav>
<br>
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
