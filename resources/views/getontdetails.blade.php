@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Get ONT Details</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Request User Data</li>
    <li class="breadcrumb-item active">getontdetails</li>

    @if (session()->has('systemuser_added'))
    <div id="success-message" class="alert alert-success">
        @if(is_array(session('systemuser_added')))
            <ul>
                @foreach (session('systemuser_added') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session('systemuser_added') }}
        @endif
      
    </div>
    <?php session()->forget('systemuser_added'); ?>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000); 
    </script>
@endif

@endsection




@section('content')

    <div class="content-body">


        <div class="row">
            <form action="{{route('userdata2')}}" method="POST">

                {{ csrf_field() }}

                <div class="col-xl-">
                    <div class="card" style="height: 177.609px;">
                        <div class="card-header">
                            <h4 class="card-title">Get User Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">

                                <fieldset>
                                    <div class="input-group">

                                        <select name="oltid" class="select2 form-control" required>
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
                                                <option value="NTWK-KADOLT1">KADOLT1</option>
                                                <option value="NTWK-KADOLT2">KADOLT2</option>


                                            </optgroup>
                                        </select>
                                        <input type="text" name="ontids" class="form-control"
                                               placeholder="Enter UserName" aria-describedby="button-addon2" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="submit">Submit</button>
                                            <form>
                                        </div>
                                    </div>
                                </fieldset>
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
