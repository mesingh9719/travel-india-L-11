<table class="table table-bordered">
        <thead>
            <tr>
                  <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Profile</td>
                    <th scope="col">Selfie</td>
                    <th scope="col">Address</td>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($owners as $owner)
                 <tr>
                    <td>{{ $owner->id }}</td>
                    <td>{{ $owner->full_name}}</td>
                    <td>{{ $owner->mobile }}</td>
                    <td><img src="{{asset('images/'.$owner->profile_image)}}" width="70px"/></td>
                    <td><img src="{{asset('images/'.$owner->selfie_image)}}" width="70px"/></td>
                    <td>{{$owner->home_address }}</td>
                    <td>
                       <div class="actions">
                            <a href="{{ route('admin.drivers.edit',$owner->id) }}" class="action-item" data-toggle="tooltip" title="Edit">
                                <i class="far fa-edit text-info"></i>
                            </a>
                            <a href="#" class="action-item text-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $owner->id }}').submit();" data-toggle="tooltip" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </a>

                            <form id="delete-form-{{ $owner->id }}" action="{{ route('admin.drivers.destroy', $owner->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                       </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No Owners available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing {{$owners[0]->id?? ''}} to {{count($owners) ?? ''}} of {{count($owners) ?? ''}} entries</div>

    <div class="d-flex justify-content-end">
        {{ $owners->links('vendor.pagination.admin-custom-pagination') }}
    </div>
