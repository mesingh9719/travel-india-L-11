<x-admin.master-layout pageTitle="Dashboard">
    <div class="row">
        <div class="col-xxl-6">
            <x-admin-dashboard-widgets/>
        </div>
        <div class="col-xxl-6 mb-25">
            <div class="card border-0 h-100">
                <div class="card-header border-0 pb-md-0 pb-20">
                    <h4>Sales Reports</h4>
                    <div class="card-extra">
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="else" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('admin-assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="else">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-25 mt-n10">
                    <div class="label-detailed">
                        <div class="label-detailed__single"><span class="label-detailed__type label-detailed__type--primary">Orders</span> <strong class="label-detailed__total">$8,550</strong> <span class="label-detailed__status color-success"><img class="svg" src="img/svg/arrow-success-up.svg" alt=""><strong>25%</strong></span> </div>
                        <div class="label-detailed__single"><span class="label-detailed__type label-detailed__type--info">Sales</span> <strong class="label-detailed__total">$5,550</strong> <span class="label-detailed__status color-danger"><img class="svg" src="img/svg/arrow-danger-down.svg" alt=""> <strong>15%</strong></span> </div>
                    </div>
                    <div class="parentContainer position-relative">


                        <div>
                            <canvas id="salesReports"></canvas>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 mb-25">

            <div class="card border-0 px-25 h-100">
                <div class="card-header px-0 border-0">
                    <h6>Sales Growth</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a class="active" href="#salesgrowth" data-bs-toggle="tab" id="salesgrowth-tab" role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#salesgrowth2" data-bs-toggle="tab" id="salesgrowth2-tab" role="tab" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a href="#salesgrowth3" data-bs-toggle="tab" id="salesgrowth3-tab" role="tab" aria-selected="false">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0 pb-sm-25">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="salesgrowth" role="tabpanel" aria-labelledby="salesgrowth-tab">
                            <div class="label-detailed label-detailed--two">
                                <div class="label-detailed__single"><strong class="label-detailed__total">$8,550</strong> <span class="label-detailed__status color-success"><img class="svg" src="img/svg/arrow-success-up.svg" alt=""> <strong>25%</strong></span> </div>
                                <div class="label-detailed__single"><strong class="label-detailed__total">$5,550</strong> <span class="label-detailed__status color-danger"><img class="svg" src="img/svg/arrow-danger-down.svg" alt=""> <strong>15%</strong></span> </div>
                            </div>
                            <div class="parentContainer">


                                <div>
                                    <canvas id="salesGrowthToday"></canvas>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane" id="salesgrowth2" role="tabpanel" aria-labelledby="salesgrowth2-tab">
                            <div class="label-detailed label-detailed--two">
                                <div class="label-detailed__single"><strong class="label-detailed__total">$8,550</strong> <span class="label-detailed__status color-success"><img class="svg" src="img/svg/arrow-success-up.svg" alt=""> <strong>25%</strong></span> </div>
                                <div class="label-detailed__single"><strong class="label-detailed__total">$5,550</strong> <span class="label-detailed__status color-danger"><img class="svg" src="img/svg/arrow-danger-down.svg" alt=""> <strong>15%</strong></span> </div>
                            </div>
                            <div class="parentContainer">


                                <div>
                                    <canvas id="salesGrowthWeek"></canvas>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane" id="salesgrowth3" role="tabpanel" aria-labelledby="salesgrowth3-tab">
                            <div class="label-detailed label-detailed--two">
                                <div class="label-detailed__single"><strong class="label-detailed__total">$8,550</strong> <span class="label-detailed__status color-success"><img class="svg" src="img/svg/arrow-success-up.svg" alt=""> <strong>25%</strong></span> </div>
                                <div class="label-detailed__single"><strong class="label-detailed__total">$5,550</strong> <span class="label-detailed__status color-danger"><img class="svg" src="img/svg/arrow-danger-down.svg" alt=""> <strong>15%</strong></span> </div>
                            </div>
                            <div class="parentContainer">


                                <div>
                                    <canvas id="salesGrowthMonth"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-8 mb-25">
            <x-new-registrations/>
        </div>

    </div>
</x-admin.master-layout>
