<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Digital Marketing Agency - Adlance | Empowering Muslim Brands </title>
    <!--====== Meta Description ======-->
    <meta name="description" content="At adlance, we provide top-notch digital marketing services to empower Muslim brands globally. From graphic design to website development and digital marketing management, our team of experts is dedicated to delivering quality work to help you grow. Contact us today to take your business to the next level.
">

    <!--====== FAVICON ======-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend_assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend_assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend_assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('frontend_assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">

    <!--====== SWIPER JS css ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!--====== FONT-AWESOME-6 ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--======GOOGLE FONTS ======-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!--====== AOS-Animate on Scroll Style ======-->
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

    <!--====== Swiper CSS CDN ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend_assets/images/favicon.ico') }}" type="image/png">

    <!--====== Normalize css ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/normalize.css') }}">

    <!--====== Pagepiling css ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery.pagepiling.css') }}">

    <!--====== Nifty Modal css ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/nifty-modal.css') }}">

    <!--====== Services tab css ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/services-tab.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">

    <!--====== Mobile Responsiveness Style ======-->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/mobile-style.css') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V7X299JF5Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-V7X299JF5Q');
    </script>

    <meta name="facebook-domain-verification" content="i9f4pdtgoynn99k8f308nui9tr2flf" />
</head>

<body>
    <div class="cursor-dot-outline"></div>
    <div class="cursor-dot"></div>
    <!-- <div class="container"> -->

    <div id="pagepiling" class="main">
        @if(Request::is('/'))
        @yield('video_section')
        @endif

        <div class="section pp-scrollable w-100 h-100">
            <div class="d-flex header_main_container">
                @include('partials.menu')

                @yield('page_content')
                <!--====== Stories/POPUP ======-->
                <div class="nifty-modal fade-in-scale adlance_modal" id="home_story_popup">
                    <div class="md-content">
                        <div class="modal_content">
                            <div class="modal_close d-flex md-close">
                                <span> <i class="fa-solid fa-xmark me-1"></i></span>
                                Close
                            </div>
                            <!-- <div class='adlance_story_thumbnail'>
                                                    <img src="frontend_assets/images/card-topp.jpeg" alt="story thumbnail">
                                                </div> -->
                            <img loading="lazy" class="story_popup_cover" style="width:100%;border-radius: 10px;" src="frontend_assets/images/card-topp.webp" alt="story thumbnail">
                            <div class="container">
                                <div class="modal_content_container row">
                                    <div class="col-md-8 col-sm-12">
                                        <h2 class="popupStory_title">Eid al Adha</h2>
                                        <p class="popupStory_summary">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting
                                            industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s.
                                        </p>
                                        <a href="" class="read_fullStory_popup adlance_modal_btn">Read Full Story</a>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3 col-sm-12">
                                        <h3 class="adlance_post_year">2023</h3>
                                        <h4>Date</h4>
                                        <h5 class="popupStory_date">jan 13, 2023 </h5>
                                        <h4 class="mt-3">By</h4>
                                        <h6 class="author_name story_author">Palvisha</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Clients/POPUP ======-->
                <div class="nifty-modal fade-in-scale adlance_modal" id="clients_slide_popup">
                    <div class="md-content">
                        <div class="modal_content">
                            <div class="modal_close d-flex md-close">
                                <span> <i class="fa-solid fa-xmark me-1"></i></span>
                                Close
                            </div>
                            <!-- <div class='adlance_story_thumbnail'>
                                                    <img src="frontend_assets/images/card-topp.jpeg" alt="story thumbnail">
                                                </div> -->
                            <img loading="lazy" class="clientPopupCoverImg" style="width:100%;border-radius: 10px;" src="frontend_assets/images/card-topp.webp" alt="story thumbnail">
                            <div class="container">
                                <div class="modal_content_container row">
                                    <div class="col-md-8 col-sm-12">
                                        <h2 class="popup_title">Eid al Adha</h2>
                                        <p class="popup_overview">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting
                                            industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s.
                                        </p>
                                        <a href="/contact-us.html" class="adlance_modal_btn">Contact Us</a>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3 col-sm-12 popup_meta">
                                        <!-- <h3 class="adlance_post_year">2023</h3> -->
                                        <h5>Year</h5>
                                        <h6 class="author_name popup_year">jan 13, 2023 </h6>
                                        <h5 class="mt-3 ">Based</h5>
                                        <h6 class="author_name popup_country">United Kingdom </h6>
                                        <h5 class="mt-3">Website</h5>
                                        <h6><a class="web_link" href="emanchannel.tv">emanchannel.tv</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL-2 -->
                <div class='md-overlay'></div>
            </div>
            <!--====== FOOTER SECTION - DESKTOP ======-->
            @include('partials.footer')
        </div>

    </div>

    <!-- </div> -->
    <!--====== JQUERY/JS SCRIPTS ======-->

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-migrate-3.4.0.js"></script> -->
    <script src="{{ asset('frontend_assets/js/jquery-jquery-migrate.min.js') }}"></script>
    <!--====== JQUERY/UI SCRIPTS ======-->
    <script src="{{ asset('frontend_assets/js/jquery-ui.js') }}"></script>

    <!--====== BOOTSTRAP SCRIPTS ======-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>

    <!--====== SWIPER-SLIDER SCRIPTS ======-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--====== AOS-Animate on Scroll SCRIPTS ======-->
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->

    <!--====== CUSTOM/MAIN SCRIPTS ======-->
    <script src="{{ asset('frontend_assets/js/jquery.pagepiling.js') }}"></script>
    <!--====== MODAL/POPUP NIFTY ======-->
    <script src="{{ asset('frontend_assets/js/nifty-modal.js') }}"></script>
    <!-- Services Tab Scripts -->
    <script src="{{ asset('frontend_assets/js/gsap-gsap.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/services-tabs.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/main.js?v=1.1') }}"></script>
</body>

</html>