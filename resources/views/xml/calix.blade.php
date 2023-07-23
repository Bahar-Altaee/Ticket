@extends('layouts.simple.master')


@section('title', 'Hala FTTH')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Add ONT</h3>

@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">ONT's</li>
    <li class="breadcrumb-item active">Calix ONT</li>

    @if (session()->has('success'))
    <div id="success-message" class="alert alert-success">
        @if(is_array(session('success')))
            <ul>
                @foreach (session('success') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session('success') }}
        @endif
      
    </div>
    <?php session()->forget('success'); ?>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000); 
    </script>
@endif

@if (session()->has('systemuser_delete'))
    <div id="systemuser-delete-message" class="alert alert-danger">
        {{ session('systemuser_delete') }}
    </div>
    <?php session()->forget('systemuser_delete'); ?>
    <script>
        setTimeout(function() {
            document.getElementById('systemuser-delete-message').style.display = 'none';
        }, 5000); 
    </script>
@endif


@endsection



@section('content')


<form action="{{ route('xmlcalix.store') }}" method="POST">

{{ csrf_field() }}

    <div class="card" style="height: 177.609px;">
        <div class="card-header">
            <h4 class="card-title">Add New Calix ONT</h4>
        </div>
      <div class="card-content collapse show">
  <div class="card-body">
   
    <div class="form-group">
      <div class="text-bold-600 font-medium-2">
        Select OLT
      </div>
    

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
        <optgroup label="SHAAB OLTs">
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
                            <td id="ven">{{ $value }}</td>
                            @endif

                              @if( $key=='PONport' )
                            <td id="port">{{ $value }}</td>
                            @endif

                                       
                         
                    @endforeach
                                <td> <div class="btn-group" role="group" aria-label="Basic example">
                                                                                        

                                <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-original-title="" data-bs-target="#edit" title="">Edit</button>
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
                    <h3 class="modal-title" id="myModalLabel35"> Add New Calix ONT</h3>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                   
                </div>

                <form action="{{ route('xmlcalix.activate') }}" method="POST">
                    {{method_field('POST')}}
                    @csrf
                   <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <div   class="form-group">
                              
                                
                                <label for="exampleInputEmail1">OLT</label>
       <select name="oltid"class="select2 form-control" required>
                        <option value="">Select OLT</option>
                                  <optgroup label="MAMON OLTs">
             
             <option value="NTWK-MAMOLT01">MAMOLT1</option>
             <option value="NTWK-MAMOLT02">MAMOLT2</option>
             <option value="NTWK-MAMOLT03">MAMOLT3</option>
             <option value="NTWK-MAMOLT04">MAMOLT4</option>
             <option value="NTWK-MAMOLT05">MAMOLT5</option>
             <option value="NTWK-MAMOLT06">MAMOLT6</option>
             <option value="NTWK-MAMOLT07">MAMOLT7</option>
             <option value="NTWK-MAMOLT08">MAMOLT8</option>
             <option value="NTWK-MAMOLT09">MAMOLT9</option>
             <option value="NTWK-MAMOLT-T10">MAMOLT10</option>
             <option value="NTWK-MAMOLT11">MAMOLT11</option>

                        </optgroup>
                        <optgroup label="BAYAA OLTs">
             <option value="NTWK-BAYOLT1">BAYOLT1</option>
             <option value="NTWK-BAYOLT2">BAYOLT2</option>
             <option value="NTWK-BAYOLT3">BAYOLT3</option>
             <option value="NTWK-BAYOLT4">BAYOLT4</option>
             <option value="NTWK-BAYOLT5">BAYOLT5</option>
             <option value="NTWK-BAYOLT6">BAYOLT6</option>

                        </optgroup>
                        <optgroup label="OMC OLTs">
             <option value="NTWK-OMCOLT1">OMCOLT1</option>
             <option value="NTWK-OMCOLT2">OMCOLT2</option>
             <option value="NTWK-OMCOLT3">OMCOLT3</option>
             <option value="NTWK-OMCOLT4">OMCOLT4</option>
             <option value="NTWK-OMCOLT5">OMCOLT5</option>
             <option value="NTWK-OMCOLT6">OMCOLT6</option>
             <option value="NTWK-OMCOLT7">OMCOLT7</option>

                        </optgroup>
                        <optgroup label="SHAAB OLTs">
             <option value="NTWK-SHAOLT1">SHAOLT1</option>
             <option value="NTWK-SHAOLT2">SHAOLT2</option>
             <option value="NTWK-SHAOLT3">SHAOLT3</option>
             <option value="NTWK-SHAOLT4">SHAOLT4</option>
             <option value="NTWK-SHAOLT5">SHAOLT5</option>

                        </optgroup>
                        <optgroup label="KADHMIA OLTs">
             <option value="NTWK-KADOLT1" >KADOLT1</option>
             <option value="NTWK-KADOLT2" >KADOLT2</option>
             

                        </optgroup>

             <optgroup label="BALADIYAT OLTs">
             <option value="NTWK-BELOLT01">BELOLT1</option>
             

                        </optgroup>

                      </select>                                                    
                                <label for="exampleInputEmail1">Serial Number</label>
                                <input wire:model.lazy="serial" value="" type="text" class="form-control" id="serial" name="serial" required>
                                
  <div class="row">
                          <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputEmail1">RC</label>

                              <input name="rc" type="text" class="form-control" placeholder="RC" required>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                             <label for="exampleInputEmail1">DP</label>

                              <input name="dp" type="text" class="form-control" placeholder="DP" required>
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                             <label for="exampleInputEmail1">DP port</label>

                              <input name="pdp" type="text" class="form-control" placeholder="pdp" required>
                            </div>
                          </div>

                             <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputEmail1">District</label>
                            <select class="select form-control" type="text" id="group_id" name="group_id" required>
<option value="211">211</option>
<option value="213">213</option>
<option value="817">817</option>
<option value="732">732</option>
<option value="601">601</option>
<option value="602">602</option>
<option value="603">603</option>
<option value="604">604</option>
<option value="605">605</option>
<option value="606">606</option>
<option value="607">607</option>
<option value="608">608</option>
<option value="609">609</option>
<option value="610">610</option>
<option value="611">611</option>
<option value="612">612</option>
<option value="613">613</option>
<option value="614">614</option>
<option value="615">615</option>
<option value="616">616</option>
<option value="617">617</option>
<option value="618">618</option>
<option value="627">627</option>
<option value="621">621</option>
<option value="623">623</option>
<option value="625">625</option>
<option value="404">404</option>
<option value="406">406</option>
<option value="408">408</option>
<option value="410">410</option>
<option value="412">412</option>
<option value="303">303</option>
<option value="305">305</option>
<option value="307">307</option>
<option value="309">309</option>
<option value="311">311</option>
<option value="503">503</option>
<option value="504">504</option>
<option value="505">505</option>
<option value="506">506</option>
<option value="508">508</option>
<option value="510">510</option>
<option value="335">335</option>
<option value="337">337</option>
<option value="339">339</option>
<option value="351">351</option>
<option value="353">353</option>

                                 </select>



                            </div>
                          </div>

                            <div class="col-md-2">
                            <div class="form-group">
                             <label for="exampleInputEmail1">Street</label>

                              <input name="Street" type="text" class="form-control" placeholder="Street" required>
                            </div>
                          </div>


                        


                          <div class="col-md-4">
                            <div class="form-group">
                             <label for="exampleInputEmail1">House</label>

                              <input name="house" type="text" class="form-control" placeholder="House" required>
                            </div>
                          </div>

                        
                                <div class="col-md-4">
                                <label for="exampleInputEmail1">OLT/Slot/Port</label>
                                <input value="" type="text" class="form-control" id="slot" name="slot" required>
                                </div>
                                <div class="col-md-4">
                                <label for="exampleInputEmail1">Phone</label>
                                <input value="" type="phone" class="form-control" id="phone" name="phone" required>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-3">  
                                <label for="exampleInputEmail1">1st Name</label>
                                <input value="" type="text" class="form-control" id="finame" name="finame" required>
</div>
                <div class="col-md-3">  

                                <label for="exampleInputEmail1">2nd Name</label>
                                <input value="" type="text" class="form-control" id="sename" name="sename" required>
</div>                                  
<div class="col-md-3">  
                                <label for="exampleInputEmail1">3rd Name</label>
                                <input value="" type="text" class="form-control" id="thname" name="thname" required>
</div>
                                <div class="col-md-3">  
                                <label for="exampleInputEmail1">4th Name</label>
                                <input value="" type="text" class="form-control" id="foname" name="foname">
                                </div>


                               <div class="col-md-3">  
                                <label for="exampleInputEmail1">5th Name</label>
                                <input value="" type="text" class="form-control" id="fifname" name="fifname">
                                </div>



</div>  

</div>
                                
  <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Latitude</label>

                              <input name="gps_lat" type="text" class="form-control" placeholder="Latitude" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                             <label for="exampleInputEmail1">Longitude</label>

                              <input name="gps_lng" type="text" class="form-control" placeholder="Longitude" required>
                            </div>
                          </div>
</div>
                                      <label for="exampleInputEmail1">Offer</label>
                                 <select value="" class="select form-control" id="offer" name="offer" required>
                                 <option value="One Month Free">One Month Free</option>    
                                 <option value="Hala Dalal">Hala Dalal</option>
                                 <option value="Hala Ziyada">Hala Ziyada</option>


                                   
                                  
                                 </select>

                                  <label for="exampleInputEmail1">profile</label>
                                 <select value="" class="select form-control" id="profile" name="profile" required>
                                    <option value="Spark">Spark</option>
                                    <option value="Storm">Storm</option>
                                    <option value="Thunder">Thunder</option>
                                    <option value="Tornado">Tornado</option>
                                  
                                 </select>
                            
                               <input type="hidden" class="form-control" id="emploee" name="emploee"
                                 value="{{ Auth::user()->name }}">

                                <label for="exampleInputEmail1">PPPOE</label>
                                <input value="" type="number" class="form-control" id="pppoeuser" name="pppoeuser" required>

                                <label for="exampleInputEmail1">Ticket ID</label>
                                <input value="" type="number" class="form-control" id="ticketid" name="ticketid" required>
 
                                <label for="exampleInputEmail1">Card PIN</label>
                                <input value="" type="number" class="form-control" id="cardpin" name="cardpin">

                                 
                                <label for="exampleInputEmail1">Manger</label>
                                 <select value="" class="select form-control" id="manger" name="manger">
                                 <option value="127">BYA_Bya_Dis@817</option>
                                    <option value="142">BLD_Bld_Dis@732</option>
                                    <option value="143">KDY_Tob_Dis@408_410</option>
                                    <option value="99">KDY_Als_Dis@404</option>
                                    <option value="183">KDY_Als_Dis@406</option>
                                    <option value="122">KDY_Isk_Dis@621_623_625</option>
                                    <option value="306">MMN_Jam_Dis@627</option>
                                    <option value="71">MMN_Drg_Dis@603</option>
                                    <option value="86">MMN_Yar_Dis@614_618</option>
                                    <option value="126">MMN_Yar_Dis@610_612</option>
                                    <option value="138">MMN_Yar_Dis@608_616</option>
                                    <option value="125">MMN_Daw_Dis@611_613</option>
                                    <option value="134">MMN_Ame_Dis@601_609</option>
                                    <option value="303">MMN_Mtn_Dis@605_607</option>
                                    <option value="304">MMN_Arb_Dis@615_617</option>
                                    <option value="136">MMN_Har_Dis@211_213</option>
                                    <option value="177">MMN_Qds_Dis@602_604_606</option>
                                    <option value="92">OMC_Pst_Dis@503</option>
                                    <option value="93">OMC_Pst_Dis@504_505</option>
                                    <option value="172">OMC_Pst_Dis@506</option>
                                    <option value="84">OMC_Pst_Dis@508</option>
                                    <option value="91">OMC_Pst_Dis@510</option>
                                    <option value="305">OMC_Moh_RC@505</option>
                                    <option value="135">OMC_Qah_Dis@307_309_311</option>
                                    <option value="206">SHB_Mut_RC@Zon1</option>
                                    <option value="209">SHB_Nor_RC@Zon2</option>
                                    <option value="245">SHB_Mus_RC@Zon3</option>
                                    <option value="105">BAY_OSP_Reg@Reg</option>
                                    <option value="104">KDY_OSP_Reg@Reg</option>
                                    <option value="102">MMN_OSP_Reg@Reg</option>
                                    <option value="103">OMC_OSP_Reg@Reg</option>
                                    <option value="187">SHB_OSP_Reg@Reg</option>
                                    <option value="207">BLD_OSP_Reg@Reg</option>
                                    <option value="207">BLD_OSP_Reg@Reg</option>
                                    
                                    
                                    

                                    
                                  
                                 </select>
                                 <br>



                                 <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>

                                  <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Save changes</button>
                            
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
  



    












      


    
@endsection

@section('script')
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>


@endsection
