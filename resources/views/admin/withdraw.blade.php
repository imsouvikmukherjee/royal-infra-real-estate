@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Withdraw Balance</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="property.html">Investment Benefits</a></li> -->
                    <li class="breadcrumb-item active">Withdraw Balance</li>
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
                            <h5 class="card-title">Withdraw Application Form</h5>


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
                            {{-- <ul> --}}
                                <p class="text-center">{{ session('success') }}</p>
                            {{-- </ul> --}}

                        </div>
                    @endif

                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('withdraw_store')}}" method="POST">
                                @csrf

                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="inputName5" name="amount" placeholder="Enter Amount" value="{{old('amount')}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="bank_name" placeholder="Enter Bank Name" value="{{old('bank_name')}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Branch</label>
                                    <input type="text" class="form-control" id="inputAddres5s" name="branch" placeholder="Enter Branch Name" value="{{old('branch')}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Account Number</label>
                                    <input type="number" class="form-control" id="inputCity" name="account_number" placeholder="Enter Account Number" value="{{old('account_number')}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Confirm Account Number</label>
                                    <input type="number" class="form-control" id="inputCity" name="confirm_account_number" placeholder="Confirm Account Number" value="{{old('confirm_account_number')}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">IFSC Code</label>
                                    <input type="text" class="form-control" id="inputCity" name="ifsc_code" placeholder="Enter IFSC Code" value="{{old('ifsc_code')}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Account's Holder Name</label>
                                    <input type="text" class="form-control" id="inputCity" name="accounts_holder_name" placeholder="Account's Holder Name" value="{{old('accounts_holder_name')}}">
                                </div>


                                <!-- <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Property Description</label>
                                    <textarea class="form-control" id="editor" rows="5" name="newsdescription" placeholder="Enter description " cols="7"></textarea>

                                </div> -->

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Make Withdraw</button>
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
