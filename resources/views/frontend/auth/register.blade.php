<x-frontend.layout.master>
<div class="sub-head blackish ext-low-opacity">
			<div class="bg-image" style="background-image: url(frontend-assets/images/resources/subhead-bg.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cola-head">
							<div class="head-meta">
								<h4>Register</h4>
								<p>( Create an account today. )</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="pt-5">
			<div class="container">
				<div class="main-section">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
						  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img class="tab-imags" src="{{asset('frontend-assets/./images/car-tab.png')}}" alt=""></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img class="tab-imags" src="{{asset('frontend-assets/./images/bus-tab.png')}}" alt=""></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img class="tab-imags" src="{{asset('frontend-assets/./images/truck-tab.png')}}" alt=""></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="auto-tav" data-toggle="tab" href="#auto-tav" role="tab" aria-controls="auto" aria-selected="false"><img class="tab-imags" src="{{asset('frontend-assets/./images/auto-tab.png')}}" alt=""></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="bike-tav" data-toggle="tab" href="#bike-tav" role="tab" aria-controls="bike" aria-selected="false"><img class="tab-imags" src="{{asset('frontend-assets/./images/bike-tab.png')}}" alt=""></a>
						</li>
					  </ul>
					  
					  <div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><section>
							<div class="container-reges">
								<div class="row justify-content-center">
									<div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
										<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
											<h2 id="heading">Sign Up Your vehicle Account</h2>
											<form id="msform">
												<!-- progressbar -->
												<ul id="progressbar">
													<li class="active" id="account"><strong>Owner Details</strong></li>
													<li id="personal"><strong>Owner Documants</strong></li>
													<li id="payment"><strong>Driver Details</strong></li>
													<li id="confirm"><strong>Driver Documants</strong></li>
												</ul> <!-- fieldsets -->
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Owner Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels">Enter Your no: *</label>
																<input type="text" name="phone no" placeholder="+91 000 000 0000" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">OTP:*</label>
																<input type="text" name="uname" placeholder="Enter your OTP" />
															</div>
															<div class="col-md-6">
																<div class="upload-file-main">
																	<label class="fieldlabels">upload your RC*</label>
																	<input type="file" name="uname" placeholder="Enter your RC no" />
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">Enter your vehicle RC no:*</label>
																<input type="text" name="uname" placeholder="Enter your RC no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name: *</label>
																<input type="text" name="phone no" placeholder=" your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address:*</label>
																<input type="text" name="uname" placeholder=" your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Class:*</label>
																<input type="text" name="uname" placeholder=" your Vehicle Class" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Fitness certificate :*</label>
																<input type="text" name="uname"
																	placeholder=" your Vehicle Fitness certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your PVC:*</label>
																<input type="text" name="uname" placeholder=" your PVC" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Insurance certificate:*</label>
																<input type="text" name="uname"
																	placeholder=" your Insurance certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Fule Type:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle seats:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle color:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Name:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit validate:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit upload:*</label>
																<input type="file" name="uname" placeholder=" your Fule Type" />
															</div>
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<a class="btn btn-loggg" href="./login.html">Back to login</a>
						
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Personal Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Upload your Aadhhar(Front/Back) *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																	<label class="fieldlabels"> <strong>Name as/addhaar</strong></label>
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Father Name *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
						
															<div class="col-md-12">
																<h2 class="fs-title">Enter Your Banking Details:</h2>
																<div class="row">
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your GST no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your GST no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your PAN no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your PAN no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Bank Name *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account Name." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Account NO *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Re enter Your Account NO *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your IFSC Code *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your IFSC Code " />
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and RC</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Details:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your Phone no. *</label>
																<input type="text" name="fname" placeholder="Enter Your Phone no. " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your DL No*</label>
																<input type="text" name="fname" placeholder="Enter Your DL No" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder=" Your Name " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder=" Your Address " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Validity *</label>
																<input type="text" name="fname" placeholder=" Your Validity " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Auth to Drive *</label>
																<input type="text" name="fname" placeholder=" Your Auth to Drive " />
															</div>
						
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Submit" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Documants:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
						
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder="Your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your GST no.*</label>
																<input type="text" name="fname" placeholder="Enter Your GST no." />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your PAN no.*</label>
																<input type="text" name="fname" placeholder="Enter Your PAN no." />
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and DL</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(frontend-assets/./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</section></div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><section>
							<div class="container-reges">
								<div class="row justify-content-center">
									<div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
										<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
											<h2 id="heading">Sign Up Your vehicle Account</h2>
											<form id="msform">
												<!-- progressbar -->
												<ul id="progressbar">
													<li class="active" id="account"><strong>Owner Details</strong></li>
													<li id="personal"><strong>Owner Documants</strong></li>
													<li id="payment"><strong>Driver Details</strong></li>
													<li id="confirm"><strong>Driver Documants</strong></li>
												</ul> <!-- fieldsets -->
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Owner Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels">Enter Your no: *</label>
																<input type="text" name="phone no" placeholder="+91 000 000 0000" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">OTP:*</label>
																<input type="text" name="uname" placeholder="Enter your OTP" />
															</div>
															<div class="col-md-6">
																<div class="upload-file-main">
																	<label class="fieldlabels">upload your RC*</label>
																	<input type="file" name="uname" placeholder="Enter your RC no" />
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">Enter your vehicle RC no:*</label>
																<input type="text" name="uname" placeholder="Enter your RC no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name: *</label>
																<input type="text" name="phone no" placeholder=" your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address:*</label>
																<input type="text" name="uname" placeholder=" your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Class:*</label>
																<input type="text" name="uname" placeholder=" your Vehicle Class" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Fitness certificate :*</label>
																<input type="text" name="uname"
																	placeholder=" your Vehicle Fitness certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your PVC:*</label>
																<input type="text" name="uname" placeholder=" your PVC" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Insurance certificate:*</label>
																<input type="text" name="uname"
																	placeholder=" your Insurance certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Fule Type:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle seats:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle color:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Name:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit validate:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit upload:*</label>
																<input type="file" name="uname" placeholder=" your Fule Type" />
															</div>
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<a class="btn btn-loggg" href="./login.html">Back to login</a>
						
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Personal Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Upload your Aadhhar(Front/Back) *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																	<label class="fieldlabels"> <strong>Name as/addhaar</strong></label>
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Father Name *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
						
															<div class="col-md-12">
																<h2 class="fs-title">Enter Your Banking Details:</h2>
																<div class="row">
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your GST no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your GST no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your PAN no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your PAN no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Bank Name *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account Name." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Account NO *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Re enter Your Account NO *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your IFSC Code *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your IFSC Code " />
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and RC</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Details:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your Phone no. *</label>
																<input type="text" name="fname" placeholder="Enter Your Phone no. " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your DL No*</label>
																<input type="text" name="fname" placeholder="Enter Your DL No" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder=" Your Name " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder=" Your Address " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Validity *</label>
																<input type="text" name="fname" placeholder=" Your Validity " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Auth to Drive *</label>
																<input type="text" name="fname" placeholder=" Your Auth to Drive " />
															</div>
						
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Submit" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Documants:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
						
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder="Your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your GST no.*</label>
																<input type="text" name="fname" placeholder="Enter Your GST no." />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your PAN no.*</label>
																<input type="text" name="fname" placeholder="Enter Your PAN no." />
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and DL</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</section></div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><section>
							<div class="container-reges">
								<div class="row justify-content-center">
									<div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
										<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
											<h2 id="heading">Sign Up Your vehicle Account</h2>
											<form id="msform">
												<!-- progressbar -->
												<ul id="progressbar">
													<li class="active" id="account"><strong>Owner Details</strong></li>
													<li id="personal"><strong>Owner Documants</strong></li>
													<li id="payment"><strong>Driver Details</strong></li>
													<li id="confirm"><strong>Driver Documants</strong></li>
												</ul> <!-- fieldsets -->
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Owner Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels">Enter Your no: *</label>
																<input type="text" name="phone no" placeholder="+91 000 000 0000" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">OTP:*</label>
																<input type="text" name="uname" placeholder="Enter your OTP" />
															</div>
															<div class="col-md-6">
																<div class="upload-file-main">
																	<label class="fieldlabels">upload your RC*</label>
																	<input type="file" name="uname" placeholder="Enter your RC no" />
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">Enter your vehicle RC no:*</label>
																<input type="text" name="uname" placeholder="Enter your RC no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name: *</label>
																<input type="text" name="phone no" placeholder=" your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address:*</label>
																<input type="text" name="uname" placeholder=" your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Class:*</label>
																<input type="text" name="uname" placeholder=" your Vehicle Class" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Fitness certificate :*</label>
																<input type="text" name="uname"
																	placeholder=" your Vehicle Fitness certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your PVC:*</label>
																<input type="text" name="uname" placeholder=" your PVC" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Insurance certificate:*</label>
																<input type="text" name="uname"
																	placeholder=" your Insurance certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Fule Type:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle seats:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle color:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Name:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit validate:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit upload:*</label>
																<input type="file" name="uname" placeholder=" your Fule Type" />
															</div>
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<a class="btn btn-loggg" href="./login.html">Back to login</a>
						
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Personal Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Upload your Aadhhar(Front/Back) *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																	<label class="fieldlabels"> <strong>Name as/addhaar</strong></label>
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Father Name *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
						
															<div class="col-md-12">
																<h2 class="fs-title">Enter Your Banking Details:</h2>
																<div class="row">
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your GST no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your GST no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your PAN no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your PAN no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Bank Name *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account Name." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Account NO *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Re enter Your Account NO *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your IFSC Code *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your IFSC Code " />
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and RC</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Details:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your Phone no. *</label>
																<input type="text" name="fname" placeholder="Enter Your Phone no. " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your DL No*</label>
																<input type="text" name="fname" placeholder="Enter Your DL No" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder=" Your Name " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder=" Your Address " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Validity *</label>
																<input type="text" name="fname" placeholder=" Your Validity " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Auth to Drive *</label>
																<input type="text" name="fname" placeholder=" Your Auth to Drive " />
															</div>
						
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Submit" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Documants:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
						
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder="Your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your GST no.*</label>
																<input type="text" name="fname" placeholder="Enter Your GST no." />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your PAN no.*</label>
																<input type="text" name="fname" placeholder="Enter Your PAN no." />
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and DL</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</section></div>
						<div class="tab-pane fade" id="auto-tav" role="tabpanel" aria-labelledby="auto-tab"><section>
							<div class="container-reges">
								<div class="row justify-content-center">
									<div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
										<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
											<h2 id="heading">Sign Up Your vehicle Account</h2>
											<form id="msform">
												<!-- progressbar -->
												<ul id="progressbar">
													<li class="active" id="account"><strong>Owner Details</strong></li>
													<li id="personal"><strong>Owner Documants</strong></li>
													<li id="payment"><strong>Driver Details</strong></li>
													<li id="confirm"><strong>Driver Documants</strong></li>
												</ul> <!-- fieldsets -->
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Owner Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels">Enter Your no: *</label>
																<input type="text" name="phone no" placeholder="+91 000 000 0000" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">OTP:*</label>
																<input type="text" name="uname" placeholder="Enter your OTP" />
															</div>
															<div class="col-md-6">
																<div class="upload-file-main">
																	<label class="fieldlabels">upload your RC*</label>
																	<input type="file" name="uname" placeholder="Enter your RC no" />
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">Enter your vehicle RC no:*</label>
																<input type="text" name="uname" placeholder="Enter your RC no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name: *</label>
																<input type="text" name="phone no" placeholder=" your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address:*</label>
																<input type="text" name="uname" placeholder=" your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Class:*</label>
																<input type="text" name="uname" placeholder=" your Vehicle Class" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Fitness certificate :*</label>
																<input type="text" name="uname"
																	placeholder=" your Vehicle Fitness certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your PVC:*</label>
																<input type="text" name="uname" placeholder=" your PVC" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Insurance certificate:*</label>
																<input type="text" name="uname"
																	placeholder=" your Insurance certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Fule Type:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle seats:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle color:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Name:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit validate:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit upload:*</label>
																<input type="file" name="uname" placeholder=" your Fule Type" />
															</div>
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<a class="btn btn-loggg" href="./login.html">Back to login</a>
						
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Personal Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Upload your Aadhhar(Front/Back) *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																	<label class="fieldlabels"> <strong>Name as/addhaar</strong></label>
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Father Name *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
						
															<div class="col-md-12">
																<h2 class="fs-title">Enter Your Banking Details:</h2>
																<div class="row">
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your GST no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your GST no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your PAN no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your PAN no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Bank Name *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account Name." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Account NO *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Re enter Your Account NO *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your IFSC Code *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your IFSC Code " />
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and RC</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Details:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your Phone no. *</label>
																<input type="text" name="fname" placeholder="Enter Your Phone no. " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your DL No*</label>
																<input type="text" name="fname" placeholder="Enter Your DL No" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder=" Your Name " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder=" Your Address " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Validity *</label>
																<input type="text" name="fname" placeholder=" Your Validity " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Auth to Drive *</label>
																<input type="text" name="fname" placeholder=" Your Auth to Drive " />
															</div>
						
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Submit" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Documants:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
						
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder="Your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your GST no.*</label>
																<input type="text" name="fname" placeholder="Enter Your GST no." />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your PAN no.*</label>
																<input type="text" name="fname" placeholder="Enter Your PAN no." />
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and DL</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</section></div>
						<div class="tab-pane fade" id="bike-tav" role="tabpanel" aria-labelledby="bike-tab"><section>
							<div class="container-reges">
								<div class="row justify-content-center">
									<div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
										<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
											<h2 id="heading">Sign Up Your vehicle Account</h2>
											<form id="msform">
												<!-- progressbar -->
												<ul id="progressbar">
													<li class="active" id="account"><strong>Owner Details</strong></li>
													<li id="personal"><strong>Owner Documants</strong></li>
													<li id="payment"><strong>Driver Details</strong></li>
													<li id="confirm"><strong>Driver Documants</strong></li>
												</ul> <!-- fieldsets -->
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Owner Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels">Enter Your no: *</label>
																<input type="text" name="phone no" placeholder="+91 000 000 0000" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">OTP:*</label>
																<input type="text" name="uname" placeholder="Enter your OTP" />
															</div>
															<div class="col-md-6">
																<div class="upload-file-main">
																	<label class="fieldlabels">upload your RC*</label>
																	<input type="file" name="uname" placeholder="Enter your RC no" />
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels">Enter your vehicle RC no:*</label>
																<input type="text" name="uname" placeholder="Enter your RC no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name: *</label>
																<input type="text" name="phone no" placeholder=" your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address:*</label>
																<input type="text" name="uname" placeholder=" your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Class:*</label>
																<input type="text" name="uname" placeholder=" your Vehicle Class" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Fitness certificate :*</label>
																<input type="text" name="uname"
																	placeholder=" your Vehicle Fitness certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your PVC:*</label>
																<input type="text" name="uname" placeholder=" your PVC" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Insurance certificate:*</label>
																<input type="text" name="uname"
																	placeholder=" your Insurance certificate" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Fule Type:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle seats:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle color:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Name:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit validate:*</label>
																<input type="text" name="uname" placeholder=" your Fule Type" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Vehicle Parmit upload:*</label>
																<input type="file" name="uname" placeholder=" your Fule Type" />
															</div>
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<a class="btn btn-loggg" href="./login.html">Back to login</a>
						
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Personal Information:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Upload your Aadhhar(Front/Back) *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																	<label class="fieldlabels"> <strong>Name as/addhaar</strong></label>
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Father Name *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
						
															<div class="col-md-12">
																<h2 class="fs-title">Enter Your Banking Details:</h2>
																<div class="row">
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your GST no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your GST no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your PAN no.*</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your PAN no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Bank Name *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account Name." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your Account NO *</label>
																		<input type="password" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Re enter Your Account NO *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your Account no." />
																	</div>
																	<div class="col-md-6">
																		<label class="fieldlabels"> Enter Your IFSC Code *</label>
																		<input type="text" name="fname"
																			placeholder="Enter Your IFSC Code " />
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and RC</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Next" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Details:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your Phone no. *</label>
																<input type="text" name="fname" placeholder="Enter Your Phone no. " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your DL No*</label>
																<input type="text" name="fname" placeholder="Enter Your DL No" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder=" Your Name " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder=" Your Address " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Validity *</label>
																<input type="text" name="fname" placeholder=" Your Validity " />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Auth to Drive *</label>
																<input type="text" name="fname" placeholder=" Your Auth to Drive " />
															</div>
						
						
														</div>
													</div>
													<input type="button" name="next" class="next action-button" value="Submit" />
													<input type="button" name="previous" class="previous action-button-previous"
														value="Previous" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<div class="row">
															<div class="col-7">
																<h2 class="fs-title">Driver Documants:</h2>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Whatsapp no *</label>
																<input type="text" name="fname" placeholder="Enter your Whatsapp no" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Email ID*</label>
																<input type="email" name="fname" placeholder="Enter your Email Id" />
															</div>
						
															<div class="col-md-12">
																<div class="aadhar-img">
																	<img src="{{asset('frontend-assets/./images/user-icn.png')}}" alt="">
																</div>
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter your Aadhhar *</label>
																<input type="text" name="fname" placeholder="Enter your Aadhaar" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Name *</label>
																<input type="text" name="fname" placeholder="Your Name" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your Address *</label>
																<input type="text" name="fname" placeholder="Your Address" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Your D.O.B *</label>
																<input type="text" name="fname" placeholder="Your D.O.B" />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your GST no.*</label>
																<input type="text" name="fname" placeholder="Enter Your GST no." />
															</div>
															<div class="col-md-6">
																<label class="fieldlabels"> Enter Your PAN no.*</label>
																<input type="text" name="fname" placeholder="Enter Your PAN no." />
															</div>
															<div class="col-md-12">
																<p class="main-head-frmm">Please capture Your selfi image with your
																	Aadhaar and DL</p>
																<div class="row">
																	<div class="col-md-6">
																		<div class="selfe-docc">
																			<img src="{{asset('frontend-assets/./images/doc-selfe.webp')}}" alt="">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload"
																					accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview"
																					style="background-image: url(./images/user-icn.png);">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
						
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</section></div>
					  </div>
				</div>
			</div>
		</section>
</x-frontend.layout.master>