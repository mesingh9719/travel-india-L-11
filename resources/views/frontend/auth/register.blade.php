<x-frontend.layout.master>
    <x-slot:style>
        <link rel="stylesheet" href="{{asset('frontend-assets/css/wizard-form.css')}}">
    </x-slot:style>
    <main class="main">
        <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/01.jpg') }}')">
            <div class="container">
                <h2 class="breadcrumb-title">Register</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
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
                                                    @session('success')
                                                    <div class="alert alert-success" role="alert">
                                                        {{ $value }}
                                                    </div>
                                                    @endsession
                                                    @session('error')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $value }}
                                                    </div>
                                                    @endsession


                                                    <!-- Way 1: Display All Error Messages -->
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <strong>Whoops!</strong> There were some problems with your
                                                        input.<br><br>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    <form class="multisteps-form__form" method="post"
                                                        action="{{route('register.store')}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <!--single form panel-->
                                                        <div class="multisteps-form__panel p-4 rounded bg-white js-active step"
                                                            id="step1" data-animation=" slideHorz">

                                                            <div class="multisteps-form__content">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <x-user-type />
                                                                        <span id="userTypeError" class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group required mb-2">
                                                                            <label>Full Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="full_name" id="full_name"
                                                                                value="{{ old('full_name') }}"
                                                                                placeholder="Your Name" maxlength="20">
                                                                            <i class="far fa-user"></i>
                                                                        </div>
                                                                        <span id="nameError" class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group required mb-2">
                                                                            <label>Phone Number</label>
                                                                            <input type="text" class="form-control"
                                                                                name="mobile" id="mobileNumber"
                                                                                value="{{ old('mobile') }}"
                                                                                placeholder="Your Phone" maxlength="11">
                                                                            <i class="far fa-phone"></i>
                                                                        </div>
                                                                        <span id="mobileError" class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-2">
                                                                            <label>Alternate Mobile Number</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Alternate Mobile Number"
                                                                                name="alternate_Mobile" maxlength="11"
                                                                                id="alternate_Mobile"
                                                                                value="{{ old('alternate_Mobile') }}">
                                                                            <i class="far fa-phone"></i>
                                                                        </div>
                                                                        <span id="alternateMobileError"
                                                                            class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group mb-2">
                                                                            <label>Business Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="business_name"
                                                                                placeholder="Business Name"
                                                                                maxlength="30">
                                                                            <i class="fas fa-building"></i>
                                                                        </div>
                                                                        <span id="businessError" class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group mb-2">
                                                                            <label for="state">State</label>
                                                                            <input type="text" id="business_state"
                                                                                name="business_state"
                                                                                value="{{ old('business_state') }}"
                                                                                class="form-control"
                                                                                placeholder="Business State"
                                                                                maxlength="20">
                                                                        </div>
                                                                        <span id="businameStateError"
                                                                            class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group mb-2">
                                                                            <label for="city">City:</label>
                                                                            <input type="text" id="business_city"
                                                                                name="business_city"
                                                                                value="{{ old('business_city') }}"
                                                                                class="form-control"
                                                                                placeholder="Business City"
                                                                                maxlength="20">
                                                                        </div>
                                                                        <span id="businameCityError"
                                                                            class="error"></span>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="form-group mb-2">
                                                                            <label for="zip">ZIP Code:</label>
                                                                            <input type="text" id="business_zip"
                                                                                name="business_zip"
                                                                                value="{{ old('business_zip') }}"
                                                                                class="form-control"
                                                                                placeholder="Business zip Code"
                                                                                maxlength="10">
                                                                        </div>
                                                                        <span id="businameZipError"
                                                                            class="error"></span>
                                                                    </div>


                                                                    <div class="col-lg-12">
                                                                        <div class="form-group mb-2">
                                                                            <label>Business Address</label>
                                                                            <textarea class="form-control" rows="2"
                                                                                name="business_address"
                                                                                id="business_address"
                                                                                placeholder="Enter your Business Address"
                                                                                maxlength="200">{{ old('business_address') }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check mb-2">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="same_as_business"
                                                                                id="same_as_business" value="1"
                                                                                {{ old('same_as_business') ? 'checked' : '' }}
                                                                                onchange="getCheckboxValue()">
                                                                            <label class="form-check-label"
                                                                                for="same_as_business">
                                                                                Same as Business Address
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group required mb-2">
                                                                            <label for="state">State</label>
                                                                            <input type="text" id="home_state"
                                                                                name="home_state"
                                                                                value="{{ old('home_state') }}"
                                                                                class="form-control" placeholder="State"
                                                                                maxlength="20">
                                                                        </div>
                                                                        <span id="stateError" class="error"></span>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group required mb-2">
                                                                            <label for="city">City</label>
                                                                            <input type="text" id="home_city"
                                                                                name="home_city"
                                                                                value="{{ old('home_city') }}"
                                                                                class="form-control" placeholder="City"
                                                                                maxlength="20">
                                                                        </div>
                                                                        <span id="cityError" class="error"></span>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="form-group required mb-2">
                                                                            <label for="zip">ZIP Code</label>
                                                                            <input type="text" id="home_zip"
                                                                                name="home_zip"
                                                                                value="{{ old('home_zip') }}"
                                                                                class="form-control"
                                                                                placeholder="ZIP Code" maxlength="20">
                                                                        </div>
                                                                        <span id="zipError" class="error"></span>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="form-group required mb-2">
                                                                            <label>Home Address</label>
                                                                            <textarea class="form-control" rows="2"
                                                                                name="home_address" id="home_address"
                                                                                placeholder="Enter your Home Address"
                                                                                maxlength="200">{{ old('home_address') }}</textarea>
                                                                        </div>
                                                                        <span id="addressError" class="error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="button-row d-flex mt-4 justify-content-end">
                                                                    <button
                                                                        class="btn  btn-warning ml-auto js-btn-next nav-right-btn mt-2 Next_id"
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
                                                                            <div class="form-group required mb-2">
                                                                                <label>Pan Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="pan_number" id="pan_number"
                                                                                    value="{{ old('pan_number') }}"
                                                                                    placeholder="pan Number"
                                                                                    maxlength="10">
                                                                            </div>
                                                                            <span id="panError" class="error"></span>

                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group required mb-2">
                                                                                <label>Upload Pan card</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="pan_image" id="pan_image"
                                                                                    value="{{ old('pan_image') }}"
                                                                                    placeholder="pan Number">
                                                                            </div>
                                                                            <span id="panImageError"
                                                                                class="error"></span>
                                                                        </div>

                                                                        <div class="col-lg-4">
                                                                            <div class="form-group required mb-2">
                                                                                <label>Aadhar Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="aadhar_number"
                                                                                    id="aadhar_number"
                                                                                    value="{{ old('aadhar_number') }}"
                                                                                    placeholder="Aadhar Number"
                                                                                    maxlength="12">
                                                                            </div>
                                                                            <span id="aadharError" class="error"></span>
                                                                        </div>


                                                                        <div class="col-lg-4">
                                                                            <div class="form-group required mb-2">
                                                                                <label>Aadhar Front</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="aadhar_image_front"
                                                                                    id="aadhar_image_front"
                                                                                    placeholder="pan Number">
                                                                            </div>
                                                                            <span id="aadharfrontError"
                                                                                class="error"></span>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group required mb-2">
                                                                                <label>Aadhar Back</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="aadhar_image_back"
                                                                                    id="aadhar_image_back"
                                                                                    placeholder="pan Number">

                                                                            </div>
                                                                            <span id="aadharbackError"
                                                                                class="error"></span>
                                                                        </div>


                                                                        <div class="col-lg-6">
                                                                            <div class="form-group required mb-2">
                                                                                <label>DL Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="dl_number" id="dl_number"
                                                                                    value="{{ old('dl_number') }}"
                                                                                    placeholder="DL Number"
                                                                                    maxlength="15">
                                                                            </div>

                                                                            <span id="dlError" class="error"></span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group required mb-2">
                                                                                <label>Upload Driving
                                                                                    License</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="dl_image" id="dl_image">
                                                                            </div>
                                                                            <span id="dlImageError"
                                                                                class="error"></span>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group mb-2">
                                                                                <label>GST Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="gst_number"
                                                                                    value="{{ old('gst_number') }}"
                                                                                    placeholder="GST Number"
                                                                                    maxlength="15">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 mt-2">
                                                                            <label>Capture Selfie<span class="text-danger">*</span></label>
                                                                            <br />
                                                                            <div class="d-flex  mt-2" id="open_camara">

                                                                            </div>
                                                                            <div class="d-flex  mt-2">
                                                                                <p id="camara"
                                                                                    class="btn btn-warning d-inline mr-2"
                                                                                    style="display:block">
                                                                                    <i class="fa fa-camera"
                                                                                        aria-hidden="true"></i>
                                                                                </p>
                                                                                <p id="capture"
                                                                                    class="btn btn-warning d-inline">
                                                                                    Capture</p>
                                                                            </div>
                                                                            <input type="hidden" name="selfie_image"
                                                                                id="imageData">
                                                                                <span id="selfieImageError"
                                                                                class="error"></span>
                                                                        </div>
                                                                        <div class="col-lg-5 mt-2 hideVideo" id="profile_image_id">
                                                                            <div class="form-group required mb-2">
                                                                                <label>Profile Picture</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="profile_image" id="profile_image">
                                                                            </div>
                                                                            <span id="profileImageError"
                                                                                class="error"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="button-row d-flex mt-4 justify-content-end">
                                                                        <button class="btn  js-btn-prev ml-auto"
                                                                            type="button" title="Previous"
                                                                            style="float: left; margin:5px;background-color:#111111; color:#fff">
                                                                            <i class="fas fa-arrow-left"></i> Previous
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
                                                                    <div class="form-group col-lg-5 required mb-2">
                                                                        <label>RC
                                                                            Number</label><input type="text"
                                                                            name="rc_number[]" placeholder="RC Number"
                                                                            value="{{ old('rc_number.0') }}"
                                                                            class="form-control rc_number"
                                                                            maxlength="15">

                                                                        <span id="rcError0"
                                                                            class="error rc_number_error"></span>
                                                                    </div>
                                                                    <!-- <span id="rcError" class="error"></span> -->
                                                                    <div class="form-group col-lg-5 required mb-2">
                                                                        <label>Upload
                                                                            RC</label><input
                                                                            class="form-control rc_image" type="file"
                                                                            name="rc_image_front[]"
                                                                            aria-label="File browser"
                                                                            accept="image/*, .jpg, .png, .bmp, .heif, .svg">
                                                                        <span id="rcimagefrontError0"
                                                                            class="error rc_image_error"></span>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mt-4 required">
                                                                        <button type="button" name="add" id="add"
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
                                                                            <i class="fas fa-arrow-left"></i> Previous
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
                                                                            name="account_holder_name"
                                                                            value="{{old('account_holder_name')}}"
                                                                            placeholder="Account Holder Name"
                                                                            maxlength="20">
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="accountNumber"
                                                                            class="form-label">Account Number</label>
                                                                        <input type="text" class="form-control"
                                                                            id="account_number" name="account_number"
                                                                            value="{{ old('account_number') }}"
                                                                            placeholder="Account Number" maxlength="20">
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="routingNumber"
                                                                            class="form-label">IFSC Code</label>
                                                                        <input type="text" class="form-control"
                                                                            id="ifsc_code" name="ifsc_code"
                                                                            value="{{ old('ifsc_code') }}"
                                                                            placeholder="IFSC Code" maxlength="11">
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="bankName" class="form-label">Bank
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="bank_name" id="bank_name"
                                                                            value="{{ old('bank_name') }}"
                                                                            placeholder="Bank Name" maxlength="30">
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="bankName" class="form-label">Branch
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="branch_name" id="branch_name"
                                                                            value="{{ old('branch_name') }}"
                                                                            placeholder="Branch Name" maxlength="30">
                                                                    </div>
                                                                </div>

                                                                <div class="button-row d-flex mt-4 justify-content-end">
                                                                    <button class="btn js-btn-prev" type="button"
                                                                        title="Previous"
                                                                        style="float: left; margin:5px;background-color:#111111; color:#fff">
                                                                        <i class="fas fa-arrow-left"></i> Previous
                                                                    </button>
                                                                    <button class="btn  btn-warning ml-auto"
                                                                        type="submit" title="Send"
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