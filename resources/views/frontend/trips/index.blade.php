<x-frontend.layout.master>

    <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/01.jpg') }}')">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $_GET['pickup'] ?? '' }} - {{ $_GET['dropoff'] ?? '' }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li><span>Finding Rides</span></li>
            </ul>
        </div>
    </div>

    <section class="promo-sec"
             style="background: url('{{ asset('frontend-assets/images/promo-bg.jpg') }}')no-repeat center center / cover;">
        <div class="container">
            <x-trip.ride-search-section/>
        </div>
    </section>


    <main class="main sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="mt-4 pt-2">
                        <h2 class="sub-title border-bottom pb-4 d-flex justify-content-between text-capitalize">
                            <div>Available Rides</div>
                            <div class="text-primary">{{ $_GET['pickup'] ?? '' }} - {{ $_GET['dropoff'] ?? '' }}</div>
                        </h2>
                        <p class="text-muted pt-2 pb-2 ">{{ $trips->count() }} rides available with the selected
                            criteria.</p>
                    </div>
                    <div class="car-listings">
                        @include('frontend.trips.partials.trip-list')
                        <div class="pager mt-5">
                            <a href="#" class="prev-page"><i class="fa fa-angle-left"></i></a>
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next-page"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-driver-info-modal/>
    <x-slot:js>
        <script>
            document.querySelectorAll('.price_negotiate').forEach(function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();

                    // Hide all open input fields and submit buttons by adding the display-hide class
                    document.querySelectorAll('.price_input_container').forEach(function (inputContainer) {
                        inputContainer.classList.add('display-hide');
                    });
                    document.querySelectorAll('.price_submit_container').forEach(function (submitContainer) {
                        submitContainer.classList.add('display-hide');
                    });

                    // Show the input field and submit button for the clicked button by removing the display-hide class
                    const parentRow = this.closest('tr');
                    const priceInputContainer = parentRow.querySelector('.price_input_container');
                    const priceSubmitContainer = parentRow.querySelector('.price_submit_container');

                    priceInputContainer.classList.remove('display-hide');
                    priceSubmitContainer.classList.remove('display-hide');
                });
            });

            $(document).ready(function () {
                $('.driver_info').on('click', function () {

                    const driverId = $(this).data('id');

                    // Show the modal
                    $('#driverInfoModal').modal('show');

                    // Get the modal content container
                    const modalContent = $('#driverInfoContent');

                    // Display a loading message while fetching data
                    modalContent.html('Loading...');

                    // Send an AJAX request to fetch driver information
                    $.ajax({
                        url: `/driver-info/${driverId}`,
                        method: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            if (response.status === 'success') {
                                const driver = response.data;
                                const profileImage = driver.profile_image ? `/images/${driver.profile_image}` : 'default-profile.png';

                                // Convert created_at to a human-readable format
                                const createdAt = new Date(driver.created_at);
                                const currentTime = new Date();
                                const timeDiff = Math.abs(currentTime - createdAt);
                                const diffDays = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                                const travelIndiaMessage = `${diffDays} days with Travel India`;

                                // Populate the modal with detailed driver information
                                modalContent.html(`
                        <div class="text-center"> <img src="${profileImage}" class="img-fluid mb-3 driver-image-modal" alt="Driver Image">
                        <h5>${driver.first_name} ${driver.last_name}</h5>
                        <p><strong>Mobile:</strong> ${driver.mobile}</p>
                                                      </div>
                        <!-- Add more fields as needed -->
                    `);
                            } else {
                                modalContent.html('<p class="text-danger">Failed to load driver information.</p>');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error fetching driver information:', error);
                            modalContent.html('<p class="text-danger">Error fetching driver information.</p>');
                        }
                    });
                });
            });

        </script>
    </x-slot:js>
</x-frontend.layout.master>
