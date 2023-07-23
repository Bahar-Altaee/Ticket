@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Request User Data</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Request User Data</li>
    <li class="breadcrumb-item active">getontdetails</li>

@endsection




@section('content')

<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-right col-md-6 col-12">
                    <div class="dropdown float-md-right">

                        <div class="content-header-right col-md-10 col-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>


       
        <br>
<div class="content-body">

        

<div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card text-white box-shadow-0 bg-gradient-x-primary">
                <div class="card-header">
                  <h4 class="card-title text-white">SAS Information</h4>
                  
                </div>
                
                <div class="card-content">
                  <div class="card-body">
                  <div class="col-xl-10 col-md-6 col-sm-12">
							<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
              <button class="btn btn-outline-info" id="extendButton" type="button"  data-bs-target="#replaceModal" title="">Extend User</button>
              <script>
                document.getElementById("extendButton").addEventListener("click", function() {
                  window.location.href = "/extend";
                });
              </script>

              <button class="btn btn-outline-info" id="expButton" type="button"  data-bs-target="#replaceModal" title="">Change Expiration</button>
              <script>
                document.getElementById("expButton").addEventListener("click", function() {
                  window.location.href = "/sasuser";
                });
              </script>


              <button class="btn btn-outline-info" type="button" data-bs-toggle="modal" data-bs-original-title="" data-bs-target="#refillModal" title="">Refill</button>

							</div>
              
              </div>
              <br>
      
            <!-- Refill - modal  -->
            <div class="modal fade" id="refillModal" tabindex="-1" aria-labelledby="refillModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="refillModalLabel">Refill</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
            <form  method="POST" action="{{ route('refill.store') }}">
                 @csrf
            <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-3 label-control text-white" for="username">Username</label>
                        <div class="col-md-6">
                            <input type="text" id="username" class="form-control" value="{{$username}}" name="username" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control text-white" for="profile">Profile</label>
                        <div class="col-md-6">
                            <input type="text" id="profile" class="form-control" value="{{$profile}}" name="profile" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control text-white" for="expiration">Expiration</label>
                        <div class="col-md-6">
                            <input type="text" id="expiration" class="form-control" value="{{$expiration}}" name="expiration" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-3 label-control text-white" for="expiration">Card Serial</label>
                      <div class="col-md-6">
                       <input type="text" id="ip" name="ip" class="form-control" required>
                      </div>
                    </div>
                   
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-secondary" type="submit" data-bs-original-title="" title="">Refill</button>
                    
                    </form>  
            </div>
        </div>
    </div>
</div>


        <!-- SAS Information -->

                  
  <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">User Name</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$username}}" name="lname" readonly>
                          </div>
                        </div>
 
                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">First Name</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$firstname}}" name="lname" readonly>
                          </div>
                        </div>


                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Ip Address</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$ip}}" name="lname" readonly>
                          </div>
                        </div>
                        


                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Profile</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$profile}}" name="lname" readonly>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Session Start Time</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$session}}" name="lname" readonly>
                          </div>
                        </div>


                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Parent</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$parent}}" name="lname" readonly>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Expiration</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$expiration}}" name="lname" readonly>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Serial Number</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$sereal}}" name="lname" readonly>
                          </div>
                        </div>


                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">User Status</label>
                          <div class="col-md-6">
                            <input type="text" id="projectinput2" class="form-control" value="{{$fup}}" name="lname" readonly>
                          </div>
                        </div>




                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-sm-12">
              <div class="card text-white box-shadow-0 bg-gradient-x-primary">
                <div class="card-header">
                  <h4 class="card-title text-white">ONT information</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
               
                <div class="card-content collapse show">
                  <div class="card-body">
                  <div class="col-xl-10 col-md-6 col-sm-12">
							<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
              <button class="btn btn-outline-info" type="button" data-bs-toggle="modal" data-bs-target="#replaceModal" title="">Replace ONT</button>
								<button class="btn btn-outline-info" type="button" data-bs-original-title="" title="">Change vlan</button>
                <button class="btn btn-outline-info" type="button" data-bs-original-title="" title="">Delete</button>
								<button formaction="{{ URL::route('resetontxml') }}"  id="confirm-text" class="btn btn-outline-info" type="submit" data-bs-original-title="" title="">Reboot</button>
							</div>
						</div>
                    <br>

                    <!-- Replace ONT - modal  -->
                    <div class="modal fade" id="replaceModal" tabindex="-1" aria-labelledby="replaceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="replaceModalLabel">Replace ONT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="content-body">
          <div class="danger" style="background-color: #f9e9fc; border-left: 6px solid #ba0ee6; margin-bottom: 15px; padding: 10px 26px 1px 1px; margin-left: 1%;">
            <p style="color: black;"><strong>Note!</strong> Please Use The Same ONT Vendor When You Replace ONT</p>
          </div>

          <form action="{{ route('replace.post') }}" method="POST">
            {{ csrf_field() }}
            <div class="col-xl-12">
              <div class="card box-shadow-0 border-primary" style="height: 177.609px;">
               
                <div class="card-body">
                  <div class="card-block">
                    <fieldset>
                    <div class="col-md-12">
                      
                            <input type="text" id="projectinput2" class="form-control" value="{{$oltid}}" name="oltid" readonly>
                          </div>
                    
                      <br>
                      <div class="row">
                        <div class="col">
                        <input type="text" id="projectinput2" class="form-control" value="{{$ontid}}" name="ontid" readonly>
                        </div>
                        <div class="col">
                          <input value="" type="text" name="Serial" id="Serial" class="form-control" placeholder="New ONT Serial Num." aria-describedby="button-addon2" required>
                        </div>
                      </div>                 
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


                    <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">ONT ID</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$ontid}}" name="ont" readonly>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">OLT ID</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$oltid}}" name="lname" readonly>
                          </div>
                        </div>


                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Registration ID</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="rami" name="lname" readonly>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Serial Number</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$sereal}}" name="lname" readonly>
                          </div>
                          </div>


                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Description</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$description}}" name="lname" readonly>
                          </div>
                          </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Slot</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$slot}}" name="lname" readonly>
                          </div>
                          </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Port</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$port}}" name="lname" readonly>
                          </div>
                          </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Uptime</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$uptime}}" name="lname" readonly>
                          </div>
                          </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control text-white" for="projectinput2">Mac-Address</label>
                          <div class="col-md-6">
                          <input type="text" id="projectinput2" class="form-control" value="{{$mac}}" name="lname" readonly>
                          </div>
                          </div>

                          <input type="hidden" id="projectinput2" class="form-control" value="{{$oltid}}" name="olt" readonly>
                          





                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row widget-grid">
<div class="col-xxl-8 col-lg-12 box-col-12">
            <div class="card"  style="height: 585px;">
              <div class="card-header card-no-border">
                <h4>ONT Traffic ( Test for now )</h4>
                <br>
                <br>
              </div>
              <div class="card-body pt-0">
                <div class="row m-0 overall-card">
                  <div class="col-xl-12 col-md-12 col-sm-7 p-0">
                  <div id="chart" class="chart-container" ></div>
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">

                    <!-- ApexCharts CSS -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@latest">

                    <!-- Bootstrap JS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

                    <!-- ApexCharts JS -->
                    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
                    <script>
                      var options = {
                        series: [{
                          name: 'Download',
                          data: [31, 40, 28, 51, 42, 109, 100]
                        }, {
                          name: 'Upload',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }],
                        chart: {
                          height: 350,
                          type: 'area'
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth'
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        },
                      };

                      var chart = new ApexCharts(document.querySelector("#chart"), options);
                      chart.render();
                    </script>
                  </div>
                  <br>
                  
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-xxl-4 col-xl-7 col-md-6 col-sm-5 box-col-6">
            <div class="card height-equal" style="min-height: auto;">
              <div class="card-header card-no-border">
                <div class="header-top">
                  <h4>ONT Power</h4>
           
                </div>
              </div>
              <div class="card-body pt-0">
                <div class="row recent-wrapper">
                  <div class="col-xl-6">
                    <div class="recent-chart">
                      <div id="recentchart" style="min-height: 150.7px;"><div id="apexchartsadpjnnqp" class="apexcharts-canvas apexchartsadpjnnqp apexcharts-theme-light" style="width: 494px; height: 208.7px;"><svg id="SvgjsSvg4267" width="494" height="208.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4269" class="apexcharts-inner apexcharts-graphical" transform="translate(145, 0)"><defs id="SvgjsDefs4268"><clipPath id="gridRectMaskadpjnnqp"><rect id="SvgjsRect4271" width="212" height="230" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskadpjnnqp"></clipPath><clipPath id="nonForecastMaskadpjnnqp"></clipPath><clipPath id="gridRectMarkerMaskadpjnnqp"><rect id="SvgjsRect4272" width="210" height="232" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4277" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop4278" stop-opacity="1" stop-color="#7366ff" offset="0"></stop><stop id="SvgjsStop4279" stop-opacity="1" stop-color="#3ea4f1" offset="0.2"></stop><stop id="SvgjsStop4280" stop-opacity="1" stop-color="#ffffff" offset="1"></stop></linearGradient><filter id="SvgjsFilter4282" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood4283" flood-color="#dddddd" flood-opacity="1" result="SvgjsFeFlood4283Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite4284" in="SvgjsFeFlood4283Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4284Out"></feComposite><feOffset id="SvgjsFeOffset4285" dx="0" dy="0" result="SvgjsFeOffset4285Out" in="SvgjsFeComposite4284Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur4286" stdDeviation="10 " result="SvgjsFeGaussianBlur4286Out" in="SvgjsFeOffset4285Out"></feGaussianBlur><feMerge id="SvgjsFeMerge4287" result="SvgjsFeMerge4287Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode4288" in="SvgjsFeGaussianBlur4286Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode4289" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend4290" in="SourceGraphic" in2="SvgjsFeMerge4287Out" mode="normal" result="SvgjsFeBlend4290Out"></feBlend></filter><filter id="SvgjsFilter4293" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood4294" flood-color="#000000" flood-opacity="0.05" result="SvgjsFeFlood4294Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite4295" in="SvgjsFeFlood4294Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4295Out"></feComposite><feOffset id="SvgjsFeOffset4296" dx="0" dy="3" result="SvgjsFeOffset4296Out" in="SvgjsFeComposite4295Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur4297" stdDeviation="4 " result="SvgjsFeGaussianBlur4297Out" in="SvgjsFeOffset4296Out"></feGaussianBlur><feMerge id="SvgjsFeMerge4298" result="SvgjsFeMerge4298Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode4299" in="SvgjsFeGaussianBlur4297Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode4300" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend4301" in="SourceGraphic" in2="SvgjsFeMerge4298Out" mode="normal" result="SvgjsFeBlend4301Out"></feBlend></filter><linearGradient id="SvgjsLinearGradient4306" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop4307" stop-opacity="1" stop-color="#7366ff" offset="0"></stop><stop id="SvgjsStop4308" stop-opacity="1" stop-color="#3ea4f1" offset="0.2"></stop><stop id="SvgjsStop4309" stop-opacity="1" stop-color="#ffffff" offset="1"></stop></linearGradient><filter id="SvgjsFilter4312" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer4313" result="SvgjsFeComponentTransfer4313Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR4314" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG4315" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB4316" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA4317" type="identity"></feFuncA></feComponentTransfer></filter></defs><g id="SvgjsG4273" class="apexcharts-radialbar"><g id="SvgjsG4274"><g id="SvgjsG4275" class="apexcharts-tracks"><g id="SvgjsG4276" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 103 36.85853658536584 A 66.14146341463416 66.14146341463416 0 1 1 102.98845613697186 36.858537592757926" fill="none" fill-opacity="1" stroke="rgba(244,244,244,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="12.661365853658538" stroke-dasharray="0" class="apexcharts-radialbar-area" filter="url(#SvgjsFilter4282)" data:pathOrig="M 103 36.85853658536584 A 66.14146341463416 66.14146341463416 0 1 1 102.98845613697186 36.858537592757926"></path></g></g><g id="SvgjsG4291"><g id="SvgjsG4305" class="apexcharts-series apexcharts-radial-series" seriesName="TotalxProfit" rel="1" data:realIndex="0"><path id="SvgjsPath4310" d="M 103 36.85853658536584 A 66.14146341463416 66.14146341463416 0 1 1 102.98845613697186 36.858537592757926" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient4306)" stroke-opacity="1" stroke-linecap="round" stroke-width="18.897560975609757" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="359.99" data:value="100" selected="true" filter="url(#SvgjsFilter4312)" index="0" j="0" data:pathOrig="M 103 36.85853658536584 A 66.14146341463416 66.14146341463416 0 1 1 102.98845613697186 36.858537592757926"></path></g><circle id="SvgjsCircle4292" r="59.81078048780489" cx="103" cy="103" class="apexcharts-radialbar-hollow" fill="var(--recent-chart-bg)" filter="url(#SvgjsFilter4293)"></circle><g id="SvgjsG4302" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText4303" font-family="Rubik, sans-serif" x="103" y="133" text-anchor="middle" dominant-baseline="auto" font-size="17px" font-weight="500" fill="#888888" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Rubik, sans-serif;"></text><<text id="SvgjsText4304" font-family="Helvetica, Arial, sans-serif" x="103" y="111" text-anchor="middle" dominant-baseline="auto" font-size="30px" font-weight="400" fill="#111111" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">{{$ontpower}}</text></g></g></g></g>
                      <line id="SvgjsLine4318" x1="0" y1="0" x2="206" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                      @if($ontpower < -27)

                      <span class="badge badge-info">Warning High Power</span>

                      @elseif ($ontpower > -11)

                      <span class="badge badge-info">Warning Low Power</span>

                      @else 

                      <span class="badge badge-success">Normal Power</span>

                      @endif 
                      <line id="SvgjsLine4319" x1="0" y1="0" x2="206" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                      </g><g id="SvgjsG4270" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <ul class="order-content">
                      <li> <span class="recent-circle bg-primary"> </span>
                        <div> <span class="f-light f-w-500">Min Power </span>
                          <h4 class="mt-1 mb-0">-11.00<span class="f-light f-14 f-w-400 ms-1"> </span></h4>
                        </div>
                      </li>
                      <li> <span class="recent-circle bg-info"></span>
                        <div> <span class="f-light f-w-500">Max Power</span>
                          <h4 class="mt-1 mb-0">-27.00<span class="f-light f-14 f-w-400 ms-1"> </span></h4>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h4>User Membership</h4>
                      <div class="dropdown icon-dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown" style="min-height: 100px;"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <ul class="user-list">
                      <li>
                        <div class="user-icon primary">
                          <div class="user-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus font-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg></div>
                        </div>
                        <div>
                          <h5 class="mb-1">{{$created_at}}</h5><span class="font-primary d-flex align-items-center"><i class="icon-arrow-up icon-rotate me-1"> </i><span class="f-w-500">+ Created At</span></span>
                        </div>
                      </li>
                      <li>
                        <div class="user-icon success">
                          <div class="user-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus font-success"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg></div>
                        </div>
                        <div>
                          <h5 class="mb-1">{{$expiration}}</h5><span class="font-danger d-flex align-items-center"><i class="icon-arrow-down icon-rotate me-1"></i><span class="f-w-500">- Expiration</span></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          
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

