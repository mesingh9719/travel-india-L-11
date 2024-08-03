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
                <div
                    class="col-lg-8 mx-auto ct-bg signup-form col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-wizard">

                    <!-- Form Wizard -->
                    <form role="form" action="" method="post">

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
                                <p>Contact</p>
                            </div>
                            <!-- Step 2 -->

                            <!-- Step 3 -->
                            <!-- <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-address-book" aria-hidden="true"></i>
                                </div>
                                <p>Driver Details</p>
                            </div> -->
                            <!-- Step 3 -->

                            <!-- Step 4 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-file" aria-hidden="true"></i></div>
                                <p>Document</p>
                            </div>
                            <!-- Step 4 -->
                        </div>
                        <!-- Form progress -->


                        <!-- Form Step 1 -->
                         <fieldset>

                            <h4>Personal Information: <span></span></h4>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>First Name: <span>*</span></label>
                                    <input type="text" name="First Name" placeholder="First Name"
                                        class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name: <span>*</span></label>
                                    <input type="text" name="Last Name" placeholder="Last Name"
                                        class="form-control required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Father Name: <span>*</span></label>
                                    <input type="text" name="Father Name" placeholder="Last Name" class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Maratial Status: </label>
                                    <select class="form-control">
                                        <option value="">Select Status ...</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Un-Married">Un-Married</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>
                          
                            
                        
                            <div class="row">
                            <div class="form-group col-lg-6">
                            <label> Gender: <span>*</span></label><br >
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" checked>
                                <label class="form-check-label" for="inlineRadio1">
                                    Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                                    <label class="form-check-label" for="inlineRadio2">
                                        Female</label>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                            <label>Date Of Birth: <span>*</span></label>
                            <input class="form-control" type="date" placeholder="Your Name">
                            </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Aadher Card: <span>*</span></label>
                                    <input type="text" name="aadher_number" placeholder="Aadher Number" class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Pan Card: <span>*</span></label>
                                    <input type="text" name="pan_number" placeholder="Pan Number" class="form-control required">
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

                            <h4>Contact Information : <span></span></h4>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Email: <span>*</span></label>
                                    <input type="email" name="Email" placeholder="Email" class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone: <span>*</span></label>
                                    <input type="text" name="Phone" placeholder="Phone" class="form-control required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Whatsapp Number: <span>*</span></label>
                                    <input type="text" name="whatsapp_number" placeholder="Whatsapp Number" class="form-control required">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>City: <span>*</span></label>
                                    <input type="text" name="City" placeholder="City" class="form-control required">
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label>State: <span>*</span></label>
                                <input type="text" name="State" placeholder="State" class="form-control required">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Country: </label>
                                <select class="form-control">
                                    <option>Australia</option>
                                    <option>America</option>
                                    <option>Bangladesh</option>
                                    <option>Canada</option>
                                    <option>England</option>
                                </select>
                            </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Zip Code: <span>*</span></label>
                                    <input type="text" name="Zip Code" placeholder="Zip Code" class="form-control required">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Address: <span>*</span></label>
                                    <textarea id="w3review" name="w3review" rows="4" cols="50">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous mt-2"><i class="fa fa-arrow-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </fieldset> 
                       

                        <!-- Form Step 3 -->
                        <!-- <fieldset>

                           
                           
                            <br/>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous mt-2"><i class="fa fa-arrow-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </fieldset>  -->
                        <!-- Form Step 3 -->

                        <!-- Form Step 4 -->
                        <fieldset>
                        <h4>Upload Documents: <span></span></h4>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Upload front side of Aadhar Card: <span>*</span></label>
                                    <input class="input file" type="file" name="aadhar_image_front" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                                <div class="form-group col-lg-6">
                                <label>Upload Back side of Aadhar Card: <span>*</span></label>
	                            <input class="input file" type="file" name="aadhar_image_back" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                            </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Upload Front side of Pan Card: <span>*</span></label>
                                    <input class="input file" type="file" name="pan_image_front" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Upload Profile Picture: <span>*</span></label>
                                    <input class="input file" type="file" name="profile_picture" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Upload Driving Licence: <span>*</span></label>
                                    <input class="input file" type="file" name="dl_image" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required>
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
