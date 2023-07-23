@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>User Cards</h3>

@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">System User</li>
    <li class="breadcrumb-item active">User Cards</li>

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


<div class="page-title">
      <div class="row">
                <div class="col-6">
                <livewire:search-users />
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-original-title="" title="">Add New User</button>

                  </ol>
                
                </div>
            </div>
      </div>
</div>

                
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title">Add New User</h5>
                           <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        <form action="{{route('SystemUsers.store')}}" method="POST" enctype="multipart/form-data">
                           @csrf

                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required >

                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required >

                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required >

                            <label for="exampleInputEmail1">Role</label>
                            <input type="text" class="form-control" id="role" name="role" required >


                            <label for="exampleInputEmail1">Department</label>
                            <input type="text" class="form-control" id="department" name="department" required >
                            

                            <label for="exampleInputEmail1">Image</label>
                            <input id="iamge" type="file" class="form-control"  name="image" required >
                            

                            
                        </div>
                        <div class="modal-footer">
                           <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                           <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Save changes</button>
                        </div>
                     </div>
                  </div>
               </div>
			   </div>

</form>

<div class="container-fluid">
	<div class="row">
@foreach($User as $i)

			   <!-- Edit -->
<div class="modal fade" id="edit{{ $i->id}}" tabindex="-1" role="dialog" aria-labelledby="#editmodal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title">Edit User Info</h5>
                           <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        
                        <form action="{{route('SystemUsers.update', $i->id) }}" method="POST" enctype="multipart/form-data">
                 {{method_field('patch')}}
                    @csrf

                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <div class="form-group">
                            

                            <label for="exampleInputEmail1">Name</label>
                            <input value="{{$i->name}}" type="text" class="form-control" id="name" name="name" required >

                            <label for="exampleInputEmail1">Email</label>
                            <input  value="{{$i->email}}" type="text" class="form-control" id="email" name="email" required >

                            <label for="exampleInputEmail1">Password</label>
                            <input  value="{{$i->password}}" type="text" class="form-control" id="password" name="password" required >

                            <label for="exampleInputEmail1">Role</label>
                            <input  value="{{$i->role}}" type="text" class="form-control" id="role" name="role" required >


                            <label for="exampleInputEmail1">Department</label>
                            <input  value="{{$i->department}}" type="text" class="form-control" id="department" name="department" required >

                            <label for="exampleInputEmail1">Image</label>
                            <input value="{{$i->filename}}" id="image" type="file" class="form-control" name="image">
                            <br>



                            @if($i->approved == 1)
  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked style="transform: scale(1.3);" onchange="updateApprovalStatus();">
<input type="hidden" id="approved" value="1">

<script>
    function updateApprovalStatus() {
        var checkbox = document.getElementById('flexSwitchCheckCheckedDisabled');
        var approvedInput = document.getElementById('approved');

        if (checkbox.checked) {
            approvedInput.value = '1';
        } else {
            approvedInput.value = '0';
        }
    }
</script>
    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Enabled</label>

  </div>

@else
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="approved" value="1" {{ $i->approved ? 'checked' : '' }} style="transform: scale(1.3);">
    <label class="form-check-label" for="flexSwitchCheckChecked">      Disabled</label>
  </div>
@endif


                        </div>
                        <div class="modal-footer">
                           <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                           <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Save changes</button>
                        </div>
                     </div>
                  </div>
               </div>
			   </div>
    
</form>
<!-- delete  -->
<div class="modal fade" id="delete{{ $i->id}}" tabindex="-1" role="dialog" aria-labelledby="#deletemodal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title">Delete user</h5>
                           <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        <form action="{{ route('SystemUsers.destroy',$i->id) }}" method="post">
                        @method('DELETE')
                                                    @csrf
                                                    <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <div class="form-group">
                            

                        <label for="exampleInputEmail1">Are You sure to delete this user?</label>
                        <input value="{{$i->name}}" type="text" class="form-control" id="name" name="name" required disabled>

                        </div>
                        <div class="modal-footer">
                           <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                           <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Delete</button>
                        </div>
                     
                        </div>
                     </div>
               </div>
			   </div>
                </form>


	  <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
		<div class="card social-profile">
		  <div class="card-body">
			<div class="social-img-wrap"> 

         <div class="social-img">
    @if ($i->image)
        <img src="{{ asset('uploads/profiles/' . $i->image) }}" alt="profile">
    @else
        <img src="{{ asset('/assets/images/user/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg') }}" alt="random-profile">
    @endif
</div>
           <div class="edit-icon">
           <div class="edit-icon">
    @if($i->approved == 0)
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <path d="M18 6L6 18M6 6l12 12"></path>
        </svg>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
            <path d="M20 6L9 17l-5-5"></path>
        </svg>
    @endif
</div>
</div>

</div>

			<div class="social-details">
			  <h5 class="mb-1"><a href="#" data-bs-original-title="" title="">{{$i->name}}</a></h5><span class="f-light">{{$i->email}}</span>
			  <ul class="card-social">
				<li><a href="" target="_blank" data-bs-original-title="" title="">{{$i->department}}<i ></i></a></li>
			  </ul>
			  		
					<td>

					<button class="btn btn-outline-warning"  type="button" data-bs-toggle="modal" data-bs-target="#edit{{ $i->id}}" data-bs-original-title="" title="">< Edit ></button>
               <button class="btn btn-outline-danger"  type="button" data-bs-toggle="modal" data-bs-target="#delete{{ $i->id}}" data-bs-original-title="" title=""> Delete </button>

					               
					 </td>
					</tr>
			</div>
		  </div>
		</div>
	  </div>

	  @endforeach
     

	</div>
  
  

  <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item {{ $User->onFirstPage() ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $User->previousPageUrl() }}">Previous</a>
    </li>

    @php
      $start = max($User->currentPage() - 6, 1);
      $end = min($User->currentPage() + 6, $User->lastPage());
    @endphp

    @if ($start > 1)
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
    @endif

    @for ($page = $start; $page <= $end; $page++)
      <li class="page-item {{ $page == $User->currentPage() ? 'active' : '' }}" aria-current="page">
        <a class="page-link" href="{{ $User->url($page) }}">{{ $page }}</a>
      </li>
    @endfor

    @if ($end < $User->lastPage())
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
    @endif

    <li class="page-item {{ $User->hasMorePages() ? '' : 'disabled' }}">
      <a class="page-link" href="{{ $User->nextPageUrl() }}">Next</a>
    </li>
  </ul>
</nav>



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

