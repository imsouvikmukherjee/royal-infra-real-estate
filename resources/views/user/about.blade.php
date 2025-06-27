@extends('user.layout.main')

@Section('main-container')

    <main class="main__content_wrapper">

        <!-- Breadcrumb section -->
        <section class="breadcrumb__section section--padding">
            <div class="container">
                <div class="breadcrumb__content text-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h1 class="breadcrumb__title h2"><span>About </span> Page</h1>
                    <ul class="breadcrumb__menu d-flex justify-content-center">
                        <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="{{route('user_home')}}">Home</a></li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C"/>
                            </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">About Page </span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb section .\ -->

        <!-- About section -->
        <section class="about__section about__page--section section--padding">
            <div class="container">
                <div class="about__inner d-flex">
                    <div class="about__thumbnail position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="about__thumbnail--list one position-relative">
                            <img src="assets/img/other/about-thumb1.png" alt="about-thumb">
                            <div class="rating__star--text">
                                <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0L22.2959 9.71076L33.168 11.7467L25.569 19.7842L26.9923 30.7533L17 26.01L7.00765 30.7533L8.43098 19.7842L0.832039 11.7467L11.7041 9.71076L17 0Z" fill="#F23B3B"/>
                                </svg>
                                <span>5 Star Rating</span>
                            </div>
                        </div>
                        <div class="about__thumbnail--list two">
                            <img src="assets/img/other/about-thumb2.png" alt="about-thumb">
                            <!-- <div class="bideo__play">
                                <a class="bideo__play--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                                    </svg>
                                    <span class="visually-hidden">Video Play</span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="about__content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <div class="section__heading">
                            <h3 class="section__heading--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_6)">
                                <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                                <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                                </g>
                                <defs>
                                <clipPath >
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg> Trusted Real estate Care</h3>
                            <h2 class="section__heading--title">Dream living Spaces Setting New Build</h2>
                            <p class="section__heading--desc">Transmds is the world’s driving worldwide coordinations supplier — we uphold industry and exchange the worldwide trade of merchandi</p>
                        </div>
                        <div class="about__content--info d-flex">
                            <div class="about__content--info__list d-flex align-items-center">
                                <div class="about__content--info__icon">
                                    <img src="assets/img/other/about-info-icon.png" alt="icon">
                                </div>
                                <h3 class="about__content--info__title">Perfect Duplex Houses
                                </h3>
                            </div>
                            <div class="about__content--info__list d-flex align-items-center">
                                <div class="about__content--info__icon">
                                    <img src="assets/img/other/about-info-icon2.png" alt="icon">
                                </div>
                                <h3 class="about__content--info__title">Friendly Support Team
                                </h3>
                            </div>
                        </div>
                        <div class="about__content--details d-flex align-items-center">
                            <div class="about__experince">
                                <span class="about__experince--number">30</span>
                                <span class="about__experince--text">Years of Experince</span>
                            </div>
                            <div class="living__details--content__wrapper">
                                <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                    <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                    </svg> Living rooms are pre-wired for Surround
                                </p>
                                <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                    <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                    </svg> Luxurious interior design and amenities
                                </p>
                                <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                    <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                    </svg> Nestled in the Buckhead
                                </p>

                            </div>
                        </div>
                        <!-- <div class="about__content--footer d-flex align-items-center">
                            <a class="solid__btn" href="about.html">More about us</a>
                            <div class="about__video--play">
                                <a class="about__video--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                                    </svg>
                                    <span class="visually-hidden">Video Play</span>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- About section .\ -->

        <!-- Categories section -->
        <section class="categories__section categories__bg section--padding">
            <div class="container">
                <div class="section__heading text-center mb-50" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h3 class="section__heading--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_6)">
                        <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                        <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                        </g>
                        <defs>
                        <clipPath >
                        <rect width="18" height="18" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> Real estate agency</h3>
                    <h2 class="section__heading--title">Properties Categories</h2>
                </div>
                <div class="categories__inner row mb--n30">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="categories__box">
                            <div class="categories__thumbnail text-center">
                                <img src="assets/img/other/categories1.png" alt="categories-img">
                            </div>
                            <span class="categories__badge">13</span>
                            <div class="categories__content text-center">
                                <h3 class="categories__title"><a href="listing-details.html">Single-family home</a></h3>
                                <p class="categories__desc">With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
                                <a class="categories__link" href="listing-details.html">See Properites <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.5123 9.14893C31.5123 13.9435 27.7735 17.7979 23.2005 17.7979C18.6275 17.7979 14.8887 13.9435 14.8887 9.14893C14.8887 4.3544 18.6275 0.5 23.2005 0.5C27.7735 0.5 31.5123 4.3544 31.5123 9.14893Z" stroke="#BDC2C6"/>
                                    <path d="M26.9592 9.53033C27.2521 9.23744 27.2521 8.76256 26.9592 8.46967L22.1862 3.6967C21.8933 3.40381 21.4184 3.40381 21.1255 3.6967C20.8326 3.98959 20.8326 4.46447 21.1255 4.75736L25.3682 9L21.1255 13.2426C20.8326 13.5355 20.8326 14.0104 21.1255 14.3033C21.4184 14.5962 21.8933 14.5962 22.1862 14.3033L26.9592 9.53033ZM0.245117 9.75L26.4288 9.75L26.4288 8.25L0.245117 8.25L0.245117 9.75Z" fill="#FA4A4A"/>
                                    </svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <div class="categories__box">
                            <div class="categories__thumbnail text-center">
                                <img src="assets/img/other/categories2.png" alt="categories-img">
                            </div>
                            <span class="categories__badge">24</span>
                            <div class="categories__content text-center">
                                <h3 class="categories__title"><a href="listing-details.html">Duplex - Houses</a></h3>
                                <p class="categories__desc">With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
                                <a class="categories__link" href="listing-details.html">See Properites <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.5123 9.14893C31.5123 13.9435 27.7735 17.7979 23.2005 17.7979C18.6275 17.7979 14.8887 13.9435 14.8887 9.14893C14.8887 4.3544 18.6275 0.5 23.2005 0.5C27.7735 0.5 31.5123 4.3544 31.5123 9.14893Z" stroke="#BDC2C6"/>
                                    <path d="M26.9592 9.53033C27.2521 9.23744 27.2521 8.76256 26.9592 8.46967L22.1862 3.6967C21.8933 3.40381 21.4184 3.40381 21.1255 3.6967C20.8326 3.98959 20.8326 4.46447 21.1255 4.75736L25.3682 9L21.1255 13.2426C20.8326 13.5355 20.8326 14.0104 21.1255 14.3033C21.4184 14.5962 21.8933 14.5962 22.1862 14.3033L26.9592 9.53033ZM0.245117 9.75L26.4288 9.75L26.4288 8.25L0.245117 8.25L0.245117 9.75Z" fill="#FA4A4A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="categories__box">
                            <div class="categories__thumbnail text-center">
                                <img src="assets/img/other/categories3.png" alt="categories-img">
                            </div>
                            <span class="categories__badge">43</span>
                            <div class="categories__content text-center">
                                <h3 class="categories__title"><a href="listing-details.html">Container Home</a></h3>
                                <p class="categories__desc">With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
                                <a class="categories__link" href="listing-details.html">See Properites <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.5123 9.14893C31.5123 13.9435 27.7735 17.7979 23.2005 17.7979C18.6275 17.7979 14.8887 13.9435 14.8887 9.14893C14.8887 4.3544 18.6275 0.5 23.2005 0.5C27.7735 0.5 31.5123 4.3544 31.5123 9.14893Z" stroke="#BDC2C6"/>
                                    <path d="M26.9592 9.53033C27.2521 9.23744 27.2521 8.76256 26.9592 8.46967L22.1862 3.6967C21.8933 3.40381 21.4184 3.40381 21.1255 3.6967C20.8326 3.98959 20.8326 4.46447 21.1255 4.75736L25.3682 9L21.1255 13.2426C20.8326 13.5355 20.8326 14.0104 21.1255 14.3033C21.4184 14.5962 21.8933 14.5962 22.1862 14.3033L26.9592 9.53033ZM0.245117 9.75L26.4288 9.75L26.4288 8.25L0.245117 8.25L0.245117 9.75Z" fill="#FA4A4A"/>
                                    </svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories section .\ -->

        <!-- Popular featured section  -->
        <section class="popular__featured--section section--padding">
            <div class="container-fluid p-0">
                <div class="section__heading text-center mb-50" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h3 class="section__heading--subtitle color__white h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_6)">
                        <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                        <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                        </g>
                        <defs>
                        <clipPath >
                        <rect width="18" height="18" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <span>Trusted</span> Real estate Care
                    </h3>
                    <h2 class="section__heading--title color__white">Most <span>Popular</span> Cities</h2>
                </div>
                <div class="popular__featured--inner" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="popular__featured--column5 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties1.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">California</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties2.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">Switzerland</h3>
                                            <h5 class="popular__featured--subtitle">More DETAILS
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties3.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">New Jersey</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties4.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">New York</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties5.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">Washington</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties1.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">California</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties2.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">California</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="popular__featured--card">
                                    <div class="popular__featured--thumbnail position-relative">
                                        <a class="popular__featured--link" href="listing-details.html"><img class="popular__featured--img" src="assets/img/property/popular-properties3.png" alt="popular-properties"></a>
                                        <span class="popular__featured--badge">13</span>
                                        <div class="popular__featured--content">
                                            <h3 class="popular__featured--title">California</h3>
                                            <h5 class="popular__featured--subtitle">13 properties
                                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4219 1.67528L17.3926 13.422C17.3918 13.7573 17.2595 14.0725 17.0207 14.3101C16.7816 14.548 16.4657 14.6784 16.1306 14.6777L15.0639 14.6749C14.729 14.6742 14.4135 14.5421 14.1757 14.3031C13.938 14.0643 13.8 13.7405 13.801 13.4056L13.8106 6.54525L2.89752 17.4038C2.40548 17.8934 1.63343 17.895 1.14372 17.4028L0.391553 16.6469C-0.098156 16.1547 -0.131297 15.3438 0.360739 14.8543L11.3128 3.95695L4.39453 3.95165C4.05934 3.95068 3.74986 3.82469 3.51207 3.5857C3.27453 3.34697 3.14693 3.03368 3.14777 2.69863L3.15202 1.63372C3.15286 1.29841 3.28561 0.984048 3.52473 0.746117C3.76359 0.50845 4.07993 0.378344 4.41525 0.379184L16.1618 0.408607C16.4981 0.40958 16.8147 0.542466 17.0521 0.782382C17.2914 1.02191 17.423 1.33917 17.4219 1.67528Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper__nav--btn swiper-button-disabled swiper-button-prev">
                            <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.223772 5.27955L5.27967 0.223543C5.42399 0.0792188 5.61635 0 5.82145 0C6.02678 0 6.21902 0.0793326 6.36335 0.223543L6.82238 0.682693C6.96659 0.82679 7.04604 1.01926 7.04604 1.22448C7.04604 1.42958 6.96659 1.62854 6.82238 1.77264L3.87285 4.72866H13.2437C13.6662 4.72866 14 5.05942 14 5.48203V6.13115C14 6.55376 13.6662 6.91788 13.2437 6.91788H3.83939L6.82227 9.8904C6.96648 10.0347 7.04593 10.222 7.04593 10.4272C7.04593 10.6322 6.96648 10.8221 6.82227 10.9663L6.36323 11.424C6.21891 11.5683 6.02667 11.647 5.82134 11.647C5.61623 11.647 5.42388 11.5673 5.27955 11.423L0.223659 6.3671C0.0789928 6.22232 -0.000566483 6.02905 1.90735e-06 5.82361C-0.000452995 5.61748 0.0789928 5.4241 0.223772 5.27955Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="swiper__nav--btn swiper-button-next">
                            <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7762 5.27955L8.72033 0.223543C8.57601 0.0792188 8.38365 0 8.17855 0C7.97322 0 7.78098 0.0793326 7.63665 0.223543L7.17762 0.682693C7.03341 0.82679 6.95396 1.01926 6.95396 1.22448C6.95396 1.42958 7.03341 1.62854 7.17762 1.77264L10.1272 4.72866H0.756335C0.333835 4.72866 0 5.05942 0 5.48203V6.13115C0 6.55376 0.333835 6.91788 0.756335 6.91788H10.1606L7.17773 9.8904C7.03352 10.0347 6.95407 10.222 6.95407 10.4272C6.95407 10.6322 7.03352 10.8221 7.17773 10.9663L7.63677 11.424C7.78109 11.5683 7.97333 11.647 8.17866 11.647C8.38377 11.647 8.57612 11.5673 8.72045 11.423L13.7763 6.3671C13.921 6.22232 14.0006 6.02905 14 5.82361C14.0005 5.61748 13.921 5.4241 13.7762 5.27955Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <p class="featured__support--desc text-center">Enjoy discounts, eBox, pickup and <a href="javascript:void(0)">delivery</a> with 24 hour support.</p>
                </div>
            </div>
        </section>
        <!-- Popular featured section .\  -->

        <!-- Testimonial section -->
        <section class="testimonial__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-20" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h3 class="section__heading--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_6)">
                        <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                        <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                        </g>
                        <defs>
                        <clipPath >
                        <rect width="18" height="18" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> Trusted Real estate Care
                    </h3>
                    <h2 class="section__heading--title">Find Client’s Feedback</h2>
                </div>
                <div class="testimonial__container position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="testimonial__inner testimonial__swiper--column2 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__card">
                                    <div class="testimonial__card--top d-flex justify-content-between">
                                        <div class="testimonial__author d-flex align-items-center">
                                            <div class="testimonial__author--thumbnail">
                                                <img src="assets/img/other/testimonial-author-thumb3.png" alt="img">
                                            </div>
                                            <div class="testimonial__author--content">
                                                <h3 class="testimonial__author--name">Cameron Williamson</h3>
                                                <span class="testimonial__author--subtitle">Ceo & Founder</span>
                                            </div>
                                        </div>
                                        <span class="testimonial__icon"><svg width="56" height="41" viewBox="0 0 56 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8311 21.1016C17.9536 21.1016 18.0759 21.1354 18.1817 21.2039C18.3821 21.3311 18.4933 21.5575 18.4689 21.7902C18.1183 25.181 17.2177 28.3412 15.7918 31.1837C14.5318 33.6944 12.8821 35.8983 10.864 37.7716C20.7152 32.6251 24.7246 21.6445 23.3721 12.7732C22.5228 7.20455 19.1356 1.25311 12.1763 1.25311C6.17002 1.25308 1.28225 6.02976 1.28225 11.9008C1.28236 17.7707 6.16997 22.5474 12.1763 22.5474C14.0486 22.5473 15.8941 22.0753 17.5159 21.1821C17.6139 21.1277 17.723 21.1017 17.8311 21.1016L17.8311 21.1016ZM6.69995 40.7565C6.45388 40.7565 6.22235 40.6173 6.11549 40.39C5.98301 40.1038 6.08656 39.7655 6.35926 39.598C13.747 35.0813 16.2827 28.1824 17.053 22.8063C15.5225 23.4589 13.8584 23.8006 12.1765 23.8006C5.46212 23.8005 0 18.4615 0 11.9008C0.00010793 5.33901 5.4621 2.89626e-09 12.1765 2.89626e-09C15.527 -7.02862e-05 18.4723 1.27924 20.694 3.6986C22.7266 5.91116 24.0913 8.98545 24.64 12.5894C26.2563 23.1859 20.5827 36.6501 6.88693 40.7294C6.82457 40.7478 6.7611 40.7566 6.69997 40.7565L6.69995 40.7565Z" fill="#FF4638"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9217 21.1017C49.0442 21.1017 49.1666 21.1354 49.2735 21.2039C49.4739 21.3311 49.584 21.5575 49.5607 21.7902C49.21 25.181 48.3084 28.3412 46.8825 31.1837C45.6226 33.6944 43.9739 35.8984 41.9558 37.7716C51.8048 32.6251 55.8152 21.6445 54.4628 12.7732C53.6136 7.20455 50.2274 1.25311 43.2682 1.25311C37.2607 1.25308 32.3741 6.02976 32.3741 11.9008C32.3742 17.7707 37.2607 22.5474 43.2682 22.5474C45.1394 22.5473 46.986 22.0753 48.6079 21.1821C48.7059 21.1277 48.8137 21.1017 48.9217 21.1017L48.9217 21.1017ZM37.7906 40.7565C37.5446 40.7565 37.313 40.6173 37.2073 40.39C37.0738 40.1039 37.1783 39.7656 37.4499 39.5981C44.8389 35.0814 47.3734 28.1824 48.1436 22.8063C46.6132 23.4589 44.9501 23.8006 43.2682 23.8006C36.5539 23.8005 31.0918 18.4615 31.0918 11.9008C31.0919 5.33901 36.5539 2.89626e-09 43.2682 2.89626e-09C46.6176 -7.02862e-05 49.5629 1.27924 51.7847 3.6986C53.8173 5.91116 55.1819 8.98545 55.7318 12.5883C57.347 23.1859 51.6734 36.6501 37.9776 40.7294C37.9153 40.7478 37.8529 40.7566 37.7906 40.7565V40.7565Z" fill="#FF4638"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="testimonial__desc">The most advanced revenue than this. Iwill refer everyone I like Level more and more each day because it makes my easier. It really saves me time and effort. Level is exactly business has been lacking.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__card">
                                    <div class="testimonial__card--top d-flex justify-content-between">
                                        <div class="testimonial__author d-flex align-items-center">
                                            <div class="testimonial__author--thumbnail">
                                                <img src="assets/img/other/testimonial-author-thumb2.png" alt="img">
                                            </div>
                                            <div class="testimonial__author--content">
                                                <h3 class="testimonial__author--name">Cameron Williamson</h3>
                                                <span class="testimonial__author--subtitle">Ceo & Founder</span>
                                            </div>
                                        </div>
                                        <span class="testimonial__icon"><svg width="56" height="41" viewBox="0 0 56 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8311 21.1016C17.9536 21.1016 18.0759 21.1354 18.1817 21.2039C18.3821 21.3311 18.4933 21.5575 18.4689 21.7902C18.1183 25.181 17.2177 28.3412 15.7918 31.1837C14.5318 33.6944 12.8821 35.8983 10.864 37.7716C20.7152 32.6251 24.7246 21.6445 23.3721 12.7732C22.5228 7.20455 19.1356 1.25311 12.1763 1.25311C6.17002 1.25308 1.28225 6.02976 1.28225 11.9008C1.28236 17.7707 6.16997 22.5474 12.1763 22.5474C14.0486 22.5473 15.8941 22.0753 17.5159 21.1821C17.6139 21.1277 17.723 21.1017 17.8311 21.1016L17.8311 21.1016ZM6.69995 40.7565C6.45388 40.7565 6.22235 40.6173 6.11549 40.39C5.98301 40.1038 6.08656 39.7655 6.35926 39.598C13.747 35.0813 16.2827 28.1824 17.053 22.8063C15.5225 23.4589 13.8584 23.8006 12.1765 23.8006C5.46212 23.8005 0 18.4615 0 11.9008C0.00010793 5.33901 5.4621 2.89626e-09 12.1765 2.89626e-09C15.527 -7.02862e-05 18.4723 1.27924 20.694 3.6986C22.7266 5.91116 24.0913 8.98545 24.64 12.5894C26.2563 23.1859 20.5827 36.6501 6.88693 40.7294C6.82457 40.7478 6.7611 40.7566 6.69997 40.7565L6.69995 40.7565Z" fill="#FF4638"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9217 21.1017C49.0442 21.1017 49.1666 21.1354 49.2735 21.2039C49.4739 21.3311 49.584 21.5575 49.5607 21.7902C49.21 25.181 48.3084 28.3412 46.8825 31.1837C45.6226 33.6944 43.9739 35.8984 41.9558 37.7716C51.8048 32.6251 55.8152 21.6445 54.4628 12.7732C53.6136 7.20455 50.2274 1.25311 43.2682 1.25311C37.2607 1.25308 32.3741 6.02976 32.3741 11.9008C32.3742 17.7707 37.2607 22.5474 43.2682 22.5474C45.1394 22.5473 46.986 22.0753 48.6079 21.1821C48.7059 21.1277 48.8137 21.1017 48.9217 21.1017L48.9217 21.1017ZM37.7906 40.7565C37.5446 40.7565 37.313 40.6173 37.2073 40.39C37.0738 40.1039 37.1783 39.7656 37.4499 39.5981C44.8389 35.0814 47.3734 28.1824 48.1436 22.8063C46.6132 23.4589 44.9501 23.8006 43.2682 23.8006C36.5539 23.8005 31.0918 18.4615 31.0918 11.9008C31.0919 5.33901 36.5539 2.89626e-09 43.2682 2.89626e-09C46.6176 -7.02862e-05 49.5629 1.27924 51.7847 3.6986C53.8173 5.91116 55.1819 8.98545 55.7318 12.5883C57.347 23.1859 51.6734 36.6501 37.9776 40.7294C37.9153 40.7478 37.8529 40.7566 37.7906 40.7565V40.7565Z" fill="#FF4638"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="testimonial__desc">The most advanced revenue than this. Iwill refer everyone I like Level more and more each day because it makes my easier. It really saves me time and effort. Level is exactly business has been lacking.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__card">
                                    <div class="testimonial__card--top d-flex justify-content-between">
                                        <div class="testimonial__author d-flex align-items-center">
                                            <div class="testimonial__author--thumbnail">
                                                <img src="assets/img/other/testimonial-author-thumb.png" alt="img">
                                            </div>
                                            <div class="testimonial__author--content">
                                                <h3 class="testimonial__author--name">Cameron Williamson</h3>
                                                <span class="testimonial__author--subtitle">Ceo & Founder</span>
                                            </div>
                                        </div>
                                        <span class="testimonial__icon"><svg width="56" height="41" viewBox="0 0 56 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8311 21.1016C17.9536 21.1016 18.0759 21.1354 18.1817 21.2039C18.3821 21.3311 18.4933 21.5575 18.4689 21.7902C18.1183 25.181 17.2177 28.3412 15.7918 31.1837C14.5318 33.6944 12.8821 35.8983 10.864 37.7716C20.7152 32.6251 24.7246 21.6445 23.3721 12.7732C22.5228 7.20455 19.1356 1.25311 12.1763 1.25311C6.17002 1.25308 1.28225 6.02976 1.28225 11.9008C1.28236 17.7707 6.16997 22.5474 12.1763 22.5474C14.0486 22.5473 15.8941 22.0753 17.5159 21.1821C17.6139 21.1277 17.723 21.1017 17.8311 21.1016L17.8311 21.1016ZM6.69995 40.7565C6.45388 40.7565 6.22235 40.6173 6.11549 40.39C5.98301 40.1038 6.08656 39.7655 6.35926 39.598C13.747 35.0813 16.2827 28.1824 17.053 22.8063C15.5225 23.4589 13.8584 23.8006 12.1765 23.8006C5.46212 23.8005 0 18.4615 0 11.9008C0.00010793 5.33901 5.4621 2.89626e-09 12.1765 2.89626e-09C15.527 -7.02862e-05 18.4723 1.27924 20.694 3.6986C22.7266 5.91116 24.0913 8.98545 24.64 12.5894C26.2563 23.1859 20.5827 36.6501 6.88693 40.7294C6.82457 40.7478 6.7611 40.7566 6.69997 40.7565L6.69995 40.7565Z" fill="#FF4638"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9217 21.1017C49.0442 21.1017 49.1666 21.1354 49.2735 21.2039C49.4739 21.3311 49.584 21.5575 49.5607 21.7902C49.21 25.181 48.3084 28.3412 46.8825 31.1837C45.6226 33.6944 43.9739 35.8984 41.9558 37.7716C51.8048 32.6251 55.8152 21.6445 54.4628 12.7732C53.6136 7.20455 50.2274 1.25311 43.2682 1.25311C37.2607 1.25308 32.3741 6.02976 32.3741 11.9008C32.3742 17.7707 37.2607 22.5474 43.2682 22.5474C45.1394 22.5473 46.986 22.0753 48.6079 21.1821C48.7059 21.1277 48.8137 21.1017 48.9217 21.1017L48.9217 21.1017ZM37.7906 40.7565C37.5446 40.7565 37.313 40.6173 37.2073 40.39C37.0738 40.1039 37.1783 39.7656 37.4499 39.5981C44.8389 35.0814 47.3734 28.1824 48.1436 22.8063C46.6132 23.4589 44.9501 23.8006 43.2682 23.8006C36.5539 23.8005 31.0918 18.4615 31.0918 11.9008C31.0919 5.33901 36.5539 2.89626e-09 43.2682 2.89626e-09C46.6176 -7.02862e-05 49.5629 1.27924 51.7847 3.6986C53.8173 5.91116 55.1819 8.98545 55.7318 12.5883C57.347 23.1859 51.6734 36.6501 37.9776 40.7294C37.9153 40.7478 37.8529 40.7566 37.7906 40.7565V40.7565Z" fill="#FF4638"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="testimonial__desc">The most advanced revenue than this. Iwill refer everyone I like Level more and more each day because it makes my easier. It really saves me time and effort. Level is exactly business has been lacking.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__card">
                                    <div class="testimonial__card--top d-flex justify-content-between">
                                        <div class="testimonial__author d-flex align-items-center">
                                            <div class="testimonial__author--thumbnail">
                                                <img src="assets/img/other/testimonial-author-thumb3.png" alt="img">
                                            </div>
                                            <div class="testimonial__author--content">
                                                <h3 class="testimonial__author--name">Cameron Williamson</h3>
                                                <span class="testimonial__author--subtitle">Ceo & Founder</span>
                                            </div>
                                        </div>
                                        <span class="testimonial__icon"><svg width="56" height="41" viewBox="0 0 56 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8311 21.1016C17.9536 21.1016 18.0759 21.1354 18.1817 21.2039C18.3821 21.3311 18.4933 21.5575 18.4689 21.7902C18.1183 25.181 17.2177 28.3412 15.7918 31.1837C14.5318 33.6944 12.8821 35.8983 10.864 37.7716C20.7152 32.6251 24.7246 21.6445 23.3721 12.7732C22.5228 7.20455 19.1356 1.25311 12.1763 1.25311C6.17002 1.25308 1.28225 6.02976 1.28225 11.9008C1.28236 17.7707 6.16997 22.5474 12.1763 22.5474C14.0486 22.5473 15.8941 22.0753 17.5159 21.1821C17.6139 21.1277 17.723 21.1017 17.8311 21.1016L17.8311 21.1016ZM6.69995 40.7565C6.45388 40.7565 6.22235 40.6173 6.11549 40.39C5.98301 40.1038 6.08656 39.7655 6.35926 39.598C13.747 35.0813 16.2827 28.1824 17.053 22.8063C15.5225 23.4589 13.8584 23.8006 12.1765 23.8006C5.46212 23.8005 0 18.4615 0 11.9008C0.00010793 5.33901 5.4621 2.89626e-09 12.1765 2.89626e-09C15.527 -7.02862e-05 18.4723 1.27924 20.694 3.6986C22.7266 5.91116 24.0913 8.98545 24.64 12.5894C26.2563 23.1859 20.5827 36.6501 6.88693 40.7294C6.82457 40.7478 6.7611 40.7566 6.69997 40.7565L6.69995 40.7565Z" fill="#FF4638"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9217 21.1017C49.0442 21.1017 49.1666 21.1354 49.2735 21.2039C49.4739 21.3311 49.584 21.5575 49.5607 21.7902C49.21 25.181 48.3084 28.3412 46.8825 31.1837C45.6226 33.6944 43.9739 35.8984 41.9558 37.7716C51.8048 32.6251 55.8152 21.6445 54.4628 12.7732C53.6136 7.20455 50.2274 1.25311 43.2682 1.25311C37.2607 1.25308 32.3741 6.02976 32.3741 11.9008C32.3742 17.7707 37.2607 22.5474 43.2682 22.5474C45.1394 22.5473 46.986 22.0753 48.6079 21.1821C48.7059 21.1277 48.8137 21.1017 48.9217 21.1017L48.9217 21.1017ZM37.7906 40.7565C37.5446 40.7565 37.313 40.6173 37.2073 40.39C37.0738 40.1039 37.1783 39.7656 37.4499 39.5981C44.8389 35.0814 47.3734 28.1824 48.1436 22.8063C46.6132 23.4589 44.9501 23.8006 43.2682 23.8006C36.5539 23.8005 31.0918 18.4615 31.0918 11.9008C31.0919 5.33901 36.5539 2.89626e-09 43.2682 2.89626e-09C46.6176 -7.02862e-05 49.5629 1.27924 51.7847 3.6986C53.8173 5.91116 55.1819 8.98545 55.7318 12.5883C57.347 23.1859 51.6734 36.6501 37.9776 40.7294C37.9153 40.7478 37.8529 40.7566 37.7906 40.7565V40.7565Z" fill="#FF4638"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="testimonial__desc">The most advanced revenue than this. Iwill refer everyone I like Level more and more each day because it makes my easier. It really saves me time and effort. Level is exactly business has been lacking.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__card">
                                    <div class="testimonial__card--top d-flex justify-content-between">
                                        <div class="testimonial__author d-flex align-items-center">
                                            <div class="testimonial__author--thumbnail">
                                                <img src="assets/img/other/testimonial-author-thumb2.png" alt="img">
                                            </div>
                                            <div class="testimonial__author--content">
                                                <h3 class="testimonial__author--name">Cameron Williamson</h3>
                                                <span class="testimonial__author--subtitle">Ceo & Founder</span>
                                            </div>
                                        </div>
                                        <span class="testimonial__icon"><svg width="56" height="41" viewBox="0 0 56 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8311 21.1016C17.9536 21.1016 18.0759 21.1354 18.1817 21.2039C18.3821 21.3311 18.4933 21.5575 18.4689 21.7902C18.1183 25.181 17.2177 28.3412 15.7918 31.1837C14.5318 33.6944 12.8821 35.8983 10.864 37.7716C20.7152 32.6251 24.7246 21.6445 23.3721 12.7732C22.5228 7.20455 19.1356 1.25311 12.1763 1.25311C6.17002 1.25308 1.28225 6.02976 1.28225 11.9008C1.28236 17.7707 6.16997 22.5474 12.1763 22.5474C14.0486 22.5473 15.8941 22.0753 17.5159 21.1821C17.6139 21.1277 17.723 21.1017 17.8311 21.1016L17.8311 21.1016ZM6.69995 40.7565C6.45388 40.7565 6.22235 40.6173 6.11549 40.39C5.98301 40.1038 6.08656 39.7655 6.35926 39.598C13.747 35.0813 16.2827 28.1824 17.053 22.8063C15.5225 23.4589 13.8584 23.8006 12.1765 23.8006C5.46212 23.8005 0 18.4615 0 11.9008C0.00010793 5.33901 5.4621 2.89626e-09 12.1765 2.89626e-09C15.527 -7.02862e-05 18.4723 1.27924 20.694 3.6986C22.7266 5.91116 24.0913 8.98545 24.64 12.5894C26.2563 23.1859 20.5827 36.6501 6.88693 40.7294C6.82457 40.7478 6.7611 40.7566 6.69997 40.7565L6.69995 40.7565Z" fill="#FF4638"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9217 21.1017C49.0442 21.1017 49.1666 21.1354 49.2735 21.2039C49.4739 21.3311 49.584 21.5575 49.5607 21.7902C49.21 25.181 48.3084 28.3412 46.8825 31.1837C45.6226 33.6944 43.9739 35.8984 41.9558 37.7716C51.8048 32.6251 55.8152 21.6445 54.4628 12.7732C53.6136 7.20455 50.2274 1.25311 43.2682 1.25311C37.2607 1.25308 32.3741 6.02976 32.3741 11.9008C32.3742 17.7707 37.2607 22.5474 43.2682 22.5474C45.1394 22.5473 46.986 22.0753 48.6079 21.1821C48.7059 21.1277 48.8137 21.1017 48.9217 21.1017L48.9217 21.1017ZM37.7906 40.7565C37.5446 40.7565 37.313 40.6173 37.2073 40.39C37.0738 40.1039 37.1783 39.7656 37.4499 39.5981C44.8389 35.0814 47.3734 28.1824 48.1436 22.8063C46.6132 23.4589 44.9501 23.8006 43.2682 23.8006C36.5539 23.8005 31.0918 18.4615 31.0918 11.9008C31.0919 5.33901 36.5539 2.89626e-09 43.2682 2.89626e-09C46.6176 -7.02862e-05 49.5629 1.27924 51.7847 3.6986C53.8173 5.91116 55.1819 8.98545 55.7318 12.5883C57.347 23.1859 51.6734 36.6501 37.9776 40.7294C37.9153 40.7478 37.8529 40.7566 37.7906 40.7565V40.7565Z" fill="#FF4638"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="testimonial__desc">The most advanced revenue than this. Iwill refer everyone I like Level more and more each day because it makes my easier. It really saves me time and effort. Level is exactly business has been lacking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-disabled swiper-button-prev">
                        <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.223772 5.27955L5.27967 0.223543C5.42399 0.0792188 5.61635 0 5.82145 0C6.02678 0 6.21902 0.0793326 6.36335 0.223543L6.82238 0.682693C6.96659 0.82679 7.04604 1.01926 7.04604 1.22448C7.04604 1.42958 6.96659 1.62854 6.82238 1.77264L3.87285 4.72866H13.2437C13.6662 4.72866 14 5.05942 14 5.48203V6.13115C14 6.55376 13.6662 6.91788 13.2437 6.91788H3.83939L6.82227 9.8904C6.96648 10.0347 7.04593 10.222 7.04593 10.4272C7.04593 10.6322 6.96648 10.8221 6.82227 10.9663L6.36323 11.424C6.21891 11.5683 6.02667 11.647 5.82134 11.647C5.61623 11.647 5.42388 11.5673 5.27955 11.423L0.223659 6.3671C0.0789928 6.22232 -0.000566483 6.02905 1.90735e-06 5.82361C-0.000452995 5.61748 0.0789928 5.4241 0.223772 5.27955Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7762 5.27955L8.72033 0.223543C8.57601 0.0792188 8.38365 0 8.17855 0C7.97322 0 7.78098 0.0793326 7.63665 0.223543L7.17762 0.682693C7.03341 0.82679 6.95396 1.01926 6.95396 1.22448C6.95396 1.42958 7.03341 1.62854 7.17762 1.77264L10.1272 4.72866H0.756335C0.333835 4.72866 0 5.05942 0 5.48203V6.13115C0 6.55376 0.333835 6.91788 0.756335 6.91788H10.1606L7.17773 9.8904C7.03352 10.0347 6.95407 10.222 6.95407 10.4272C6.95407 10.6322 7.03352 10.8221 7.17773 10.9663L7.63677 11.424C7.78109 11.5683 7.97333 11.647 8.17866 11.647C8.38377 11.647 8.57612 11.5673 8.72045 11.423L13.7763 6.3671C13.921 6.22232 14.0006 6.02905 14 5.82361C14.0005 5.61748 13.921 5.4241 13.7762 5.27955Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section .\ -->

        <!-- Building Amenities section -->
        <section class="building__amenities--section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-50" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h3 class="section__heading--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_6)">
                        <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                        <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                        </g>
                        <defs>
                        <clipPath >
                        <rect width="18" height="18" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> Building Amenities
                    </h3>
                    <h2 class="section__heading--title">Building Amenities</h2>
                </div>
                <div class="building__amenities--inner d-flex" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="41" height="31" viewBox="0 0 41 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.857 11.156L37.9924 10.256L34.9565 2.25598C34.7037 1.5964 34.2512 1.02739 33.6589 0.624451C33.0667 0.221515 32.3628 0.00373674 31.6406 0H9.95959C9.23636 0.00151649 8.53089 0.218498 7.9377 0.621887C7.34451 1.02528 6.89193 1.59579 6.64061 2.25699L3.64677 10.157L2.40471 11.289C1.8678 11.7369 1.4367 12.2928 1.14103 12.9185C0.845368 13.5443 0.692146 14.225 0.691895 14.914L0.691895 26.575C0.694877 27.4901 1.06948 28.3669 1.73375 29.0134C2.39803 29.66 3.2979 30.0237 4.23651 30.025H6.47446C7.41307 30.0237 8.31294 29.66 8.97721 29.0134C9.64149 28.3669 10.0161 27.4901 10.0191 26.575V24.883H31.0509V26.575C31.0538 27.4894 31.4279 28.3656 32.0913 29.012C32.7547 29.6585 33.6535 30.0226 34.5914 30.025H36.8304C37.7688 30.0232 38.6684 29.6593 39.3325 29.0128C39.9967 28.3664 40.3714 27.49 40.375 26.575V14.607C40.3714 13.962 40.2352 13.3243 39.9745 12.7316C39.7138 12.1388 39.3338 11.6031 38.857 11.156ZM8.23856 2.82498C8.36961 2.48334 8.60476 2.18899 8.91241 1.98145C9.22006 1.77391 9.58548 1.66314 9.95959 1.664H31.6498C32.0235 1.66497 32.3881 1.77647 32.6954 1.98376C33.0027 2.19106 33.2382 2.48438 33.3709 2.82498L36.016 9.79199H34.0406C33.8404 8.44354 33.1486 7.21053 32.092 6.31879C31.0354 5.42704 29.6847 4.93625 28.2873 4.93625C26.8898 4.93625 25.5391 5.42704 24.4825 6.31879C23.426 7.21053 22.7342 8.44354 22.5339 9.79199H5.59241L8.23856 2.82498ZM32.3114 9.79199H24.2468C24.4379 8.88697 24.9435 8.07398 25.6781 7.4902C26.4127 6.90643 27.3314 6.58762 28.2791 6.58762C29.2268 6.58762 30.1455 6.90643 30.8801 7.4902C31.6147 8.07398 32.1202 8.88697 32.3114 9.79199ZM8.32369 26.575C8.32125 27.0508 8.12567 27.5064 7.77971 27.842C7.43375 28.1776 6.96557 28.366 6.47753 28.366H4.23651C3.74847 28.366 3.28029 28.1776 2.93433 27.842C2.58838 27.5064 2.3928 27.0508 2.39036 26.575V24.402C2.94684 24.729 3.5869 24.8958 4.23651 24.883H8.32369V26.575ZM38.6827 26.575C38.6802 27.0508 38.4846 27.5064 38.1387 27.842C37.7927 28.1776 37.3245 28.366 36.8365 28.366H34.5914C34.1038 28.3647 33.6363 28.1759 33.2907 27.8405C32.945 27.5052 32.749 27.0504 32.7452 26.575V24.883H36.8324C37.482 24.8959 38.1221 24.7292 38.6786 24.402V26.575H38.6827ZM36.8365 23.224H4.23651C3.75032 23.2272 3.28272 23.042 2.93653 22.7091C2.59033 22.3763 2.39388 21.923 2.39036 21.449V14.914C2.39101 14.4626 2.49224 14.0166 2.68704 13.6071C2.88183 13.1975 3.16555 12.8341 3.51856 12.542L3.55241 12.508L4.70523 11.447H36.8129L37.6273 12.301C37.6355 12.318 37.6611 12.326 37.6693 12.342C37.9847 12.6338 38.2361 12.9851 38.4081 13.3744C38.5802 13.7637 38.6694 14.1831 38.6704 14.607V21.449H38.6786C38.6745 21.9233 38.4776 22.3767 38.1311 22.7096C37.7846 23.0426 37.3168 23.2279 36.8304 23.225L36.8365 23.224Z" fill="currentColor"/>
                                    <path d="M11.8854 14.7637H5.52638C5.30132 14.7647 5.08584 14.8526 4.92708 15.0082C4.76832 15.1637 4.6792 15.3742 4.6792 15.5937V19.9057C4.6792 20.1251 4.76832 20.3356 4.92708 20.4911C5.08584 20.6467 5.30132 20.7346 5.52638 20.7357H11.8854C12.1104 20.7346 12.3259 20.6467 12.4846 20.4911C12.6434 20.3356 12.7325 20.1251 12.7325 19.9057V15.5937C12.7325 15.3742 12.6434 15.1637 12.4846 15.0082C12.3259 14.8526 12.1104 14.7647 11.8854 14.7637ZM11.0371 19.0767H6.37356V16.4247H11.0371V19.0767Z" fill="currentColor"/>
                                    <path d="M35.5417 14.7637H29.1827C28.9575 14.7647 28.7419 14.8526 28.583 15.0081C28.4241 15.1636 28.3347 15.3741 28.3345 15.5937V19.9057C28.3347 20.1252 28.4241 20.3357 28.583 20.4912C28.7419 20.6467 28.9575 20.7346 29.1827 20.7357H35.5417C35.7668 20.7346 35.9824 20.6467 36.1413 20.4912C36.3002 20.3357 36.3896 20.1252 36.3899 19.9057V15.5937C36.3896 15.3741 36.3002 15.1636 36.1413 15.0081C35.9824 14.8526 35.7668 14.7647 35.5417 14.7637ZM34.6945 19.0767H30.0258V16.4247H34.6893L34.6945 19.0767Z" fill="currentColor"/>
                                    <path d="M24.6284 18.248H16.4377C16.2122 18.248 15.9959 18.3354 15.8364 18.4909C15.677 18.6463 15.5874 18.8572 15.5874 19.0771C15.5874 19.2969 15.677 19.5078 15.8364 19.6632C15.9959 19.8187 16.2122 19.9061 16.4377 19.9061H24.6284C24.8539 19.9061 25.0702 19.8187 25.2297 19.6632C25.3891 19.5078 25.4787 19.2969 25.4787 19.0771C25.4787 18.8572 25.3891 18.6463 25.2297 18.4909C25.0702 18.3354 24.8539 18.248 24.6284 18.248Z" fill="currentColor"/>
                                    <path d="M24.6284 15.6768H16.4377C16.2122 15.6768 15.9959 15.7641 15.8364 15.9196C15.677 16.075 15.5874 16.2859 15.5874 16.5057C15.5874 16.7256 15.677 16.9365 15.8364 17.0919C15.9959 17.2474 16.2122 17.3347 16.4377 17.3347H24.6284C24.8539 17.3347 25.0702 17.2474 25.2297 17.0919C25.3891 16.9365 25.4787 16.7256 25.4787 16.5057C25.4787 16.2859 25.3891 16.075 25.2297 15.9196C25.0702 15.7641 24.8539 15.6768 24.6284 15.6768Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">01</span>
                            <h3 class="amenities__title">Parking Space</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="36" height="38" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.891 0C28.3442 0.0137292 26.8663 0.625989 25.7825 1.70206C24.6986 2.77813 24.0976 4.22987 24.1115 5.73801V8.77802H10.3946V5.73801C10.3858 5.19136 10.4887 4.6485 10.6972 4.14099C10.9058 3.63349 11.2157 3.1715 11.6091 2.78192C12.0025 2.39234 12.4715 2.08295 12.9887 1.87177C13.5059 1.66058 14.061 1.55182 14.6218 1.55182C15.1825 1.55182 15.7376 1.66058 16.2548 1.87177C16.772 2.08295 17.241 2.39234 17.6344 2.78192C18.0278 3.1715 18.3378 3.63349 18.5463 4.14099C18.7548 4.6485 18.8577 5.19136 18.8489 5.73801C18.8489 5.93878 18.9307 6.13132 19.0763 6.27328C19.2219 6.41525 19.4194 6.49503 19.6253 6.49503C19.8313 6.49503 20.0287 6.41525 20.1744 6.27328C20.32 6.13132 20.4018 5.93878 20.4018 5.73801C20.412 4.99163 20.27 4.2507 19.9841 3.55826C19.6982 2.86581 19.2741 2.23564 18.7363 1.70432C18.1986 1.17299 17.558 0.751113 16.8516 0.463165C16.1453 0.175217 15.3873 0.026947 14.6218 0.026947C13.8562 0.026947 13.0982 0.175217 12.3919 0.463165C11.6855 0.751113 11.0449 1.17299 10.5072 1.70432C9.96945 2.23564 9.54532 2.86581 9.25943 3.55826C8.97353 4.2507 8.83156 4.99163 8.84176 5.73801V25.222C8.83595 25.3256 8.85163 25.4292 8.88786 25.5267C8.92409 25.6242 8.98012 25.7136 9.05261 25.7895C9.1251 25.8654 9.21255 25.9263 9.30973 25.9685C9.4069 26.0107 9.51181 26.0333 9.61817 26.035C9.72123 26.0346 9.82319 26.0143 9.91814 25.9753C10.0131 25.9362 10.0992 25.8792 10.1714 25.8075C10.2436 25.7358 10.3005 25.6508 10.3388 25.5575C10.3771 25.4642 10.3961 25.3645 10.3946 25.264V23.337H24.1546V25.264C24.1546 25.4648 24.2364 25.6573 24.382 25.7993C24.5276 25.9413 24.7251 26.021 24.931 26.021C25.1369 26.021 25.3344 25.9413 25.48 25.7993C25.6256 25.6573 25.7074 25.4648 25.7074 25.264V5.73801C25.7074 4.65062 26.1504 3.60777 26.9391 2.83887C27.7277 2.06997 28.7973 1.638 29.9125 1.638C31.0278 1.638 32.0974 2.06997 32.886 2.83887C33.6746 3.60777 34.1177 4.65062 34.1177 5.73801C34.1177 5.93878 34.1995 6.13132 34.3451 6.27328C34.4907 6.41525 34.6881 6.49503 34.8941 6.49503C35.1 6.49503 35.2975 6.41525 35.4431 6.27328C35.5887 6.13132 35.6705 5.93878 35.6705 5.73801C35.6841 4.22995 35.083 2.77834 33.9992 1.70233C32.9154 0.626321 31.4377 0.0139935 29.891 0ZM24.1546 21.71H10.3946V18.97H24.1546V21.71ZM24.1546 17.428H10.3946V14.688H24.1546V17.428ZM24.1546 13.06H10.3946V10.32H24.1546V13.06Z" fill="currentColor"/>
                                    <path d="M33.73 29.0323C33.6919 28.9376 33.634 28.8518 33.56 28.7802C33.4859 28.7086 33.3974 28.6529 33.3 28.6165C33.2026 28.5802 33.0985 28.5641 32.9943 28.5692C32.8902 28.5744 32.7883 28.6006 32.6951 28.6463C28.8131 30.3163 26.9157 29.5033 24.888 28.6463C22.8172 27.7903 20.7044 26.8913 16.9516 28.6463C13.0695 30.3163 11.171 29.5033 9.14437 28.6463C7.0736 27.7903 4.91668 26.8913 1.16489 28.6463C0.977249 28.7363 0.832442 28.8934 0.760609 29.0849C0.688777 29.2764 0.695452 29.4875 0.779246 29.6743C0.864404 29.8589 1.02113 30.0031 1.21511 30.0752C1.40908 30.1474 1.62447 30.1417 1.81412 30.0593C2.83523 29.4961 3.98992 29.2037 5.16308 29.2112C6.33623 29.2188 7.48686 29.526 8.50027 30.1023C9.85774 30.7579 11.3432 31.123 12.8572 31.1733C14.4871 31.1274 16.089 30.7478 17.5587 30.0593C18.5797 29.4962 19.7342 29.2038 20.9072 29.2114C22.0802 29.2189 23.2306 29.5261 24.2439 30.1023C25.6013 30.7579 27.0868 31.123 28.6008 31.1733C30.2307 31.1274 31.8326 30.7478 33.3023 30.0593C33.4943 29.9734 33.6454 29.8192 33.7249 29.6284C33.8044 29.4376 33.8062 29.2244 33.73 29.0323Z" fill="currentColor"/>
                                    <path d="M33.687 34.9412C33.6488 34.8466 33.5908 34.7609 33.5167 34.6894C33.4426 34.6179 33.3541 34.5623 33.2567 34.5261C33.1593 34.4898 33.0553 34.4738 32.9512 34.479C32.8471 34.4842 32.7452 34.5105 32.6521 34.5562C28.7701 36.2262 26.8727 35.4122 24.845 34.5562C22.7742 33.6992 20.6614 32.8002 16.9086 34.5562C13.0265 36.2262 11.128 35.4122 9.10137 34.5562C7.0306 33.6992 4.91676 32.8002 1.12086 34.5562C0.932932 34.6456 0.787696 34.8024 0.71546 34.9938C0.643224 35.1851 0.649568 35.3963 0.733168 35.5832C0.830664 35.7674 0.995495 35.9093 1.19508 35.9808C1.39467 36.0522 1.6145 36.0481 1.81112 35.9692C2.83218 35.4059 3.98681 35.1134 5.15994 35.1208C6.33307 35.1282 7.48374 35.4352 8.49727 36.0112C9.85474 36.6668 11.3402 37.0319 12.8542 37.0822C14.484 37.0362 16.0858 36.657 17.5557 35.9692C18.5766 35.4059 19.7311 35.1134 20.904 35.1208C22.077 35.1281 23.2275 35.4352 24.2409 36.0112C25.5983 36.6668 27.0838 37.0319 28.5978 37.0822C30.2276 37.0362 31.8294 36.657 33.2993 35.9692C33.3957 35.9285 33.4827 35.8692 33.5549 35.7947C33.6271 35.7203 33.683 35.6324 33.7192 35.5362C33.7555 35.4401 33.7713 35.3378 33.7658 35.2355C33.7603 35.1332 33.7334 35.0331 33.687 34.9412Z" fill="currentColor"/>
                                    </svg>

                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">02</span>
                            <h3 class="amenities__title">Swimming Pool</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.9241 5.849C24.1438 4.52979 19.5648 2.59614 15.3077 0.098999C15.1979 0.0342357 15.0719 0 14.9436 0C14.8152 0 14.6893 0.0342357 14.5795 0.098999C10.3309 2.61282 5.74914 4.54746 0.962046 5.849C0.809441 5.89179 0.675396 5.98212 0.580388 6.10617C0.48538 6.23022 0.434632 6.38119 0.435891 6.53601V13.816C0.39353 16.6537 0.937333 19.4707 2.03491 22.0993C3.13249 24.7278 4.76139 27.1141 6.82461 29.116C9.96204 32.176 13.6164 33.869 14.9436 33.869C16.2708 33.869 19.9251 32.176 23.0626 29.116C25.1254 27.1139 26.754 24.7275 27.8514 22.099C28.9488 19.4705 29.4925 16.6536 29.4502 13.816V6.53601C29.4515 6.38119 29.4008 6.23022 29.3058 6.10617C29.2107 5.98212 29.0767 5.89179 28.9241 5.849ZM28.0195 13.816C28.0603 16.4651 27.5537 19.0952 26.5299 21.5493C25.5061 24.0035 23.9862 26.2317 22.0605 28.101C18.9754 31.11 15.6769 32.447 14.9436 32.447C14.2102 32.447 10.9118 31.11 7.82564 28.101C5.90036 26.2315 4.38068 24.0032 3.35711 21.5491C2.33353 19.0949 1.827 16.465 1.86769 13.816V7.077C6.45127 5.7833 10.8458 3.92178 14.9436 1.53799C19.0499 3.90571 23.4422 5.76632 28.0195 7.077V13.816Z" fill="currentColor"/>
                                    <path d="M8.60038 6.99693C8.56698 6.91137 8.51655 6.83309 8.452 6.76661C8.38744 6.70014 8.31003 6.64678 8.22423 6.6096C8.13843 6.57242 8.04593 6.55218 7.95207 6.55C7.8582 6.54782 7.76482 6.56378 7.67731 6.59694C6.39833 7.09694 5.08654 7.55992 3.77987 7.96892C3.6333 8.01604 3.50581 8.10724 3.4157 8.22941C3.32559 8.35158 3.2775 8.49846 3.27833 8.64894V11.4009C3.27833 11.5866 3.35397 11.7646 3.48861 11.8959C3.62325 12.0272 3.80587 12.1009 3.99628 12.1009C4.18669 12.1009 4.36931 12.0272 4.50395 11.8959C4.63859 11.7646 4.71423 11.5866 4.71423 11.4009V9.17091C5.88859 8.79291 7.06192 8.37093 8.20859 7.92393C8.38518 7.84998 8.52507 7.71154 8.5983 7.53828C8.67153 7.36502 8.67227 7.17072 8.60038 6.99693Z" fill="currentColor"/>
                                    <path d="M9.9588 7.13242C10.0578 7.13256 10.1557 7.1121 10.246 7.07243H10.2593C10.4341 6.99388 10.5703 6.85167 10.6388 6.67631C10.7072 6.50094 10.7025 6.30641 10.6255 6.13444C10.5888 6.04934 10.5352 5.97223 10.4676 5.9076C10.4001 5.84297 10.32 5.79212 10.232 5.75803C10.144 5.72395 10.05 5.70733 9.95535 5.70911C9.86071 5.7109 9.7674 5.73107 9.68085 5.76844L9.66957 5.77345C9.49468 5.85161 9.35824 5.99355 9.28958 6.16877C9.22091 6.34399 9.22551 6.53848 9.30239 6.71043C9.35785 6.83539 9.44949 6.94187 9.56608 7.01682C9.68267 7.09178 9.81915 7.13195 9.9588 7.13242Z" fill="currentColor"/>
                                    <path d="M23.4697 22.9712C23.3912 22.9202 23.303 22.8849 23.2103 22.8677C23.1176 22.8504 23.0222 22.8515 22.93 22.8708C22.8377 22.8901 22.7503 22.9272 22.673 22.98C22.5957 23.0328 22.5301 23.1003 22.48 23.1782C21.878 24.0917 21.1892 24.9478 20.4225 25.7352C19.7865 26.3905 19.1008 26.9982 18.3712 27.5532C18.2193 27.6697 18.12 27.8395 18.0948 28.0264C18.0695 28.2132 18.1201 28.4023 18.2359 28.5532C18.2917 28.6276 18.3622 28.6902 18.4433 28.7374C18.5245 28.7846 18.6145 28.8154 18.7081 28.828C18.8016 28.8406 18.8969 28.8347 18.9881 28.8107C19.0793 28.7867 19.1646 28.745 19.2389 28.6882C20.0262 28.0893 20.7664 27.4338 21.4533 26.7272C22.2828 25.8745 23.028 24.9474 23.6789 23.9582C23.7832 23.7997 23.8197 23.6076 23.7806 23.4232C23.7415 23.2387 23.6299 23.0765 23.4697 22.9712Z" fill="currentColor"/>
                                    <path d="M16.708 28.671L16.667 28.695C16.5021 28.7922 16.3827 28.9482 16.334 29.1299C16.2854 29.3116 16.3114 29.5047 16.4065 29.668C16.4676 29.7751 16.5568 29.8645 16.6649 29.927C16.773 29.9895 16.8962 30.023 17.0219 30.024C17.1482 30.0228 17.2719 29.9882 17.3798 29.924L17.428 29.896C17.5925 29.798 17.7113 29.6413 17.759 29.4591C17.8067 29.277 17.7796 29.0839 17.6834 28.921C17.6367 28.8416 17.5743 28.7721 17.4998 28.7164C17.4253 28.6608 17.3402 28.6202 17.2494 28.5969C17.1586 28.5736 17.064 28.5682 16.9711 28.5809C16.8781 28.5936 16.7887 28.6242 16.708 28.671Z" fill="currentColor"/>
                                    <path d="M10.0648 15.4816C9.85117 15.2668 9.59548 15.096 9.31288 14.9794C9.03028 14.8627 8.72653 14.8026 8.41965 14.8026C8.11277 14.8026 7.80901 14.8627 7.52641 14.9794C7.24381 15.096 6.98812 15.2668 6.77452 15.4816C6.33791 15.9206 6.09375 16.5081 6.09375 17.1196C6.09375 17.7311 6.33791 18.3186 6.77452 18.7576L11.0002 22.9656C11.2139 23.1804 11.4697 23.3511 11.7524 23.4677C12.0351 23.5842 12.3389 23.6443 12.6458 23.6443C12.9527 23.6443 13.2565 23.5842 13.5392 23.4677C13.8219 23.3511 14.0777 23.1804 14.2914 22.9656L23.112 14.1826C23.5486 13.7436 23.7927 13.1562 23.7927 12.5446C23.7927 11.9331 23.5486 11.3457 23.112 10.9066C22.8983 10.6918 22.6425 10.521 22.3598 10.4043C22.0771 10.2876 21.7733 10.2275 21.4663 10.2275C21.1594 10.2275 20.8555 10.2876 20.5728 10.4043C20.2901 10.521 20.0344 10.6918 19.8207 10.9066L12.6412 18.0506L10.0648 15.4816ZM20.834 11.9136C20.9162 11.8308 21.0146 11.7649 21.1234 11.7199C21.2322 11.675 21.3492 11.6518 21.4673 11.6518C21.5855 11.6518 21.7025 11.675 21.8113 11.7199C21.9201 11.7649 22.0185 11.8308 22.1007 11.9136C22.2689 12.0825 22.363 12.3087 22.363 12.5441C22.363 12.7796 22.2689 13.0057 22.1007 13.1746L13.2802 21.9576C13.1979 22.0402 13.0994 22.1059 12.9906 22.1507C12.8818 22.1955 12.7649 22.2186 12.6468 22.2186C12.5287 22.2186 12.4118 22.1955 12.303 22.1507C12.1943 22.1059 12.0958 22.0402 12.0135 21.9576L7.78683 17.7506C7.61901 17.5813 7.5252 17.3551 7.5252 17.1196C7.5252 16.8842 7.61901 16.658 7.78683 16.4886C7.86922 16.406 7.96776 16.3403 8.07663 16.2955C8.1855 16.2507 8.30249 16.2276 8.42067 16.2276C8.53886 16.2276 8.65585 16.2507 8.76472 16.2955C8.87358 16.3403 8.97213 16.406 9.05452 16.4886L12.1407 19.5616C12.2064 19.6278 12.285 19.6804 12.372 19.7163C12.4589 19.7522 12.5524 19.7707 12.6468 19.7707C12.7413 19.7707 12.8347 19.7522 12.9217 19.7163C13.0086 19.6804 13.0873 19.6278 13.153 19.5616L20.834 11.9136Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">03</span>
                            <h3 class="amenities__title">Privat Security</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="39" height="35" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.2818 19.5733C38.1366 18.6518 37.6896 17.8008 37.0075 17.1475C36.3253 16.4941 35.4447 16.0735 34.4972 15.9483V14.8363C34.5317 13.3977 33.98 12.0045 32.9631 10.9616C31.9462 9.91875 30.5469 9.3113 29.0715 9.27227C27.6274 9.31654 26.2566 9.90301 25.2455 10.9092C24.2343 11.9155 23.6608 13.2637 23.6449 14.6723H23.6818L23.6449 14.6783V26.7273C23.7019 28.5188 23.0284 30.2594 21.772 31.5678C20.5156 32.8762 18.7785 33.6459 16.9413 33.7083C15.1045 33.6449 13.3682 32.8748 12.1122 31.5666C10.8561 30.2584 10.1825 28.5184 10.2387 26.7273V25.6873C11.1618 25.6873 12.1536 25.0443 12.1536 23.2413V21.7033C14.0909 21.2912 15.8325 20.2623 17.104 18.7788C18.3755 17.2952 19.1045 15.4413 19.1762 13.5093V12.2343H17.9003L17.8736 4.2763C17.8639 3.55655 17.5958 2.86285 17.116 2.31585C16.6361 1.76885 15.9747 1.40313 15.2469 1.28228C15.0842 0.818974 14.741 0.436729 14.2915 0.218165C13.842 -0.000397801 13.3224 -0.0377186 12.8449 0.114284C12.609 0.185871 12.39 0.302428 12.2007 0.457179C12.0114 0.61193 11.8555 0.801804 11.7421 1.01577C11.6286 1.22974 11.5599 1.46353 11.5399 1.70361C11.5198 1.94368 11.5489 2.18527 11.6254 2.4143C11.7881 2.87761 12.1313 3.25986 12.5808 3.47842C13.0303 3.69698 13.55 3.7343 14.0274 3.5823C14.2906 3.50101 14.5322 3.36452 14.7355 3.18243C14.9387 3.00034 15.0986 2.77706 15.2039 2.52829C15.5991 2.6333 15.9485 2.86084 16.1994 3.17654C16.4503 3.49224 16.589 3.87894 16.5946 4.27829L16.6233 12.2333H15.3464V13.5263C15.3156 14.57 14.942 15.5765 14.2807 16.3977C13.6193 17.2189 12.7051 17.8115 11.6726 18.0883C10.529 18.4353 9.30432 18.4353 8.16078 18.0883C7.12938 17.8105 6.2166 17.2174 5.55659 16.3963C4.89659 15.5751 4.52418 14.5692 4.49411 13.5263V12.2333H2.57924V4.2843C2.58315 3.87908 2.72423 3.48647 2.98056 3.16748C3.23688 2.84848 3.59408 2.62097 3.99667 2.52029C4.18962 2.97685 4.55853 3.34143 5.02415 3.5357C5.48977 3.72997 6.01497 3.73844 6.48693 3.55929C6.7206 3.47371 6.93446 3.34362 7.11601 3.1766C7.29757 3.00958 7.4432 2.80899 7.5444 2.58651C7.6456 2.36404 7.70035 2.12415 7.70545 1.88082C7.71055 1.6375 7.6659 1.3956 7.57411 1.16928C7.38135 0.71155 7.01191 0.345982 6.54535 0.151271C6.0788 -0.0434404 5.55248 -0.0517 5.07975 0.128291C4.8164 0.22623 4.57861 0.379901 4.38352 0.578242C4.18843 0.776583 4.0409 1.01466 3.95154 1.27529C3.21628 1.39004 2.54639 1.75482 2.06056 2.30502C1.57472 2.85521 1.3043 3.5553 1.29719 4.28128V12.2303H0.0253906V13.5023C0.0957398 15.4354 0.824147 17.2906 2.09572 18.7754C3.36728 20.2602 5.10964 21.29 7.04796 21.7023V23.2403C7.04796 25.0403 8.0377 25.6863 8.96283 25.6863V26.7303C8.91014 28.8482 9.72022 30.9001 11.2157 32.437C12.7113 33.9738 14.7704 34.8703 16.9423 34.9303C19.1143 34.8701 21.1733 33.9735 22.6689 32.4367C24.1646 30.9 24.975 28.8482 24.9228 26.7303V14.7063C24.9243 13.6183 25.3568 12.573 26.1301 11.7887C26.9034 11.0043 27.9576 10.5416 29.0726 10.4973C30.2122 10.5392 31.2884 11.0195 32.0658 11.833C32.8433 12.6465 33.2587 13.727 33.2213 14.8383V15.9483C32.6456 16.0226 32.0906 16.2071 31.5883 16.4914C31.086 16.7756 30.6464 17.154 30.2947 17.6046C29.943 18.0552 29.6863 18.5692 29.5392 19.117C29.3921 19.6647 29.3576 20.2355 29.4377 20.7963C29.6195 21.9295 30.2536 22.9466 31.2016 23.6258C32.1497 24.3049 33.3347 24.5909 34.4982 24.4213C35.074 24.347 35.6289 24.1625 36.1312 23.8782C36.6335 23.5939 37.0731 23.2156 37.4248 22.765C37.7765 22.3144 38.0332 21.8004 38.1803 21.2526C38.3274 20.7048 38.3619 20.1341 38.2818 19.5733ZM13.4305 2.44628C13.3068 2.44412 13.1866 2.40636 13.0848 2.33776C12.9831 2.26917 12.9044 2.17278 12.8586 2.06073C12.8129 1.94867 12.8021 1.82592 12.8277 1.70791C12.8532 1.5899 12.914 1.48191 13.0023 1.39746C13.0906 1.313 13.2026 1.25586 13.3241 1.23324C13.4456 1.21062 13.5712 1.22351 13.6853 1.27029C13.7993 1.31707 13.8966 1.39566 13.9649 1.49618C14.0333 1.5967 14.0697 1.71468 14.0695 1.83529C14.0688 1.91627 14.0518 1.99634 14.0193 2.07089C13.9869 2.14544 13.9397 2.21302 13.8805 2.26977C13.8212 2.32652 13.7511 2.37132 13.674 2.40161C13.597 2.4319 13.5146 2.44708 13.4315 2.44628H13.4305ZM5.76898 1.22329C5.89262 1.22546 6.01285 1.26317 6.11458 1.33172C6.21631 1.40027 6.295 1.49661 6.34079 1.60861C6.38657 1.72061 6.3974 1.84329 6.37192 1.96127C6.34644 2.07925 6.28579 2.18729 6.19757 2.27178C6.10936 2.35628 5.99751 2.41348 5.87607 2.43621C5.75462 2.45895 5.629 2.44619 5.51496 2.39956C5.40092 2.35294 5.30354 2.27452 5.23506 2.17413C5.16657 2.07374 5.13003 1.95586 5.13001 1.83529C5.13068 1.75418 5.14774 1.674 5.18023 1.59933C5.21272 1.52466 5.25999 1.45695 5.31934 1.40011C5.37869 1.34327 5.44895 1.29837 5.5261 1.26803C5.60326 1.23769 5.68579 1.2225 5.76898 1.22329ZM1.30231 13.5023V13.4533H3.21719V13.5233C3.24826 14.8274 3.70773 16.0874 4.52802 17.118C5.3483 18.1485 6.48611 18.8952 7.77411 19.2483C9.17078 19.6723 10.6667 19.6723 12.0633 19.2483C13.352 18.8959 14.4906 18.1495 15.3115 17.1188C16.1324 16.0882 16.5922 14.8278 16.6233 13.5233V13.4533H17.9003V13.5023C17.8228 15.2389 17.1324 16.8961 15.9457 18.1934C14.7591 19.4907 13.1492 20.3484 11.3885 20.6213C10.5018 20.7914 9.59446 20.8342 8.69514 20.7483C8.39943 20.7201 8.10538 20.6774 7.81411 20.6203C6.0534 20.3478 4.4434 19.4903 3.25671 18.1931C2.07003 16.896 1.37959 15.2388 1.30231 13.5023ZM8.96283 24.4603C8.38847 24.4603 8.32488 23.6043 8.32488 23.2373V21.9373C8.37513 21.9443 8.42744 21.9463 8.47975 21.9513C8.53206 21.9563 8.60693 21.9633 8.67155 21.9683C8.97308 21.9943 9.2777 22.0113 9.58436 22.0113H9.61616C9.92385 22.0113 10.2315 21.9943 10.5269 21.9683C10.5905 21.9633 10.6582 21.9583 10.7239 21.9513C10.7895 21.9443 10.8264 21.9443 10.8777 21.9373V23.2373C10.8777 23.6043 10.8131 24.4603 10.2387 24.4603H8.96283ZM33.8603 23.2373C33.2424 23.2267 32.6415 23.0383 32.133 22.6958C31.6245 22.3533 31.2312 21.8721 31.0023 21.3124C30.7734 20.7527 30.7192 20.1395 30.8465 19.5499C30.9738 18.9603 31.2769 18.4205 31.7177 17.9982C32.1586 17.576 32.7176 17.2901 33.3245 17.1766C33.9314 17.063 34.5592 17.1268 35.1291 17.3599C35.6989 17.593 36.1855 17.9851 36.5276 18.4868C36.8697 18.9886 37.0522 19.5778 37.0521 20.1803C37.0445 20.9983 36.704 21.7799 36.1054 22.3532C35.5069 22.9265 34.6993 23.2445 33.8603 23.2373Z" fill="currentColor"/>
                                    <path d="M33.8609 18.3448C33.4902 18.3511 33.1296 18.464 32.8244 18.6695C32.5193 18.8749 32.2832 19.1637 32.1457 19.4995C32.0083 19.8353 31.9757 20.2032 32.052 20.557C32.1283 20.9108 32.31 21.2348 32.5745 21.4882C32.839 21.7416 33.1743 21.9133 33.5385 21.9815C33.9027 22.0498 34.2794 22.0116 34.6214 21.8718C34.9634 21.7321 35.2554 21.4969 35.4608 21.1958C35.6662 20.8948 35.7758 20.5413 35.7758 20.1798C35.7737 19.9367 35.7224 19.6964 35.625 19.4726C35.5277 19.2489 35.386 19.046 35.2082 18.8756C35.0304 18.7052 34.8199 18.5706 34.5887 18.4795C34.3576 18.3885 34.1103 18.3427 33.8609 18.3448ZM33.8609 20.7908C33.7372 20.7888 33.6168 20.7512 33.515 20.6827C33.4131 20.6143 33.3342 20.5179 33.2883 20.4059C33.2424 20.2938 33.2315 20.1711 33.2569 20.053C33.2824 19.9349 33.3431 19.8268 33.4313 19.7423C33.5196 19.6577 33.6316 19.6005 33.7531 19.5778C33.8746 19.5551 34.0004 19.5679 34.1144 19.6147C34.2285 19.6614 34.3259 19.74 34.3943 19.8406C34.4627 19.9411 34.4991 20.0591 34.4989 20.1798C34.4962 20.3426 34.4276 20.4977 34.3081 20.6114C34.1886 20.7251 34.0279 20.7881 33.8609 20.7868V20.7908Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">04</span>
                            <h3 class="amenities__title">Medical Center</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="36" height="31" viewBox="0 0 36 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2498 -6.85808e-06H10.6601C10.5149 -0.00851745 10.372 0.0392558 10.2627 0.132897C10.1535 0.226539 10.0865 0.358469 10.0765 0.499993V4.009H1.32675C1.18158 4.00075 1.03893 4.04862 0.92969 4.14221C0.820455 4.23579 0.75344 4.36757 0.743164 4.509L0.743164 29.579C0.753179 29.7205 0.820119 29.8525 0.929415 29.9461C1.03871 30.0397 1.18152 30.0875 1.32675 30.079H18.2498C18.3951 30.0875 18.5379 30.0397 18.6472 29.9461C18.7565 29.8525 18.8234 29.7205 18.8334 29.579V0.501C18.8237 0.359297 18.7568 0.227117 18.6475 0.133263C18.5382 0.03941 18.3952 -0.00850923 18.2498 -6.85808e-06ZM17.6662 26.068H11.2478V25.068H17.6662V26.068ZM1.91034 7.52001H10.0765V22.559H1.91034V7.52001ZM17.6662 5.514H11.2478V4.014H17.6662V5.514ZM1.91034 23.562H10.0765V25.062H1.91034V23.562ZM11.2437 24.062V6.51699H17.6662V24.063L11.2437 24.062ZM17.6662 1.00201V3.00799H11.2478V1.00201H17.6662ZM10.0765 5.01299V6.51299H1.91034V5.01299H10.0765ZM1.91034 26.068H10.0765V29.079H1.91034V26.068ZM11.2437 29.076V27.071H17.6662V29.079L11.2437 29.076Z" fill="currentColor"/>
                                    <path d="M35.7384 27.4457L28.7363 4.38473C28.7148 4.31826 28.6795 4.25675 28.6328 4.20397C28.5861 4.15119 28.5288 4.10825 28.4645 4.07772C28.3272 4.01048 28.17 3.99244 28.0204 4.02673L19.2676 6.03274C19.1986 6.0445 19.1327 6.06995 19.0741 6.10751C19.0155 6.14507 18.9654 6.19392 18.927 6.25109C18.8885 6.30826 18.8625 6.37251 18.8506 6.43987C18.8386 6.50723 18.8409 6.57627 18.8574 6.64272L25.8594 29.7037C25.8812 29.7701 25.9165 29.8315 25.9632 29.8842C26.0099 29.937 26.0671 29.98 26.1312 30.0107C26.2685 30.0781 26.4259 30.0958 26.5753 30.0607L35.3281 28.0557C35.3972 28.044 35.4631 28.0185 35.5217 27.9809C35.5802 27.9434 35.6303 27.8945 35.6688 27.8374C35.7072 27.7802 35.7332 27.7159 35.7452 27.6486C35.7572 27.5812 35.7549 27.5122 35.7384 27.4457ZM21.0584 9.93472L28.6851 8.18774L28.9589 9.08773L21.3333 10.8367L21.0584 9.93472ZM29.2533 10.0627L32.6379 21.2167L25.0153 22.9637L21.6307 11.8097L29.2533 10.0627ZM32.9353 22.1867L33.5333 24.1537L25.9066 25.9007L25.3117 23.9337L32.9353 22.1867ZM27.7548 5.12573L28.3897 7.21874L20.764 8.96471L20.1292 6.87273L27.7548 5.12573ZM26.8317 28.9637L26.1969 26.8707L33.8225 25.1237L34.4574 27.2157L26.8317 28.9637Z" fill="currentColor"/>
                                    <path d="M8.33327 9.02441H3.66147C3.51623 9.0159 3.37343 9.06364 3.26413 9.15728C3.15484 9.25092 3.0879 9.38288 3.07788 9.52441V13.5344C3.08816 13.6758 3.15517 13.8076 3.26441 13.9012C3.37364 13.9948 3.5163 14.0426 3.66147 14.0344H8.33327C8.47844 14.0426 8.62109 13.9948 8.73033 13.9012C8.83956 13.8076 8.90658 13.6758 8.91685 13.5344V9.52441C8.90684 9.38288 8.8399 9.25092 8.7306 9.15728C8.62131 9.06364 8.4785 9.0159 8.33327 9.02441ZM7.74968 13.0344H4.24506V10.0264H7.7466L7.74968 13.0344Z" fill="currentColor"/>
                                </svg>

                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">05</span>
                            <h3 class="amenities__title">Library Area</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="39" height="35" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.9232 20.726V14.947C31.9232 12.678 24.0596 12.073 19.4103 12.073C14.7611 12.073 6.89752 12.678 6.89752 14.947V20.726C5.23543 20.8227 3.67089 21.5233 2.51266 22.6896C1.35443 23.8559 0.686653 25.4032 0.641113 27.026C0.660684 27.6544 0.935205 28.2495 1.40441 28.6808C1.87361 29.112 2.49915 29.344 3.14368 29.326V32.775C3.15949 33.2453 3.36575 33.6903 3.71733 34.0127C4.06891 34.3351 4.53716 34.5085 5.01957 34.495H6.27086C6.73287 34.5045 7.18154 34.3436 7.52722 34.0446C7.87289 33.7456 8.09011 33.3304 8.13547 32.882C8.73957 32.354 12.995 31.62 19.4073 31.62C25.8196 31.62 30.0739 32.354 30.6791 32.88C30.7236 33.328 30.9399 33.7431 31.2845 34.0424C31.6292 34.3418 32.077 34.5034 32.5385 34.495H33.7898C34.2731 34.5085 34.7421 34.3344 35.0938 34.0109C35.4456 33.6875 35.6512 33.2412 35.6657 32.77V29.321C36.3103 29.339 36.9358 29.107 37.405 28.6758C37.8742 28.2445 38.1487 27.6494 38.1683 27.021C38.1228 25.3982 37.455 23.851 36.2967 22.6847C35.1385 21.5184 33.574 20.8177 31.9119 20.721L31.9232 20.726ZM19.4103 13.226C26.3468 13.226 30.4134 14.353 30.6698 14.963V20.695H29.3006C29.3743 20.5117 29.4132 20.3169 29.4155 20.12V17.245C29.4007 16.7739 29.195 16.3277 28.8433 16.0044C28.4916 15.681 28.0228 15.5068 27.5396 15.52H21.9098C21.4264 15.5065 20.9573 15.6806 20.6055 16.004C20.2536 16.3274 20.0477 16.7737 20.0329 17.245V20.12C20.0351 20.3169 20.0741 20.5117 20.1478 20.695H18.6668C18.7405 20.5117 18.7794 20.3169 18.7816 20.12V17.245C18.7669 16.7737 18.561 16.3274 18.2091 16.004C17.8572 15.6806 17.3881 15.5065 16.9047 15.52H11.275C10.7918 15.5068 10.3229 15.681 9.97124 16.0044C9.61958 16.3277 9.41381 16.7739 9.39906 17.245V20.12C9.40129 20.3169 9.44021 20.5117 9.51393 20.695H8.14778V14.964C8.37547 14.358 12.4473 13.223 19.4103 13.223V13.226ZM21.2873 20.126V17.251C21.2924 17.094 21.3611 16.9453 21.4783 16.8375C21.5956 16.7298 21.7518 16.6717 21.9129 16.676H27.5427C27.7037 16.6717 27.86 16.7298 27.9772 16.8375C28.0945 16.9453 28.1632 17.094 28.1683 17.251V20.126C28.1632 20.283 28.0945 20.4317 27.9772 20.5395C27.86 20.6472 27.7037 20.7053 27.5427 20.701H21.9098C21.8297 20.7031 21.75 20.6898 21.6752 20.6619C21.6004 20.6339 21.5319 20.5918 21.4738 20.5381C21.4157 20.4843 21.369 20.4198 21.3365 20.3484C21.304 20.2771 21.2862 20.2001 21.2842 20.122L21.2873 20.126ZM10.6524 20.126V17.251C10.6575 17.094 10.7262 16.9453 10.8434 16.8375C10.9607 16.7298 11.117 16.6717 11.278 16.676H16.9078C17.0689 16.6717 17.2251 16.7298 17.3424 16.8375C17.4596 16.9453 17.5283 17.094 17.5334 17.251V20.126C17.5283 20.283 17.4596 20.4317 17.3424 20.5395C17.2251 20.6472 17.0689 20.7053 16.9078 20.701H11.275C11.1949 20.7031 11.1151 20.6898 11.0403 20.6619C10.9655 20.6339 10.8971 20.5918 10.8389 20.5381C10.7808 20.4843 10.7342 20.4198 10.7016 20.3484C10.6691 20.2771 10.6513 20.2001 10.6493 20.122L10.6524 20.126ZM6.27086 33.345H5.01957C4.85842 33.3496 4.702 33.2916 4.58468 33.1837C4.46737 33.0759 4.39876 32.9271 4.39393 32.77V29.321H6.89752V32.77C6.89513 32.8479 6.87703 32.9245 6.84423 32.9956C6.81144 33.0667 6.76461 33.1307 6.70641 33.1841C6.64821 33.2375 6.57979 33.2792 6.50505 33.3068C6.43032 33.3344 6.35074 33.3474 6.27086 33.345ZM8.14778 31.632V29.321H30.6668V31.632C27.836 30.54 21.0493 30.471 19.4073 30.471C17.7652 30.471 10.9785 30.54 8.14778 31.632ZM34.4206 32.77C34.4158 32.9271 34.3472 33.0759 34.2299 33.1837C34.1125 33.2916 33.9561 33.3496 33.795 33.345H32.5385C32.3774 33.3496 32.221 33.2916 32.1037 33.1837C31.9863 33.0759 31.9177 32.9271 31.9129 32.77V29.321H34.4155L34.4206 32.77ZM35.6709 28.17H3.14368C2.82137 28.1791 2.50853 28.0632 2.2739 27.8475C2.03927 27.6319 1.90205 27.3342 1.8924 27.02C1.93797 25.6069 2.55601 24.269 3.61118 23.2993C4.66634 22.3295 6.07265 21.8069 7.52214 21.846H31.2924C32.7419 21.8069 34.1482 22.3295 35.2034 23.2993C36.2585 24.269 36.8766 25.6069 36.9221 27.02C36.9175 27.1757 36.8814 27.3289 36.816 27.471C36.7506 27.6131 36.6572 27.7413 36.541 27.8482C36.4248 27.9551 36.2882 28.0386 36.1389 28.094C35.9896 28.1494 35.8305 28.1755 35.6709 28.171V28.17Z" fill="currentColor"/>
                                    <path d="M7.52175 22.9954C6.51259 22.9717 5.52706 23.2949 4.73779 23.9085C3.94852 24.5221 3.40584 25.3868 3.20482 26.3513C3.19283 26.4278 3.19667 26.5058 3.2161 26.5808C3.23553 26.6557 3.27017 26.7262 3.31797 26.7879C3.36577 26.8496 3.42576 26.9013 3.49441 26.94C3.56305 26.9788 3.63896 27.0037 3.71764 27.0134C3.75158 27.0186 3.78586 27.0212 3.82021 27.0214C3.96418 27.0242 4.1046 26.9777 4.21704 26.89C4.32949 26.8023 4.40682 26.6789 4.43559 26.5413C4.58074 25.8531 4.96908 25.2363 5.5329 24.7986C6.09671 24.3609 6.80022 24.1301 7.52072 24.1464C7.60109 24.151 7.68159 24.1395 7.75726 24.1127C7.83293 24.0859 7.90218 24.0443 7.96077 23.9905C8.01935 23.9366 8.06603 23.8717 8.09793 23.7996C8.12983 23.7275 8.14629 23.6498 8.14629 23.5713C8.14629 23.4928 8.12983 23.4152 8.09793 23.3431C8.06603 23.271 8.01935 23.2061 7.96077 23.1522C7.90218 23.0984 7.83293 23.0568 7.75726 23.03C7.68159 23.0032 7.60109 22.9917 7.52072 22.9964L7.52175 22.9954Z" fill="currentColor"/>
                                    <path d="M10.0243 24.1461C10.3699 24.1461 10.65 23.8887 10.65 23.5711C10.65 23.2535 10.3699 22.9961 10.0243 22.9961C9.67879 22.9961 9.39868 23.2535 9.39868 23.5711C9.39868 23.8887 9.67879 24.1461 10.0243 24.1461Z" fill="currentColor"/>
                                    <path d="M26.9141 10.3481C27.2364 10.3572 27.5493 10.2412 27.7839 10.0256C28.0185 9.80993 28.1558 9.5123 28.1654 9.19806V1.78406C28.1606 1.5347 28.0733 1.29352 27.9166 1.09641C27.7599 0.89929 27.5421 0.756784 27.2957 0.690063C27.0457 0.614321 26.778 0.614495 26.5281 0.690582C26.2782 0.76667 26.058 0.915067 25.8967 1.11606L24.471 2.95004L23.0003 0.579071C22.8836 0.401526 22.7231 0.255423 22.5334 0.154236C22.3437 0.0530488 22.1309 0 21.9146 0C21.6984 0 21.4856 0.0530488 21.2959 0.154236C21.1062 0.255423 20.9456 0.401526 20.829 0.579071L19.4105 2.85605L17.9941 0.579071C17.8775 0.401526 17.7169 0.255423 17.5272 0.154236C17.3375 0.0530488 17.1247 0 16.9085 0C16.6922 0 16.4795 0.0530488 16.2898 0.154236C16.1 0.255423 15.9395 0.401526 15.8228 0.579071L14.3469 2.95004L12.9223 1.11606C12.7607 0.915095 12.5403 0.76675 12.2903 0.690674C12.0403 0.614597 11.7725 0.614386 11.5223 0.690063C11.2759 0.756784 11.0581 0.89929 10.9014 1.09641C10.7447 1.29352 10.6574 1.5347 10.6526 1.78406V9.19507C10.6625 9.50922 10.7998 9.80669 11.0344 10.0223C11.269 10.2379 11.5816 10.3539 11.9039 10.3451L26.9141 10.3481ZM11.9008 1.78204L13.8946 4.34607C13.9565 4.42747 14.0386 4.49225 14.1331 4.53439C14.2276 4.57654 14.3315 4.59467 14.4352 4.58707C14.5383 4.58362 14.6389 4.55555 14.7284 4.50534C14.8178 4.45513 14.8932 4.38428 14.948 4.29904L16.9069 1.14905L18.8669 4.30005C18.9293 4.38332 19.0109 4.45107 19.1052 4.49777C19.1995 4.54447 19.3038 4.56882 19.4095 4.56882C19.5153 4.56882 19.6195 4.54447 19.7138 4.49777C19.8081 4.45107 19.8897 4.38332 19.9521 4.30005L21.9121 1.14905L23.871 4.30005C23.9271 4.3842 24.0028 4.45414 24.0921 4.50403C24.1814 4.55392 24.2815 4.58232 24.3843 4.58691C24.4871 4.59151 24.5895 4.57214 24.6831 4.53043C24.7766 4.48871 24.8587 4.42585 24.9223 4.34705L26.9162 1.78406V9.19507H11.9008V1.78204Z" fill="currentColor"/>
                                    <path d="M17.5302 6.89902C17.8757 6.89902 18.1558 6.64159 18.1558 6.32402C18.1558 6.00646 17.8757 5.74902 17.5302 5.74902C17.1847 5.74902 16.9045 6.00646 16.9045 6.32402C16.9045 6.64159 17.1847 6.89902 17.5302 6.89902Z" fill="currentColor"/>
                                    <path d="M13.7777 6.89902C14.1233 6.89902 14.4034 6.64159 14.4034 6.32402C14.4034 6.00646 14.1233 5.74902 13.7777 5.74902C13.4322 5.74902 13.1521 6.00646 13.1521 6.32402C13.1521 6.64159 13.4322 6.89902 13.7777 6.89902Z" fill="currentColor"/>
                                    <path d="M25.0368 6.89902C25.3823 6.89902 25.6624 6.64159 25.6624 6.32402C25.6624 6.00646 25.3823 5.74902 25.0368 5.74902C24.6912 5.74902 24.4111 6.00646 24.4111 6.32402C24.4111 6.64159 24.6912 6.89902 25.0368 6.89902Z" fill="currentColor"/>
                                    <path d="M21.2843 6.89902C21.6299 6.89902 21.91 6.64159 21.91 6.32402C21.91 6.00646 21.6299 5.74902 21.2843 5.74902C20.9388 5.74902 20.6587 6.00646 20.6587 6.32402C20.6587 6.64159 20.9388 6.89902 21.2843 6.89902Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">06</span>
                            <h3 class="amenities__title">King Size Beds</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.7326 14.6453L16.8608 0.26828C16.6864 0.10016 16.4511 0.00585938 16.2059 0.00585938C15.9607 0.00585938 15.7254 0.10016 15.551 0.26828L0.682314 14.6453C0.552028 14.7692 0.462839 14.9283 0.426272 15.1021C0.389704 15.2759 0.40744 15.4564 0.477186 15.6203C0.547627 15.7847 0.666512 15.9249 0.818784 16.0234C0.971056 16.1218 1.14987 16.174 1.33257 16.1733H4.37667V29.6553C4.37803 29.8931 4.47588 30.1207 4.64884 30.2885C4.82181 30.4562 5.05582 30.5503 5.29975 30.5503H27.1121C27.356 30.5503 27.59 30.4562 27.763 30.2885C27.9359 30.1207 28.0338 29.8931 28.0351 29.6553V16.1683H31.0782C31.2607 16.1688 31.4393 16.1165 31.5914 16.0181C31.7435 15.9197 31.8622 15.7795 31.9326 15.6153C32.0027 15.4518 32.0211 15.2717 31.9855 15.098C31.9498 14.9243 31.8618 14.7649 31.7326 14.6403V14.6453ZM27.1172 14.3833C26.8733 14.3833 26.6392 14.4774 26.4663 14.6451C26.2933 14.8128 26.1955 15.0405 26.1941 15.2783V28.7553H6.22693V15.2733C6.22557 15.0355 6.12772 14.8078 5.95476 14.6401C5.7818 14.4724 5.54778 14.3783 5.30385 14.3783H3.57052L16.2064 2.16129L28.8423 14.3783L27.1172 14.3833Z" fill="currentColor"/>
                                    <path d="M10.3245 19.1072V23.5282L8.6168 25.1832C8.53164 25.266 8.46408 25.3643 8.41798 25.4726C8.37188 25.5809 8.34814 25.697 8.34814 25.8142C8.34814 25.9314 8.37188 26.0475 8.41798 26.1558C8.46408 26.2641 8.53164 26.3624 8.6168 26.4452C8.7914 26.6128 9.02662 26.7068 9.27167 26.7068C9.51672 26.7068 9.75194 26.6128 9.92654 26.4452L11.6373 24.7902H16.2065C17.7595 24.7947 19.2508 24.1985 20.3535 23.1324C21.4562 22.0663 22.0802 20.6173 22.0886 19.1032V14.3102C22.0886 14.0715 21.9913 13.8426 21.8182 13.6738C21.6451 13.505 21.4103 13.4102 21.1655 13.4102H16.2065C14.6534 13.4057 13.1617 14.002 12.0588 15.0683C10.956 16.1346 10.3319 17.5839 10.3235 19.0982L10.3245 19.1072ZM20.2383 19.1072C20.2365 19.6214 20.1307 20.1301 19.9271 20.6044C19.7235 21.0787 19.426 21.5092 19.0517 21.8714C18.6774 22.2336 18.2335 22.5203 17.7455 22.7152C17.2575 22.9101 16.7349 23.0093 16.2076 23.0072H13.4845L16.8619 19.7422C16.9477 19.6594 17.0157 19.5609 17.0622 19.4524C17.1086 19.3438 17.1326 19.2273 17.1326 19.1097C17.1326 18.9921 17.1086 18.8756 17.0622 18.767C17.0157 18.6585 16.9477 18.56 16.8619 18.4772C16.6878 18.3091 16.4526 18.2149 16.2076 18.2149C15.9625 18.2149 15.7274 18.3091 15.5532 18.4772L12.1758 21.7422V19.1102C12.1777 18.5959 12.2835 18.0871 12.4871 17.6127C12.6908 17.1384 12.9884 16.7078 13.3628 16.3456C13.7372 15.9834 14.1812 15.6967 14.6693 15.5019C15.1574 15.3071 15.6801 15.208 16.2076 15.2102H20.2383V19.1072Z" fill="currentColor"/>
                                </svg>

                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">07</span>
                            <h3 class="amenities__title">Smart Homes</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                    <div class="amenities__box">
                        <div class="amenities__icone text-right">
                            <span>
                                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.2111 18.3109C16.2006 17.7315 16.0148 17.1681 15.677 16.6913C15.3392 16.2146 14.8645 15.8458 14.3125 15.6311C13.7605 15.4165 13.1557 15.3656 12.5742 15.4849C11.9926 15.6041 11.4601 15.8883 11.0436 16.3016C10.6271 16.7149 10.345 17.2389 10.2329 17.808C10.1208 18.377 10.1835 18.9657 10.4133 19.5C10.6431 20.0344 11.0297 20.4907 11.5245 20.8116C12.0193 21.1325 12.6004 21.3038 13.1947 21.3039C14.0014 21.2959 14.772 20.9764 15.3374 20.4153C15.9029 19.8543 16.2171 19.0975 16.2111 18.3109ZM11.3054 18.3109C11.3121 17.9478 11.4286 17.5947 11.6404 17.296C11.8521 16.9973 12.1497 16.7662 12.4957 16.6318C12.8417 16.4974 13.2207 16.4656 13.5851 16.5405C13.9496 16.6153 14.2832 16.7935 14.5442 17.0526C14.8051 17.3118 14.9817 17.6402 15.0518 17.9969C15.1219 18.3535 15.0824 18.7224 14.9383 19.0573C14.7941 19.3921 14.5517 19.6779 14.2415 19.8789C13.9313 20.0799 13.5671 20.187 13.1947 20.1869C12.6895 20.1813 12.2072 19.9808 11.8534 19.6291C11.4997 19.2775 11.3034 18.8034 11.3075 18.3109H11.3054Z" fill="currentColor"/>
                                    <path d="M14.0065 8.07602C14.1586 8.07602 14.3044 8.01713 14.4119 7.91229C14.5195 7.80746 14.5799 7.66528 14.5799 7.51703C14.5799 7.36877 14.5195 7.22657 14.4119 7.12173C14.3044 7.0169 14.1586 6.95801 14.0065 6.95801H12.3819C12.2299 6.95801 12.084 7.0169 11.9765 7.12173C11.869 7.22657 11.8086 7.36877 11.8086 7.51703C11.8086 7.66528 11.869 7.80746 11.9765 7.91229C12.084 8.01713 12.2299 8.07602 12.3819 8.07602H14.0065Z" fill="currentColor"/>
                                    <path d="M37.9085 37.0316H33.6069C33.7353 36.8976 33.8497 36.7516 33.9485 36.5956C34.1519 36.2755 34.2876 35.919 34.3477 35.5471C34.4079 35.1751 34.3911 34.7952 34.2985 34.4297C34.206 34.0641 34.0394 33.7203 33.8086 33.4184C33.5778 33.1165 33.2875 32.8626 32.9546 32.6716L30.4008 31.0716L33.0674 29.4036C33.3823 29.2066 33.6543 28.951 33.8678 28.6514C34.0813 28.3518 34.2321 28.0141 34.3115 27.6576C34.4788 26.9356 34.3481 26.1784 33.9474 25.5496C33.3956 24.6816 32.7433 24.5496 30.4008 23.0086L33.0674 21.3406C33.7006 20.937 34.1471 20.3081 34.3115 19.5881C34.4758 18.8681 34.3452 18.114 33.9474 17.4866C33.6902 17.0805 33.3286 16.7469 32.8985 16.5189C32.4683 16.2909 31.9846 16.1763 31.4951 16.1866H26.89C26.7423 16.1927 26.6027 16.2542 26.5004 16.3583C26.398 16.4623 26.3409 16.6009 26.3409 16.7451C26.3409 16.8892 26.398 17.0279 26.5004 17.1319C26.6027 17.236 26.7423 17.2975 26.89 17.3036H28.9669L25.2182 19.6496H21.8336V17.3046H24.6408C24.7885 17.2985 24.9281 17.237 25.0304 17.1329C25.1327 17.0289 25.1899 16.8903 25.1899 16.7461C25.1899 16.6019 25.1327 16.4634 25.0304 16.3593C24.9281 16.2552 24.7885 16.1937 24.6408 16.1876H21.7844C21.6892 15.7948 21.4614 15.4447 21.1375 15.1933C20.8137 14.942 20.4126 14.804 19.9987 14.8016H19.6008V10.4266H21.7126C21.8295 10.4261 21.9434 10.3901 22.0385 10.3236C22.1335 10.2572 22.2049 10.1635 22.2428 10.0556C22.2821 9.94734 22.2866 9.82997 22.2556 9.71918C22.2246 9.60839 22.1597 9.50946 22.0695 9.43561L13.7618 2.6666V0.566589C13.7618 0.42072 13.7024 0.280818 13.5966 0.177673C13.4908 0.0745283 13.3473 0.0166016 13.1977 0.0166016C13.0481 0.0166016 12.9046 0.0745283 12.7988 0.177673C12.693 0.280818 12.6336 0.42072 12.6336 0.566589V2.6666L9.20385 5.45959C9.08832 5.55505 9.01553 5.69071 9.00098 5.83768C8.98642 5.98465 9.03124 6.13133 9.12591 6.24658C9.17226 6.30311 9.22974 6.35005 9.29496 6.38461C9.36018 6.41917 9.43182 6.44067 9.50569 6.44785C9.57955 6.45502 9.65414 6.44773 9.72507 6.42639C9.79601 6.40506 9.86185 6.37011 9.91873 6.32361L13.2008 3.65359L20.1454 9.30859H6.25103L8.16796 7.7496C8.28342 7.65432 8.35618 7.51885 8.37074 7.37204C8.3853 7.22523 8.34051 7.07868 8.24591 6.96359C8.19964 6.90695 8.14219 6.85992 8.07697 6.82529C8.01175 6.79065 7.94007 6.76911 7.86617 6.76193C7.79226 6.75475 7.71763 6.7621 7.64668 6.78351C7.57573 6.80492 7.50991 6.83996 7.45309 6.8866L4.31975 9.43759C4.22986 9.51165 4.16522 9.61065 4.13444 9.72141C4.10366 9.83216 4.10819 9.94941 4.14744 10.0576C4.1855 10.1654 4.25696 10.259 4.35196 10.3255C4.44695 10.3919 4.56078 10.428 4.6777 10.4286H6.7895V12.5186V20.0186C6.7895 20.1645 6.84893 20.3044 6.95472 20.4075C7.06051 20.5106 7.20399 20.5686 7.3536 20.5686C7.50321 20.5686 7.64669 20.5106 7.75248 20.4075C7.85827 20.3044 7.9177 20.1645 7.9177 20.0186V13.0736H18.4818V23.5496H7.91565V22.2496C7.91565 22.1037 7.85622 21.9638 7.75043 21.8607C7.64464 21.7575 7.50116 21.6996 7.35155 21.6996C7.20194 21.6996 7.05846 21.7575 6.95267 21.8607C6.84688 21.9638 6.78744 22.1037 6.78744 22.2496V37.0296H0.58847C0.436413 37.0296 0.290583 37.0885 0.183062 37.1933C0.0755413 37.2982 0.0151367 37.4403 0.0151367 37.5886C0.0151367 37.7368 0.0755413 37.879 0.183062 37.9839C0.290583 38.0887 0.436413 38.1476 0.58847 38.1476H37.9085C38.0605 38.1476 38.2064 38.0887 38.3139 37.9839C38.4214 37.879 38.4818 37.7368 38.4818 37.5886C38.4818 37.4403 38.4214 37.2982 38.3139 37.1933C38.2064 37.0885 38.0605 37.0296 37.9085 37.0296V37.0316ZM14.6172 31.5966H11.7731V29.9906H14.6172V31.5966ZM14.6172 28.8726H11.7731V27.2656H14.6172V28.8726ZM11.7731 32.7146H14.6172V34.3216H11.7731V32.7146ZM14.6172 24.6666V26.1496H11.7731V24.6686L14.6172 24.6666ZM11.7731 35.4396H14.6172V37.0316H11.7731V35.4396ZM15.7433 24.6666H18.4746V37.0316H15.7433V24.6666ZM19.6008 24.1086V22.1496H19.9987C20.4125 22.1472 20.8135 22.0094 21.1373 21.7583C21.4611 21.5071 21.689 21.1572 21.7844 20.7646H23.448C22.8753 21.1905 22.4856 21.8088 22.3546 22.4993C22.2236 23.1898 22.3607 23.9032 22.7392 24.5006C23.2777 25.3476 23.81 25.4216 26.2859 27.0416L23.6151 28.7106C23.3002 28.9076 23.0283 29.1632 22.8148 29.4628C22.6013 29.7624 22.4505 30.1001 22.371 30.4566C22.2038 31.1783 22.3346 31.9352 22.7351 32.5636C23.3074 33.4636 23.6859 33.3976 29.3618 37.0326H19.6008V24.1086ZM29.89 34.0576C30.0408 33.8184 30.252 33.621 30.5034 33.4841C30.7548 33.3472 31.038 33.2754 31.3259 33.2756C31.6443 33.2755 31.9559 33.3651 32.2233 33.5336L32.4705 33.6876C32.8497 33.9303 33.117 34.3075 33.2156 34.7391C33.3142 35.1708 33.2364 35.6229 32.9987 35.9996C32.883 36.1853 32.7303 36.3465 32.5497 36.4738C32.3691 36.6011 32.1642 36.6919 31.9471 36.7408C31.7299 36.7898 31.5049 36.7958 31.2854 36.7587C31.0658 36.7216 30.856 36.642 30.6685 36.5246L30.4203 36.3696C30.0415 36.1268 29.7747 35.7497 29.6763 35.3183C29.5778 34.8869 29.6556 34.435 29.8931 34.0586L29.89 34.0576ZM30.3167 32.3426C29.7438 32.5586 29.2592 32.9516 28.9372 33.4616C28.6104 33.9743 28.4615 34.576 28.5126 35.1776L26.1249 33.6836C27.2417 33.1046 28.3176 32.4534 29.3454 31.7346L30.3167 32.3426ZM33.2141 27.4126C33.1664 27.6264 33.0759 27.829 32.9478 28.0086C32.8197 28.1883 32.6564 28.3416 32.4674 28.4596C25.8213 32.5186 25.9741 32.7506 25.1239 32.7506C24.8358 32.7508 24.5525 32.6789 24.3011 32.5418C24.0497 32.4047 23.8386 32.207 23.688 31.9676C23.4475 31.5907 23.369 31.1365 23.4695 30.7036C23.5172 30.4896 23.6076 30.2869 23.7358 30.1071C23.8639 29.9273 24.0271 29.7738 24.2162 29.6556L30.6613 25.6236C30.9293 25.4555 31.2411 25.3659 31.5598 25.3656C31.8477 25.3653 32.1309 25.437 32.3823 25.5739C32.6337 25.7109 32.8449 25.9084 32.9956 26.1476C33.236 26.5249 33.3145 26.9793 33.2141 27.4126ZM30.5618 24.4316C30.3881 24.4978 30.2215 24.5805 30.0644 24.6786L27.3423 26.3786L26.1249 25.6166C27.242 25.0381 28.3179 24.3869 29.3454 23.6676L30.5618 24.4316ZM32.9956 18.0846C33.2333 18.4613 33.3111 18.9134 33.2125 19.3451C33.1139 19.7767 32.8466 20.1539 32.4674 20.3966L26.0223 24.4286C25.7588 24.5938 25.4528 24.6832 25.1395 24.6865C24.8262 24.6899 24.5183 24.6071 24.251 24.4476L24.2203 24.4286L24.2069 24.4206C23.9994 24.2871 23.8244 24.111 23.6941 23.9046C23.4564 23.5279 23.3786 23.0758 23.4773 22.6441C23.5759 22.2125 23.8431 21.8353 24.2223 21.5926L30.6674 17.5606C30.9352 17.3921 31.2472 17.3025 31.5659 17.3026C31.8539 17.3023 32.1371 17.374 32.3885 17.511C32.6399 17.6479 32.8511 17.8454 33.0018 18.0846H32.9956ZM19.9987 15.9166C20.0938 15.9166 20.1879 15.935 20.2756 15.9707C20.3633 16.0065 20.4429 16.0588 20.5097 16.1248C20.5765 16.1907 20.6292 16.269 20.6647 16.3549C20.7002 16.4409 20.7179 16.5329 20.7167 16.6256V20.3256C20.7179 20.4183 20.7002 20.5103 20.6647 20.5963C20.6292 20.6822 20.5765 20.7604 20.5097 20.8264C20.4429 20.8923 20.3633 20.9447 20.2756 20.9805C20.1879 21.0162 20.0938 21.0346 19.9987 21.0346H19.6008V15.9186L19.9987 15.9166ZM7.91565 11.9496V10.4186H18.4798V11.9496H7.91565ZM7.91565 24.6616H10.6469V37.0266H7.91565V24.6616Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </div>
                        <div class="amenities__content">
                            <span class="amenities__count--number">08</span>
                            <h3 class="amenities__title">Kid’s Playland</h3>
                            <p class="amenities__desc">Enimad minim veniam quis no exercitation ullamco lab</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Building Amenities section .\ -->

        @endsection
