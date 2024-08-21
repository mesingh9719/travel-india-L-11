<x-frontend.layout.master>
    <main class="main">
        <x-frontend.banner.banner />
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <x-frontend.sidebar.sidebar />
                    <div class="col-lg-9">
                        
                        <div class="user-profile-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-profile-card">
                                        <h6 class="user-profile-card-title">Add Trip Details</h6>
                                        <div class="user-profile-form p-4">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="start_trip" class="form-label">Pick-Up
                                                                Location</label>
                                                            <input type="text" class="form-control" id="start_trip"
                                                                id="start_trip" placeholder="Enter pick-up location"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="end_trip" class="form-label">Pick-Up
                                                                Location</label>
                                                            <input type="text" class="form-control" id="end_trip"
                                                                id="end_trip" placeholder="Enter drop-off location"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="riderName" class="form-label">Price</label>
                                                            <input type="text" class="form-control" id="price"
                                                                name="price" value="{{old('price')}}"
                                                                placeholder="Price" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input type="date"
                                                                class="form-control date-picker hasDatepicker"
                                                                placeholder="MM/DD/YY" name="date" id="date" name="date"
                                                                value="{{old('date')}}" placeholder="Enter trip Date">
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Time</label>
                                                            <input type="time" class="form-control" id="date"
                                                                name="time" value="{{old('time')}}"
                                                                placeholder="Enter trip Time">
                       
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <select id="ampm" class="form-control" required>
                                                            <option value="AM">AM</option>
                                                            <option value="PM">PM</option>
                                                        </select>
                       
                                                        </div>
                                                    </div>
                   
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group my-3 mt-4  d-flex justify-content-end">
                                                            <button type="button" class="btn btn-warning my-3">Save
                                                                Changes <i class="fas fa-paper-plane"></i> </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <h6 class="user-profile-card-title"></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</x-frontend.layout.master>