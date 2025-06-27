<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title}} | Royal Infra</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('admin-assets/img/royalinfranew.png')}}" rel="icon">
    <link href="{{url('admin-assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('admin-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('admin-assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('admin-assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{url('admin-assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{url('admin-assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('admin-assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('admin-assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{url('admin-assets/img/royalinfranew.png')}}" alt="" class="img-fluid" style="height: 120px; width: 40px;">
                <span class="d-none d-lg-block">Royal Infra</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

         {{-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div> --}}
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>


                @php
                    $roles = [
                        0 => 'ADMIN',
                        1 => 'INVESTOR',
                        2 => 'CHANNEL PARTNER',
                        3 => 'MASTER CHANNEL PARTNER',
                        4 => 'FRANCHISE PARTNER'
                    ];
                @endphp



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{url('admin-assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }} - {{ $roles[Auth::user()->usertype] ?? 'Unknown Role' }}</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>

                        <li>
                            {{-- <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i> --}}
                                {{-- <span>Log Out</span> --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item d-flex align-items-center" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                      {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                                      <i class="bi bi-box-arrow-right"></i> Log Out
                                    </a>
                                </form>
                            {{-- </a> --}}
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('admin_dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            @if (session('usertype') === '0')

            {{-- <li class="nav-item">
                <a class="nav-link " href="{{route('admin_dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li> --}}


            <li class="nav-item">
                <a class="nav-link " href="{{route('admin_properties')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Properties</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('admin_users')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Users</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="{{route('investment')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>User Benefits</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('property_enquery')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Property Enquery</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('contact_messages')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Contact Messages</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('scheduled_payments')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Scheduled Payments</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('withdraw_request')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Withdraw Request</span>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link " href="{{route('contact_messages')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Withdraw History</span>
                </a>
            </li> --}}


            @endif
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " href="{{route('profit_history')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Profit History</span>
                </a>
            </li>



            @if (session('usertype') != '0')
            <li class="nav-item">
                <a class="nav-link " href="{{route('withdraw_history')}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Withdraw History</span>
                </a>
            </li>




            <div class="container text-white" style="border-radius: 20px; background: linear-gradient(180deg, #ff4b1f 0%, #ff9068 50%, #ffc107 100%);">
                <div class="row mt-4  py-4 text-center ">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 " style="border-radius: 20px;">
                        <h4 class=""><b><i class="bi bi-wallet"></i></b></h4>
                        <h4><b>
                            ₹{{$balance->balance}}</b></h4>
                        <a href="{{route('withdraw')}}" class="btn btn-dark mt-2 w-100 btn-sm">Withdraw</a>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            @endif

        </ul>

    </aside>
    <!-- End Sidebar-->
