@extends('layouts.master')

@section('page_content')

<!--====== SERVICES PAGE SECTION-1 ======-->
<div class="adlance_sections_container">
    <article class="service_main d-flex align-items-center justify-content-center container-fluid min-vh-100">
        <div class="row align-items-start justify-content-center">
            <div class="col-lg-8 order-1 order-lg-0">
                <div class="row">
                    <div class="col-12 col-md-5 order-1 order-md-0">
                        <img class="img-fluid w-100 services_main_img" src="frontend_assets/images/services-placeholder.jpg" alt="service image placeholder">
                    </div>
                    <div data-sub-category="web-seo" class="col-12 col-md-6 order-0 order-md-1 service_subcat">
                        <h2 class="d-lg-block d-none adlance_heading text-left services_heading">
                            Services</h2>
                        <ul class="service_categories">
                            <li><a href="/#adlance_logo">Search Engine Optimization</a></li>
                            <li><a href="">Adsense</a></li>
                            <li><a href="">Social Media Marketing</a></li>
                        </ul>
                        <p class="service_descrp">
                            Unlock your website's full potential and conquer search engine rankings with
                            our expert SEO strategies - where
                            visibility meets success.
                        </p>
                    </div>
                    <div id="design_service" data-sub-category="design" class="col-12 col-md-6 order-0 order-md-1 service_subcat">
                        <h2 class="adlance_heading d-lg-block d-none text-left services_heading">
                            Services</h2>
                        <ul class="service_categories">
                            <li><a href="/services.html#design_service">Logo</a></li>
                            <li><a href="">print</a></li>
                            <li><a href="">Web UI/UX</a></li>
                            <li><a href="">Mobile App UI/UX</a></li>
                        </ul>
                        <p class="service_descrp">
                            Our team of skilled designers uses the latest digital tools and techniques to provide stunning designs that will elevate
                            your brand and capture your audience's attention.
                        </p>
                    </div>
                    <div data-sub-category="web" class="col-12 col-md-6 order-0 order-md-1 service_subcat">
                        <h2 class="adlance_heading d-lg-block d-none text-left services_heading">
                            Services</h2>
                        <ul class="service_categories">
                            <li><a href="/#adlance_logo">Wordpress</a></li>
                            <li><a href="">Laravel</a></li>
                            <li><a href="">Backend Development</a></li>
                            <li><a href="">Mobile App Development</a></li>
                        </ul>
                        <p class="service_descrp">
                            Experience the power of seamless digital transformation with our expert web
                            app development services
                        </p>
                    </div>
                    <div data-sub-category="motion-graphics" class="col-12 col-md-6 order-0 order-md-1 service_subcat">
                        <h2 class="adlance_heading text-left d-lg-block d-none services_heading">
                            Services</h2>
                        <ul class="service_categories">
                            <li><a href="/#adlance_logo">Animations</a></li>
                            <li><a href="">Video Editing</a></li>
                            <li><a href="">Intros and Outros</a></li>
                        </ul>
                        <p class="service_descrp">
                            We specialize in creating captivating and high-quality motion graphics that bring your ideas to life, using the latest
                            software and techniques to produce visually stunning animations and videos that will engage your audience and enhance
                            your brand.
                        </p>
                    </div>
                    <div data-sub-category="branding-essentials" class="col-12 col-md-6 service_subcat">
                        <h2 class="adlance_heading text-left d-lg-block d-none services_heading">
                            Services</h2>
                        <ul class="service_categories">
                            <li><a href="/services.html/#adlance_logo">Branding guideline</a></li>
                            <li><a href="">Stationary</a></li>
                            <li><a href="">Packaging</a></li>
                        </ul>
                        <p class="service_descrp">
                            Are you ready to take your branding to the next level? With years of experience, and a diverse range of clients, we have
                            a pretty good idea what it takes to create a successful brand. From Branding guidelines to stationeries. We’ve got you
                            covered.
                        </p>
                    </div>
                    <div data-sub-category="digital-marketing" class="col-12 col-md-6 order-0 order-md-1 service_subcat">
                        <h2 class="adlance_heading text-left d-lg-block d-none services_heading">
                            Services</h2>
                        <ul class="service_categories">
                            <li><a href="/#adlance_logo">Paid Advertising</a></li>
                            <li><a href="">Strategy Analysis</a></li>
                            <li><a href="">Social Media Management</a></li>
                            <li><a href="">Email Marketing</a></li>
                        </ul>
                        <p class="service_descrp">
                            Unleash your brand's true potential with our supercharged digital marketing
                            services - where professionalism meets
                            exceptional results.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-0 order-lg-1">
                <ul class="d-none d-lg-block services_list">
                    <li><a data-service-img="/frontend_assets/images/boo" class="active_service" href="design">Design</a></li>
                    <li><a href="motion-graphics">Motion Graphic</a></li>
                    <li><a href="digital-marketing">Digital Marketing</a></li>
                    <li><a href="branding-essentials">Branding Essentials</a></li>
                    <li><a href="web">Web App Development</a></li>
                    <li><a href="web-seo">Search Engine Optimization</a></li>
                </ul>
                <div class="mt-3 mb-3 d-block d-lg-none">
                    <h2 class="adlance_heading d-lg-none d-block text-center mb-4">Services</h2>
                    <select data-live-search="false" class="form-select form-select-lg services_dropdown" name="" id="">
                        <option value="design">Graphic Design</option>
                        <option value="motion-graphics">Motion Graphic</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="branding-essentials">Branding Essentials</option>
                        <option value="web-seo">Search Engine Optimization</option>
                        <option value="web">Web App Development</option>
                    </select>
                </div>
            </div>
        </div>
        <span class="service_icon_down d-none d-md-flex"><i class="cursor-pointer fa-solid fa-chevron-down"></i></span>
    </article>
    <!--====== SERVICES PAGE SECTION-1 END ======-->
    <!--====== SERVICES PAGE SECTION-2 ======-->
    <article class="adlance_services_details d-flex flex-column justify-content-center">
        <div id="web-seo" class="ser_categories">
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Search Engine Optimization</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Adsense</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Social Media Marketing</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="design" class="ser_categories">
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Logo</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="rounded-3 d-none d-md-block" src="frontend_assets/images/logo1.jpg" alt="">
                    <img class="rounded-3 d-none d-md-block" src="frontend_assets/images/logo2.jpg" alt="">
                    <img class="rounded-3 " src="frontend_assets/images/logo3.jpg" alt="">
                    <img class="rounded-3 " src="frontend_assets/images/logo4.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Print</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="rounded-3 d-none d-md-block" src="frontend_assets/images/print1.jpg" alt="">
                    <img class="rounded-3 d-none d-md-block" src="frontend_assets/images/print2.jpg" alt="">
                    <img class="rounded-3 " src="frontend_assets/images/print3.jpg" alt="">
                    <img class="rounded-3 " src="frontend_assets/images/print4.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Web UI/UX</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="rounded-3 d-none d-md-block" src="frontend_assets/images/webUI-1.jpg" alt="">
                    <img class="rounded-3 d-none d-md-block" src="frontend_assets/images/webUI-2.jpg" alt="">
                    <img class="rounded-3 " src="frontend_assets/images/webUI-3.jpg" alt="">
                    <img class="rounded-3 " src="frontend_assets/images/webUI-4.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="web" class="ser_categories">
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Wordpress </h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Laravel</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Backend Development</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="motion-graphics" class="ser_categories">
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Animations</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Video Editing</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Intros and Outros</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="branding-essentials" class="ser_categories">
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Branding Guidelines</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Stationary</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Packaging</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="digital-marketing" class="ser_categories">
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Paid Advertising</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Strategy Analysis</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
            <div class="service_box flex-column d-flex justify-content-center w-100">
                <h2 class="adlance_heading service_category_heading">Social Media Management</h2>

                <div class="services_samples w-100 d-flex justify-content-between align-items-center">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo2.jpg" alt="">
                    <img class="d-none d-md-block" src="frontend_assets/images/service-logo1.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo4.jpg" alt="">
                    <img class="" src="frontend_assets/images/service-logo3.jpg" alt="">
                </div>
            </div>
        </div>

    </article>
</div>
<!--====== SERVICES PAGE SECTION-2 END ======-->

@endsection