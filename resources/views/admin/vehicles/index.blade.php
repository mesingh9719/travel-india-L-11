<x-admin.master-layout pageTitle="Vehicles" pageSubTitle="All Vehicles">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Vehicles</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                              <form method="GET" id="filter-form">
                        <div class="row d-flex">
                            <div class="col-md-5 mb-2 justify-content-start">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>
                                        Show 
                                        <select name="entriesPerPage" aria-controls="DataTables_Table_0" id="entriesPerPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5 mb-2 d-flex justify-content-end">
                                <input type="text" name="rc_number" id="rc_number" class="form-control m-1" placeholder="Search by name" value="{{ request()->get('name') }}">
                            </div>
                            <div class="col-md-2 mb-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary m-1">Filter</button>
                                <button type="button" id="reset-filters" class="btn btn-danger m-1">Reset</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive table-responsive--dynamic">
                         <div id="table-container">
                        @include('admin.vehicles.vehicles-list')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <x-slot:js>
     <script src="{{ asset('frontend-assets/js/vehicleListDatatable.js') }}"></script>
    </x-slot:js>
  
</x-admin.master-layout>
