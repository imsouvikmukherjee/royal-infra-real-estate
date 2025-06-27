@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Benefits</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="property.html">Investment Benefits</a></li> -->
                    <li class="breadcrumb-item active">User Benefits</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Benefits Form</h5>


                            @if ($errors->any())
                            <div class="alert alert-danger my-3 alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                            </div>
                        @endif


                        @if (session('success'))
                        <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
                            <ul>
                                <li class="text-center">{{ session('success') }}</li>
                            </ul>

                        </div>
                    @endif


                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{url('/admin/investment-benifits-update')}}/{{encrypt(1)}}" method="POST">
                                @csrf

                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Investor's Percentage</label>
                                    <input type="number" class="form-control" id="inputName5" name="investors_percentage" placeholder="Enter Investor Percentage" value="{{$data->investors_percentage}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Enter Channel Partner's Percentage (Spot)</label>
                                    <input type="number" class="form-control" id="inputEmail5" name="channel_partner_percentage_spot" placeholder="Enter Property Address" value="{{$data->channel_partner_percentage_spot}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputAddress5" class="form-label">Channel Partner's Percentage (Month wise)</label>
                                    <input type="number" class="form-control" id="inputAddres5s" name="channel_partner_percentage_month" placeholder="Enter Property Contact" value="{{$data->channel_partner_percentage_month}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputAddress5" class="form-label">Number of Months (For Channel Partner)</label>
                                    <input type="number" class="form-control" id="inputAddres5s" name="number_of_months" placeholder="Enter Number of Months" value="{{$data->number_of_months}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Master Channel Partner's Percentage</label>
                                    <input type="number" class="form-control" id="inputCity" name="master_channel_partner_percentage" placeholder="Enter Master Channel Partner's Percentage" value="{{$data->master_channel_partner_percentage}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Franchise Partner's Percentage</label>
                                    <input type="number" class="form-control" id="inputCity" name="franchise_partner_percentage" placeholder="Enter Franchise Partner's Percentage" value="{{$data->franchise_partner_percentage}}">
                                </div>



                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Update Percentage</button>
                                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                                </div>
                            </form>
                            <!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>
                <div class="col-lg-1"></div>
            </div>
        </section>

    </main>
    <!-- End #main -->

   @endsection
