{{-- <x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf


        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('user.layout.main')

@Section('main-container')

    <main class="main__content_wrapper">

        <!-- Breadcrumb section -->
        <section class="breadcrumb__section section--padding">
            <div class="container">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__title h2"><span>Login </span> Page</h1>
                    <ul class="breadcrumb__menu d-flex justify-content-center">
                        <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="{{route('user_home')}}">Home</a></li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C"/>
                            </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">Login Page </span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb section .\ -->

        <!-- Account Page section -->
        <section class="account__page--section section--padding">
            <div class="container">
                <div class="account__section--inner">
                    <div class="account__tab--btn">
                        <ul class="account__tab--btn__wrapper d-flex justify-content-center">
                            <li class="account__tab--btn__items"><a class="account__tab--btn__field" href="{{route('register')}}">Registration</a></li>
                            <li class="account__tab--btn__items"><span class="account__tab--btn__field active">Login</span></li>
                        </ul>
                    </div>
                    <div class="account__form--wrapper">
                        <div class="account__header text-center mb-30">
                            <h2 class="account__title">Login Here Today!</h2>
                            <p class="account__desc">Hey! Enter your details to make an account & become our partner</p>
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


                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="account__form--input mb-30">
                                    <label class="account__form--input__label mb-12" for="email">Email Address</label>
                                    <input class="account__form--input__field" id="email" placeholder="Enter Email Adress" type="email" name="email" value="{{old('email')}}">
                                </div>
                                <div class="account__form--input mb-30">
                                    <div class="account__form--input__top mb-12 d-flex align-items-center justify-content-between">
                                        <label class="account__form--input__label">Your password</label>
                                        <a class="account__form--forgot__password" href="#">Forgot Password?</a>
                                    </div>
                                    <input class="account__form--input__field" placeholder="Enter password" type="password" name="password">
                                </div>


                                <button class="account__form--btn solid__btn">Login Here</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Page section .\ -->

       @endsection
