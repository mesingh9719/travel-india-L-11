<x-frontend.layout.master>
<div class="sub-head blackish ext-low-opacity">
			<div class="bg-image" style="background-image: url(frontend-assets/images/resources/subhead-bg.jpg)"></div>
        	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cola-head">
							<div class="head-meta">
								<h4>Submit Route</h4>
								<p>( Find passengersa close to you. )</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div><!-- subhead -->
                
        <section>
        	<div class="space">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-7">
                        	<div id="wizard" class="aiia-wizard" style="display: none;">
								
								<div class="aiia-wizard-step">
									<div class="step-content">
										<div class="car-detail submit-route">
											<h1>Route</h1>
											<form method="post" class="cola-form">
												<div class="row">
													<div class="col-lg-12">
														<label>Pick up place::</label>
														<input type="text" placeholder="Search a location">
														<div class="center-point">
															<label>via:</label>
															<input type="text" placeholder="Search a location">
															<i><img src="{{asset('frontend-assets/images/icon-17.png')}}" alt=""></i>
														</div>
														<label>Place of arrival:</label>
														<input type="text" placeholder="Search a location">
														<span class="add-center-point">+ Add intermediate point</span>
													</div>
												</div>												
											</form>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Departure</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="departure">
												<div class="inline-calendar">
													<div id="datepicker"></div>
												</div>
												<div class="depart-time">
													<label>Departure Time:</label>
													<select>
														<option>14</option>
														<option>15</option>
														<option>16</option>
														<option>17</option>
													</select>
													<select>
														<option>30</option>
														<option>40</option>
														<option>50</option>
														<option>60</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Details</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="col-md-12">
												<div class="route-detail">
													<form method="post">
													<label>Free seats (without the driver’s seat included):</label>
													<select>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
													</select>
													<label>Departure Time:</label>
													<select>
														<option>Unspecified</option>
														<option>specified</option>
													</select>
													<div class="route-option">
														<span>Comfort</span>
														<p>
															<input type="checkbox">
															<label></label>
															Accept partial route requests
														</p>
														<div class="prefer">
															<span>Preferences</span>
															<ul>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Music
																	</p>
																</li>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Smoking
																	</p>
																</li>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Pets
																	</p>
																</li>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Children
																	</p>
																</li>
															</ul>
														</div>
													</div>
													<textarea cols="30" rows="3" placeholder="e.g. departure location, capacity for the baggage, etc."></textarea>
													<div class="note-box">
														<p>
															Note: We will send you messages on your phone each time a user is interested in renting your car.	
														</p>
													</div>
													<span>Highway:</span>
													<p>
														<input type="checkbox">
														<label></label>
														Highway routes
													</p>
													</form>
													
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Price</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="submit-route">
												<div class="seat-pirces">
													<em>Price per seat ($):</em>
													<span>
														<i class="fa fa-location-arrow"></i>
														<em>Bristol</em>
														<em>Cambridge</em>
													</span>
												</div>
												<form class="setprice">
													<input class="qty" type="text" name="value" value="1">
												</form>
												<div class="fees">
													<span>fees:</span>
													<a href="#" title="">read more <i class="fa fa-info-circle"></i></a>
													<ins>-$2</ins>
												</div>
												<div class="fees">
													<span>The price you get:</span>
													<p>Each amount needs a 24h process time to get in your account.</p>
													<ins class="big-price">$19</ins>
												</div>
												<div class="about-car">
													<form method="post">
													<p>
														<input type="checkbox">
														<label></label>
														Instantly accept the requests
													</p>
													<p>
														<input type="checkbox">
														<label></label>
														Accept partial route requests
													</p>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
                        </div>
                        <div class="offset-lg-1 col-lg-4">
                        	<div class="g-map">
								<div id="map-canvas"></div>
							</div>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
</x-frontend.layout.master>
