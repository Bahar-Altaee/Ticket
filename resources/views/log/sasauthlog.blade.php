@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>User Authentication Log</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Contact center</li>
    <li class="breadcrumb-item active">User Auth Log</li>

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
            <form method="GET" action="{{ route('sasauthlog') }}" id="searchForm">
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
                <form action="{{ route('sasauthlog') }}" method="GET">
                    <div class="dataTables_length" id="keytable_length">
                        <label>Show Entries</label>
                        <select name="keytable_length" aria-controls="keytable" class="form-control form-control-sm" onchange="this.form.submit()">
                            @foreach($perPageOptions as $option)
                                <option value="{{ $option }}" {{ request('keytable_length') == $option ? 'selected' : '' }}>{{ $option }}</option>
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
                                    <th>User Name</th>
                                    <th>Server Reply</th>
                                    <th>MAC</th>
                                    <th>ASR</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($paginator as $i)                                            
                            <tr>
                                                <td>{{ $i['username'] }}</td>

                                                <td class="type">
                                                    @if( $i['reply']  == "Access-Accept")
                                         <span class="badge badge-success badge-pill badge-sm">
                                         Access-Accept
                                   </span>
                                   @elseif($i['reply'] == "Access-Reject")
                                    <span class="badge badge-danger badge-pill badge-sm">
                                         Access-Reject
                                   </span>
                                    @elseif($i['reply'] == "User exceeded max login sessions")
                                    <span class="badge badge-secondary badge-pill badge-sm">
                                         User exceeded max login sessions
                                   </span>
	
                                    @elseif($i['reply'] == "user authenticated successfully")
                                    <span class="badge badge-primary badge-pill badge-sm">
                                         user Connected successfully	
                                   </span>

                                    @elseif($i['reply'] == "user disabled")
                                    <span class="badge badge-warning badge-pill badge-sm">
                                         user disabled	
                                   </span>



                                   @else
                                   {{ $i['reply'] }}
                                    </td>
                                         
                                          
                                         @endif
                                    
                                                <td>{{ $i['mac']  }}</td>
                                         <td class="type">
                                                    @if( $i['nas_ip_address']  == "10.1.30.3")
                                         <span class="badge badge-success badge-pill badge-sm">
                                         NOKIA MMN
                                   </span>
                                    @elseif($i['nas_ip_address'] == "10.1.31.10")
                                    <span class="badge badge-warning badge-pill badge-sm">
                                         NOKIA JAD	
                                   </span>


                                   </td>
                                        @endif        <!-- <td>{{ $i['nas_ip_address']  }}</td> -->
                                                <td>{{ $i['created_at']  }}</td>
                                               
                                         
                                                

@endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>

            </div>
            
       
  

       
  
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
