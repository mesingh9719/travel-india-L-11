<div class="card border-0 px-25">
    <div class="card-header px-0 border-0">
        <h6>New Users</h6>
        <div class="card-extra">
            <ul class="card-tab-links nav-tabs nav" role="tablist">
                <li>
                    <a class="active" href="#t_selling-today" data-bs-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                <div class="selling-table-wrap">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Type</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($newRegistrations as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->userType->name ?? '' }}</td>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <x-user-status-badge is_verified="{{ $user->is_verified}}" is_rejected="{{ $user->is_rejected }}" is_active="{{ $user->is_active }}"/>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-sm btn-primary">View</a>
                                        </td>
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
