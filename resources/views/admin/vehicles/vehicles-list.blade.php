@foreach($vehicles as $vehicle)
    <tr>
        <td>{{ $vehicle->id }}</td>
        <td>
            <a href="{{ route('admin.users.show',$vehicle->user_id) }}" class="nav-link cursor-true">
                {{ $vehicle->user->first_name.' '.$vehicle->user->last_name }}
            </a>
        </td>
        <td>{{ $vehicle->vehicle_name }}</td>
        <td>
            {{ $vehicle->vehicleType->name ?? '' }}
        </td>
        <td>{{ $vehicle->brand }}</td>
        <td>{{ $vehicle->vehicle_model }}</td>
        <td>{{ $vehicle->vehicle_number ?? '' }}</td>
        <td>{{ $vehicle->fuel_type ?? '' }}</td>
        <td>{{ $vehicle->seat_capacity ?? '' }}</td>
        <td>
            @if($vehicle->is_verified)
                <span class="badge badge-round badge-success">Verified</span>
            @else
                <span class="badge badge-round badge-warning">Pending</span>
            @endif
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
@endforeach
