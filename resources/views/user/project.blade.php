@extends('user.layout.main')

@Section('main-container')

    <main class="main__content_wrapper">

        <!-- Breadcrumb section -->
        <section class="breadcrumb__section section--padding">
            <div class="container">
                <div class="breadcrumb__content text-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h1 class="breadcrumb__title h2"><span>Property </span> Page</h1>
                    <ul class="breadcrumb__menu d-flex justify-content-center">
                        <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="{{route('user_home')}}">Home</a></li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C"/>
                            </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">Project Page </span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb section .\ -->

        <!-- Project Page section -->
        <section class="project__section section--padding">
            <div class="container">
                @if ($property->isEmpty())
                <p class="text-center text-muted my-3">No data available</p>
                @else
                <div class="row mb--n40">
                    @foreach($property as $item)
                    <div class="col-lg-6 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="50">
                        <div class="project__items">
                            <div class="project__thumbnail">
                                <a class="project__thumbnail--link" href="{{url('/property-details')}}"><img class="project__thumbnail--media" src="{{ asset('property_image/' . $item->property_image) }}" alt="project-img"></a>
                            </div>
                            <div class="project__content">

                                @if($item->property_category == '1')
                                <span class="project__content--meta__tag">Residential Property</span>
                                @elseif($item->property_category == '2')
                                <span class="project__content--meta__tag">Commercial Property</span>
                                @elseif($item->property_category == '3')
                                <span class="project__content--meta__tag">Mixed-use Property</span>
                                @endif

                                <h3 class="project__content--title"><a href="{{url('/property-details')}}/{{encrypt($item->id)}}">{{$item->property_name}}</a></h3>
                                <a class="project__content--link" href="{{url('/property-details')}}/{{encrypt($item->id)}}">View Projects <svg width="17" height="7" viewBox="0 0 17 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9227 3.10264L12.6345 0.163758C12.5807 0.112601 12.5128 0.071331 12.4358 0.0430016C12.3588 0.0146722 12.2745 0 12.1892 0C12.1039 0 12.0197 0.0146722 11.9426 0.0430016C11.8656 0.071331 11.7977 0.112601 11.7439 0.163758C11.625 0.276582 11.5601 0.417625 11.5601 0.563112C11.5601 0.708598 11.625 0.849607 11.7439 0.962432L13.9509 2.93537H0.62744C0.452746 2.95613 0.293442 3.0245 0.178355 3.12813C0.0632677 3.23176 0 3.3638 0 3.50034C0 3.63688 0.0632677 3.76888 0.178355 3.87251C0.293442 3.97614 0.452746 4.04455 0.62744 4.06531H13.9538L11.7468 6.03821C11.6277 6.15095 11.5626 6.29202 11.5626 6.43756C11.5626 6.58311 11.6277 6.72418 11.7468 6.83692C11.8006 6.88788 11.8684 6.92896 11.9453 6.95717C12.0222 6.98537 12.1062 7 12.1914 7C12.2765 7 12.3605 6.98537 12.4374 6.95717C12.5143 6.92896 12.5821 6.88788 12.6359 6.83692L15.9241 3.89804C16.0417 3.78535 16.1057 3.64489 16.1055 3.50014C16.1052 3.35538 16.0407 3.21508 15.9227 3.10264Z" fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                @endif
            </div>
        </section>
        <!-- Project Page  section .\ -->

       @endsection
