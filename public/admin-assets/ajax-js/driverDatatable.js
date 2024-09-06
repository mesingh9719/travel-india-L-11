        //Owner Datatable 
            $(document).ready(function() {
                // Function to handle form submission and AJAX request
                function fetchData() {
                    $.ajax({
                        url: '/admin/drivers/index',
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

