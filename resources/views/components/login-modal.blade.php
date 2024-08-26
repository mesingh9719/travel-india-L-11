<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4"
                 style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                <div class="text-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text-center mb-4">
                    <img src="{{ asset('images/ti-temp-logo.png1722407367.png') }}" alt="logo" class="img-fluid"
                         style="max-width: 150px;">
                </div>
                <div class="login_title">
                    <h4 class="sub-title border-bottom pb-3 mb-4 text-center" style="color: #333; font-size: 1.5rem;">
                        Login</h4>
                </div>
                <div class="otp_verification" style="display: none;">
                    <h4 class="sub-title border-bottom pb-3 mb-4 text-center" style="color: #333; font-size: 1.5rem;">
                        OTP Verification</h4>
                </div>

                <div class="login_description">
                    <p class="text-center" style="color: #6c757d; font-size: 1rem; margin-bottom: 20px;">
                        Welcome back! Please enter your mobile number to receive an OTP and access your account. If you
                        don't have an account, you can <a href="{{ route('register.create') }}" style="color: #007bff;">sign
                            up here</a>.
                    </p>
                </div>
                <div class="otp_description" style="display: none;">
                    <p class="text-center" style="color: #6c757d; font-size: 1rem; margin-bottom: 20px;">
                        Please enter the OTP sent to your mobile number to verify your account.
                    </p>
                </div>
                <div>
                    <div class="alert alert-danger" id="loginErrorMsg" style="display: none;"></div>
                </div>
                <form id="loginForm">
                    <div class="mb-3">
                        <div id="mobileField">
                            <label for="mobile" class="form-label" style="font-weight: bold;">Mobile</label>
                            <input id="mobile" class="form-control" type="tel" name="mobile" placeholder="Mobile *"
                                   style="border-radius: 8px; border: 1px solid #ced4da;">
                        </div>
                        <div id="otpField" style="display: none;">
                            <label for="otp" class="form-label mt-3" style="font-weight: bold;">OTP</label>
                            <input id="otp" class="form-control" type="text" name="otp" placeholder="OTP *"
                                   style="border-radius: 8px; border: 1px solid #ced4da;">
                        </div>
                    </div>
                    <button type="button" id="sendOtpButton" class="btn btn-primary w-100"
                            style="border-radius: 8px; padding: 10px; background-color: #007bff; border: none;">
                        Send OTP
                    </button>
                    <button type="button" id="verifyOtpButton" class="btn btn-primary w-100" style="border-radius: 8px; padding: 10px; background-color: #007bff; border: none; display: none;">
                        Verify OTP
                    </button>
                    <p class="mt-3 text-center" style="color: #6c757d;">Don't have an account? <a
                            href="{{ route('register.create') }}" style="color: #007bff;">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

