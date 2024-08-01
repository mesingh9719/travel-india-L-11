<x-frontend.layout.master>

<link rel="stylesheet" href="{{asset('frontend-assets/css/wizard-form.css')}}">
<section class="promo-sec" style="background: url('frontend-assets/images/promo-bg.jpg')no-repeat center center / cover;">
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
<div class="col-lg-5 bg-cover" style="background-image: url('frontend-assets/images/account.jpg');">
</div>
                    <div class="col-lg-7 ct-bg signup-form col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-wizard">
					
						<!-- Form Wizard -->
                    	<form role="form" action="" method="post">

                    		<h3>Owner/Driver Registration</h3>
                    		<p>Fill all form field to go next step</p>
							
							<!-- Form progress -->
                    		<div class="form-wizard-steps form-wizard-tolal-steps-4">
                    			<div class="form-wizard-progress">
                    			    <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                    			</div>
								<!-- Step 1 -->
                    			<div class="form-wizard-step active">
                    				<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    				<p>Personal</p>
                    			</div>
								<!-- Step 1 -->
								
								<!-- Step 2 -->
                    			<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                    				<p>Contact</p>
                    			</div>
								<!-- Step 2 -->
								
								<!-- Step 3 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-address-book" aria-hidden="true"></i></div>
                    				<p>Driver Details</p>
                    			</div>
								<!-- Step 3 -->
								
								<!-- Step 4 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    				<p>Vehicle Details</p>
                    			</div>
								<!-- Step 4 -->
                    		</div>
							<!-- Form progress -->
                    		
							
							<!-- Form Step 1 -->
                    		<fieldset>

                    		    <h4>Personal Information: <span>Step 1 - 4</span></h4>
								<div class="form-group">
                    			    <label>First Name: <span>*</span></label>
                                    <input type="text" name="First Name" placeholder="First Name" class="form-control required">
                                </div>
                                <div class="form-group">
                    			    <label>Last Name: <span>*</span></label>
                                    <input type="text" name="Last Name" placeholder="Last Name" class="form-control required">
                                </div>
								
								<div class="container-fluid">
								<div class="row form-inline">
								<div class="form-group col-md-3 col-xs-3">
                                    <label>Date Of Birth: </label>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Date: </label>
                                    <select class="form-control">
									  <option>01</option>
									  <option>02</option>
									  <option>03</option>
									  <option>04</option>
									  <option>05</option>
									</select>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Month: </label>
                                    <select class="form-control">
									  <option>Jan</option>
									  <option>Feb</option>
									  <option>Mar</option>
									  <option>Apr</option>
									  <option>May</option>
									</select>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Year: </label>
                                    <select class="form-control">
									  <option>2017</option>
									  <option>2018</option>
									  <option>2019</option>
									  <option>2020</option>
									  <option>2021</option>
									</select>
								</div>
                                </div>
								</div>
								<div class="form-group">
                    			    <label>Maratial Status: </label>
                                    <select class="form-control">
										<option value="">Select Status ...</option>
										<option value="Married">Married</option>
										<option value="Divorced">Divorced</option>
										<option value="Un-Married">Un-Married</option>
										<option value="Widowed">Widowed</option>
									</select>
                                </div>
                                <div class="form-group">
                    			    <label>User Name: <span>*</span></label>
                                    <input type="text" name="Username" placeholder="User Name" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>Password: <span>*</span></label>
                                    <input type="password" name="Password" placeholder="User Password" class="form-control required">
                                </div>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </fieldset>
							<!-- Form Step 1 -->

							<!-- Form Step 2 -->
                            <fieldset>

                                <h4>Contact Information : <span>Step 2 - 4</span></h4>
								<div class="form-group">
                    			    <label>Email: <span>*</span></label>
                                    <input type="email" name="Email" placeholder="Email" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>Phone: <span>*</span></label>
                                    <input type="text" name="Phone" placeholder="Phone" class="form-control required">
                                </div>
                                <div class="form-group">
                    			    <label>Address: <span>*</span></label>
                                    <input type="text" name="Address" placeholder="Address" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>Zip Code: <span>*</span></label>
                                    <input type="text" name="Zip Code" placeholder="Zip Code" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>City: <span>*</span></label>
                                    <input type="text" name="City" placeholder="City" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>State: <span>*</span></label>
                                    <input type="text" name="State" placeholder="State" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>Country: </label>
                                    <select class="form-control">
									  <option>Australia</option>
									  <option>America</option>
									  <option>Bangladesh</option>
									  <option>Canada</option>
									  <option>England</option>
									</select>
                                </div>
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous mt-2"><i class="fa fa-arrow-left"></i> Previous</button>
                                    <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </fieldset>
							<!-- Form Step 2 -->

							<!-- Form Step 3 -->
                            <fieldset>

                                <h4>Official Information: <span>Step 3 - 4</span></h4>
								<div class="form-group">
                    			    <label>Employee ID: <span>*</span></label>
                                    <input type="text" name="Employee ID" placeholder="Employee ID" class="form-control required">
                                </div>
                                <div class="form-group">
                    			    <label>Designation: <span>*</span></label>
                                    <input type="text" name="Designation" placeholder="Designation" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>Department: <span>*</span></label>
                                    <input type="text" name="Department" placeholder="Department" class="form-control required">
                                </div>
								<div class="form-group">
                    			    <label>Working Hours: <span>*</span></label>
                                    <input type="text" name="Working Hours" placeholder="Working Hours" class="form-control required">
                                </div>
								<div class="container-fluid">
								<div class="row form-inline">
								<div class="form-group col-md-3 col-xs-3">
									<label>Joining Date: </label>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Day: </label>
                                    <select class="form-control">
									  <option>01</option>
									  <option>02</option>
									  <option>03</option>
									  <option>04</option>
									  <option>05</option>
									</select>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Month: </label>
                                    <select class="form-control">
									  <option>Jan</option>
									  <option>Feb</option>
									  <option>Mar</option>
									  <option>Apr</option>
									  <option>May</option>
									</select>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Year: </label>
                                    <select class="form-control">
									  <option>2017</option>
									  <option>2018</option>
									  <option>2019</option>
									  <option>2020</option>
									  <option>2021</option>
									</select>
								</div>
                                </div>
								</div>
								<br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous mt-2"><i class="fa fa-arrow-left"></i> Previous</button>
                                    <button type="button" class="btn btn-next mt-2">Next <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </fieldset>
							<!-- Form Step 3 -->
							
							<!-- Form Step 4 -->
							<fieldset>

                                <h4>Payment Information: <span>Step 4 - 4</span></h4>
								<div style="clear:both;"></div>
								<div class="form-group">
                    			    <label>Bank Name: <span>*</span></label>
                                    <input type="text" name="Bank Name" placeholder="Bank Name" class="form-control required">
                                </div>
                    			<div class="form-group">
                    			    <label>Payment Type : </label>
                                    <label class="radio-inline">
									  <input type="radio" name="Payment" value="option1" checked="checked"> Master Card
									</label>
									<label class="radio-inline">
									  <input type="radio" name="Payment" value="option2"> Visa Card
									</label>
                                </div>
                                <div class="form-group">
                    			    <label>Holder Name: <span>*</span></label>
                                    <input type="text" name="Holder Name" placeholder="Holder Name" class="form-control required">
                                </div>
								<div class="container-fluid">
								<div class="row form-inline">
								<div class="form-group col-md-6 col-xs-6">
									<label>Card Number: <span>*</span></label>
                                    <input type="text" name="Card Number" placeholder="Card Number" class="form-control required">
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<label>CVC: <span>*</span></label>
                                    <input type="text" name="CVC" placeholder="CVC" class="form-control required">
								</div>
                                </div>
								</div>
								<br/>
								<div class="container-fluid">
								<div class="row form-inline">
								<div class="form-group col-md-3 col-xs-3">
									<label>Expiry Date: </label>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Month: </label>
                                    <select class="form-control">
									  <option>Jan</option>
									  <option>Feb</option>
									  <option>Mar</option>
									  <option>Apr</option>
									  <option>May</option>
									</select>
								</div>
								<div class="form-group col-md-3 col-xs-3">
									<label>Year: </label>
                                    <select class="form-control">
									  <option>2017</option>
									  <option>2018</option>
									  <option>2019</option>
									  <option>2020</option>
									  <option>2021</option>
									</select>
								</div>
                                </div>
								</div>
								<br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
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