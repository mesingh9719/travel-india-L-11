<x-frontend.layout.master>
<section>
			<div class="container-login" id="container-login">
				<div class="form-container sign-in-container">
					<form action="#">
						<h1>Sign in</h1>
						<div class="social-container">
							<a href="#" class="social"><img src="{{asset('frontend-assets/./images/icn-socil/317752_facebook_social media_social_icon.png')}}" alt=""></a>
							<a href="#" class="social"><img src="{{asset('frontend-assets/./images/icn-socil/png-clipart-logo-icon-instagram-logo-instagram-logo-purple-violet.png
                        ')}}" alt=""></a>
							<a href="#" class="social"><img src="{{asset('frontend-assets/./images/icn-socil/png-clipart-whatsapp-application-software-message-icon-whatsapp-logo-whats-app-logo-logo-grass.png')}}" alt=""></a>
						</div>
						<span>or use your account</span>
						<input type="email" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<a href="#">Forgot your password?</a>
						<button>Sign In</button>
					</form>
					<span class="cmmn-imgg"><img src="{{asset('frontend-assets/./images/resources/footer-mockup.png')}}" alt=""></span>
				</div>
				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-right sifn-rajis">
							<h1>Hello, Friend!</h1>
							<p>Enter your personal details and start journey with us</p>
							<a href="{{url('/register')}}" class="ghost"  >Sign Up</a>

						</div>
					</div>
					<span class="cmmn-imgg2"><img src="{{asset('frontend-assets/./images/resources/footer-mockup.png')}}" alt=""></span>
				</div>
			</div>
		</section>

		<section>
			<div class="space no-space dark-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="servize">
								<i class="flaticon-placeholder"></i>
								<div class="serviz-meta">
									<span>Tucson, AZ 80210: 501 Lane</span>
									<i>Canada</i>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="servize">
								<i class="flaticon-24-hours-1"></i>
								<div class="serviz-meta">
									<span>Tool free number 24/7</span>
									<i>+1-111-222-333</i>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="servize">
								<i class="flaticon-24-hours"></i>
								<div class="serviz-meta">
									<span>Full time services</span>
									<i>24/7</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- footer top -->
</x-frontend.layout.master>