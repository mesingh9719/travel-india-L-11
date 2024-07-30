<x-admin.master-layout pageTitle="Plans" pageSubTitle="All Plans">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Plans</h4>
                        </div>
                        <div>
                            <a href="{{ route('admin.plans.create') }}" class="btn btn-primary">Add New Plan</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                        <table class="table mb-0 table-borderless table-rounded">
                        <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Duration Type</th>
                                    <th scope="col">Max Vehicles</th>
                                    <th scope="col">Max Drivers</th>
                                    <th scope="col">Max Leads</th>
                                    <th scope="col">Per Lead Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                    <tr class="text-capitalize">
                                        <td>{{ $plan->id }}</td>
                                        <td>{{ $plan->name }}</td>
                                        <td>{{ $plan->price }}</td>
                                        <td>{{ $plan->duration }}</td>
                                        <td>{{ $plan->duration_type }}</td>
                                        <td>{{ $plan->max_vehicle }}</td>
                                        <td>{{ $plan->max_driver }}</td>
                                        <td>{{ $plan->max_lead }}</td>
                                        <td>{{ $plan->per_lead_price }}</td>
                                        <td>
                                            <x-action-btns>
                                                <x-edit-btn-action route="admin.plans.edit" :id="$plan->id"/>
                                                <x-delete-btn-action route="admin.plans.destroy" :id="$plan->id"/>
                                            </x-action-btns>
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
    <x-slot:js>
        <script>
            $(document).ready(function () {
                $('.remove').on('click', function (e) {
                    e.preventDefault();
                    let id = $(this).data('id');
                    let route = $(this).data('route');
                    let url = route + '/' + id;
                    let token = "{{ csrf_token() }}";
                    let redirect = "{{ route('admin.plans.index') }}";
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: url,
                                type: 'DELETE',
                                data: {
                                    _token: token
                                },
                                success: function (response) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    ).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = redirect;
                                        }
                                    });
                                }
                            });
                        }
                    });
                });
            });
        </script>

    </x-slot:js>
</x-admin.master-layout>
