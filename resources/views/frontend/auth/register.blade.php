<x-frontend.layout.master>
    <x-slot:style>
        <link rel="stylesheet" href="{{asset('frontend-assets/css/wizard-form.css')}}">
    </x-slot:style>
    <main class="main">
        <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/01.jpg') }}')">
            <div class="container">
                <h2 class="breadcrumb-title">Register</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>

        <div class="book-ride py-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="booking-form">
                            <div class="book-ride-head">
                                <h4 class="booking-title">Owner/Driver Registration</h4>
                            </div>

                            <div class="content mb-4">
                                <!--content inner-->
                                <div class="content__inner">
                                    <div class="container">
                                        <!--content title-->

                                    </div>
                                    <div class="container">
                                        <!--multisteps-form-->
                                        <div class="multisteps-form overflow-visible">
                                            <!--progress bar-->
                                            <div class="row">
                                                <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                                                    <div class="multisteps-form__progress">
                                                        <button class="multisteps-form__progress-btn js-active"
                                                                type="button" title="User Info">Persnal Details
                                                        </button>
                                                        <button class="multisteps-form__progress-btn" type="button"
                                                                title="Address">Document
                                                        </button>
                                                        <button class="multisteps-form__progress-btn" type="button"
                                                                title="Order Info"> Vehicle Details
                                                        </button>
                                                        <button class="multisteps-form__progress-btn" type="button"
                                                                title="Comments">Bank Details
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--form panels-->
                                            <div class="row">
                                                <div class="col-12 col-lg-12">
                                                    <form class="multisteps-form__form">
                                                        <!--single form panel-->
                                                        <div
                                                            class="multisteps-form__panel p-4 rounded bg-white js-active"
                                                            data-animation="slideHorz">

                                                            <div class="multisteps-form__content">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <x-user-type/>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="full_name"
                                                                                   placeholder="Your Name">
                                                                            <i class="far fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Phone Number</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="mobile_number"
                                                                                   placeholder="Your Phone">
                                                                            <i class="far fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Alternate Mobile Number</label>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Alternate Mobile Number"
                                                                                   name="alternate_Mobile_Number">
                                                                            <i class="far fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Business Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="business_name"
                                                                                   placeholder="Business Name">
                                                                            <i class="far fa-location-dot"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Business Address</label>
                                                                            <textarea class="form-control" rows="2"
                                                                                      name="business_address"
                                                                                      id="business_address"
                                                                                      placeholder="Enter your Business Address"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                   type="checkbox" id="same_as_business"
                                                                                   onchange="getCheckboxValue()">
                                                                            <label class="form-check-label"
                                                                                   for="same_as_business">
                                                                                Same as Business Address
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Home Address</label>
                                                                            <textarea class="form-control" rows="2"
                                                                                      name="home_address"
                                                                                      id="home_address"
                                                                                      placeholder="Enter your Home Address"></textarea>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="button-row d-flex mt-4 justify-content-end">
                                                                    <button
                                                                        class="btn  btn-warning ml-auto js-btn-next nav-right-btn mt-2"
                                                                        type="button" title="Next">Next <i
                                                                            class="fas fa-arrow-right"></i></button>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--single form panel-->
                                                        <div class="multisteps-form__panel  p-4 rounded bg-white"
                                                             data-animation="slideHorz">

                                                            <div class="multisteps-form__content">

                                                                <div class="form-row mt-4">
                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Pan Number</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="pan_number"
                                                                                       placeholder="pan Number">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Upload Pan card</label>
                                                                                <input type="file" class="form-control"
                                                                                       name="pan_image"
                                                                                       placeholder="pan Number">
                                                                                <i class="fa-solid fa-book"></i>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Aadhar Number</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="aadhar_number"
                                                                                       placeholder="Aadhar Number">
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Upload front of Aadhar</label>
                                                                                <input type="file" class="form-control"
                                                                                       name="aadhar_image_front"
                                                                                       placeholder="pan Number">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Upload back and back of
                                                                                    Aadhar</label>
                                                                                <input type="file" class="form-control"
                                                                                       name="aadhar_image_back"
                                                                                       placeholder="pan Number">

                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>DL Number</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="dl_number"
                                                                                       placeholder="DL Number">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Upload Driving
                                                                                    License</label>
                                                                                <input type="file" class="form-control"
                                                                                       name="dl_image">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>GST Number</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="gst_number"
                                                                                       placeholder="GST Number">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Upload Profile Picture</label>
                                                                                <input type="file" class="form-control"
                                                                                       name="profile_image">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="button-row d-flex mt-4 justify-content-end">
                                                                        <button class="btn  js-btn-prev ml-auto"
                                                                                type="button" title="Prev"
                                                                                style="float: left; margin:5px;background-color:#111111; color:#fff">
                                                                            <i
                                                                                class="fas fa-arrow-left"></i> previous
                                                                        </button>
                                                                        <button
                                                                            class="btn  btn-warning  js-btn-next mr-auto"
                                                                            type="button" title="Next"
                                                                            style="float: right; margin:5px;"> Next <i
                                                                                class="fas fa-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single form panel-->
                                                        <div class="multisteps-form__panel p-4 rounded bg-white"
                                                             data-animation="slideHorz">

                                                            <div class="multisteps-form__content">
                                                                <div class="row" id="dynamic_field">
                                                                    <div class="form-group col-lg-5"><label>RC
                                                                            Number:<span>*</span></label><input
                                                                            type="text" name="rc_number[]"
                                                                            placeholder="RC Number"
                                                                            class="form-control required"></div>
                                                                    <div class="form-group col-lg-5"><label>Upload
                                                                            RC:<span>*</span></label><input
                                                                            class="form-control" type="file"
                                                                            name="rc_image[]"
                                                                            aria-label="File browser"
                                                                            accept="image*/, .jpg, .png, .bmp, .heif, .svg"
                                                                            required></div>
                                                                    <div class="form-group col-lg-2 mt-4">
                                                                        <button
                                                                            type="button" name="add" id="add"
                                                                            class="btn btn-warning mt-4">+
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div
                                                                        class="button-row d-flex justify-content-end mt-4 col-12">
                                                                        <button
                                                                            class="btn btn-primary js-btn-prev ml-auto"
                                                                            type="button" title="Previous"
                                                                            style="float: left; margin:5px;background-color:#111111; color:#fff">
                                                                            <i
                                                                                class="fas fa-arrow-left"></i> Previous
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-warning ml-auto js-btn-next"
                                                                            type="button" title="Next"
                                                                            style="float: right; margin:5px;"> Next <i
                                                                                class="fas fa-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single form panel-->
                                                        <div class="multisteps-form__panel p-4 rounded bg-white"
                                                             data-animation="slideHorz">

                                                            <div class="multisteps-form__content">
                                                                <div class="row">
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="accountHolderName"
                                                                               class="form-label">Account Holder
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                               id="account_holder_name"
                                                                               placeholder="Account Holder Name"
                                                                               required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="accountNumber"
                                                                               class="form-label">Account Number</label>
                                                                        <input type="text" class="form-control"
                                                                               id="account_number"
                                                                               placeholder="Account Number" required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="routingNumber"
                                                                               class="form-label">IFSC Code</label>
                                                                        <input type="text" class="form-control"
                                                                               id="ifsc_code" placeholder="IFSC Code"
                                                                               required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="bankName" class="form-label">Bank
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                               name="bank_name" placeholder="Bank Name"
                                                                               required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="bankName" class="form-label">Branch
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                               name="branch_name"
                                                                               placeholder="Branch Name"
                                                                               required>
                                                                    </div>
                                                                </div>

                                                                <div class="button-row d-flex mt-4 justify-content-end">
                                                                    <button class="btn js-btn-prev"
                                                                            type="button" title="Previous"
                                                                            style="float: left; margin:5px;background-color:#111111; color:#fff">
                                                                        <i
                                                                            class="fas fa-arrow-left"></i> Previous
                                                                    </button>
                                                                    <button class="btn  btn-warning ml-auto"
                                                                            type="button" title="Send"
                                                                            style="float: right; margin:5px;">Send
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
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

    </main>
    <x-slot:js>
        <script src="{{asset('frontend-assets/js/wizard-form.js')}}">
        </script>
    </x-slot:js>
</x-frontend.layout.master>
