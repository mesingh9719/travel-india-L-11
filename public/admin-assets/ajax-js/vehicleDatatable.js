       $(document).ready(function() {
            // Function to handle form submission and AJAX request
            function fetchData() {
                $.ajax({
                    url: '/admin/vehicles/index',
                    type: 'GET',
                    data: $('#filter-form').serialize(),
                    success: function(data) {
                        $('#table-container').html(data.html);
                        $('#pagination-container').html(data.pagination);
                    }
                });
            }

            // Fetch data on form submit
            $('#filter-form').on('submit', function(event) {
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
                    data: $('#filter-form').serialize(),
                    success: function(data) {
                        $('#table-container').html(data.html);
                        $('#pagination-container').html(data.pagination);
                    }
                });
            });

            // Reset filters
            $('#reset-filters').on('click', function() {
                $('#filter-form')[0].reset();
                fetchData();
            });

            // Initial data fetch
            fetchData();
        });

