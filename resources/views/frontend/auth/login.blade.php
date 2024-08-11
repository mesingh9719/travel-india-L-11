<x-frontend.layout.master>
    <main class="main">
        <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/01.jpg') }}')">
            <div class="container">
                <h2 class="breadcrumb-title">Login</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>

        <div class="book-ride py-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="booking-form">
                            <!-- <div class="book-ride-head">
                                <h4 class="booking-title">Owner/Driver Login</h4>
                            </div> -->

                            <div class="content mb-4">
                                <!--content inner-->
                                <div class="content__inner">
                                    <div class="container">
                                        <!--content title-->
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="about-left wow fadeInLeft" data-wow-delay=".25s"
                                                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                                                    <div class="about-img">
                                                        <img src="{{asset('frontend-assets/img/about/02.jpg')}}" alt="">
                                                    </div>
                                                    <div class="about-experience">
                                                        <div class="about-experience-icon">
                                                            <img src="assets/img/icon/taxi-booking.svg" alt="">
                                                        </div>
                                                        <b>30 Years Of <br> Quality Service</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="signup-form">
                                                    <!-- <h2 class="sub-title border-bottom pb-4">Login</h2> -->

                                                    <div class="tab-content pt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show  active" id="pills-rider"
                                                            role="tabpanel" aria-labelledby="pills-rider-tab">
                                                            <div class="text-center">
                                                                <img src="{{asset('frontend-assets/img/logo/logo.png')}}"
                                                                    width="200px">
                                                            </div>
                                                            <form action="#">
                                                                <div class="mb-3">
                                                                    <label for="mobile"
                                                                        class="form-label">Mobile</label>
                                                                    <input class="form-control" type="number"
                                                                        name="mobile" placeholder="Mobile *">
                                                                </div>
                                                                <button class="btn btn-warning mt-3">Send OTP</button>
                                                                <p>Create an account? <a
                                                                        href="{{ route('register.create') }}">Sign
                                                                        Up</a>
                                                                </p>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

</x-frontend.layout.master>