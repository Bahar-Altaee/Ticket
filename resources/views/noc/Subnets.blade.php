@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Advertise Subnets</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Netowk Operation Center</li>
    <li class="breadcrumb-item active">Advertise Subnets</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <h2 class="text-center pb-3 pt-1">Drag and Drop To Change Subnets Advertise </h2>
            <div class="d-flex justify-content-center">

                <div class="col-md-3 p-3 bg-dark offset-md-1">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            <h3>EL-OUT</h3>
                        </div>
                    </div>
                    <ul class="list-group shadow-lg connectedSortable" id="padding-item-drop">
                        @if(!empty($panddingItem) && $panddingItem->count())
                            @foreach($panddingItem as $key=>$value)
                                <li class="list-group-item" item-id="{{ $value->id }}">{{ $value->title }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="card-footer">
                            <div class="col-xl-4 col-md-6 col-sm-12">
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-outline-info" type="button" data-bs-original-title="" title="">Add</button>
								<button class="btn btn-outline-info" type="button" data-bs-original-title="" title="">Edit</button>
								<button class="btn btn-outline-info" type="button" data-bs-original-title="" title="">Delete</button>
							</div>
						</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3 bg-dark offset-md-1">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            <h3>SCIS29-BADRA</h3>
                        </div>
                    </div>
                    <ul class="list-group shadow-lg connectedSortable" id="padding-item-drop">
                        @if(!empty($panddingItem) && $panddingItem->count())
                            @foreach($panddingItem as $key=>$value)
                                <li class="list-group-item" item-id="{{ $value->id }}">{{ $value->title }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="card-footer">
                        <div class="col-xl-4 col-md-6 col-sm-12">
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-outline-warning" type="button" data-bs-original-title="" title="">Add</button>
								<button class="btn btn-outline-warning" type="button" data-bs-original-title="" title="">Edit</button>
								<button class="btn btn-outline-warning" type="button" data-bs-original-title="" title="">Delete</button>
							</div>
						</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3 bg-dark offset-md-1">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            <h3>KIRKUK-NEWROZ</h3>
                        </div>
                    </div>
                    <ul class="list-group shadow-lg connectedSortable" id="padding-item-drop">
                        @if(!empty($panddingItem) && $panddingItem->count())
                            @foreach($panddingItem as $key=>$value)
                                <li class="list-group-item" item-id="{{ $value->id }}">{{ $value->title }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="card-footer">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button class="btn btn-outline-success" type="button" data-bs-original-title="" title="">Add</button>
                                    <button class="btn btn-outline-success" type="button" data-bs-original-title="" title="">Edit</button>
                                    <button class="btn btn-outline-success" type="button" data-bs-original-title="" title="">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3 bg-dark offset-md-1 shadow-lg complete-item">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            <h3>SCIS6-ARAR</h3>
                        </div>
                    </div>
                    <ul class="list-group connectedSortable" id="complete-item-drop">
                        @if(!empty($completeItem) && $completeItem->count())
                            @foreach($completeItem as $key=>$value)
                                <li class="list-group-item" item-id="{{ $value->id }}">{{ $value->title }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="card-footer">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button class="btn btn-outline-primary" type="button" data-bs-original-title="" title="">ADD</button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-original-title="" title="">Edit</button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-original-title="" title="">Delete</button>
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
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>

    <script>
        $(function() {
            $("#padding-item-drop, #complete-item-drop").sortable({
                connectWith: ".connectedSortable",
                opacity: 0.5,
            }).disableSelection();

            $(".connectedSortable").on("sortupdate", function(event, ui) {
                var panddingArr = [];
                var completeArr = [];

                $("#padding-item-drop li").each(function(index) {
                    panddingArr[index] = $(this).attr('item-id');
                });

                $("#complete-item-drop li").each(function(index) {
                    completeArr[index] = $(this).attr('item-id');
                });

                $.ajax({
                    url: "{{ route('update.items') }}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        panddingArr: panddingArr,
                        completeArr: completeArr
                    },
                    success: function(data) {
                        console.log('success');
                    }
                });

            });
        });
    </script>
@endsection
