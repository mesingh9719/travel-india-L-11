<x-admin.master-layout pageTitle="Drivers" pageSubTitle="All Drivers">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Drivers</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                              <form method="GET" id="dl-filter-form">
                        <div class="row d-flex">
                            <div class="col-md-5 mb-2 justify-content-start">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>
                                        Show 
                                        <select name="dlEntriesPerPage" aria-controls="DataTables_Table_0" id="dlEntriesPerPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5 mb-2 d-flex justify-content-end">
                                <input type="text" name="dl_filter" id="dl_filter" class="form-control m-1" placeholder="Search by name" value="{{ request()->get('name') }}">
                            </div>
                            <div class="col-md-2 mb-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary m-1">Filter</button>
                                <button type="button" id="dl-reset-filters" class="btn btn-danger m-1">Reset</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive table-responsive-dynamic">
                         <div id="dl-table-container">
                        @include('admin.drivers.dl-list')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot:js>

     <script type="text/javascript">
            $(document).ready(function() {
                // Function to handle form submission and AJAX request
                function fetchData() {
                    $.ajax({
                        url: '{{route("admin.drivers.index")}}',
                        type: 'GET',
                        data: $('#dl-filter-form').serialize(),
                        success: function(data) {
                            $('#dl-table-container').html(data.html);
                        }
                    });
                }

                // Fetch data on form submit
                $('#dl-filter-form').on('submit', function(event) {
                    event.preventDefault();
                    fetchData();
                });

                // Fetch data on pagination click
                $(document).on('click', '.pagination a', function(event) {
                    event.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: $('#dl-filter-form').serialize(),
                        success: function(data) {
                            $('#dl-table-container').html(data.html);
                        }
                    });
                });

                // Reset filters
                $('#dl-reset-filters').on('click', function() {
                    $('#dl-filter-form')[0].reset();
                    fetchData();
                });

                // Initial data fetch
                fetchData();
            });
     </script>
    </x-slot:js>
  
</x-admin.master-layout>
