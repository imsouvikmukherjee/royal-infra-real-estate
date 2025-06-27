
@extends('user.layout.main')

@Section('main-container')

    <main class="main__content_wrapper">
        <!-- Start Hero section -->
        {{-- <div class="hero__section hero__section--bg2 position-relative">
            <div class="hero__thumbnail--slider position-relative">
                <div class="hero__thumbnail--swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero__thumbnail--slider__items">
                                <img class="hero__thumbnail--slider___media" src="{{url('assets/img/hero/hero-htumb1.png')}}" alt="hero-thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero__thumbnail--slider__items">
                                <img class="hero__thumbnail--slider___media" src="{{url('assets/img/hero/hero-htumb2.png')}}" alt="hero-thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero__thumbnail--slider__items">
                                <img class="hero__thumbnail--slider___media" src="{{url('assets/img/hero/hero-htumb3.png')}}" alt="hero-thumb">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__pagination--bullet__style swiper-pagination"></div>
            </div>
            <div class="hero__container" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <div class="container">
                    <div class="hero__content style2">
                        <div class="hero__content--heading">
                            <h3 class="hero__content--heading__subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_6)">
                                <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                                <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                                </g>
                                <defs>
                                <clipPath >
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg> Royal Infra - Loyalty, Truth & Honour</h3>
                            <h2 class="hero__content--heading__title h1">Discover Your Perfect <br> Property Developer</h2>
                            <p class="hero__content--heading__desc">At Royal Infra, we transform land into thriving communities. Whether it's your dream home or a prime commercial space, we deliver quality, innovation, and lasting value.</p>
                        </div>
                        <div class="hero__content--footer style2 d-flex align-items-center">
                            <a class="solid__btn" href="{{route('contact_us')}}">Make An Enquiry</a>

                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
        <!-- End Hero section -->


        <!-- Start Hero section -->
        <div class="hero__section hero__section--bg2 position-relative ">
            <div class="container max-w-1430">
                <div class="hero__section3--container d-flex align-items-center">
                    <div class="hero__content--home3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="hero__content--heading">
                            <h3 class="hero__content--heading__subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_6)">
                                <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                                <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                                </g>
                                <defs>
                                <clipPath >
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg> Royal Infra - Loyalty, Truth & Honour</h3>
                            <h2 class="hero__content--heading__title h1">Discover Your Perfect Property Developer</h2>
                            <p class="hero__content--heading__desc">At Royal Infra, we transform land into thriving communities. Whether it's your dream home or a prime commercial space, we deliver quality, innovation, and lasting value.</p>
                        </div>
                        <div class="hero__content--footer style2">
                            <a class="solid__btn" href="{{route('contact_us')}}">Make An Enquiry</a>
                        </div>
                    </div>
                    <div class="hero__thumbnail hero__home3 position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <img class="hero__thumbnail--slider___media" src="assets/img/hero/slide3.jpg" alt="hero-thumb">
                        <a class="bideo__play--icon hero__play--vedio   glightbox" href="{{url('assets/video/home_video.mp4')}}" data-gallery="video">
                            <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                            </svg>
                            <span class="visually-hidden">Video Play</span>
                        </a>
                        <div class="hero__thumbnail--badge">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_25_1303)">
                                <path d="M12.2261 11.9105C12.685 5.25586 18.2285 0 24.9997 0C31.7709 0 37.3144 5.25586 37.7733 11.9105C37.7936 12.2059 37.7733 24.5063 24.9997 24.5063C12.226 24.5062 12.2057 12.2059 12.2261 11.9105Z" fill="#FFBA57"/>
                                <path d="M12.3722 33.7565L17.4208 39.1238C17.6641 39.3824 17.6959 39.7841 17.4731 40.0831C17.3298 40.2752 17.0964 40.3789 16.8567 40.3789H15.416L15.4161 49.255C15.4161 49.6664 15.0826 49.9999 14.6713 49.9999H8.96687C8.55554 49.9999 8.22205 49.6664 8.22205 49.255L8.22207 40.3789H6.75977C6.40479 40.3789 6.09043 40.1269 6.0253 39.7599C5.9834 39.5239 6.06778 39.2828 6.23203 39.1081L11.2766 33.7453C11.4836 33.5251 11.8107 33.4453 12.1104 33.5692C12.2104 33.6106 12.298 33.6776 12.3722 33.7565Z" fill="#16A34A"/>
                                <path d="M25.5422 28.6217L30.5871 33.985C30.7513 34.1596 30.8355 34.4007 30.7935 34.6366C30.7281 35.0035 30.4139 35.2554 30.059 35.2554H28.5967L28.5968 49.2555C28.5968 49.6668 28.2633 50.0003 27.852 50.0003H22.1476C21.7363 50.0003 21.4028 49.6668 21.4028 49.2555L21.4027 35.2554H19.9404C19.5855 35.2554 19.2711 35.0033 19.206 34.6363C19.1641 34.4003 19.2484 34.1592 19.4127 33.9846L24.4516 28.6276C24.518 28.557 24.5956 28.4966 24.6838 28.4564C24.9898 28.3174 25.3295 28.3955 25.5422 28.6217Z" fill="#16A34A"/>
                                <path d="M38.723 23.8805L43.7678 29.2438C43.932 29.4183 44.0163 29.6595 43.9741 29.8954C43.9088 30.2623 43.5945 30.5142 43.2396 30.5142H41.7774L41.7775 49.2553C41.7775 49.6666 41.444 50.0001 41.0327 50.0001H35.3283C34.9169 50.0001 34.5835 49.6666 34.5835 49.2553L34.5835 30.5142H33.1211C32.7663 30.5142 32.452 30.2623 32.3867 29.8954C32.3447 29.6595 32.429 29.4184 32.5931 29.2438L37.6381 23.8805C37.7788 23.7309 37.9752 23.646 38.1805 23.646C38.3859 23.646 38.5823 23.7309 38.723 23.8805Z" fill="#16A34A"/>
                                <path d="M15.9891 11.9107C16.4379 7.32988 20.3008 3.75049 24.9996 3.75049C29.6874 3.75049 33.5432 7.31318 34.0068 11.8788C34.0376 12.1832 34.007 20.9797 24.9996 20.9797C15.9889 20.9796 15.9603 12.2048 15.9891 11.9107Z" fill="#FFE27A"/>
                                <path d="M24.7163 16.2968C23.5443 16.2254 23.2224 15.52 23.1626 15.3543C23.0772 15.0354 22.787 14.8002 22.4411 14.8002C22.0281 14.8002 21.6934 15.135 21.6934 15.5479C21.6934 15.6079 21.7012 15.666 21.7146 15.7219L21.7143 15.722C21.7149 15.7246 21.7164 15.7298 21.7183 15.7362C21.7274 15.7715 21.7383 15.8061 21.7522 15.8391C21.8902 16.2198 22.4434 17.4011 24.0731 17.7166V18.7096C24.0731 19.1217 24.4071 19.4558 24.8193 19.4558C25.2316 19.4558 25.5656 19.1217 25.5656 18.7096V17.7391C26.2799 17.6147 26.7598 17.3025 27.0598 17.0202C27.618 16.4949 27.9513 15.7009 27.9513 14.896C27.9513 14.1398 27.6547 12.3483 24.9076 12.0452C24.3635 11.9852 23.9752 11.812 23.7537 11.5305C23.5582 11.2819 23.537 11.0073 23.537 10.9008C23.537 10.7695 23.5731 9.61846 24.8193 9.61846C25.637 9.61846 25.9672 10.1385 26.0293 10.2516C26.14 10.5262 26.4084 10.7203 26.7227 10.7203C27.1357 10.7203 27.4704 10.3855 27.4704 9.97256C27.4704 9.8498 27.4402 9.73428 27.3878 9.63203L27.3882 9.63184C27.1778 9.17461 26.5839 8.45938 25.5656 8.21309V7.21162C25.5656 6.79951 25.2316 6.46533 24.8193 6.46533C24.4072 6.46533 24.0731 6.79941 24.0731 7.21162V8.21006C22.6001 8.55977 22.0445 9.93408 22.0445 10.9007C22.0445 11.9755 22.7515 13.3086 24.7439 13.5285C26.4587 13.7178 26.4587 14.6045 26.4587 14.8959C26.4587 15.2055 26.348 15.6405 26.0369 15.9331C25.743 16.2099 25.2989 16.3323 24.7163 16.2968Z" fill="#16A34A"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_25_1303">
                                <rect width="50" height="50" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                             {{-- <span class="hero__thumbnail--badge__price">$7454.21</span> --}}
                             <span class="hero__thumbnail--badge__text">Revenue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories section -->
        <section class="categories__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-50"  data-aos-duration="1200" data-aos-delay="50">
                    <!-- <h3 class="section__heading--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_6)">
                        <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                        <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                        </g>
                        <defs>
                        <clipPath >
                        <rect width="18" height="18" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> Royal Infra - Loyalty, Truth & Honour</h3> -->
                    <h2 class="section__heading--title">Properties Categories</h2>
                </div>
                <div class="categories__inner row mb--n30">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="categories__box">
                            <div class="categories__thumbnail text-center">
                                <img src="assets/img/other/categories1.png" alt="categories-img">
                            </div>
                            <span class="categories__badge">New</span>
                            <div class="categories__content text-center">
                                <h3 class="categories__title"><a href="{{url('/properties')}}/{{encrypt(1)}}">Residential Properties</a></h3>
                                <p class="categories__desc">With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
                                <a class="categories__link" href="{{url('/properties')}}/{{encrypt(1)}}">See Properites <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <span class="categories__badge">New</span>
                            <div class="categories__content text-center">
                                <h3 class="categories__title"><a href="{{url('/properties')}}/{{encrypt(2)}}">Commercial Properties</a></h3>
                                <p class="categories__desc">With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
                                <a class="categories__link" href="{{url('/properties')}}/{{encrypt(2)}}">See Properites <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <span class="categories__badge">New</span>
                            <div class="categories__content text-center">
                                <h3 class="categories__title"><a href="{{url('/properties')}}/{{encrypt(3)}}">Mixed-use Properties</a></h3>
                                <p class="categories__desc">With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
                                <a class="categories__link" href="{{url('/properties')}}/{{encrypt(3)}}">See Properites <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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

        <!-- About section -->
        <section class="about__section section--padding">
            <div class="container-fluid p-0">
                <div class="about__inner style2 d-flex align-items-center">
                    <div class="about__thumbnail--slider position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="about__thumbnail--swiper swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="about__thumbnail--slider__items position-relative">
                                        <img class="about__thumbnail--slider__media" src="assets/img/hero/slide3.jpg" alt="about-thumb">
                                        <!-- <span class="trending__badge">Trending <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.94854 0.0760509L0.328122 10.715C0.288099 10.7753 0.264238 10.8473 0.259622 10.9221C0.255007 10.9969 0.269628 11.072 0.301954 11.138C0.334281 11.2039 0.382961 11.2584 0.442229 11.2949C0.501493 11.3313 0.56884 11.3484 0.636571 11.3439H4.66059C4.69946 11.3439 4.7366 11.3609 4.76392 11.3914C4.79125 11.4217 4.80664 11.4628 4.80664 11.5056V17.7599C4.80876 17.8113 4.82511 17.8605 4.85321 17.9012C4.88149 17.9421 4.92017 17.9722 4.96442 17.9882C5.00849 18.0037 5.05601 18.0039 5.10027 17.9888C5.14472 17.9739 5.18378 17.9441 5.21225 17.9036L12.2223 7.12113C12.2608 7.05891 12.2831 6.98645 12.287 6.91122C12.2908 6.83599 12.2762 6.76119 12.2444 6.69448C12.2127 6.62799 12.1652 6.57216 12.1069 6.53337C12.0486 6.49459 11.982 6.47413 11.9139 6.47413H7.48419C7.44532 6.47413 7.40818 6.45708 7.38086 6.42682C7.35354 6.39635 7.33814 6.35522 7.33814 6.31238V0.27413C7.34238 0.222344 7.33199 0.170349 7.30832 0.125378C7.28484 0.0804121 7.24925 0.044395 7.20653 0.0228727C7.16381 0.00113545 7.11609 -0.00525678 7.06991 0.00433306C7.02373 0.0139229 6.9814 0.0390693 6.94869 0.0765754L6.94854 0.0760509Z" fill="currentColor"/>
                                            </svg>
                                        </span> -->
                                        <!-- <span class="about__badge">For rent</span> -->
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
                                <div class="swiper-slide">
                                    <div class="about__thumbnail--slider__items position-relative">
                                        <img class="about__thumbnail--slider__media" src="assets/img/hero/slide1.jpeg" alt="about-thumb">
                                        <!-- <span class="trending__badge">Trending <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.94854 0.0760509L0.328122 10.715C0.288099 10.7753 0.264238 10.8473 0.259622 10.9221C0.255007 10.9969 0.269628 11.072 0.301954 11.138C0.334281 11.2039 0.382961 11.2584 0.442229 11.2949C0.501493 11.3313 0.56884 11.3484 0.636571 11.3439H4.66059C4.69946 11.3439 4.7366 11.3609 4.76392 11.3914C4.79125 11.4217 4.80664 11.4628 4.80664 11.5056V17.7599C4.80876 17.8113 4.82511 17.8605 4.85321 17.9012C4.88149 17.9421 4.92017 17.9722 4.96442 17.9882C5.00849 18.0037 5.05601 18.0039 5.10027 17.9888C5.14472 17.9739 5.18378 17.9441 5.21225 17.9036L12.2223 7.12113C12.2608 7.05891 12.2831 6.98645 12.287 6.91122C12.2908 6.83599 12.2762 6.76119 12.2444 6.69448C12.2127 6.62799 12.1652 6.57216 12.1069 6.53337C12.0486 6.49459 11.982 6.47413 11.9139 6.47413H7.48419C7.44532 6.47413 7.40818 6.45708 7.38086 6.42682C7.35354 6.39635 7.33814 6.35522 7.33814 6.31238V0.27413C7.34238 0.222344 7.33199 0.170349 7.30832 0.125378C7.28484 0.0804121 7.24925 0.044395 7.20653 0.0228727C7.16381 0.00113545 7.11609 -0.00525678 7.06991 0.00433306C7.02373 0.0139229 6.9814 0.0390693 6.94869 0.0765754L6.94854 0.0760509Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                        <span class="about__badge">For rent</span>
                                        <div class="bideo__play">
                                            <a class="bideo__play--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                                <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Video Play</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about__thumbnail--slider__items position-relative">
                                        <img class="about__thumbnail--slider__media" src="assets/img/hero/slide2.jpeg" alt="about-thumb">
                                        <!-- <span class="trending__badge">Trending <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.94854 0.0760509L0.328122 10.715C0.288099 10.7753 0.264238 10.8473 0.259622 10.9221C0.255007 10.9969 0.269628 11.072 0.301954 11.138C0.334281 11.2039 0.382961 11.2584 0.442229 11.2949C0.501493 11.3313 0.56884 11.3484 0.636571 11.3439H4.66059C4.69946 11.3439 4.7366 11.3609 4.76392 11.3914C4.79125 11.4217 4.80664 11.4628 4.80664 11.5056V17.7599C4.80876 17.8113 4.82511 17.8605 4.85321 17.9012C4.88149 17.9421 4.92017 17.9722 4.96442 17.9882C5.00849 18.0037 5.05601 18.0039 5.10027 17.9888C5.14472 17.9739 5.18378 17.9441 5.21225 17.9036L12.2223 7.12113C12.2608 7.05891 12.2831 6.98645 12.287 6.91122C12.2908 6.83599 12.2762 6.76119 12.2444 6.69448C12.2127 6.62799 12.1652 6.57216 12.1069 6.53337C12.0486 6.49459 11.982 6.47413 11.9139 6.47413H7.48419C7.44532 6.47413 7.40818 6.45708 7.38086 6.42682C7.35354 6.39635 7.33814 6.35522 7.33814 6.31238V0.27413C7.34238 0.222344 7.33199 0.170349 7.30832 0.125378C7.28484 0.0804121 7.24925 0.044395 7.20653 0.0228727C7.16381 0.00113545 7.11609 -0.00525678 7.06991 0.00433306C7.02373 0.0139229 6.9814 0.0390693 6.94869 0.0765754L6.94854 0.0760509Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                        <span class="about__badge">For rent</span>
                                        <div class="bideo__play">
                                            <a class="bideo__play--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                                <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Video Play</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__pagination--bullet__style bottom swiper-pagination"></div>
                    </div>
                    <div class="about__content--style" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <div class="section__heading mb-25">
                            <!-- <h3 class="section__heading--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_6)">
                                <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="#F23B3B"/>
                                <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="#F23B3B"/>
                                </g>
                                <defs>
                                <clipPath >
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg> Real estate agency</h3> -->
                            <h2 class="section__heading--title">About Us</h2>
                        </div>
                        <div class="about__location--text d-flex mb-10">
                            <p><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#FA4B4A"/>
                                </svg> G 301, 302, Sampat Square Opp- R.K. Mall plaza Near- Utkarsh School New court Road, Diwalipura Vadodara, Gujrat</p>
                            <span><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.5861 31.1164C31.6377 25.6198 31.137 18.2805 25.509 15.3518C22.8946 13.9859 19.4647 14.304 17.2888 16.4371C15.6005 18.0931 15.5164 20.9512 17.9534 21.7653H17.9537C19.6903 22.2708 21.5511 21.8577 22.9476 20.6566C28.2253 16.18 23.5859 8.83063 18.9994 6.35635C13.6818 3.47934 7.26965 3.74624 2.01847 6.59031C1.2562 7.00211 0.582617 5.79054 1.34492 5.37873C7.03932 2.29615 13.9253 2.02466 19.6734 5.14477C24.3573 7.6802 28.2307 13.3732 25.8154 19.0198C25.3001 20.2229 24.489 21.2586 23.4668 22.0195C22.4445 22.7805 21.248 23.2386 20.0013 23.347C17.9807 23.5248 15.4015 22.6921 14.6838 20.4559C13.8461 17.9019 15.9867 15.3897 17.9541 14.2437C20.1723 12.9786 22.796 12.7711 25.1684 13.673C32.068 16.3206 33.2691 25.0679 30.8672 31.4909C30.5568 32.3187 29.2719 31.9588 29.5865 31.1166L29.5861 31.1164Z" fill="#FF494F"/>
                                <path d="M6.08367 1.17465C4.33906 2.79864 2.68623 4.52938 1.13358 6.3577L0.996335 5.25839C3.43399 6.58583 5.75596 8.13706 7.9358 9.8942C8.60502 10.4368 7.9358 11.6579 7.26225 11.1058C5.08455 9.34764 2.76377 7.79641 0.327062 6.46997C0.151175 6.35837 0.0327873 6.16813 0.00589848 5.9531C-0.0206852 5.73806 0.0470104 5.52205 0.189817 5.36608C1.73692 3.53843 3.3835 1.80769 5.12195 0.183029C5.75995 -0.411175 6.7083 0.580794 6.06132 1.17466L6.08367 1.17465Z" fill="#FF494F"/>
                                </svg>
                            </span>
                        </div>
                        <p class="about__location--desc">Welcome to Royal Infra, your premier real estate partner in Vadodara, Gujarat. We specialize in creating exceptional residential land opportunities that cater to your vision of a dream home. With a focus on prime locations, innovative design, and sustainable development, we are committed to transforming your aspirations into reality. </p>
                        <p class="about__location--desc">At Royal Infra, we believe in building more than just properties—we build trust and lasting relationships. Our dedicated team works tirelessly to deliver high-quality, transparent, and customer-centric real estate solutions. Whether you’re looking to invest in land or build your dream home, Royal Infra is here to guide you every step of the way. Discover the perfect blend of luxury, comfort, and value with us.</p>
                        {{-- <div class="about__price d-flex">
                            <span>Type: Residential</span>
                            <span>Area: 10 acres</span>
                            <span>No. of Units: 200</span>
                        </div> --}}

                        <a class="solid__btn mt-4" href="{{route('about_us')}}">Check Details</a>
                        <!-- <div class="apartment__info">
                            <div class="apartment__info--wrapper d-flex">
                                <div class="apartment__info--list">
                                    <span class="apartment__info--icon"><img src="assets/img/icon/bed-realistic.png" alt="img"></span>
                                    <p>
                                        <span class="apartment__info--count">3</span>
                                        <span class="apartment__info--title">Bedrooms</span>
                                    </p>
                                </div>
                                <div class="apartment__info--list">
                                    <span class="apartment__info--icon"><img src="assets/img/icon/modern-car.png" alt="img"></span>
                                    <p>
                                        <span class="apartment__info--count">3</span>
                                        <span class="apartment__info--title"> Car Parking</span>
                                    </p>
                                </div>
                                <div class="apartment__info--list">
                                    <span class="apartment__info--icon"><img src="assets/img/icon/set-square.png" alt="img"></span>
                                    <p>
                                        <span class="apartment__info--count">3</span>
                                        <span class="apartment__info--title">1249 Sqft</span>
                                    </p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="properties__author d-flex align-items-center">
                            <div class="properties__author--thumb">
                                <img src="assets/img/other/properties-author.png" alt="img">
                            </div>
                            <div class="properties__author--text">
                                <h3 class="properties__author--name">Leslie Alexander</h3>
                                <a class="properties__author--email" href="mailto:example@example.com">shahadat.dev1@gmail.com</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- About section .\ -->

        <!-- featured section -->
        <!-- <section class="featured__list--section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
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
                    <h2 class="section__heading--title">Trending Properties</h2>
                </div>
                <div class="featured__inner" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="row mb--n30">
                        <div class="col-xl-6 offset-xl-0 col-lg-10 offset-lg-1 mb-30">
                            <article class="featured__card--list d-flex">
                                <div class="featured__card--list__thumbnail position-relative">
                                    <div class="media">
                                        <a class="featured__thumbnail--link" href="listing-details.html"><img class="featured__thumbnail--img" src="assets/img/property/properties5.png" alt="featured-img"></a>
                                    </div>
                                    <div class="featured__badge">
                                        <span class="badge__field style2">For sale</span>
                                    </div>
                                    <span class="featured__author--img__style2">
                                        <img src="assets/img/property/properties-author.png" alt="img">
                                    </span>
                                </div>
                                <div class="featured__card--list__content">
                                    <div class="featured__content--list__top d-flex justify-content-between">
                                        <h3 class="featured__card--title"><a href="listing-details.html">Luxury Family Home</a></h3>
                                        <a class="featured__list--wishlist__btn style2" href="#">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"></path>
                                              </svg>
                                        </a>
                                    </div>
                                    <span class="featured__card--price">$13000</span>
                                    <ul class="featured__info--list__style d-flex">
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="25" height="21" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bedrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bathrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                                3450
                                                <svg width="19" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z" fill="black"></path>
                                                    <path d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z" fill="black"></path>
                                                    </svg>
                                            </span>
                                            <span class="featured__info--text">Square Ft</span>
                                        </li>
                                    </ul>
                                    <p class="featured__content--desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"/>
                                        </svg> 1421 San Pedro St, Los Angeles, CA</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-lg-10 offset-lg-1 mb-30">
                            <article class="featured__card--list d-flex">
                                <div class="featured__card--list__thumbnail position-relative">
                                    <div class="media">
                                        <a class="featured__thumbnail--link" href="listing-details.html"><img class="featured__thumbnail--img" src="assets/img/property/properties6.png" alt="featured-img"></a>
                                    </div>
                                    <div class="featured__badge">
                                        <span class="badge__field style2">For sale</span>
                                    </div>
                                    <span class="featured__author--img__style2">
                                        <img src="assets/img/property/properties-author.png" alt="img">
                                    </span>
                                </div>
                                <div class="featured__card--list__content">
                                    <div class="featured__content--list__top d-flex justify-content-between">
                                        <h3 class="featured__card--title"><a href="listing-details.html">Apartment Ocean View</a></h3>
                                        <a class="featured__list--wishlist__btn style2" href="#">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"></path>
                                              </svg>
                                        </a>
                                    </div>
                                    <span class="featured__card--price">$15000</span>
                                    <ul class="featured__info--list__style d-flex">
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="25" height="21" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bedrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bathrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                                3450
                                                <svg width="19" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z" fill="black"></path>
                                                    <path d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z" fill="black"></path>
                                                    </svg>
                                            </span>
                                            <span class="featured__info--text">Square Ft</span>
                                        </li>
                                    </ul>
                                    <p class="featured__content--desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"/>
                                        </svg> 1421 San Pedro St, Los Angeles, CA</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-lg-10 offset-lg-1 mb-30">
                            <article class="featured__card--list d-flex">
                                <div class="featured__card--list__thumbnail position-relative">
                                    <div class="media">
                                        <a class="featured__thumbnail--link" href="listing-details.html"><img class="featured__thumbnail--img" src="assets/img/property/properties7.png" alt="featured-img"></a>
                                    </div>
                                    <div class="featured__badge">
                                        <span class="badge__field style2">For sale</span>
                                    </div>
                                    <span class="featured__author--img__style2">
                                        <img src="assets/img/property/properties-author.png" alt="img">
                                    </span>
                                </div>
                                <div class="featured__card--list__content">
                                    <div class="featured__content--list__top d-flex justify-content-between">
                                        <h3 class="featured__card--title"><a href="listing-details.html">Single Family Home</a></h3>
                                        <a class="featured__list--wishlist__btn style2" href="#">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"></path>
                                              </svg>
                                        </a>
                                    </div>
                                    <span class="featured__card--price">$12000</span>
                                    <ul class="featured__info--list__style d-flex">
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="25" height="21" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bedrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bathrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                                3450
                                                <svg width="19" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z" fill="black"></path>
                                                    <path d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z" fill="black"></path>
                                                    </svg>
                                            </span>
                                            <span class="featured__info--text">Square Ft</span>
                                        </li>
                                    </ul>
                                    <p class="featured__content--desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"/>
                                        </svg> 1421 San Pedro St, Los Angeles, CA</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-lg-10 offset-lg-1 mb-30">
                            <article class="featured__card--list d-flex">
                                <div class="featured__card--list__thumbnail position-relative">
                                    <div class="media">
                                        <a class="featured__thumbnail--link" href="listing-details.html"><img class="featured__thumbnail--img" src="assets/img/property/properties8.png" alt="featured-img"></a>
                                    </div>
                                    <div class="featured__badge">
                                        <span class="badge__field style2">For sale</span>
                                    </div>
                                    <span class="featured__author--img__style2">
                                        <img src="assets/img/property/properties-author.png" alt="img">
                                    </span>
                                </div>
                                <div class="featured__card--list__content">
                                    <div class="featured__content--list__top d-flex justify-content-between">
                                        <h3 class="featured__card--title"><a href="listing-details.html">Luxury Family Home</a></h3>
                                        <a class="featured__list--wishlist__btn style2" href="#">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"></path>
                                              </svg>
                                        </a>
                                    </div>
                                    <span class="featured__card--price">$16000</span>
                                    <ul class="featured__info--list__style d-flex">
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="25" height="21" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bedrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bathrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                                3450
                                                <svg width="19" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z" fill="black"></path>
                                                    <path d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z" fill="black"></path>
                                                    </svg>
                                            </span>
                                            <span class="featured__info--text">Square Ft</span>
                                        </li>
                                    </ul>
                                    <p class="featured__content--desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"/>
                                        </svg> 1421 San Pedro St, Los Angeles, CA</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-lg-10 offset-lg-1 mb-30">
                            <article class="featured__card--list d-flex">
                                <div class="featured__card--list__thumbnail position-relative">
                                    <div class="media">
                                        <a class="featured__thumbnail--link" href="listing-details.html"><img class="featured__thumbnail--img" src="assets/img/property/properties5.png" alt="featured-img"></a>
                                    </div>
                                    <div class="featured__badge">
                                        <span class="badge__field style2">For sale</span>
                                    </div>
                                    <span class="featured__author--img__style2">
                                        <img src="assets/img/property/properties-author.png" alt="img">
                                    </span>
                                </div>
                                <div class="featured__card--list__content">
                                    <div class="featured__content--list__top d-flex justify-content-between">
                                        <h3 class="featured__card--title"><a href="listing-details.html">Apartment Ocean View</a></h3>
                                        <a class="featured__list--wishlist__btn style2" href="#">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"></path>
                                              </svg>
                                        </a>
                                    </div>
                                    <span class="featured__card--price">$15000</span>
                                    <ul class="featured__info--list__style d-flex">
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="25" height="21" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bedrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bathrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                                3450
                                                <svg width="19" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z" fill="black"></path>
                                                    <path d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z" fill="black"></path>
                                                    </svg>
                                            </span>
                                            <span class="featured__info--text">Square Ft</span>
                                        </li>
                                    </ul>
                                    <p class="featured__content--desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"/>
                                        </svg> 1421 San Pedro St, Los Angeles, CA</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-lg-10 offset-lg-1 mb-30">
                            <article class="featured__card--list d-flex">
                                <div class="featured__card--list__thumbnail position-relative">
                                    <div class="media">
                                        <a class="featured__thumbnail--link" href="listing-details.html"><img class="featured__thumbnail--img" src="assets/img/property/properties7.png" alt="featured-img"></a>
                                    </div>
                                    <div class="featured__badge">
                                        <span class="badge__field style2">For sale</span>
                                    </div>
                                    <span class="featured__author--img__style2">
                                        <img src="assets/img/property/properties-author.png" alt="img">
                                    </span>
                                </div>
                                <div class="featured__card--list__content">
                                    <div class="featured__content--list__top d-flex justify-content-between">
                                        <h3 class="featured__card--title"><a href="listing-details.html">Single Family Home</a></h3>
                                        <a class="featured__list--wishlist__btn style2" href="#">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"></path>
                                              </svg>
                                        </a>
                                    </div>
                                    <span class="featured__card--price">$17000</span>
                                    <ul class="featured__info--list__style d-flex">
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="25" height="21" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bedrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                              3
                                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <span class="featured__info--text">Bathrooms</span>
                                        </li>
                                        <li class="featured__info--items">
                                            <span class="featured__info--icon">
                                                3450
                                                <svg width="19" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z" fill="black"></path>
                                                    <path d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z" fill="black"></path>
                                                    </svg>
                                            </span>
                                            <span class="featured__info--text">Square Ft</span>
                                        </li>
                                    </ul>
                                    <p class="featured__content--desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"/>
                                        </svg> 1421 San Pedro St, Los Angeles, CA</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="featured__properties--footer text-center mt-50">
                        <a class="solid__btn" href="listing.html">More Properties <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 15.9992C12.4111 15.9992 16 12.4105 16 7.99962C16 3.58875 12.411 0 8 0C3.58901 0 0 3.58875 0 7.99962C0 12.4105 3.58901 15.9992 8 15.9992V15.9992ZM4.19508 7.57155H7.57197V4.19439C7.57197 3.95805 7.76381 3.76636 8 3.76636C8.23634 3.76636 8.42804 3.95821 8.42804 4.19439V7.57155H11.8049C12.0413 7.57155 12.233 7.7634 12.233 7.99958C12.233 8.23592 12.0411 8.42762 11.8049 8.42762H8.42804V11.8046C8.42804 12.041 8.23619 12.2327 8 12.2327C7.76366 12.2327 7.57197 12.0408 7.57197 11.8046V8.42762H4.19508C3.95874 8.42762 3.76704 8.23577 3.76704 7.99958C3.76704 7.76324 3.9586 7.57155 4.19508 7.57155V7.57155Z" fill="white"/>
                            </svg>
                            </a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- featured section .\ -->

        <!-- featured best selling section -->
        <!-- <section class="featured__best--selling__section section--padding pb-0">
            <div class="container">
                <div class="section__heading gap-40 d-flex align-items-center justify-content-between mb-50" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="section__heading--left">
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
                        <h2 class="section__heading--title">Best Selling Properties <br> For Today Deal</h2>
                    </div>
                    <div class="section__heading--right">
                        <p class="section__heading--desc m-0">Our company provides a full range of services for the div construction of private houses and cottages Descr the readable content of a page when looking at its
                        </p>
                    </div>
                </div>
                <div class="featured__best--selling__inner position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="best__selling--thumbnail">
                        <div class="swiper best__selling--column1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="best__selling--thumbnail__items">
                                        <img class="best__selling--media" src="assets/img/other/best-selling-thumb.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="best__selling--thumbnail__items">
                                        <img class="best__selling--media" src="assets/img/other/best-selling-thumb2.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="best__selling--thumbnail__items">
                                        <img class="best__selling--media" src="assets/img/other/best-selling-thumb3.png" alt="img">
                                    </div>
                                </div>
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
                        <p class="best__selling--advanced__text">The most <span>advanced</span> revenue than this.</p>
                    </div>
                    <div class="best__selling--content">
                        <div class="best__selling--content__heading mb-50">
                            <h4 class="best__selling--subtitle h5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_6)">
                                <path d="M9.00021 4.72925L2.5806 10.0215C2.5806 10.029 2.57872 10.04 2.57497 10.055C2.57129 10.0698 2.56934 10.0806 2.56934 10.0883V15.4473C2.56934 15.6408 2.64008 15.8085 2.78152 15.9497C2.92292 16.091 3.09037 16.1621 3.2839 16.1621H7.571V11.8747H10.4295V16.1622H14.7165C14.91 16.1622 15.0777 16.0913 15.2189 15.9497C15.3603 15.8086 15.4313 15.6408 15.4313 15.4473V10.0883C15.4313 10.0586 15.4272 10.0361 15.4201 10.0215L9.00021 4.72925Z" fill="currentColor"/>
                                <path d="M17.8758 8.81572L15.4309 6.78374V2.2285C15.4309 2.12437 15.3974 2.03872 15.3302 1.9717C15.2636 1.90475 15.178 1.87128 15.0736 1.87128H12.93C12.8258 1.87128 12.7401 1.90475 12.6731 1.9717C12.6062 2.03872 12.5727 2.1244 12.5727 2.2285V4.4056L9.8486 2.12792C9.61069 1.93439 9.3278 1.83765 9.00026 1.83765C8.67275 1.83765 8.3899 1.93439 8.15175 2.12792L0.124063 8.81572C0.0496462 8.87516 0.00885955 8.95517 0.00127316 9.05567C-0.00627412 9.15609 0.0197308 9.2438 0.079366 9.31818L0.771565 10.1444C0.831201 10.2113 0.909254 10.2523 1.00604 10.2673C1.09539 10.2748 1.18475 10.2486 1.27411 10.1891L9.00002 3.74687L16.726 10.1891C16.7857 10.241 16.8637 10.2669 16.9605 10.2669H16.994C17.0907 10.2522 17.1686 10.211 17.2285 10.1442L17.9208 9.31814C17.9803 9.2436 18.0064 9.15605 17.9987 9.05551C17.991 8.95528 17.9501 8.87527 17.8758 8.81572Z" fill="currentColor"/>
                                </g>
                                <defs>
                                <clipPath >
                                <rect width="18" height="18" fill="currentColor"/>
                                </clipPath>
                                </defs>
                                </svg> Real estate agency</h4>
                            <h3 class="best__selling--title">Project Description</h3>
                        </div>
                        <ul class="best__selling--info mb-50">
                            <li class="best__selling--info__list d-flex justify-content-between">
                                <span class="best__selling--info__text">01: Projects Name:</span>
                                <span class="best__selling--info__text">Quarter</span>
                            </li>
                            <li class="best__selling--info__list d-flex justify-content-between">
                                <span class="best__selling--info__text">02: Projects Type:</span>
                                <span class="best__selling--info__text">Apartment / house</span>
                            </li>
                            <li class="best__selling--info__list d-flex justify-content-between">
                                <span class="best__selling--info__text">03: Property ID:</span>
                                <span class="best__selling--info__text">Th26157096</span>
                            </li>
                            <li class="best__selling--info__list d-flex justify-content-between">
                                <span class="best__selling--info__text">04: Building Location:</span>
                                <span class="best__selling--info__text"> New York , U.S.A</span>
                            </li>
                            <li class="best__selling--info__list d-flex justify-content-between">
                                <span class="best__selling--info__text">05: No Of Apartments:</span>
                                <span class="best__selling--info__text">Quarter</span>
                            </li>
                            <li class="best__selling--info__list d-flex justify-content-between">
                                <span class="best__selling--info__text">06: Total Investments:</span>
                                <span class="best__selling--info__text">$14,5000</span>
                            </li>
                        </ul>
                        <button class="best__selling--download__btn solid__btn" href="#">Download Brouchure <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.5 19C14.7381 19 19 14.7382 19 9.5C19 4.26184 14.738 0 9.5 0C4.26195 0 0 4.26184 0 9.5C0 14.7382 4.26195 19 9.5 19ZM4.98166 8.99164H8.99171V4.98108C8.99171 4.70041 9.21953 4.47276 9.5 4.47276C9.78066 4.47276 10.0083 4.70059 10.0083 4.98108V8.99164H14.0183C14.299 8.99164 14.5266 9.21947 14.5266 9.49996C14.5266 9.78062 14.2988 10.0083 14.0183 10.0083H10.0083V14.0187C10.0083 14.2993 9.78047 14.527 9.5 14.527C9.21934 14.527 8.99171 14.2991 8.99171 14.0187V10.0083H4.98166C4.701 10.0083 4.47336 9.78044 4.47336 9.49996C4.47336 9.21929 4.70083 8.99164 4.98166 8.99164Z" fill="#F23B3B"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- featured best selling section end -->

        <!-- Contact Property section -->
        <section class="contact__property--section section--padding">
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
                        </svg> Royal Infra - Loyalty, Truth & Honour</h3>
                    <h2 class="section__heading--title">Looking for to buy a property?</h2>
                </div>
                <div class="contact__property--inner d-flex">
                    <div class="contact__property--content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <p class="contact__property--desc">Explore our exclusive land listings and discover the perfect plot to build your dream home or make a smart investment. With a wide range of prime land options available, we help you find the ideal property that meets your needs and aspirations.</p>
                        <ul class="contact__property--info">
                            <li class="contact__property--info__text"><svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9001 1.62081C14.0668 1.78748 14.1501 1.98986 14.1501 2.22796C14.1501 2.46605 14.0668 2.66843 13.9001 2.8351L7.43583 9.29939L6.22154 10.5137C6.05487 10.6803 5.85249 10.7637 5.6144 10.7637C5.3763 10.7637 5.17392 10.6803 5.00725 10.5137L3.79297 9.29939L0.560826 6.06724C0.394159 5.90058 0.310826 5.6982 0.310826 5.4601C0.310826 5.222 0.394159 5.01962 0.560826 4.85296L1.77511 3.63867C1.94178 3.472 2.14416 3.38867 2.38225 3.38867C2.62035 3.38867 2.82273 3.472 2.9894 3.63867L5.6144 6.2726L11.4715 0.406528C11.6382 0.239862 11.8406 0.156528 12.0787 0.156528C12.3168 0.156528 12.5192 0.239862 12.6858 0.406528L13.9001 1.62081Z" fill="currentColor"/>
                                </svg> Prime locations with excellent connectivity</li>
                            <li class="contact__property--info__text"><svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9001 1.62081C14.0668 1.78748 14.1501 1.98986 14.1501 2.22796C14.1501 2.46605 14.0668 2.66843 13.9001 2.8351L7.43583 9.29939L6.22154 10.5137C6.05487 10.6803 5.85249 10.7637 5.6144 10.7637C5.3763 10.7637 5.17392 10.6803 5.00725 10.5137L3.79297 9.29939L0.560826 6.06724C0.394159 5.90058 0.310826 5.6982 0.310826 5.4601C0.310826 5.222 0.394159 5.01962 0.560826 4.85296L1.77511 3.63867C1.94178 3.472 2.14416 3.38867 2.38225 3.38867C2.62035 3.38867 2.82273 3.472 2.9894 3.63867L5.6144 6.2726L11.4715 0.406528C11.6382 0.239862 11.8406 0.156528 12.0787 0.156528C12.3168 0.156528 12.5192 0.239862 12.6858 0.406528L13.9001 1.62081Z" fill="currentColor"/>
                                </svg> Transparent and hassle-free buying process</li>
                            <li class="contact__property--info__text"><svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9001 1.62081C14.0668 1.78748 14.1501 1.98986 14.1501 2.22796C14.1501 2.46605 14.0668 2.66843 13.9001 2.8351L7.43583 9.29939L6.22154 10.5137C6.05487 10.6803 5.85249 10.7637 5.6144 10.7637C5.3763 10.7637 5.17392 10.6803 5.00725 10.5137L3.79297 9.29939L0.560826 6.06724C0.394159 5.90058 0.310826 5.6982 0.310826 5.4601C0.310826 5.222 0.394159 5.01962 0.560826 4.85296L1.77511 3.63867C1.94178 3.472 2.14416 3.38867 2.38225 3.38867C2.62035 3.38867 2.82273 3.472 2.9894 3.63867L5.6144 6.2726L11.4715 0.406528C11.6382 0.239862 11.8406 0.156528 12.0787 0.156528C12.3168 0.156528 12.5192 0.239862 12.6858 0.406528L13.9001 1.62081Z" fill="currentColor"/>
                                </svg> Expert guidance for land selection and investment</li>
                        </ul>
                        <div class="contact__property--thumb">
                            <img src="assets/img/hero/slide3.jpg" alt="img">
                        </div>
                    </div>
                    <div class="contact__property--form" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">


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


                        <form action="{{route('contact_message_store')}}" method="POST">
                            @csrf
                            <h3 class="contact__property--form__title">Contact Us</h3>
                            <div class="contact__property--form__inner">
                                <div class="contact__property--form__input">
                                    <label for="name">Name</label>
                                    <input id="name" placeholder="Enter your name" type="text" name="name" value="{{old('name')}}">
                                </div>
                                <div class="contact__property--form__input">
                                    <label for="email">Email</label>
                                    <input id="email" placeholder="Enter your email" type="email" name="email" value="{{old('email')}}">
                                </div>

                                <div class="contact__property--form__input">
                                    <label for="email">Email</label>
                                    <select class="contact__form--select" name="property_type" style="border: none">
                                        <option selected="" value="1">Property Type</option>
                                        <option value="Residential Properties" {{old('property_type') == 'Residential Properties' ? 'selected' : ''}}>Residential Properties</option>
                                        <option value="Commercial Properties" {{old('property_type') == 'Commercial Properties' ? 'selected' : ''}}>Commercial Properties</option>
                                        <option value="Mixed-use Properties" {{old('property_type') == 'Mixed-use Properties' ? 'selected' : ''}}>Mixed-use Properties</option>
                                        {{-- <option value="5">House</option>
                                        <option value="6">Single Family</option>
                                        <option value="7">Land</option> --}}
                                    </select>
                                </div>

                                <div class="contact__property--form__input">
                                    <label for="email">Contact No.</label>
                                    <input id="email" placeholder="Enter your contact" type="number" name="contact" value="{{old('contact')}}">
                                </div>

                                <div class="contact__property--form__input">
                                    <label for="email">Message</label>
                                    <textarea id="text" placeholder="Enter your message" name="message">{{old('message')}}</textarea>
                                </div>
                                <button class="contact__property--btn solid__btn" type="submit">Send Messege</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Property section .\ -->


        <!-- <section class="testimonial__section--two section--padding position-relative">
            <div class="container">
                <div class="testimonial__inner--style2 d-flex align-items-center">

                    <div class="testimonial__thumbnail position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <img src="assets/img/other/testimonial-thumb.png" alt="img">
                        <span class="testimonial__thumbnail--text">Client Testimonial</span>
                    </div>

                    <div class="testimonial__content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <div class="testimonial__inner--style2 testimonial__swiper--column1 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__content--items">
                                        <p class="testimonial__content--desc">This architectural masterpiece boasts spacious open-concept living areas, perfect for both entertaining and everyday living. The gourmet kitchen is a chef's dream, featuring top-of-the-line appliances, custom cabinetry,
                                            and a large center island. The adjacent dining area offers a seamless flow, ideal for hosting intimate gatherings or grand celebrations. dolor vel maiores illo, corrupti totam! </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content--items">
                                        <p class="testimonial__content--desc">This architectural masterpiece boasts spacious open-concept living areas, perfect for both entertaining and everyday living. The gourmet kitchen is a chef's dream, featuring top-of-the-line appliances, custom cabinetry,
                                            and a large center island. The adjacent dining area offers a seamless flow, ideal for hosting intimate gatherings or grand celebrations. dolor vel maiores illo, corrupti totam! </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content--items">
                                        <p class="testimonial__content--desc">This architectural masterpiece boasts spacious open-concept living areas, perfect for both entertaining and everyday living. The gourmet kitchen is a chef's dream, featuring top-of-the-line appliances, custom cabinetry,
                                            and a large center island. The adjacent dining area offers a seamless flow, ideal for hosting intimate gatherings or grand celebrations. dolor vel maiores illo, corrupti totam! </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__footer d-flex align-items-center">
                                <div class="swiper-pagination testimonial__pagination--style"></div>

                                <div class="testimonial__author--style">
                                    <h3 class="testimonial__author--title">Mathias Herasen</h3>
                                    <p class="testimonial__author--subtitle">Founder of <span>GamerPay</span></p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <img class="testimonial__position--icon" src="assets/img/other/testimonial-quate.png" alt="icon">
            <img class="testimonial__position--author__img" src="assets/img/other/testimonial-author1.png" alt="img">
            <img class="testimonial__position--author__img2" src="assets/img/other/testimonial-author2.png" alt="img">
        </section> -->
        <!-- Testimonial section .\ -->

        <!-- Team member section -->
        {{-- <section class="team__member--section section--padding">
            <div class="container">
                <div class="team__member--inner d-flex align-items-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="team__content">
                        <div class="section__heading team mb-40">
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
                                </svg> Royal Infra - Loyalty, Truth & Honour</h3>
                            <h2 class="section__heading--title">Our Property Agent</h2>
                        </div>
                        <p class="team__content--desc">Our company provides a full range of services for the con private houses and cottages since 19 Our company prov private houses and cottages since 19

                        </p>
                        <a class="team__all--member__link" href="#">See All Members <svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.5123 9.14893C31.5123 13.9435 27.7735 17.7979 23.2005 17.7979C18.6275 17.7979 14.8887 13.9435 14.8887 9.14893C14.8887 4.3544 18.6275 0.5 23.2005 0.5C27.7735 0.5 31.5123 4.3544 31.5123 9.14893Z" stroke="#BDC2C6"></path>
                            <path d="M26.9592 9.53033C27.2521 9.23744 27.2521 8.76256 26.9592 8.46967L22.1862 3.6967C21.8933 3.40381 21.4184 3.40381 21.1255 3.6967C20.8326 3.98959 20.8326 4.46447 21.1255 4.75736L25.3682 9L21.1255 13.2426C20.8326 13.5355 20.8326 14.0104 21.1255 14.3033C21.4184 14.5962 21.8933 14.5962 22.1862 14.3033L26.9592 9.53033ZM0.245117 9.75L26.4288 9.75L26.4288 8.25L0.245117 8.25L0.245117 9.75Z" fill="#FA4A4A"></path>
                            </svg>
                          </a>
                    </div>
                    <div class="team__member--wrapper">
                        <div class="swiper team__member--column2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team__member--items">
                                        <div class="team__member--thumbnail">
                                            <a class="team__member--media__link" href="#"><img class="team__member--media" src="assets/img/other/team1.png" alt="team-member"></a>
                                            <ul class="team__social--share d-flex align-items-center">
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.facebook.com/">
                                                        <svg width="8" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://twitter.com/">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                                                          </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.instagram.com/">
                                                        <svg width="14" height="14" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.pinterest.com/">
                                                        <svg width="12" height="14" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                                            </svg>
                                                        <span class="visually-hidden">Pinterest</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="team__member--content d-flex align-items-center justify-content-between">
                                            <div class="team__member--content__left">
                                                <h3 class="team__member--title"><a href="#">Leslie Alexander</a></h3>
                                                <span class="team__member--subtitle">GRAPHIC DESIGNER</span>
                                            </div>
                                            <a class="team__member--link__icon" href="#"><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.9688 2.91741L16.1661 14.3593C16.1431 14.6859 16.0015 14.9847 15.7675 15.2015C15.5333 15.4184 15.2361 15.5259 14.9298 15.5044L13.9553 15.4356C13.6492 15.4141 13.3696 15.2659 13.1681 15.0183C12.9667 14.7709 12.8619 14.447 12.885 14.1207L13.347 7.43796L2.65683 17.3401C2.17485 17.7866 1.46921 17.7403 1.05421 17.2305L0.416782 16.4475C0.00178032 15.9376 0.0250626 15.1456 0.507047 14.6992L11.2354 4.76165L4.91353 4.32777C4.60729 4.30606 4.3328 4.16414 4.13128 3.91657C3.92998 3.66928 3.83407 3.35617 3.85697 3.02981L3.93121 1.99264C3.95412 1.66603 4.0962 1.368 4.33044 1.15103C4.56442 0.934297 4.8621 0.82715 5.16847 0.848746L15.901 1.60533C16.2082 1.62711 16.4888 1.77619 16.6899 2.02463C16.8928 2.27281 16.9921 2.59004 16.9688 2.91741Z" fill="currentColor"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team__member--items">
                                        <div class="team__member--thumbnail">
                                            <a class="team__member--media__link" href="#"><img class="team__member--media" src="assets/img/other/team2.png" alt="team-member"></a>
                                            <ul class="team__social--share d-flex align-items-center">
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.facebook.com/">
                                                        <svg width="8" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://twitter.com/">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                                                          </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.instagram.com/">
                                                        <svg width="14" height="14" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.pinterest.com/">
                                                        <svg width="12" height="14" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                                            </svg>
                                                        <span class="visually-hidden">Pinterest</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="team__member--content d-flex align-items-center justify-content-between">
                                            <div class="team__member--content__left">
                                                <h3 class="team__member--title"><a href="#">Leslie Alexander</a></h3>
                                                <span class="team__member--subtitle">GRAPHIC DESIGNER</span>
                                            </div>
                                            <a class="team__member--link__icon" href="#"><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.9688 2.91741L16.1661 14.3593C16.1431 14.6859 16.0015 14.9847 15.7675 15.2015C15.5333 15.4184 15.2361 15.5259 14.9298 15.5044L13.9553 15.4356C13.6492 15.4141 13.3696 15.2659 13.1681 15.0183C12.9667 14.7709 12.8619 14.447 12.885 14.1207L13.347 7.43796L2.65683 17.3401C2.17485 17.7866 1.46921 17.7403 1.05421 17.2305L0.416782 16.4475C0.00178032 15.9376 0.0250626 15.1456 0.507047 14.6992L11.2354 4.76165L4.91353 4.32777C4.60729 4.30606 4.3328 4.16414 4.13128 3.91657C3.92998 3.66928 3.83407 3.35617 3.85697 3.02981L3.93121 1.99264C3.95412 1.66603 4.0962 1.368 4.33044 1.15103C4.56442 0.934297 4.8621 0.82715 5.16847 0.848746L15.901 1.60533C16.2082 1.62711 16.4888 1.77619 16.6899 2.02463C16.8928 2.27281 16.9921 2.59004 16.9688 2.91741Z" fill="currentColor"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team__member--items">
                                        <div class="team__member--thumbnail">
                                            <a class="team__member--media__link" href="#"><img class="team__member--media" src="assets/img/other/team1.png" alt="team-member"></a>
                                            <ul class="team__social--share d-flex align-items-center">
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.facebook.com/">
                                                        <svg width="8" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://twitter.com/">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                                                          </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.instagram.com/">
                                                        <svg width="14" height="14" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="team__social--share__list">
                                                    <a class="team__social--share__icon" target="_blank" href="https://www.pinterest.com/">
                                                        <svg width="12" height="14" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                                            </svg>
                                                        <span class="visually-hidden">Pinterest</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="team__member--content d-flex align-items-center justify-content-between">
                                            <div class="team__member--content__left">
                                                <h3 class="team__member--title"><a href="#">Leslie Alexander</a></h3>
                                                <span class="team__member--subtitle">GRAPHIC DESIGNER</span>
                                            </div>
                                            <a class="team__member--link__icon" href="#"><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.9688 2.91741L16.1661 14.3593C16.1431 14.6859 16.0015 14.9847 15.7675 15.2015C15.5333 15.4184 15.2361 15.5259 14.9298 15.5044L13.9553 15.4356C13.6492 15.4141 13.3696 15.2659 13.1681 15.0183C12.9667 14.7709 12.8619 14.447 12.885 14.1207L13.347 7.43796L2.65683 17.3401C2.17485 17.7866 1.46921 17.7403 1.05421 17.2305L0.416782 16.4475C0.00178032 15.9376 0.0250626 15.1456 0.507047 14.6992L11.2354 4.76165L4.91353 4.32777C4.60729 4.30606 4.3328 4.16414 4.13128 3.91657C3.92998 3.66928 3.83407 3.35617 3.85697 3.02981L3.93121 1.99264C3.95412 1.66603 4.0962 1.368 4.33044 1.15103C4.56442 0.934297 4.8621 0.82715 5.16847 0.848746L15.901 1.60533C16.2082 1.62711 16.4888 1.77619 16.6899 2.02463C16.8928 2.27281 16.9921 2.59004 16.9688 2.91741Z" fill="currentColor"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                </div>
            </div>
        </section> --}}
        <!-- Team member section .\ -->

        <!-- Blog section -->
        <!-- <section class="blog__section section--padding pt-0">
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
                        </svg> Latest news & articles
                    </h3>
                    <h2 class="section__heading--title">Latest News & articles <br> From the blog</h2>
                </div>
                <div class="blog__inner blog__column3 swiper" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="blog__items">
                                <div class="blog__thumbnail position-relative">
                                    <a href="blog-details.html"><img class="blog__thumbnail--media" src="assets/img/blog/blog1.png" alt="blog-img"></a>
                                    <span class="blog__badge"><svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7001 1.64453L13.6996 6.08165C13.6996 6.30139 13.6111 6.51254 13.4528 6.66793L8.0918 11.9473L8.17408 12.0283C8.5521 12.4006 9.16487 12.4006 9.54288 12.0283L14.384 7.26184C14.566 7.08309 14.6682 6.84048 14.6682 6.58785V2.59783C14.6682 2.07113 14.235 1.64453 13.7001 1.64453Z" fill="currentColor"/>
                                        <path d="M11.7634 0.691406H7.71027C7.45374 0.691406 7.20738 0.791979 7.02587 0.970722L1.75007 6.16524C1.37205 6.53751 1.37205 7.14094 1.75007 7.51368L5.80324 11.5051C6.18126 11.8774 6.79403 11.8774 7.17205 11.5051L12.4479 6.31062C12.6294 6.1314 12.7315 5.88879 12.7315 5.63569V1.6447C12.7315 1.11801 12.2983 0.691406 11.7634 0.691406ZM10.0694 4.02795C9.66862 4.02795 9.34335 3.70764 9.34335 3.31298C9.34335 2.91831 9.66862 2.598 10.0694 2.598C10.4701 2.598 10.7954 2.91831 10.7954 3.31298C10.7954 3.70764 10.4701 4.02795 10.0694 4.02795Z" fill="currentColor"/>
                                        </svg>
                                         Business
                                    </span>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__meta d-flex">
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">02 Apr 2021</span>
                                        </li>
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">Comments (03)</span>
                                        </li>
                                    </ul>
                                    <h3 class="blog__title"><a href="blog-details.html">The 8 Best Things About
                                        Real Estate</a></h3>
                                    <p class="blog__desc">Business is the activity of making on cing or buying and selling pro</p>
                                    <a class="blog__link--btn" href="blog-details.html">Read More <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2454)">
                                        <path d="M9.94799 0C8.0102 0 6.15183 0.758842 4.78163 2.10963C3.41138 3.46032 2.6416 5.2924 2.6416 7.20262C2.6416 9.11285 3.41138 10.9449 4.78163 12.2956C6.15178 13.6464 8.01025 14.4052 9.94799 14.4052C11.2305 14.4052 12.4904 14.0724 13.6012 13.4403C14.7119 12.8081 15.6342 11.8989 16.2755 10.8039C16.9168 9.70896 17.2544 8.46688 17.2544 7.20262C17.2544 5.29235 16.4846 3.46037 15.1144 2.10963C13.7442 0.758842 11.8857 0 9.94799 0ZM13.6012 7.21698C13.6036 7.37353 13.5414 7.52435 13.4287 7.63478L11.0235 9.99863C10.8749 10.1453 10.6583 10.2027 10.4552 10.1493C10.2522 10.0958 10.0934 9.93955 10.0387 9.73948C9.98418 9.53932 10.0421 9.3257 10.1906 9.17899L11.5992 7.78892H6.87935C6.6706 7.78892 6.47764 7.6791 6.37318 7.50085C6.26881 7.32249 6.26881 7.10283 6.37318 6.92459C6.47766 6.74633 6.6706 6.63651 6.87935 6.63651H11.6126L10.1907 5.23489C10.0419 5.08819 9.98383 4.87446 10.0383 4.6741C10.0928 4.47373 10.2515 4.31718 10.4547 4.26352C10.658 4.20987 10.8749 4.26714 11.0236 4.41385L13.4289 6.7777C13.5398 6.88633 13.6018 7.03414 13.6013 7.18828V7.21711L13.6012 7.21698Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                        <clipPath >
                                        <rect width="18.2593" height="14.7588" fill="white" transform="translate(0.815186)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__items">
                                <div class="blog__thumbnail position-relative">
                                    <a href="blog-details.html"><img class="blog__thumbnail--media" src="assets/img/blog/blog2.png" alt="blog-img"></a>
                                    <span class="blog__badge"><svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7001 1.64453L13.6996 6.08165C13.6996 6.30139 13.6111 6.51254 13.4528 6.66793L8.0918 11.9473L8.17408 12.0283C8.5521 12.4006 9.16487 12.4006 9.54288 12.0283L14.384 7.26184C14.566 7.08309 14.6682 6.84048 14.6682 6.58785V2.59783C14.6682 2.07113 14.235 1.64453 13.7001 1.64453Z" fill="currentColor"/>
                                        <path d="M11.7634 0.691406H7.71027C7.45374 0.691406 7.20738 0.791979 7.02587 0.970722L1.75007 6.16524C1.37205 6.53751 1.37205 7.14094 1.75007 7.51368L5.80324 11.5051C6.18126 11.8774 6.79403 11.8774 7.17205 11.5051L12.4479 6.31062C12.6294 6.1314 12.7315 5.88879 12.7315 5.63569V1.6447C12.7315 1.11801 12.2983 0.691406 11.7634 0.691406ZM10.0694 4.02795C9.66862 4.02795 9.34335 3.70764 9.34335 3.31298C9.34335 2.91831 9.66862 2.598 10.0694 2.598C10.4701 2.598 10.7954 2.91831 10.7954 3.31298C10.7954 3.70764 10.4701 4.02795 10.0694 4.02795Z" fill="currentColor"/>
                                        </svg>
                                         Business
                                    </span>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__meta d-flex">
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">02 Apr 2021</span>
                                        </li>
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">Comments (03)</span>
                                        </li>
                                    </ul>
                                    <h3 class="blog__title"><a href="blog-details.html">Get Best Advertiser In Your
                                        Side Pocket</a></h3>
                                    <p class="blog__desc">Business is the activity of making on cing or buying and selling pro</p>
                                    <a class="blog__link--btn" href="blog-details.html">Read More <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2454)">
                                        <path d="M9.94799 0C8.0102 0 6.15183 0.758842 4.78163 2.10963C3.41138 3.46032 2.6416 5.2924 2.6416 7.20262C2.6416 9.11285 3.41138 10.9449 4.78163 12.2956C6.15178 13.6464 8.01025 14.4052 9.94799 14.4052C11.2305 14.4052 12.4904 14.0724 13.6012 13.4403C14.7119 12.8081 15.6342 11.8989 16.2755 10.8039C16.9168 9.70896 17.2544 8.46688 17.2544 7.20262C17.2544 5.29235 16.4846 3.46037 15.1144 2.10963C13.7442 0.758842 11.8857 0 9.94799 0ZM13.6012 7.21698C13.6036 7.37353 13.5414 7.52435 13.4287 7.63478L11.0235 9.99863C10.8749 10.1453 10.6583 10.2027 10.4552 10.1493C10.2522 10.0958 10.0934 9.93955 10.0387 9.73948C9.98418 9.53932 10.0421 9.3257 10.1906 9.17899L11.5992 7.78892H6.87935C6.6706 7.78892 6.47764 7.6791 6.37318 7.50085C6.26881 7.32249 6.26881 7.10283 6.37318 6.92459C6.47766 6.74633 6.6706 6.63651 6.87935 6.63651H11.6126L10.1907 5.23489C10.0419 5.08819 9.98383 4.87446 10.0383 4.6741C10.0928 4.47373 10.2515 4.31718 10.4547 4.26352C10.658 4.20987 10.8749 4.26714 11.0236 4.41385L13.4289 6.7777C13.5398 6.88633 13.6018 7.03414 13.6013 7.18828V7.21711L13.6012 7.21698Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                        <clipPath >
                                        <rect width="18.2593" height="14.7588" fill="white" transform="translate(0.815186)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__items">
                                <div class="blog__thumbnail position-relative">
                                    <a href="blog-details.html"><img class="blog__thumbnail--media" src="assets/img/blog/blog3.png" alt="blog-img"></a>
                                    <span class="blog__badge"><svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7001 1.64453L13.6996 6.08165C13.6996 6.30139 13.6111 6.51254 13.4528 6.66793L8.0918 11.9473L8.17408 12.0283C8.5521 12.4006 9.16487 12.4006 9.54288 12.0283L14.384 7.26184C14.566 7.08309 14.6682 6.84048 14.6682 6.58785V2.59783C14.6682 2.07113 14.235 1.64453 13.7001 1.64453Z" fill="currentColor"/>
                                        <path d="M11.7634 0.691406H7.71027C7.45374 0.691406 7.20738 0.791979 7.02587 0.970722L1.75007 6.16524C1.37205 6.53751 1.37205 7.14094 1.75007 7.51368L5.80324 11.5051C6.18126 11.8774 6.79403 11.8774 7.17205 11.5051L12.4479 6.31062C12.6294 6.1314 12.7315 5.88879 12.7315 5.63569V1.6447C12.7315 1.11801 12.2983 0.691406 11.7634 0.691406ZM10.0694 4.02795C9.66862 4.02795 9.34335 3.70764 9.34335 3.31298C9.34335 2.91831 9.66862 2.598 10.0694 2.598C10.4701 2.598 10.7954 2.91831 10.7954 3.31298C10.7954 3.70764 10.4701 4.02795 10.0694 4.02795Z" fill="currentColor"/>
                                        </svg>
                                         Business
                                    </span>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__meta d-flex">
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">02 Apr 2021</span>
                                        </li>
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">Comments (03)</span>
                                        </li>
                                    </ul>
                                    <h3 class="blog__title"><a href="blog-details.html">29 Real Estate Blogs Every
                                        Realtor Should
                                        </a></h3>
                                    <p class="blog__desc">Business is the activity of making on cing or buying and selling pro</p>
                                    <a class="blog__link--btn" href="blog-details.html">Read More <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2454)">
                                        <path d="M9.94799 0C8.0102 0 6.15183 0.758842 4.78163 2.10963C3.41138 3.46032 2.6416 5.2924 2.6416 7.20262C2.6416 9.11285 3.41138 10.9449 4.78163 12.2956C6.15178 13.6464 8.01025 14.4052 9.94799 14.4052C11.2305 14.4052 12.4904 14.0724 13.6012 13.4403C14.7119 12.8081 15.6342 11.8989 16.2755 10.8039C16.9168 9.70896 17.2544 8.46688 17.2544 7.20262C17.2544 5.29235 16.4846 3.46037 15.1144 2.10963C13.7442 0.758842 11.8857 0 9.94799 0ZM13.6012 7.21698C13.6036 7.37353 13.5414 7.52435 13.4287 7.63478L11.0235 9.99863C10.8749 10.1453 10.6583 10.2027 10.4552 10.1493C10.2522 10.0958 10.0934 9.93955 10.0387 9.73948C9.98418 9.53932 10.0421 9.3257 10.1906 9.17899L11.5992 7.78892H6.87935C6.6706 7.78892 6.47764 7.6791 6.37318 7.50085C6.26881 7.32249 6.26881 7.10283 6.37318 6.92459C6.47766 6.74633 6.6706 6.63651 6.87935 6.63651H11.6126L10.1907 5.23489C10.0419 5.08819 9.98383 4.87446 10.0383 4.6741C10.0928 4.47373 10.2515 4.31718 10.4547 4.26352C10.658 4.20987 10.8749 4.26714 11.0236 4.41385L13.4289 6.7777C13.5398 6.88633 13.6018 7.03414 13.6013 7.18828V7.21711L13.6012 7.21698Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                        <clipPath >
                                        <rect width="18.2593" height="14.7588" fill="white" transform="translate(0.815186)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__items">
                                <div class="blog__thumbnail position-relative">
                                    <a href="blog-details.html"><img class="blog__thumbnail--media" src="assets/img/blog/blog1.png" alt="blog-img"></a>
                                    <span class="blog__badge"><svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7001 1.64453L13.6996 6.08165C13.6996 6.30139 13.6111 6.51254 13.4528 6.66793L8.0918 11.9473L8.17408 12.0283C8.5521 12.4006 9.16487 12.4006 9.54288 12.0283L14.384 7.26184C14.566 7.08309 14.6682 6.84048 14.6682 6.58785V2.59783C14.6682 2.07113 14.235 1.64453 13.7001 1.64453Z" fill="currentColor"/>
                                        <path d="M11.7634 0.691406H7.71027C7.45374 0.691406 7.20738 0.791979 7.02587 0.970722L1.75007 6.16524C1.37205 6.53751 1.37205 7.14094 1.75007 7.51368L5.80324 11.5051C6.18126 11.8774 6.79403 11.8774 7.17205 11.5051L12.4479 6.31062C12.6294 6.1314 12.7315 5.88879 12.7315 5.63569V1.6447C12.7315 1.11801 12.2983 0.691406 11.7634 0.691406ZM10.0694 4.02795C9.66862 4.02795 9.34335 3.70764 9.34335 3.31298C9.34335 2.91831 9.66862 2.598 10.0694 2.598C10.4701 2.598 10.7954 2.91831 10.7954 3.31298C10.7954 3.70764 10.4701 4.02795 10.0694 4.02795Z" fill="currentColor"/>
                                        </svg>
                                         Business
                                    </span>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__meta d-flex">
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">02 Apr 2021</span>
                                        </li>
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">Comments (03)</span>
                                        </li>
                                    </ul>
                                    <h3 class="blog__title"><a href="blog-details.html">The 8 Best Things About
                                        Real Estate</a></h3>
                                    <p class="blog__desc">Business is the activity of making on cing or buying and selling pro</p>
                                    <a class="blog__link--btn" href="blog-details.html">Read More <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2454)">
                                        <path d="M9.94799 0C8.0102 0 6.15183 0.758842 4.78163 2.10963C3.41138 3.46032 2.6416 5.2924 2.6416 7.20262C2.6416 9.11285 3.41138 10.9449 4.78163 12.2956C6.15178 13.6464 8.01025 14.4052 9.94799 14.4052C11.2305 14.4052 12.4904 14.0724 13.6012 13.4403C14.7119 12.8081 15.6342 11.8989 16.2755 10.8039C16.9168 9.70896 17.2544 8.46688 17.2544 7.20262C17.2544 5.29235 16.4846 3.46037 15.1144 2.10963C13.7442 0.758842 11.8857 0 9.94799 0ZM13.6012 7.21698C13.6036 7.37353 13.5414 7.52435 13.4287 7.63478L11.0235 9.99863C10.8749 10.1453 10.6583 10.2027 10.4552 10.1493C10.2522 10.0958 10.0934 9.93955 10.0387 9.73948C9.98418 9.53932 10.0421 9.3257 10.1906 9.17899L11.5992 7.78892H6.87935C6.6706 7.78892 6.47764 7.6791 6.37318 7.50085C6.26881 7.32249 6.26881 7.10283 6.37318 6.92459C6.47766 6.74633 6.6706 6.63651 6.87935 6.63651H11.6126L10.1907 5.23489C10.0419 5.08819 9.98383 4.87446 10.0383 4.6741C10.0928 4.47373 10.2515 4.31718 10.4547 4.26352C10.658 4.20987 10.8749 4.26714 11.0236 4.41385L13.4289 6.7777C13.5398 6.88633 13.6018 7.03414 13.6013 7.18828V7.21711L13.6012 7.21698Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                        <clipPath >
                                        <rect width="18.2593" height="14.7588" fill="white" transform="translate(0.815186)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__items">
                                <div class="blog__thumbnail position-relative">
                                    <a href="blog-details.html"><img class="blog__thumbnail--media" src="assets/img/blog/blog2.png" alt="blog-img"></a>
                                    <span class="blog__badge"><svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7001 1.64453L13.6996 6.08165C13.6996 6.30139 13.6111 6.51254 13.4528 6.66793L8.0918 11.9473L8.17408 12.0283C8.5521 12.4006 9.16487 12.4006 9.54288 12.0283L14.384 7.26184C14.566 7.08309 14.6682 6.84048 14.6682 6.58785V2.59783C14.6682 2.07113 14.235 1.64453 13.7001 1.64453Z" fill="currentColor"/>
                                        <path d="M11.7634 0.691406H7.71027C7.45374 0.691406 7.20738 0.791979 7.02587 0.970722L1.75007 6.16524C1.37205 6.53751 1.37205 7.14094 1.75007 7.51368L5.80324 11.5051C6.18126 11.8774 6.79403 11.8774 7.17205 11.5051L12.4479 6.31062C12.6294 6.1314 12.7315 5.88879 12.7315 5.63569V1.6447C12.7315 1.11801 12.2983 0.691406 11.7634 0.691406ZM10.0694 4.02795C9.66862 4.02795 9.34335 3.70764 9.34335 3.31298C9.34335 2.91831 9.66862 2.598 10.0694 2.598C10.4701 2.598 10.7954 2.91831 10.7954 3.31298C10.7954 3.70764 10.4701 4.02795 10.0694 4.02795Z" fill="currentColor"/>
                                        </svg>
                                         Business
                                    </span>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__meta d-flex">
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">02 Apr 2021</span>
                                        </li>
                                        <li class="blog__meta--list d-flex align-items-center">
                                            <span class="blog__meta--icon"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                            <span class="blog__meta--date">Comments (03)</span>
                                        </li>
                                    </ul>
                                    <h3 class="blog__title"><a href="blog-details.html">Get Best Advertiser In Your
                                        Side Pocket</a></h3>
                                    <p class="blog__desc">Business is the activity of making on cing or buying and selling pro</p>
                                    <a class="blog__link--btn" href="blog-details.html">Read More <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2454)">
                                        <path d="M9.94799 0C8.0102 0 6.15183 0.758842 4.78163 2.10963C3.41138 3.46032 2.6416 5.2924 2.6416 7.20262C2.6416 9.11285 3.41138 10.9449 4.78163 12.2956C6.15178 13.6464 8.01025 14.4052 9.94799 14.4052C11.2305 14.4052 12.4904 14.0724 13.6012 13.4403C14.7119 12.8081 15.6342 11.8989 16.2755 10.8039C16.9168 9.70896 17.2544 8.46688 17.2544 7.20262C17.2544 5.29235 16.4846 3.46037 15.1144 2.10963C13.7442 0.758842 11.8857 0 9.94799 0ZM13.6012 7.21698C13.6036 7.37353 13.5414 7.52435 13.4287 7.63478L11.0235 9.99863C10.8749 10.1453 10.6583 10.2027 10.4552 10.1493C10.2522 10.0958 10.0934 9.93955 10.0387 9.73948C9.98418 9.53932 10.0421 9.3257 10.1906 9.17899L11.5992 7.78892H6.87935C6.6706 7.78892 6.47764 7.6791 6.37318 7.50085C6.26881 7.32249 6.26881 7.10283 6.37318 6.92459C6.47766 6.74633 6.6706 6.63651 6.87935 6.63651H11.6126L10.1907 5.23489C10.0419 5.08819 9.98383 4.87446 10.0383 4.6741C10.0928 4.47373 10.2515 4.31718 10.4547 4.26352C10.658 4.20987 10.8749 4.26714 11.0236 4.41385L13.4289 6.7777C13.5398 6.88633 13.6018 7.03414 13.6013 7.18828V7.21711L13.6012 7.21698Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                        <clipPath >
                                        <rect width="18.2593" height="14.7588" fill="white" transform="translate(0.815186)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        </div>
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
        </section> -->
        <!-- Blog section .\ -->

        <!-- Map section -->
        <div class="map__area" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.3321295315613!2d73.1517690747495!3d22.303275442788593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc9ac99bb7bb5%3A0x11b3016b896945a3!2sSampat%20Square!5e0!3m2!1sen!2sin!4v1740469269308!5m2!1sen!2sin"></iframe>
        </div>
        <!-- Map section .\ -->

@endsection
