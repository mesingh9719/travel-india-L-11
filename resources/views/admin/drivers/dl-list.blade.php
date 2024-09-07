<table class="table table-bordered">
        <thead>
            <tr>
                  <th scope="col">ID</th>
                    <th scope="col">Owner</th>
                    <th scope="col">DL Number</th>
                    <th scope="col">DL Picture</td>
                    <th scope="col">Approval</td>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dlVerify as $dlVerifies)
                 <tr>
                    <td>{{ $dlVerifies->id }}</td>
                    <td>
                        {{ $dlVerifies->user->full_name}}
                    </td>
                    <td>{{ $dlVerifies->dl_number }}</td>
                    <td><img src="{{asset('images/'.$dlVerifies->dl_image)}}" width="70px"/></td>
                    <td>
                        <a href="{{ route('admin.drivers.edit',$dlVerifies->id) }}" class="action-item btn btn-warning" data-toggle="tooltip" title="Approved">  
                            Pending
                        </a>
                    </td>
                    <td>
                       <div class="actions">
                            <a href="{{ route('admin.drivers.edit',$dlVerifies->id) }}" class="action-item" data-toggle="tooltip" title="Edit">
                                <i class="far fa-edit text-info"></i>
                            </a>
                             <a href="{{ route('admin.drivers.destroy',$dlVerifies->id) }}" class="action-item" data-toggle="tooltip" title="Edit">
                                <i class="fas fa-trash-alt text-danger "></i>
                            </a>
                       </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="12" class="text-center">No Drivers available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing {{$dlVerify[0]->id?? ''}} to {{count($dlVerify) ?? ''}} of {{count($dlVerify) ?? ''}} entries</div>

    <div class="d-flex justify-content-end">
        {{ $dlVerify->links('vendor.pagination.admin-custom-pagination') }}
    </div>
