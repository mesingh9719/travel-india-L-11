<x-frontend.dashboard-layout>
    <div class="user-profile-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-profile-card">
                    <h4 class="user-profile-card-title">Cancel Booking</h4>
                    <div class="user-profile-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Booking Id</label>
                                        <input type="text" class="form-control" placeholder="Enter Booking Id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reason For Cancellation</label>
                                        <select class="select">
                                            <option value>Choose Reason</option>
                                            <option value="1">Low Rider Score</option>
                                            <option value="2">Personal Issues</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Your Comment</label>
                                        <textarea class="form-control" rows="3" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="theme-btn my-3"><span class="far fa-xmark-circle"></span>
                                Cancel Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.dashboard-layout>