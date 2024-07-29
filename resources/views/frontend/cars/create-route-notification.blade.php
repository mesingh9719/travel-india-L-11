<x-frontend.layout.master>
        
		<div class="sub-head blackish ext-low-opacity">
			<div class="bg-image" style="background-image: url(frontend-assets/images/resources/subhead-bg.jpg)"></div>
        	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cola-head">
							<div class="head-meta">
								<h4>Create Route Notification</h4>
							</div>
							<a class="theme-btn" title="" href="#"><i class="fa fa-share-alt"></i>share profile</a>
							<div class="info-links">
								<a href="#" title="">how does this work</a>
								<a href="#" title="">submit your car</a>
								<span><i class="fa fa-phone"></i>call (012) 345 - 6789</span>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div><!-- subhead -->
        
        <section>
        	<div class="space top-space50">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-12">
        					<div class="route-notification">
								<div class="row">
									<div class="col-lg-8">
										<h4>Submit your route</h4>
										<p>You will receive notifications by e-mail with the new trips that match your needs!</p>
										<form method="post" class="cola-form">
											<label>From:</label>
											<input type="text" placeholder="Enter the address or city">
											<label>To:</label>
											<input type="text" placeholder="Enter the address or city">
										</form>
										<div class="inline-calendar">
											<div id="datepicker"></div>
										</div>
										<form method="post" class="cola-form">
											<div class="schedule">
												<div class="row">
													<div class="col-lg-6">
														<label>Schedule:</label>
														<select>
															<option>All day</option>
															<option>Half day</option>
															<option>2 day</option>
														</select>
													</div>
													<div class="col-lg-6">
														<label>Time:</label>
														<select>
															<option>1 Hour</option>
															<option>2 Hour</option>
															<option>3 Hour</option>
														</select>
													</div>
													<div class="col-lg-6">
														<label>Seats:</label>
														<select>
															<option>1 seat</option>
															<option>2 seats</option>
															<option>3 seats</option>
														</select>
													</div>
													<div class="col-lg-6">
														<label>Radius:</label>
														<select>
															<option>10 km</option>
															<option>25 Km</option>
															<option>30 Km</option>
														</select>
													</div>
												</div>
												<label>Message for the driver:</label>
												<textarea rows="4" placeholder="e.g. meeting location pickup, capacity for the baggage, etc."></textarea>
											</div>
											<div class="note-box">
												<p>
													Note: Do not add your phone number or your email in this field. Use your profile instead for these informations.
												</p>	
											</div>
											<button type="submit" class="theme-btn long">+ submit alert</button>
										</form>
									</div>
									<div class="offset-lg-1 col-lg-3">
										<div class="sidebar right">
											<div class="advertising-box blackish medium-opacity">
												<span>Advertisment</span>
												<div class="bg-image" style="background-image: url(images/banner2.jpg);"></div>
												<div class="baner-meta">
													<span>reffer a friend</span>
													<h5>Earn $99</h5>
													<p>now bring a smile on customer's face by giving theme points on each referral</p>
													<a href="#" title="" class="">Earn Now</a>
												</div>
											</div>
											<div class="advertising-box">
												<span>Advertisment</span>
												<figure><a href="#" title=""><img src="{{asset('frontend-assets/images/banner1.jpg')}}" alt=""></a></figure>
											</div>
										</div>	
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section><!-- form section -->
</x-frontend.layout.master>