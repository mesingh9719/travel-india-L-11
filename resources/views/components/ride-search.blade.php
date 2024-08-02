<section class="banner" style="background-image: url('{{ asset('frontend-assets/images/taxi-banner.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="banner-txt text-center">
                    <p class="lead text-info">Book your rider Today! Got <sup class="bg-primary text-info p-2 rounded-3  ">10% off</sup></p>
                    <h1 class="text-info mt-4">Looking for new Destination? Get a Lift or find a Seat.</h1>
                    <form action="#" class="mt-4 pickup-form mt-5">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div class="pickup-lc form-group">
                                <input type="search" placeholder="Pickup location">
                            </div>
                            <div class="drop-lc form-group">
                                <input type="search" placeholder="Drop location">
                            </div>
                            <a href="{{url('/car-list')}}" class="btn btn-primary rounded-2">Find a Taxi <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
