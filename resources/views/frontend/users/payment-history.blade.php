<x-frontend.dashboard-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="user-profile-card">
                <div class="user-profile-card-header">
                    <h4 class="user-profile-card-title">Payment History</h4>
                    <div class="user-profile-card-header-right">
                        <div class="user-profile-search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="far fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Booking Date</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    #123456
                                </th>
                                <td>
                                    24/02/2023
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th>
                                    #123456
                                </th>
                                <td>
                                    24/02/2023
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-danger">Pending</span></td>
                            </tr>
                            <tr>
                                <th>
                                    #123456
                                </th>
                                <td>
                                    24/02/2023
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th>
                                    #123456
                                </th>
                                <td>
                                    24/02/2023
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th>
                                    #123456
                                </th>
                                <td>
                                    24/02/2023
                                </td>
                                <td>$650</td>
                                <td><span class="badge badge-success">Paid</span></td>
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