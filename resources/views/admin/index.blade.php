
@extends('admin.layout.main')

@Section('main-container')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">


                        @if (session('usertype') === '0')
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Property</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-house-door"></i>

                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$property}}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">Property Enquery</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building"></i>

                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$enquery}}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Contact Messages</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$contact}}</h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Total Users</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$users}}</h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->




                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Pending Withdrawals</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$pending_withdraw}}</h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">Scheduled Payments</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-check"></i>


                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$todayCount}}</h6>
                                             <span class="text-success small pt-1 fw-bold">Today Only</span> <span class="text-muted small pt-2 ps-1"></span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Investors</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-bar-chart"></i>


                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$investor}}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Approved Withdrawals</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$approved_withdraw}}</h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        @endif
                        {{-- end admin widgets --}}


                        {{-- start user widgets --}}


                        @if (session('usertype') != '0')

                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Pending Withdrawals</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$user_pending_withdraw}}</h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">Withdrawal Amount</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-check"></i>


                                        </div>
                                        <div class="ps-3">
                                            <h6>₹{{$user_monthly_withdrawals}}</h6>
                                             <span class="text-success small pt-1 fw-bold">Current Month</span> <span class="text-muted small pt-2 ps-1"></span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Profit Amount</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-bar-chart"></i>


                                        </div>
                                        <div class="ps-3">
                                            <h6>₹{{$current_month_total_balance}}</h6>
                                             <span class="text-success small pt-1 fw-bold">Current Month</span> <span class="text-muted small pt-2 ps-1"></span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Approved Withdrawals</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$user_approved_withdraw}}</h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        @endif

                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->

                <!-- End Right side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->

@endsection
