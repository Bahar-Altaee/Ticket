   @include('layouts.css')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Hala-FTTH-ActiviationLOG</title>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    @include('layouts.sidebar')
    @include('layouts.navbar')


   
   <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-10 mb-4 breadcrumb-new">
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/coustmer">Customers</a>
                                </li>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="dropdown float-md-right">

                        <div class="content-header-right col-md-10 col-12">

                        <button type="button" class="btn btn-warning btn-min-width mr-1 mb-1" data-toggle="modal"
                                data-target="#bootstrap">
                            Add New User
                        </button>

                      
                          </div>
                    </div>
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

                                        <th>UserName</th>
                                        <th>UserSequance</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                       

                                    @foreach ($data as $i)
                                        <tr>
                                            <td>{{($i['username'])}}</td>
                                            @endforeach
                                           
                                           
                                            <td>{{$d}}</td>
                                            
                                         
                                        </tr>
                                   

                                                             </table>
                                                             
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>


</div>


@include('layouts.footer')


@include('layouts.js')

@if(Session::has('systemuser_added'))

<script>
  toastr.success("{!!Session::get('systemuser_added')!!}");
</script>

@endif

<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>

@if(Session::has('systemuser_delete'))

<script>
  toastr.info("{!!Session::get('systemuser_delete')!!}");
</script>

@endif


@if(Session::has('systemuser_wrong'))

<script>
  toastr.warning("{!!Session::get('systemuser_wrong')!!}");
</script>

@endif


