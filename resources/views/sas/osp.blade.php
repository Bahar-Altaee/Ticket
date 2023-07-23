@include('layouts.css')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>


    <title>HalaFTTH-Users-OSP</title>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">


<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    @include('layouts.sidebar')
    @include('layouts.navbar')

    <div class="app-content content">
        
        <div class="content-wrapper">
            @if(isset($notification))
            @if($notification==1)
            <div class="alert bg-danger alert-dismissible mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>Error! </strong>This subscriber is not associated with the osp department</div>
                                    @endif
                                    @endif
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-10 mb-4 breadcrumb-new">
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">SAS</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/coustmer">Check Users</a>
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

<form action="{{ route('osp_get') }}" method="POST">

{{ csrf_field() }}

<div class="col-xl-4 col-lg-6 col-md-12">
              <div class="card" style="height: 177.609px;">
                <div class="card-header">
                  <h4 class="card-title">Check users</h4>
                </div>
                <div class="card-body">
                  <div class="card-block">
    
                    <fieldset>
                      <div class="input-group">
                        <input type="text" name="sasusername"   class="form-control" placeholder="Enter User Name" aria-describedby="button-addon2">
                        <div class="input-group-append">
                                          <button class="btn btn-danger"  type="submit">Submit</button>

                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
 

</form>




@if(isset($data))


                              <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Phone</th>
                                            <th>Expiration</th>
                                            <th>Contract_id</th>
                                            <th>Parent</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                     
                                    @foreach ($data as $i)
                                         <tr>   
                                           
                                                <td id="ids">{{($i['id'])}}</td>
                                                <td>{{($i['username'])}}</td>
                                                <td>{{($i['firstname'])}}</td>
                                                <td>{{($i['phone'])}}</td>
                                                <td>{{($i['expiration'])}}</td>
                                                <td>{{($i['contract_id'])}}</td>
                                                <td>{{($i['parent_username'])}}</td>

                                              

@endforeach
@endif 


                                       
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
     <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> edit user expiration </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('sasuserpost') }}" method="POST">
                    {{method_field('POST')}}
                    @csrf

                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <div   class="form-group">
                  @if(isset($data))            
                       //read only form
                                <label for="exampleInputEmail1">User id</label>
                                <input hidden value="{{($i['id'])}}" type="text" class="form-control" id="userid" name="userid" required>   
                                <label for="exampleInputEmail2">parent</label>
                                <input hidden value="{{($i['parent_id'])}}" type="text" class="form-control" id="parent_id" name="parent_id" required>           
                                <label for="exampleInputEmail3">parent_id</label>
                                <input readonly value="{{($i['username'])}}" type="text" class="form-control" id="pppoename" name="pppoename" required>
                                <label for="exampleInputEmail4">First Name</label>
                                <input readonly value="{{($i['firstname'])}}" type="text" class="form-control" id="firstname" name="firstname" required>
                                <label for="exampleInputEmail5">Phone</label>
                                <input readonly value="{{($i['phone'])}}" type="text" class="form-control" id="serial" name="serial" required>
                                <label for="exampleInputEmail6">Contract_id</label>
                                <input readonly value="{{($i['contract_id'])}}" type="text" class="form-control" id="phone" name="phone" required>

                                <label for="exampleInputEmail7">Expiration</label>
                                <input readonly value="{{($i['expiration'])}}" type="text" class="form-control" id="oldexpiration" name="oldexpiration" required>
                                <label for="exampleInputEmail1">New Expiration </label>
                                <input value="" type="datetime-local" class="form-control" id="expiration" name="expiration" required>
                                <input type="hidden" class="form-control" id="username" name="username"
                                 value="{{ Auth::user()->name }}">

                                <button type="button" class="btn grey btn-outline-secondary"
                                    data-dismiss="modal">Close</button>

                                <button class="btn btn-outline-warning">Save Change</button>

                               
                                <div class="modal-footer">
                               
                               
                                
                               @endif
          
                                
                    
                    
                    </div>
                           

                            </div>
                </form>
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

    @include('layouts.footer')


    @include('layouts.js')

    

    @if (Session::has('systemuser_added'))
        <script>
            toastr.success("{!! Session::get('systemuser_added') !!}");
        </script>
    @endif

    <script>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

    @if (Session::has('systemuser_delete'))
        <script>
            toastr.info("{!! Session::get('systemuser_delete') !!}");
        </script>
    @endif
