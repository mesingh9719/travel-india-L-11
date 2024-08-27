<div class="booking-area">
    <div class="container">
        <div class="booking-form">
            <h4 class="booking-title">Find Your Ride</h4>
            <form action="{{ route('find-ride') }}" method="GET">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Pick Up Location</label>
                            <input type="text" class="form-control" placeholder="Type Location" name="pickup" value="{{ $_GET['pickup'] ?? '' }}">
                            <i class="far fa-location-dot"></i>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Drop Off Location</label>
                            <input type="text" class="form-control" placeholder="Type Location" name="dropoff" value="{{ $_GET['dropoff'] ?? '' }}">
                            <i class="far fa-location-dot"></i>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <x-select-vehicle/>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Pick Up Date</label>
                            <input type="text" class="form-control date-picker" placeholder="MM/DD/YY" name="date">
                            <i class="far fa-calendar-days"></i>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Pick Up Time</label>
                            <input type="text" class="form-control time-picker" placeholder="00:00 AM" name="time">
                            <i class="far fa-clock"></i>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Seats</label>
                            <input type="number" class="form-control" placeholder="1" name="seats">
                        </div>
                    </div>
                    <div class="col-lg-2 align-self-end">
                        <button class="theme-btn" type="submit">
                            Find Now
                            <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
