@include('layouts.css')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>


    <title>HalaFTTH-Change Parent</title>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">


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
                                <li class="breadcrumb-item"><a href="/home">SAS</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/coustmer">Change Parent</a>
                                </li>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
   
               <div class="dropdown float-md-right">
                <!-- <div> 
<h3 >Note</h3>
<p>The Extended period will be deducted after recharging card</p>
</div> -->
                        <div class="content-header-right col-md-10 col-12">
                       
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

<form action="{{ route('changeparent.post') }}" method="POST">

{{ csrf_field() }}

<div class="col-xl-4 col-lg-6 col-md-12">
              <div class="card" style="height: 177.609px;">
                <div class="card-header">
                  <h4 class="card-title">Change Parent</h4>
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
                                            
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Phone</th>
                                            <th>Expiration</th>
                                            <th>Contract_id</th>
                                            <th>Parent</th>
                                            <th>Operation</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($data as $i)
                                            <tr>
                                            
                                             
                                                
                                             
                                                <td>{{($i['username'])}}</td>
                                                <td>{{($i['firstname'])}}</td>
                                                <td>{{($i['phone'])}}</td>
                                                <td>{{($i['expiration'])}}</td>
                                                <td>{{($i['contract_id'])}}</td>
                                                <td>{{($i['parent_username'])}}</td>
                                                <td><div class="btn-group" role="group" aria-label="Basic example"><button  data-target="#edit" data-toggle="modal" type="button" class="btn btn-primary">Edit</button></td>

                                              

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
                    <h3 class="modal-title" id="myModalLabel35"> edit user Parent </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('changeparent.submit') }}" method="POST">
                    {{method_field('POST')}}
                    @csrf

                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <div   class="form-group">
                  @if(isset($data))            
                                <label for="exampleInputEmail1">User id</label>
                                <input hidden value="{{($i['id'])}}" type="text" class="form-control" id="userid" name="userid" required>   

                                <label for="exampleInputEmail2">parent</label>
                                <input hidden value="{{($i['parent_id'])}}" type="text" class="form-control" id="parent_id" name="parent_id" required>   
                                
                                <input hidden value="{{($i['profile_id'])}}" type="text" class="form-control" id="profile" name="profile" required>           
        
                                <input readonly value="{{($i['username'])}}" type="text" class="form-control" id="pppoename" name="pppoename" required>
                                <label for="exampleInputEmail4">First Name</label>
                                <input readonly value="{{($i['firstname'])}}" type="text" class="form-control" id="firstname" name="firstname" required>
                                <label for="exampleInputEmail5">Phone</label>
                                <input readonly value="{{($i['phone'])}}" type="text" class="form-control" id="serial" name="serial" required>
                                <label for="exampleInputEmail6">Contract_id</label>
                                <input readonly value="{{($i['contract_id'])}}" type="text" class="form-control" id="phone" name="phone" required>
                                  
                                <label for="exampleInputEmail6">Parent</label>
                                <input readonly value="{{($i['parent_username'])}}" type="text" class="form-control" id="phone" name="phone" required>

                                

          







                                <label for="exampleInputEmail7">Expiration</label>
                                <input readonly value="{{($i['expiration'])}}" type="text" class="form-control" id="oldexpiration" name="oldexpiration" required>
 
                                <input type="hidden" class="form-control" id="username" name="username"
                                 value="{{ Auth::user()->name }}"> 
                                
                                <label for="exampleInputEmail7">Change Parent</label>
                                <select  class="select form-control" id="newparent" name="newparent">
                                    <option value="206">SHB_Mut_RC@Zon1</option>
                                    <option value="214">SHB_Mut_RC@Zon1_1</option>
                                    <option value="215">SHB_Mut_RC@Zon1_2</option>
                                    <option value="216">SHB_Mut_RC@Zon1_3</option>
                                    <option value="217">SHB_Mut_RC@Zon1_4</option>
                                    <option value="218">SHB_Mut_RC@Zon1_5</option>
                                    <option value="219">SHB_Mut_RC@Zon1_6</option>
                                    <option value="220">SHB_Mut_RC@Zon1_7</option>
                                    
                                    </select>

                                <input hidden value="{{($i['enabled'])}}" type="text"    name="enabled" >           
                                <input hidden value="{{($i['profile_id'])}}" type="text"    name="profile_id" >           
                                <input hidden value="{{($i['parent_id'])}}" type="text"    name="parent_id" >           
                                <input hidden value="{{($i['group_id'])}}" type="text"    name="group_id" >           
                                <input hidden value="{{($i['firstname'])}}" type="text"    name="firstname" >           
                                <input hidden value="{{($i['lastname'])}}" type="text"   name="lastname" >           
                                <input hidden value="{{($i['email'])}}" type="text"    name="email" >           
                                <input hidden value="{{($i['phone'])}}" type="text"   name="phone" >           
                                <input hidden value="{{($i['city'])}}" type="text"    name="city" >           
                                <input hidden value="{{($i['address'])}}" type="text"   name="address" >           
                                <input hidden value="{{($i['contract_id'])}}" type="text"    name="contract_id" >           
                                <input hidden value="{{($i['national_id'])}}" type="text"   name="national_id" >           
                                <input hidden value="{{($i['notes'])}}" type="text"    name="notes" >           
                                <input hidden value="{{($i['expiration'])}}" type="text"    name="expiration" >           
                                <input hidden value="{{($i['simultaneous_sessions'])}}" type="text"    name="simultaneous_sessions" >           
                                <input hidden value="{{($i['static_ip'])}}" type="text"    name="static_ip" >           
                                <input hidden value="{{($i['mikrotik_ipv6_prefix'])}}" type="text"   name="mikrotik_ipv6_prefix">           
     
                                <button type="button" class="btn grey btn-outline-secondary"
                                    data-dismiss="modal">Close</button>

                                <button class="btn primary btn-outline-primary" type="submit" >Save Change</button>

                               
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
