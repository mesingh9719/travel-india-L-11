<x-frontend.layout.master>

    <section class="promo-sec" style="background: url('{{ asset('frontend-assets/images/promo-bg.jpg') }}')no-repeat center center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap text-center">
                        <h2 class="fw-7 text-white text-uppercase">Login</h2>
                        <nav aria-label="breadcrumb w-75 mx-auto">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main class="main sec-padding my-account">
        <div class="container">
            <div class="row g-0 ct-bg">
                <div class="col-lg-6 bg-cover" style="background-image: url('{{ asset('frontend-assets/images/account.jpg') }}');">
                </div>
                <div class="col-lg-6">
                    <div class="signup-form">
                        <h2 class="sub-title border-bottom pb-4">Login</h2>

                        <div class="tab-content pt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-rider" role="tabpanel"
                                 aria-labelledby="pills-rider-tab">
                                <form action="#">
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input class="form-control" type="number" name="mobile" placeholder="Mobile *">
                                    </div>
                                    <button class="btn btn-primary mt-3">Login</button>
                                    <p>Create an account? <a href="{{ route('register') }}">Sign Up</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-frontend.layout.master>
