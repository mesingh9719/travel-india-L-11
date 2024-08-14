<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4" style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                <div class="text-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text-center mb-4">
                    <img src="{{ asset('images/ti-temp-logo.png1722407367.png') }}" alt="logo" class="img-fluid" style="max-width: 150px;">
                </div>
                <h4 class="sub-title border-bottom pb-3 mb-4 text-center" style="color: #333; font-size: 1.5rem;">Login</h4>
                <p class="text-center" style="color: #6c757d; font-size: 1rem; margin-bottom: 20px;">
                    Welcome back! Please enter your mobile number to receive an OTP and access your account. If you don't have an account, you can <a href="{{ route('register.create') }}" style="color: #007bff;">sign up here</a>.
                </p>
                <form>
                    <div class="mb-3">
                        <label for="mobile" class="form-label" style="font-weight: bold;">Mobile</label>
                        <input id="mobile" class="form-control" type="tel" name="mobile" placeholder="Mobile *" style="border-radius: 8px; border: 1px solid #ced4da;">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="border-radius: 8px; padding: 10px; background-color: #007bff; border: none;">Send OTP</button>
                    <p class="mt-3 text-center" style="color: #6c757d;">Don't have an account? <a href="{{ route('register.create') }}" style="color: #007bff;">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
