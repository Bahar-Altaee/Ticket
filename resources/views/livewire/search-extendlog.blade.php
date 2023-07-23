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
                                            <th>Days</th>
                                            <th>Date</th>
                                           
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($extendusers as $x)
                                    <tr>
                                    <td>{{ $x->username }}</td>
                                                <td>{{ $x->pppoename }}</td>
                                                <td>{{ $x->firstname }}</td>
                                                <td>
                                                    @if($x->sasprofileid == 11)
                
                                                        1 Day

                                                    @elseif($x->sasprofileid == 12)

                                                    2 Days
                                                    @elseif($x->sasprofileid == 13)
                
                                                        3 Days
                                                    @elseif($x->sasprofileid == 14)
                                                                 
                                                        4 Days
                                                    @elseif($x->sasprofileid == 15)
                                                                     
                                                            5 Days  
                                                    
                                                    @endif
                                                </td>
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
