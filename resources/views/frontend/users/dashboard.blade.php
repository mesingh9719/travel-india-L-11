<x-frontend.layout.master>
<main class="main">
    <div class="user-profile mt-4 mb-4">
        <div class="container">
            <div class="row">
            <x-frontend.sidebar.sidebar />
                <div class="col-lg-9">
                    <div class="user-profile-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="dashboard-widget dashboard-widget-color-1">
                                    <div class="dashboard-widget-info">
                                        <h1>05</h1>
                                        <span>Upcoming Booking </span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <i class="fal fa-list"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="dashboard-widget dashboard-widget-color-2">
                                    <div class="dashboard-widget-info">
                                        <h1>1250</h1>
                                        <span>Total Booking</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <i class="fal fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="dashboard-widget dashboard-widget-color-3">
                                    <div class="dashboard-widget-info">
                                        <h1>110</h1>
                                        <span>Cancel Booking</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <i class="fal fa-xmark-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <x-frontend.dashboard-bookings/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<x-frontend.add-ride-modal/>
</main>

</x-frontend.layout.master>
