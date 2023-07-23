@extends('layouts.simple.master')

@section('title', 'Hala FTTH')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@livewireStyles
@endsection

@section('breadcrumb-title')
    <h3>Change User Expiration</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">SAS</li>
    <li class="breadcrumb-item active">Change User Expiration</li>


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
<div class="container">
<div class="content-body">
    <form action="{{ route('sasuserapi') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change user Expiration</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <fieldset>
                            <div class="input-group">
                                <input type="text" name="sasusername" class="form-control" placeholder="Enter User Name" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger" type="submit">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="card">

    @if(isset($data))
    <table class="table">
            <thead class="table-light" >
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>First Name</th>
                <th>Phone</th>
                <th>Expiration</th>
                <th>Contract_id</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr>
                <td id="ids">{{ $i['id'] }}</td>
                <td>{{ $i['username'] }}</td>
                <td>{{ $i['firstname'] }}</td>
                <td>{{ $i['phone'] }}</td>
                <td>{{ $i['expiration'] }}</td>
                <td>{{ $i['contract_id'] }}</td>
                <td>
                    <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#edit" title="">Edit</button>
                  
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
</div>

<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel35">Edit user expiration</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
            <form action="{{ route('sasuserpost') }}" method="POST">
                {{ method_field('POST') }}
                @csrf
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <div class="form-group">
                            @if(isset($data))
                            <!-- read-only form -->
                            <label for="exampleInputEmail1">User id</label>
                            <input hidden value="{{ $i['id'] }}" type="text" class="form-control" id="userid" name="userid" required>
                            <label for="exampleInputEmail2">parent</label>
                            <input hidden value="{{ $i['parent_id'] }}" type="text" class="form-control" id="parent_id" name="parent_id" required>
                            <label for="exampleInputEmail3">parent_id</label>
                            <input readonly value="{{ $i['username'] }}" type="text" class="form-control" id="pppoename" name="pppoename" required>
                            <label for="exampleInputEmail4">First Name</label>
                            <input readonly value="{{ $i['firstname'] }}" type="text" class="form-control" id="firstname" name="firstname" required>
                            <label for="exampleInputEmail5">Phone</label>
                            <input readonly value="{{ $i['phone'] }}" type="text" class="form-control" id="serial" name="serial" required>
                            <label for="exampleInputEmail6">Contract_id</label>
                            <input readonly value="{{ $i['contract_id'] }}" type="text" class="form-control" id="phone" name="phone" required>
                            <label for="exampleInputEmail7">Expiration</label>
                            <input readonly value="{{ $i['expiration'] }}" type="text" class="form-control" id="oldexpiration" name="oldexpiration" required>
                            <label for="exampleInputEmail1">New Expiration</label>
                            <input value="" type="datetime-local" class="form-control" id="expiration" name="expiration" required>
                            <input type="hidden" class="form-control" id="username" name="username" value="{{ Auth::user()->name }}">
                            <br>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Save changes</button>
                            @endif
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>

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
@endsection
