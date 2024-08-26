<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Travel India</title>

    <link rel="icon" type="image/x-icon" href="{{asset('frontend-assets/img/logo/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery.timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/custom-style.css')}}">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    {{ $style ?? '' }}
</head>
<body>
<div class="site-layout">
    <x-frontend.layout.header/>
    {{ $slot }}
    <x-frontend.layout.footer/>
</div>

<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
<script src="{{asset('frontend-assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/counter-up.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/main.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
@if(!auth()->check())
    <script>
        $(document).ready(function () {
            $('#sendOtpButton').click(function () {
                let mobile = $('#mobile').val().trim();
                let errorMsg = $('#loginErrorMsg');

                if (mobile.length === 10 && $.isNumeric(mobile)) {
                    $.ajax({
                        url: '{{ route('login.send-otp') }}',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: {
                            mobile: mobile
                        },
                        success: function (response) {
                            if (response.success) {
                                $('#mobileField').hide();
                                $('#otpField').show();
                                $('#sendOtpButton').hide();
                                $('#verifyOtpButton').show();
                                $('.login_description').hide();
                                $('.login_title').hide();
                                $('.otp_description').show();
                                $('.otp_verification').show();
                                errorMsg.hide().text('');
                            } else {
                                errorMsg.show().text(response.message);
                            }
                        },
                        error: function (response) {
                            let errorMessage = 'Something went wrong. Please try again.';

                            if (response.status === 404) {
                                errorMessage = response.responseJSON.message ?? errorMessage;
                            } else if (response.status === 400) {
                                errorMessage = response.responseJSON.message ?? errorMessage;
                            }

                            errorMsg.show().text(errorMessage);
                        }
                    });
                } else {
                    alert('Please enter a valid 10-digit mobile number.');
                }
            });

            $('#verifyOtpButton').click(function () {
                let mobile = $('#mobile').val();
                let otp = $('#otp').val();

                $.ajax({
                    url: '{{ route('login.verify-otp') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    data: {
                        mobile: mobile,
                        otp: otp
                    },
                    success: function (response) {
                        if (response.success) {
                            window.location.href = response.redirect;
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (response) {
                        let errorMessage = response.responseJSON?.message ?? 'Something went wrong. Please try again.';

                        if (response.status === 404 || response.status === 400) {
                            alert(errorMessage);
                        } else {
                            alert('An unexpected error occurred. Please try again.');
                        }
                    }
                });
            });

        });
    </script>
@endif
{{ $js ?? '' }}

</body>

</html>
