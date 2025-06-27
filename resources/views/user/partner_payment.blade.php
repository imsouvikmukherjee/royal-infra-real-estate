@extends('user.layout.main')

@Section('main-container')

    <main class="main__content_wrapper">

        <div class="container">
            <div class="row py-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    @if (session('success'))
                        <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
                            <ul>
                                <li class="text-center">{{ session('success') }}</li>
                            </ul>

                        </div>
                    @endif

                    <h3 class="text-center my-4">Royal Infra Payment Portal</h3>

                    <img src="assets/img/qr_code.jpg" class="img-thumbnail" alt="">

                   <div class="mt-5">
                    <p>UPI ID - 1236547890@ybl</p>
                    <p>Bank Account No. - 111111111111</p>
                    <p>IFSC Code - SBI123654</p>
                    <p>Branch - India</p>
                    <p>Account Holder's Name - Royal Infra</p>
                   </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

@endsection
