<x-admin.master-layout pageTitle="User Details" pageSubTitle="User Details">
    <div class="card">
        <div class="card-header">
            <h6>User Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>User Type</th>
                            <td>{{ $user->userType->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>{{ $user->mobile }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <x-user-status-badge is_verified="{{ $user->is_verified}}" is_rejected="{{ $user->is_rejected }}" is_active="{{ $user->is_active }}"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin.master-layout>
