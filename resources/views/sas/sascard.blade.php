@include('layouts.css')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
@livewireStyles

    <title>HalaFTTH-CardSystem</title>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    @include('layouts.sidebar')
    @include('layouts.navbar')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tools</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">CardSystem</a>
                                </li>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="dropdown float-md-right">

                        <div class="content-header-right col-md-10 col-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
    @if(Session::has('systemuser_wrong'))

        <div class="alert round bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                          <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <strong>This Subscriber is not</strong> <a href="#" class="alert-link">included in HALA DALAL Offer!</a>
                        </div>
   
   @endif

   <form method="POST" action="cardcheck.post">
      {{ csrf_field() }}

    <div class="col-xl-4 col-lg-6 col-md-12">
              <div class="card" style="height: 177.609px;">
                <div class="card-header">
                  <h4 class="card-title">Check Users Card</h4>
                </div>
                <div class="card-body">
                  <div class="card-block">
    
                    <fieldset>
                      <div class="input-group">
<div>
     <input type="text" name="username"   class="form-control" placeholder="Enter User Name" aria-describedby="button-addon2">
     <div class="input-group-append">
     <button class="btn btn-danger"  type="submit">Submit</button>

</div>
</form>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>


    @if(isset($data))


                              <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Card pin</th>
                                            <th>Date</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                     
                                    @foreach ($data as $i)
                                    @if($i['pin']!='')
                                         <tr>   
                                           
                                                <td >{{($i['user_details']['username'])}}</td>
                                                <td >{{($i['user_details']['firstname'])}}</td>
                                                <td >{{($i['profile_details']['name'])}}</td>
                                        
                                                <td>{{$i['pin']}}</td>
                                      
                                                <td >{{($i['created_at'])}}</td>
                                            @endif


                                              

@endforeach
@endif 


                                       
                                </table>
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
    </div>

    </div>
    </div>
    </div>


    </div>
        @include('layouts.footer')

@livewireScripts
    @include('layouts.js')


@if(Session::has('systemuser_delete'))

<script>
  toastr.info("{!!Session::get('systemuser_delete')!!}");
</script>

@endif

@if(Session::has('systemuser_added'))

<script>
  toastr.success("{!!Session::get('systemuser_added')!!}");
</script>

@endif
