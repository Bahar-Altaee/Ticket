<div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered file-export">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Server Reply</th>
                    <th>MAC</th>
                    <th>ASR</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paginator as $i)
                    <tr>
                        <td>{{ $i['username'] }}</td>
                        <td class="type">
                            @if ($i['reply'] == "Access-Accept")
                                <span class="badge badge-success badge-pill badge-sm">
                                    Access-Accept
                                </span>
                            @elseif ($i['reply'] == "Access-Reject")
                                <span class="badge badge-danger badge-pill badge-sm">
                                    Access-Reject
                                </span>
                            @elseif ($i['reply'] == "User exceeded max login sessions")
                                <span class="badge badge-secondary badge-pill badge-sm">
                                    User exceeded max login sessions
                                </span>
                            @elseif ($i['reply'] == "user authenticated successfully")
                                <span class="badge badge-primary badge-pill badge-sm">
                                    user Connected successfully
                                </span>
                            @elseif ($i['reply'] == "user disabled")
                                <span class="badge badge-warning badge-pill badge-sm">
                                    user disabled
                                </span>
                            @else
                                {{ $i['reply'] }}
                            @endif
                        </td>
                        <td>{{ $i['mac'] }}</td>
                        <td class="type">
                            @if ($i['nas_ip_address'] == "10.1.30.3")
                                <span class="badge badge-success badge-pill badge-sm">
                                    NOKIA MMN
                                </span>
                            @elseif ($i['nas_ip_address'] == "10.1.31.10")
                                <span class="badge badge-warning badge-pill badge-sm">
                                    NOKIA JAD
                                </span>
                            @endif
                        </td>
                        <td>{{ $i['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $paginator->links() }}
</div>
