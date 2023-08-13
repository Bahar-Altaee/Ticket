@include('layouts.css')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>


    <title>HalaFTTH-ONT Replace</title>

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
                                <li class="breadcrumb-item"><a href="#">ONT Replace</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Calix</a>
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

            <form action="{{ route('calixreplacediscover') }}" method="POST">

                {{ csrf_field() }}

                    <div class="card" style="height: 177.609px;">
                        <div class="card-header">
                            <h4 class="card-title">Add New Calix ONT Without SAS</h4>
                        </div>
                      <div class="card-content collapse show">
                  <div class="card-body">
                   
                    <div class="form-group">
                      <div class="text-bold-600 font-medium-2">
                        Select OLT
                      </div>
                    
                      <select name="oltip" class="select2 form-control">
                       <option>Select OLT</option>
                      <optgroup label="MAMON OLTs">
             <option value="10.80.10.23">MAMOLT1</option>
             <option value="10.80.10.24">MAMOLT2</option>
             <option value="10.80.10.25">MAMOLT3</option>
             <option value="10.80.10.26">MAMOLT4</option>
             <option value="10.80.10.27">MAMOLT5</option>
             <option value="10.80.10.28">MAMOLT6</option>
             <option value="10.80.10.29">MAMOLT7</option>
             <option value="10.80.10.30">MAMOLT8</option>
             <option value="10.80.10.31">MAMOLT9</option>
             <option value="10.80.10.32">MAMOLT10</option>
             <option value="10.80.10.33">MAMOLT11</option>

                        </optgroup>
                        <optgroup label="BAYAA OLTs">
             <option value="10.80.8.72">BAYOLT1</option>
             <option value="10.80.8.73">BAYOLT2</option>
             <option value="10.80.8.74">BAYOLT3</option>
             <option value="10.80.8.75">BAYOLT4</option>
             <option value="10.80.8.76">BAYOLT5</option>
             <option value="10.80.8.77">BAYOLT6</option>

                        </optgroup>
                        <optgroup label="OMC OLTs">
             <option value="10.80.12.72">OMCOLT1</option>
             <option value="10.80.12.73">OMCOLT2</option>
             <option value="10.80.12.74">OMCOLT3</option>
             <option value="10.80.12.75">OMCOLT4</option>
             <option value="10.80.12.76">OMCOLT5</option>
             <option value="10.80.12.77">OMCOLT6</option>
             <option value="10.80.12.78">OMCOLT7</option>

                        </optgroup>
                        <optgroup label="SHULAA OLTs">
             <option value="10.80.11.72">SHAOLT1</option>
             <option value="10.80.11.73">SHAOLT2</option>
             <option value="10.80.11.74">SHAOLT3</option>
             <option value="10.80.11.75">SHAOLT4</option>
             <option value="10.80.11.76">SHAOLT5</option>

                        </optgroup>
                        <optgroup label="KADHMIA OLTs">
             <option value="10.80.9.72" >KADOLT1</option>
             <option value="10.80.9.73" >KADOLT2</option>

                        </optgroup>

                          <optgroup label="BALADIYAT OLTs">
             <option value="10.80.13.72">BELOLT1</option>
             

                        </optgroup>
                      </select>
                    </div>

                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="submit">Submit</button>
</div>

                </form>
  <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                       
                                        <th>Serial Number</th>
                                        <th>Vendor</th>
                                        <th>Slot/Port</th>
                                         <th>Operations</th>                                     
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($finalResult))
@foreach($finalResult as $result)
                                    
                                    <tr>
                                    @foreach ($result as $key=>$value)
                                              
                                        @if( $key=='erial#'|| $key=="Serial#" )
                                            <td id="ser">{{ $value }}</td>
                                            @endif

                                            @if( $key=='Vendor' )
                                            <td id="ven" >{{ $value }}</td>
                                            @endif

                                              @if( $key=='PONport' )
                                            <td id="port">{{ $value }}</td>
                                            @endif

                                            

                                                       
                                         
                                    @endforeach
<td>                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                         
                                                         
                                                            <button id="active"  data-target="#edit" data-toggle="modal" type="button" class="btn btn-primary">Activate</button>
</td>

</tr>

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
                    <h3 class="modal-title" id="myModalLabel35"> Add New ZTE-F663 ONT</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('calixreplace') }}" method="POST">
                    {{method_field('POST')}}
                    @csrf

                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <div   class="form-group">
                              
                                 
                                             <label for="exampleInputEmail1">OLT</label>
                                  <select id="olt" required name="oltip" class="select2 form-control">
                        <option></option>
                                  <optgroup label="MAMON OLTs">
             
             <option value="10.80.10.23">MAMOLT1</option>
             <option value="10.80.10.24">MAMOLT2</option>
             <option value="10.80.10.25">MAMOLT3</option>
             <option value="10.80.10.26">MAMOLT4</option>
             <option value="10.80.10.27">MAMOLT5</option>
             <option value="10.80.10.28">MAMOLT6</option>
             <option value="10.80.10.29">MAMOLT7</option>
             <option value="10.80.10.30">MAMOLT8</option>
             <option value="10.80.10.31">MAMOLT9</option>
             <option value="10.80.10.32">MAMOLT10</option>
             <option value="10.80.10.33">MAMOLT11</option>

                        </optgroup>
                        <optgroup label="BAYAA OLTs">
             <option value="10.80.8.72">BAYOLT1</option>
             <option value="10.80.8.73">BAYOLT2</option>
             <option value="10.80.8.74">BAYOLT3</option>
             <option value="10.80.8.75">BAYOLT4</option>
             <option value="10.80.8.76">BAYOLT5</option>
             <option value="10.80.8.77">BAYOLT6</option>

                        </optgroup>
                        <optgroup label="OMC OLTs">
             <option value="10.80.12.72">OMCOLT1</option>
             <option value="10.80.12.73">OMCOLT2</option>
             <option value="10.80.12.74">OMCOLT3</option>
             <option value="10.80.12.75">OMCOLT4</option>
             <option value="10.80.12.76">OMCOLT5</option>
             <option value="10.80.12.77">OMCOLT6</option>
             <option value="10.80.12.78">OMCOLT7</option>

                        </optgroup>
                        <optgroup label="SHULAA OLTs">
             <option value="10.80.11.72">SHAOLT1</option>
             <option value="10.80.11.73">SHAOLT2</option>
             <option value="10.80.11.74">SHAOLT3</option>
             <option value="10.80.11.75">SHAOLT4</option>
             <option value="10.80.11.76">SHAOLT5</option>

                        </optgroup>
                        <optgroup label="KADHMIA OLTs">
             <option value="10.80.9.72" >KADOLT1</option>
             <option value="10.80.9.73" >KADOLT2</option>

                        </optgroup>

                          <optgroup label="BALADIYAT OLTs">
             <option value="10.80.13.72">BELOLT1</option>
             

                        </optgroup>
                      </select>
                            
                            
                                <label for="exampleInputEmail1">Serial Number</label>
                                <input value="" type="text" class="form-control" id="serial" name="serial" required>

                                <label for="exampleInputEmail1">OLT/Slot/Port</label>
                                <input value="" type="text" class="form-control" id="slot" name="slot" required>

                                
                                <label for="exampleInputEmail1">Phone</label>
                                <input value="" type="text" class="form-control" id="phone" name="phone" required>
                                
                                <label for="exampleInputEmail1">First Name</label>
                                <input value="" type="text" class="form-control" id="firstname" name="firstname" required>

                               <input type="hidden" class="form-control" id="emploee" name="emploee"
                                 value="{{ Auth::user()->name }}">

                               <input type="hidden" class="form-control" id="ZTE" name="ZTE"
                                 value="ZTEG">


                               
                                <label for="exampleInputEmail1">Street</label>
                                <input value="" type="text" class="form-control" id="street" name="street" required>
                                
                                  <label for="exampleInputEmail1">profile</label>
                                 <select value="" class="select form-control" id="profile" name="profile">
                                    <option value="Spark">Spark</option>
                                    <option value="Storm">Storm</option>
                                    <option value="Thunder">Thunder</option>
                                    <option value="Tornado">Tornado</option>
                                  
                                 </select>
                            
                                
                                <label for="exampleInputEmail1">PPPOE UserName</label>
                                <input value="" type="text" class="form-control" id="pppoeuser" name="pppoeuser" required>

                                <label for="exampleInputEmail1">Description</label>
                                <input value="" type="text" class="form-control" id="description" name="description" required>
                                 
                                <label for="exampleInputEmail1">Manger</label>
                                 <select value="" class="select form-control" id="manger" name="manger">
                                    <option value="36">Global OMC</option>
                                    <option value="71">Draghoffic</option>
                                    <option value="84">P.Street508</option>
                                    <option value="86">Yarmook.office</option>
                                    <option value="91">P.Street510</option>
                                    <option value="92">P.Street503</option>
                                    <option value="93">P.Street504505</option>
                                    <option value="94">Qahira307</option>
                                    <option value="95">Qahira311</option>
                                    <option value="99">ali.alsalih</option>
                                    <option value="100">Global.Mamoon</option>
                                    <option value="105">outsource.bay</option>
                                    <option value="104">outsource.kad</option>
                                    <option value="102">outsource.mmn</option>
                                    <option value="103">outsource.omc</option>
                                    <option value="85">Tobchi</option>
                                    <option value="122">Iskan</option>
                                    <option value="125">Dawoodi</option>
                                    <option value="126">Yarmook612</option>
                                  
                                 </select>



                   
<button type="button" class="btn grey btn-outline-secondary"
                  data-dismiss="modal">Close</button>

                     <button onclick="this.disabled=true;this.form.submit();"  class="btn btn-outline-warning">Save Change</button>

                            
                     <div class="modal-footer">
                                
                    
                    
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


  <script>



    //  var bt = document.getElementById('ser');
    //  document.getElementById("serial").value=bt.innerHTML;

    //  var slotport = document.getElementById('port');
    //  document.getElementById("slot").value=slotport.innerHTML;
      


</script>

<script>
let input = document.getElementById("ven");
let button = document.getElementById("active");

if (input.innerHTML == "CXNK") {
  document.getElementById("active").disabled = false;
} else {
  document.getElementById("active").disabled = true;
}



</script>
