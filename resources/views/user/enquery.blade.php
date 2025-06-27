@extends('user.layout.main')

@Section('main-container')

    <main class="main__content_wrapper">

        <!-- Breadcrumb section -->
        <section class="breadcrumb__section section--padding">
            <div class="container">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__title h2"><span>Enquery </span> Page</h1>
                    <ul class="breadcrumb__menu d-flex justify-content-center">
                        <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="{{route('user_home')}}">Home</a></li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C"/>
                            </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">Enquery Page </span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb section .\ -->

        <!-- Account Page section -->
        <section class="account__page--section section--padding">
            <div class="container">
                <div class="account__section--inner">
                    <!-- <div class="account__tab--btn">
                        <ul class="account__tab--btn__wrapper d-flex justify-content-center">
                            <li class="account__tab--btn__items"><a class="account__tab--btn__field" href="sign-up.html">Sign Up</a></li>
                            <li class="account__tab--btn__items"><span class="account__tab--btn__field active">Login</span></li>
                        </ul>
                    </div> -->
                    <div class="account__form--wrapper">
                        <div class="account__header text-center mb-30">
                            <h2 class="account__title">Get in Touch Today!</h2>
                            <p class="account__desc">Hey! Share your details, and we’ll help you find the perfect property.</p>
                        </div>
                        <div class="account__form">


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


                            <form action="{{url('/property-enquery-store')}}/{{encrypt($id)}}" method="POST">
                                @csrf
                                <div class="account__form--input mb-30">
                                    <label class="account__form--input__label mb-12" for="email">Name</label>
                                    <input class="account__form--input__field" id="email" placeholder="Enter Your Name" name="name" value="{{old('name')}}" type="text">
                                </div>

                                <div class="account__form--input mb-30">
                                    <label class="account__form--input__label mb-12" for="email">Email Address</label>
                                    <input class="account__form--input__field" id="email" placeholder="Enter Email Adress" name="email" value="{{old('email')}}" type="email">
                                </div>

                                <div class="account__form--input mb-30">
                                    <label class="account__form--input__label mb-12" for="email">Contact No.</label>
                                    <input class="account__form--input__field" id="email" placeholder="Enter Your 10 digit Contact No." name="contact" value="{{old('contact')}}" type="text">
                                </div>

                                <button type="submit"class="account__form--btn solid__btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Page section .\ -->

       @endsection
