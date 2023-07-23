<div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <input wire:model.debounce.500ms="search" type="text" class="form-control" placeholder="Search">
            </div>
            <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Employee Name</th>
                                    <th>User Name</th>
                                    <th>First Name</th>
                                    <th>SAS Expiration</th>
                                    <th>SAS new Expiration</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sasextenlogs as $x)
                                    <tr>
                                        <td>{{ $x->username }}</td>
                                        <td>{{ $x->pppoename }}</td>
                                        <td>{{ $x->firstname }}</td>
                                        <td>{{ $x->oldexpiration }}</td>
                                        <td>{{ $x->expiration }}</td>
                                        <td>{{ $x->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
