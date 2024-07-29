<x-admin.guest-layout>
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
            <div class="edit-profile">
                <div class="edit-profile__logos">
                    <a href="{{ route('admin.login') }}">
                        <img class="dark" src="{{ asset('frontend-assets/images/ti-temp-logo.png') }}" alt="">
                        <img class="light" src="{{ asset('frontend-assets/images/ti-temp-logo.png') }}" alt="">
                    </a>
                </div>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="edit-profile__title">
                            <h6>Sign in Admin</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.login.post') }}">
                            @csrf
                            <div class="edit-profile__body">
                                @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ session('error') }}</strong>
                                        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="form-group mb-25">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                                </div>
                                <div class="form-group mb-15">
                                    <label for="password-field">password</label>
                                    <div class="position-relative">
                                        <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                        <div class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-condition">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                        <input class="checkbox" type="checkbox" id="check-1">
                                        <label for="check-1">
                                            <span class="checkbox-text">Keep me logged in</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                        sign in
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End: .card-body -->

                </div><!-- End: .card -->
            </div><!-- End: .edit-profile -->
        </div><!-- End: .col-xl-5 -->
    </div>
</x-admin.guest-layout>
