<table class="table table-bordered">
        <thead>
            <tr>
                  <th scope="col">ID</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Name</th>
                    <th scope="col">Picture</td>
                    <th scope="col">Type</th>
                    <th scope="col">Model</th>
                    <th scope="col">Number</th>
                    <th scope="col">Fuel Type</th>
                    <th scope="col">Seats</th>
                    <th scope="col">Verification</th>
                    <th scope="col">Created At</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vehicles as $vehicle)
                 <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>
                        <a href="{{ route('admin.users.show',$vehicle->user_id) }}" class="nav-link cursor-true">
                            {{ $vehicle->user->full_name}}
                        </a>
                    </td>

                    <td><img src="{{asset('images/'.$vehicle->rc_image_front)}}" width="70px"/></td>
                    <td>{{ $vehicle->vehicleType->name ?? '' }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->vehicle_model }}</td>
                    <td>{{ $vehicle->rc_number }}</td>
                    <td>{{ $vehicle->fuel_type ?? '' }}</td>
                    <td>{{ $vehicle->seat_capacity ?? '' }}</td>
                    <td>
                      <button class="btn btn-warning">{{$vehicle->status}}</button>
                    </td>
                    <td>{{ $vehicle->created_at->diffForHumans() }}</td>
                    <td>
                       <div class="actions">
                            <a href="{{ route('admin.vehicles.show',$vehicle->id) }}" class="action-item" data-toggle="tooltip" title="View">
                                <i class="far fa-eye text-primary"></i>
                            </a>
                           &nbsp;
                            <a href="{{ route('admin.vehicles.edit',$vehicle->id) }}" class="action-item" data-toggle="tooltip" title="Edit">
                                <i class="far fa-edit text-info"></i>
                            </a>
                       </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">No Vehicles available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing {{$vehicles[0]->id?? ''}} to {{count($vehicles) ?? ''}} of {{count($vehicles) ?? ''}} entries</div>

    <div class="d-flex justify-content-end">
        {{ $vehicles->links('vendor.pagination.admin-custom-pagination') }}
    </div>
