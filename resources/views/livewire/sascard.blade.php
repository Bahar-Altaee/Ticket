<div>

 <div class="col-md-2 mb-4">
 <input wire:model.lazy="cardpin" type="text" class="form-control" id="pin"  name="pin" placeholder="search for card" value="">
</div>


                          <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Serial Number</th>
            <th>PIN</th>
            <th>Profile</th>
            <th>Used At</th>
            <th>Used By (User)</th>
            <th>Used By (Manager)</th>
        </tr>
    </thead>
    <tbody>
        <tr style="background-color: {{ is_null($used_at) ? 'green' : 'maroon' }}">
            <td>{{$serialnumber}}</td>
            <td>{{$pin}}</td>
            <td>{{$profile}}</td>
            <td>{{$used_at}}</td>
            <td>{{$username}}</td>
            <td>{{$mangeruser}}</td>
        </tr>
    </tbody>
</table>




</div>
