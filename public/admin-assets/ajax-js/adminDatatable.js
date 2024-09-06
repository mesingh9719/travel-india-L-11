  

        //Owner Datatable 
        $(document).ready(function() {
            // Function to handle form submission and AJAX request
            function fetchData() {
                $.ajax({
                    url: '/admin/users/index"',
                    type: 'GET',
                    data: $('#owner-filter-form').serialize(),
                    success: function(data) {
                        $('#owner-table-container').html(data.html);
                    }
                });
            }

            // Fetch data on form submit
            $('#owner-filter-form').on('submit', function(event) {
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
                    data: $('#owner-filter-form').serialize(),
                    success: function(data) {
                        $('#owner-table-container').html(data.html);
                    }
                });
            });

            // Reset filters
            $('#owner-reset-filters').on('click', function() {
                $('#owner-filter-form')[0].reset();
                fetchData();
            });

            // Initial data fetch
            fetchData();
        });

