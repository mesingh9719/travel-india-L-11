<x-frontend.dashboard-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="user-profile-card">
                <div class="user-profile-card-header">
                    <h4 class="user-profile-card-title">My Booking</h4>
                    <div class="user-profile-card-header-right">
                        <div class="user-profile-search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="far fa-search"></i>
                            </div>
                        </div>
                        <a href="#" class="theme-btn"><span class="fas fa-taxi"></span>Book A
                            Taxi</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Cab Info</th>
                                <th>Journey Date</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-list-info">
                                        <a href="#">
                                            <img src="{{asset('frontend-assets/img/taxi/01.png')}}" alt>
                                            <div class="table-list-content">
                                                <h6>Mercedes Benz Taxi</h6>
                                                <span>Booking ID: #123456</span>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span>24 February, 2023</span>
                                    <p>03:15 PM</p>
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-primary">Upcoming</span></td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-2"
                                        data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-list-info">
                                        <a href="#">
                                            <img src="{{asset('frontend-assets/img/taxi/01.png')}}" alt>
                                            <div class="table-list-content">
                                                <h6>Mercedes Benz Taxi</h6>
                                                <span>Booking ID: #123456</span>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span>24 February, 2023</span>
                                    <p>03:15 PM</p>
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-danger">Cancel</span></td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-2"
                                        data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-list-info">
                                        <a href="#">
                                            <img src="{{asset('frontend-assets/img/taxi/01.png')}}" alt>
                                            <div class="table-list-content">
                                                <h6>Mercedes Benz Taxi</h6>
                                                <span>Booking ID: #123456</span>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span>24 February, 2023</span>
                                    <p>03:15 PM</p>
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-info">Confirmed</span></td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-2"
                                        data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-list-info">
                                        <a href="#">
                                            <img src="{{asset('frontend-assets/img/taxi/01.png')}}" alt>
                                            <div class="table-list-content">
                                                <h6>Mercedes Benz Taxi</h6>
                                                <span>Booking ID: #123456</span>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span>24 February, 2023</span>
                                    <p>03:15 PM</p>
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-2"
                                        data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-list-info">
                                        <a href="#">
                                            <img src="{{asset('frontend-assets/img/taxi/01.png')}}" alt>
                                            <div class="table-list-content">
                                                <h6>Mercedes Benz Taxi</h6>
                                                <span>Booking ID: #123456</span>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span>24 February, 2023</span>
                                    <p>03:15 PM</p>
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-2"
                                        data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination my-3">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.dashboard-layout>