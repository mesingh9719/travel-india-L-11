@foreach($vehicles as $vehicle)
    <tr>
        <td>{{ $vehicle->id }}</td>
        <td>{{ $vehicle->rc_number }}</td>
        <td>{{ $vehicle->rc_image_front }}</td>
        <td>
            <!-- Add actions like Edit and Delete -->
            <a href="#">Edit</a> |
            <a href="#">Delete</a>
         
        </td>
    </tr>
@endforeach
