

<div>
    <input class="form-control" wire:model="search" type="text" placeholder="Search users...">

    @if($search)
    <ul style="list-style: none; padding: 0; margin: 0;"> 
        @foreach ($users as $user)
     <!-- Edit -->
<div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User Info</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
            <form action="{{ route('SystemUsers.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('patch') }}
                @csrf
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                            <input value="{{$user->name}}" type="text" class="form-control" id="name" name="name" required >

                            <label for="exampleInputEmail1">Email</label>
                            <input  value="{{$user->email}}" type="text" class="form-control" id="email" name="email" required >

                            <label for="exampleInputEmail1">Password</label>
                            <input  value="{{$user->password}}" type="text" class="form-control" id="password" name="password" required >

                            <label for="exampleInputEmail1">Role</label>
                            <input  value="{{$user->role}}" type="text" class="form-control" id="role" name="role" required >


                            <label for="exampleInputEmail1">Department</label>
                            <input  value="{{$user->department}}" type="text" class="form-control" id="department" name="department" required >
                            
                            <label for="exampleInputEmail1">Image</label>
                            <input value="{{$user->filename}}" id="image" type="file" class="form-control" name="image">
                            <br>

                            @if($user->approved == 1)
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
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="approved" value="1" {{ $user->approved ? 'checked' : '' }} style="transform: scale(1.3);">
    <label class="form-check-label" for="flexSwitchCheckChecked">      Disabled</label>
  </div>
@endif


                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deletemodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete user</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
            <form action="{{ route('SystemUsers.destroy', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Are you sure you want to delete this user?</label>
                            <input value="{{ $user->name }}" type="text" class="form-control" id="name" name="name" required disabled>
                            <!-- Other input fields -->
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- User card -->
<div class="col-xl-4 col-sm-6 box-col-4">
    <div class="card social-profile">
        <div class="card-body">
            <div class="social-img-wrap">
            <div class="social-img">
    @if ($user->image)
        <img src="{{ asset('uploads/profiles/' . $user->image) }}" alt="profile">
    @else
    <img src="{{ asset('/assets/images/user/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg') }}" alt="random-profile">
    @endif
</div>
                <div class="edit-icon">
                @if($user->approved == 0)
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
            <div class="social-details">
                <h5 class="mb-1"><a href="#" data-bs-original-title="" title="">{{ $user->name }}</a></h5>
                <span class="f-light">{{ $user->email }}</span>
                <ul class="card-social">
                    <li><a href="#" target="_blank" data-bs-original-title="" title="">{{ $user->department }}<i></i></a></li>
                </ul>
                <div>
                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#edit{{ $user->id }}" data-bs-original-title="" title="">< Edit ></button>
                    <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#delete{{ $user->id }}" data-bs-original-title="" title="">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>


        @endforeach
    </ul>
    
    @endif

</div>
