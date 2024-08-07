<x-frontend.layout.master>
    <link rel="stylesheet" href="{{asset('frontend-assets/css/wizard-form.css')}}">
    <section class="promo-sec"
             style="background: url('frontend-assets/images/promo-bg.jpg')no-repeat center center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap text-center">
                        <h2 class="fw-7 text-white text-uppercase">create account</h2>
                        <nav aria-label="breadcrumb w-75 mx-auto">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">sign up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="main sec-padding my-account">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto ct-bg signup-form col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-wizard">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Form Wizard -->
                    <form role="form" action="{{url('/register')}}" method="post" enctype= multipart/form-data>
                    @csrf
                        <h3>Owner/Driver Registration</h3>
                        <p>Fill all form field to go next step</p>

                        <!-- Form progress -->
                        <div class="form-wizard-steps form-wizard-tolal-steps-4">
                            <div class="form-wizard-progress">
                                <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4"
                                     style="width: 12.25%;"></div>
                            </div>
                            <!-- Step 1 -->
                            <div class="form-wizard-step active">
                                <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <p>Personal</p>
                            </div>
                            <!-- Step 1 -->

                            <!-- Step 2 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-location-arrow"
                                                                      aria-hidden="true"></i></div>
                                <p>Vehicle</p>
                            </div>
                            <!-- Step 2 -->

                            <!-- Step 4 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-file" aria-hidden="true"></i></div>
                                <p>Bank</p>
                            </div>
                            <!-- Step 4 -->
                        </div>
                        <!-- Form progress -->


                        <!-- Form Step 1 -->
                         <fieldset>

                            <h4>Personal Information: <span></span></h4>
                             <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Full Name: <span>*</span></label>
                                    <input type="text" name="full_Name" placeholder="Full Name"
                                        class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Mobile Number: <span>*</span></label>
                                    <input type="text" name="mobile_number" placeholder="Mobile Number"
                                        class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Alternate Mobile Number: <span>*</span></label>
                                    <input type="text" name="full_Name" placeholder="Alternate Mobile Number"
                                        class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Business Name: <span>*</span></label>
                                    <input type="text" name="Last Name" placeholder="Business Name"
                                        class="form-control required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Business Address: <span>*</span></label>
                                    <textarea id="business_address" name="business_address" rows="2" cols="50"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="same_as_business" onchange="getCheckboxValue()">
                                        <label class="form-check-label" for="same_as_business">
                                            Same as Business Address
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Home Address: <span>*</span></label>
                                    <textarea id="home_address" name="home_address" rows="2" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>GST Number: <span>*</span></label>
                                    <input type="text" name="gst_number" placeholder="GST Number" class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Pan Card: <span>*</span></label>
                                    <input type="text" name="pan_number" placeholder="Pan Number" class="form-control required">
                                 </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                    <label>Upload Pan Card: <span>*</span></label>
                                    <input class="input file" type="file" name="pan_image" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Aadher Card: <span>*</span></label>
                                    <input type="text" name="aadher_number" placeholder="Aadher Number" class="form-control required">
                                </div>
                                 <div class="form-group col-lg-6">
                                    <label>Upload front side of Aadhar Card: <span>*</span></label>
                                    <input class="input file" type="file" name="aadhar_image_front" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                                <div class="form-group col-lg-6">
                                <label>Upload Back side of Aadhar Card: <span>*</span></label>
	                            <input class="input file" type="file" name="aadhar_image_back" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                                <div class="form-group col-lg-12">
                                <label>Upload profile Picture: <span>*</span></label>
	                            <input class="input file" type="file" name="profie_image" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                            </div>
                            
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </fieldset> 
                        <!-- Form Step 1 -->

                        <!-- Form Step 2 -->
                        <fieldset>
                            <h4>Vehicle Details : <span></span></h4>
                            <div class="row" id="dynamic_field">
                                <div class="form-group col-lg-5">
                                    <label>RC Number: <span>*</span></label>
                                    <input type="text" name="rc_number[]" placeholder="RC Number" class="form-control required">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label>Upload RC: <span>*</span></label>
                                    <input class="input file" type="file" name="rc_image[]" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                                <div class="form-group col-lg-2 mt-4">
                                <button type="button" name="add" id="add" class="btn btn-primary mt-4">+</button></div>
                            </div>
                            <div class="form-wizard-buttons mt-2">
                                <button type="button" class="btn btn-previous mt-2"><i class="fa fa-arrow-left"></i> Previous</button>
                                <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </fieldset> 
                       

                        <!-- Form Step 3 -->
                      

                        <!-- Form Step 4 -->
                        <fieldset>
                        <h4>Bank Details: <span></span></h4>
                           
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="accountHolderName" class="form-label">Account Holder Name</label>
                                <input type="text" class="form-control" id="account_holder_name" placeholder="Account Holder Name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="accountNumber" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="account_number" placeholder="Account Number" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="routingNumber" class="form-label">IFSC Code</label>
                                <input type="text" class="form-control" id="ifsc_code" placeholder="IFSC Code" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="bankName" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Bank Name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="bankName" class="form-label">Branch Name</label>
                                <input type="text" class="form-control" name="branch_name" placeholder="Branch Name" required>
                            </div>
                            </div>
                            <br/>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">
                                <i class="fa fa-arrow-left"></i>     
                                Previous</button>
                                <button type="submit" class="btn btn-submit">Submit</button>
                            </div>
                        </fieldset>
                        <!-- Form Step 4 -->

                    </form>
                    <!-- Form Wizard -->
                </div>
            </div>
    </main>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('frontend-assets/js/wizard-form.js')}}"></script>
</x-frontend.layout.master>
