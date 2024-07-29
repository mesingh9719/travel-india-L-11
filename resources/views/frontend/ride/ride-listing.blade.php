<x-frontend.layout.master>
<div class="sub-head blackish ext-low-opacity">
			<div class="bg-image" style="background-image: url(frontend-assets/images/resources/subhead-bg.jpg)"></div>
        	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cola-head">
							<div class="head-meta">
								<h4>Selena G.</h4>
								<p>( Cambridge )</p>
							</div>
							<a href="#" title="" class="theme-btn"><i class="fa fa-share-alt"></i>share profile</a>
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
		
        <div class="head-search">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="search-route">
                        	<form method="post">
                            	<div class="location">
                                	<p>
                                        <label><i class="fa fa-location-arrow"></i></label>
                                        <input type="text" placeholder="Your location">
                                    </p>
                                        
                                    <p>    
                                        <label><i class="fa fa-location-arrow"></i></label>
                                        <input type="text" placeholder="Going to">
                                    </p>
                                </div>
                                <div class="date-n-time">
                                	<p>
                                        <label><i class="fa fa-calendar"></i></label>
                                        <input id="datetimepicker1" type="text" >
                                    </p>  
                                    <p>  
                                        <label><i class="fa fa-clock-o"></i></label>
                                        <input id="datetimepicker2" type="text" >
                                    </p>
                                </div>
                                <button class="theme-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- top search head -->
        
        <section>
        	<div class="space-70">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-8 col-md-12">
        					<div class="heading text-left no-margin">
                            	<h5>Upcoming rides</h5>
                            </div>
                            <div class="rides-list">
                            	<div class="more-find">
                                	<i class="flaticon-favorites"></i>
                                    <div class="kola-met">
                                    	<h4>Car East points</h4>
                                   	    <span>Earn points everytime you reserve a seat or rent a car & get discounts.</span>
                                    </div>
                                    <a href="#" title="" class="theme-btn slim">find out more</a>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-3.jpg')}}">
                                        <div class="rating">
                                            <em>James K.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 13:40</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Bristol</em>
                                            <em>Cambridge</em>
                                        </span>
                                        <p>Departure: Bristol</p>
                                        <p>Arrival: Ely Cathedral, Cambridge</p>
                                        <i class="fa fa-road" data-toggle="tooltip"  title="This ride goes on the freeway."></i>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$20</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="avail"></span>
                                            <span class="avail"></span>
                                            <span class="notavail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-1.jpg')}}">
                                        <i data-toggle="tooltip" title="This user has a rating of 5 stars at least on 3 rides and phone number verified."><img alt="" src="{{asset('frontend-assets/images/icon-13.png')}}"></i>
                                        <span>
                                            <em>Carla M.</em>
                                            <i>New User</i>
                                        </span>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 14:00</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Bristol</em>
                                            <em>Cambridge</em>
                                        </span>
                                        <p>Departure: Bristol</p>
                                        <p>Arrival: Ely Cathedral, Cambridge</p>
                                        <i data-toggle="tooltip" class="fa fa-road" title="This ride goes on the freeway."></i>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$15</em>
                                        <div class="availablity">
                                            <span class="avail"></span>
                                            <span class="avail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-4.jpg')}}">
                                        <i data-toggle="tooltip" title="This user has a rating of 5 stars at least on 3 rides and phone number verified."><img alt="" src="{{asset('frontend-assets/images/icon-14.png')}}"></i>
                                        <div class="rating">
                                            <em>Jessica F.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 14:20</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Exeter</em>
                                            <em>Glasgow</em>
                                        </span>
                                        <p>Departure: Bristol</p>
                                        <p>Arrival: Ely Cathedral, Cambridge</p>
                                        <i class="fa fa-warning" data-toggle="tooltip" title="This ride goes on the freeway."> last seat</i>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$8</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="notavail"></span>
                                            <span class="notavail"></span>
                                            <span class="notavail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-6.jpg')}}">
                                        <div class="rating">
                                            <em>Derrick J.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 14:30</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Hereford</em>
                                            <em>Lancaster</em>
                                        </span>
                                        <p>Departure: Bristol</p>
                                        <p>Arrival: Ely Cathedral, Cambridge</p>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$8</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="avail"></span>
                                            <span class="avail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cars-list">
                                	<figure>
                                    	<img src="{{asset('frontend-assets/images/resources/car-1.jpg')}}" alt="">
                                    </figure>
                                    <div class="car-inf">
                                    	<h5><a href="#" title="">or you can rent Mario’s car today!</a></h5>
                                        <div class="car-owner">
                                            <div class="owner-thmb">
                                                <img src="{{asset('frontend-assets/images/resources/owner-thumb-1.jpg')}}" alt="">
                                            </div>
                                            <div class="car-meta">
                                                <span>Ford Focus 1.8 ZETEC 5d 125</span>
                                                <ul class="stars-rating">
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                </ul>
                                            </div>	
                                        </div>
                                        <a href="#" title="" class="theme-btn">see other rental cars in Bristol</a>
                                        <span class="tag bottom">$25/day</span>
                                    </div>
                                </div>
                                
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-2.jpg')}}">
                                        <div class="rating">
                                            <em>Maria E.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 15:00</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Lichfield</em>
                                            <em>Lincoln</em>
                                        </span>
                                        <p>Departure: Lichfield</p>
                                        <p>Arrival: Steep Hill, Lincoln</p>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$8</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="avail"></span>
                                            <span class="avail"></span>
                                            <span>+2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-7.jpg')}}">
                                        <i data-toggle="tooltip" title="This user has a rating of 5 stars at least on 3 rides and phone number verified."><img alt="" src="{{asset('frontend-assets/images/icon-13.png')}}"></i>
                                        <div class="rating">
                                            <em>Jessica F.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 14:20</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Exeter</em>
                                            <em>Glasgow</em>
                                        </span>
                                        <p>Departure: Bristol</p>
                                        <p>Arrival: Ely Cathedral, Cambridge</p>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$11</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="avail"></span>
                                            <span class="notavail"></span>
                                            <span class="notavail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-8.jpg')}}">
                                        <div class="rating">
                                            <em>Mia U.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 15:15</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Carlisle</em>
                                            <em>Chester</em>
                                        </span>
                                        <p>Departure: Carlisle</p>
                                        <p>Arrival: Tatton Park, Chester</p>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$25</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="avail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rides-listing">
                                	<div class="rider-imag">
                                        <img alt="" src="{{asset('frontend-assets/images/resources/rides-list-9.jpg')}}">
                                        <div class="rating">
                                            <em>Mia U.</em>
                                            <ul class="stars-rating">
                                            	<li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                                <li><i class="fa fa-star checked"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rides-meta">
                                    	<h4>Today at 15:15</h4>
                                        <span>
                                        	<i class="fa fa-location-arrow"></i>
                                            <em>Carlisle</em>
                                            <em>Chester</em>
                                        </span>
                                        <p>Departure: Carlisle</p>
                                        <p>Arrival: Tatton Park, Chester</p>
                                        <i class="fa fa-road" title="This ride goes on the freeway."></i>
                                    </div>
                                    <div class="price-tag">
                                    	<em>$25</em>
                                        <div class="availablity">
                                        	<span class="avail"></span>
                                            <span class="avail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cars-list">
                                	<figure>
                                    	<img src="{{asset('frontend-assets/images/resources/car-2.jpg')}}" alt="">
                                    </figure>
                                    <div class="car-inf">
                                    	<h5><a href="#" title="">or you can rent Mario’s car today!</a></h5>
                                        <div class="car-owner">
                                            <div class="owner-thmb">
                                                <img src="{{asset('frontend-assets/images/resources/owner-thumb-1.jpg')}}" alt="">
                                            </div>
                                            <div class="car-meta">
                                                <span>Ford Focus 1.8 ZETEC 5d 125</span>
                                                <ul class="stars-rating">
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                    <li><i class="fa fa-star checked"></i></li>
                                                </ul>
                                            </div>	
                                        </div>
                                        <a href="#" title="" class="theme-btn">see other rental cars in Bristol</a>
                                        <span class="tag bottom">$30/day</span>
                                    </div>
                                </div>
                                
                                <div class="rides-listing route-submit">
                                    <h4>Can’t find your ride?</h4>
                                    <p>Receive an email from us with the notification of your route.</p>
                                    <a class="theme-btn long" href="#" title="">submit a notification of route</a>
                                </div><!-- cant find route notice  -->
                            </div>
                            
        				</div>
                        <div class="col-lg-4 col-md-12">
                        	<div class="rides-search">
                            	<span class="info-title">Radius</span>
                                <i>100km</i>
                                <div id="slider">
                                  <div id="custom-handle" class="ui-slider-handle"></div>
                                </div>
                                <div class="luggage">
                                	<span><span class="info-title">Luggage</span></span>
                                    <ul>
                                    	<li>
                                        	<i class="flaticon-suitcase-2"></i>
                                            <span>small</span>
                                        </li>
                                        <li>
                                        	<i class="flaticon-backpack"></i>
                                            <span>medium</span>
                                        </li>
                                        <li>
                                        	<i class="flaticon-suitcase-1"></i>
                                            <span>large</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="luxury">
                                	<span><span class="info-title">Comfort</span></span>
                                	<span><i class="fa fa-check-circle-o"></i>Maximum 2 people in the back seat.</span>
                                </div>
                                <div class="prefer">
                                	<form method="post">
                                    	<p>
                                            <input type="checkbox">
                                            <label></label>
                                            Music
                                        </p>
                                        <p>
                                            <input type="checkbox">
                                            <label></label>
                                            Pets
                                        </p>
                                        <p>
                                            <input type="checkbox">
                                            <label></label>
                                            Smoking
                                        </p>
                                        <p>
                                            <input type="checkbox">
                                            <label></label>
                                            Children
                                        </p>
                                    </form>
                                </div>
                                <a href="#" title="" class="theme-btn"><i class="fa fa-refresh"></i>refresh search</a>
                            </div>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
</x-frontend.layout.master>