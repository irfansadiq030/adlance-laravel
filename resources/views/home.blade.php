@extends('layouts.master')

@section('page_content')

<div class="adlance_sections_container">
    <!--====== HERO SECTION ======-->
    <article class="hero_section">
        <div class="container-fluid h-100">
            <div class="row mx-auto d-flex align-items-center h-100">
                <div class="col-lg-5 col-sm-12 mobile_adlance_dot_logo">
                    <img loading="lazy" data-aos="zoom-in" class="a_dot_logo mobile_a_dot_logo" src="frontend_assets/images/adlance_a.svg" alt="">
                </div>
                <div class="col-md-1 col-sm-12 adlance_logo_container">
                    <img loading="lazy" class="ms-xxl-3 ms-xl-3" src="frontend_assets/images/adlance-vertical-logo.webp" alt="adlance logo">
                </div>
                <div class="col-lg-5 col-sm-12 hero_content_container d-flex justify-content-end flex-column pt-5 pt-md-0"">
                                    <h2 data-aos=" fade-in" class="hero_heading">
                    <span class="small_heading">Bringing</span> <br>
                    Digital <br> Marketing
                    <span class="small_heading preserved_txt"> <strong class="preserved_wrd">Preserved</strong>
                        with</span>
                    Islamic <br> Values
                    </h2>
                    <div data-aos="fade-up" class="d-flex mt-3 mb-5 mb-xl-0 mt-xl-4 mt-xxl-4 pt-xxl-5 hero_btns_container">
                        <a href="/about.html" class="me-4 hero_secondary_sbtn">Learn More</a>
                        <a href="/contact-us.html" class="hero_primary_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 d-flex justify-content-end hero_adlance_logo_container">
                    <img loading="lazy" data-aos="zoom-in" class="a_dot_logo home_dot_logo" src="frontend_assets/images/adlance_a.svg" alt="">
                </div>
            </div>
        </div>
    </article>
    <!--====== OUR SERVICES SECTION ======-->
    <article id="services_section" class="qodef-m qodef-horizontal-accordion-showcase qodef--min-height qodef--init">
        <div class="qodef-m-items-holder">
            <div class="qodef-m-item">
                <div class="qodef-m-header">
                    <h4 class="qodef-m-title">
                        Graphic Design </h4>
                </div>
                <div class="qodef-m-content qodef-m-content--predefined">
                    <div class="qodef-m-content-inner">
                        <div class="qodef-m-content-left">
                            <div class="qodef-m-content-left-top">
                                <h5 class="service_short_title">OUR SERVICES</h5>
                                <h4 class="qodef-m-title service_title">Art that Tells Your Story <nobr>
                                    </nobr> <span style="color:#fcc013;">.</span>
                                </h4>
                            </div>
                            <div class="qodef-m-content-left-bottom">
                                <p class="qodef-m-description servicer_short_dsec">Combining creativity
                                    & strategy for powerful design.</p>
                                <p class="qodef-m-description">
                                    Our graphic design team brings your vision to life through stunning
                                    visuals and creative solutions. We specialize in
                                    delivering eye-catching designs that communicate your message
                                    effectively and resonate with your audience.
                                </p>

                            </div>
                            <a href="/services.html#design" class="learn_more_btn">
                                Learn More
                            </a>
                        </div>
                        <div class="qodef-m-content-right">
                            <div class="qodef-m-image">
                                <img loading="lazy" style="width:350px" class="item-img" src="frontend_assets/images/graphic-design-service.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qodef-m-item">
                <div class="qodef-m-header">
                    <h4 class="qodef-m-title">
                        Motion Graphics </h4>
                </div>
                <div class="qodef-m-content qodef-m-content--predefined">
                    <div class="qodef-m-content-inner">
                        <div class="qodef-m-content-left">
                            <div class="qodef-m-content-left-top">
                                <h5 class="service_short_title">OUR SERVICES</h5>
                                <h4 class="qodef-m-title service_title">Animations That Captivate <span style="color:#fcc013;">.</span>
                                </h4>

                            </div>
                            <div class="qodef-m-content-left-bottom">
                                <p class="qodef-m-description servicer_short_dsec">Engaging visuals that
                                    bring stories to life</p>
                                <p class="qodef-m-description">
                                    Our team of motion graphics experts brings your message to life
                                    through dynamic and engaging visuals, creating a unique
                                    experience that captivates your audience.
                                </p>

                            </div>
                            <a href="/services.html#motion-graphics" class="learn_more_btn">
                                Learn More
                            </a>
                        </div>
                        <div class="qodef-m-content-right">
                            <div class="qodef-m-image">
                                <img loading="lazy" class="item-img" src="frontend_assets/images/motion-graphics-service.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qodef-m-item">
                <div class="qodef-m-header">
                    <h4 class="qodef-m-title">
                        Digital Marketing </h4>
                </div>
                <div class="qodef-m-content qodef-m-content--predefined">
                    <div class="qodef-m-content-inner">
                        <div class="qodef-m-content-left">
                            <div class="qodef-m-content-left-top">
                                <h5 class="service_short_title">OUR SERVICES</h5>
                                <h4 class="qodef-m-title service_title">Winning Strategies<span style="color:#fcc013;">.</span> Measurable
                                    Results
                                    <span style="color:#fcc013;">.</span>
                                </h4>

                            </div>
                            <div class="qodef-m-content-left-bottom">
                                <p class="qodef-m-description servicer_short_dsec">Achieving your goals
                                    with data-driven marketing
                                </p>

                                <p class="qodef-m-description">
                                    Our tailored digital marketing strategies help you connect with your
                                    audience across all
                                    platforms, boost your online
                                    presence, and ultimately drive more business to your door.
                                </p>

                            </div>
                            <a href="/services.html#digital-marketing" class="learn_more_btn">
                                Learn More
                            </a>
                        </div>
                        <div class="qodef-m-content-right">
                            <div class="qodef-m-image">
                                <img loading="lazy" class="item-img" src="frontend_assets/images/digital-marketing-service.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qodef-m-item">
                <div class="qodef-m-header">
                    <h4 class="qodef-m-title">
                        Branding Essentials </h4>
                </div>
                <div class="qodef-m-content qodef-m-content--predefined">
                    <div class="qodef-m-content-inner">
                        <div class="qodef-m-content-left">
                            <div class="qodef-m-content-left-top">
                                <h5 class="service_short_title">OUR SERVICES</h5>
                                <h4 class="qodef-m-title service_title">Crafting Your Visual Identity
                                    <span style="color:#fcc013;">.</span>
                                </h4>

                            </div>
                            <div class="qodef-m-content-left-bottom">
                                <p class="qodef-m-description servicer_short_dsec">Creating a unique
                                    brand that stands out</p>
                                <p class="qodef-m-description">
                                    We create cohesive branding and visual identity systems that reflect
                                    your unique brand and
                                    message. From logos and
                                    typography to color schemes and messaging, our team will create a
                                    distinctive and lasting
                                    impression.</p>

                            </div>
                            <a href="/services.html#branding-essentials" class="learn_more_btn">
                                Learn More
                            </a>
                        </div>

                        <div class="qodef-m-content-right">
                            <div class="qodef-m-image">
                                <img loading="lazy" class="item-img" src="frontend_assets/images/branding mockup.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qodef-m-item">
                <div class="qodef-m-header">
                    <h4 class="qodef-m-title">
                        Website Development & Maintenance </h4>
                </div>
                <div class="qodef-m-content qodef-m-content--predefined">
                    <div class="qodef-m-content-inner">
                        <div class="qodef-m-content-left">
                            <div class="qodef-m-content-left-top">
                                <h5 class="service_short_title">OUR SERVICES</h5>
                                <h4 class="qodef-m-title service_title">Building Digital Homes <span style="color:#fcc013;">.</span>
                                </h4>

                            </div>
                            <div class="qodef-m-content-left-bottom">
                                <p class="qodef-m-description servicer_short_dsec">Combining Crafted
                                    with expertise & maintained with care</p>
                                <p class="qodef-m-description">
                                    Our team of experts builds custom, user-friendly websites that scale
                                    with your business. We keep your website
                                    up-to-date, secure and running smoothly so you can focus on growing
                                    your business.
                                </p>

                            </div>
                            <a href="/services.html#web" class="learn_more_btn">
                                Learn More
                            </a>
                        </div>
                        <div class="qodef-m-content-right">
                            <div class="qodef-m-image">
                                <img loading="lazy" class="item-img" src="frontend_assets/images/Web dev.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qodef-m-item">
                <div class="qodef-m-header">
                    <h4 class="qodef-m-title">
                        Search Engine Optimization </h4>
                </div>
                <div class="qodef-m-content qodef-m-content--predefined">
                    <div class="qodef-m-content-inner">
                        <div class="qodef-m-content-left">
                            <div class="qodef-m-content-left-top">
                                <h5 class="service_short_title">OUR SERVICES</h5>
                                <h4 class="qodef-m-title service_title">Boost Your Online Presence <span style="color:#fcc013;">.</span>
                                </h4>

                            </div>
                            <div class="qodef-m-content-left-bottom">
                                <p class="qodef-m-description servicer_short_dsec">Get noticed, rank
                                    higher, convert better</p>
                                <p class="qodef-m-description">
                                    With our effective SEO strategies, we help your website rank higher
                                    in search engine results, drive organic traffic and
                                    generate leads. We keep up with the latest trends and algorithms to
                                    give your business a competitive edge.
                                </p>

                            </div>
                            <a href="/services.html#web-seo" class="learn_more_btn">
                                Learn More
                            </a>
                        </div>
                        <div class="qodef-m-content-right">
                            <div class="qodef-m-image">
                                <img loading="lazy" class="item-img" src="frontend_assets/images/seo-service.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </article>
    <article class="mobile_service_section">
        <section class="adlance_mobile_container mobile_padding">
            <div data-aos="fade-up" class="d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mobile_heading">Our <br> Services
                </h2>
            </div>
        </section>
        <!-- Another acc -->
        <div class="mobile_accordion">
            <div class="mobile_service_title mobileService_activeTitle">
                Graphic Design
            </div>
            <div class="mobileService_contentContainer active">
                <h4 class="qodef-m-title service_title">Art that Tells Your Story <span style="color:#fcc013;">.</span>
                </h4>
                <p>
                    Combining creativity
                    & strategy for powerful design.
                </p>
                <p>
                    Our graphic design team brings your vision to life through stunning
                    visuals and creative solutions. We specialize in
                    delivering eye-catching designs that communicate your message
                    effectively and resonate with your audience.
                </p>
                <a class="adlance_primary_btn d-inline-block my-4" href="/services.html#design">Learn
                    More</a>
                <img loading="lazy" src="frontend_assets/images/graphic-design-service.webp" alt="">
            </div>
            <div class="mobile_service_title">
                Motion Graphics
            </div>
            <div class="mobileService_contentContainer">
                <h4 class="qodef-m-title service_title">Animations That Captivate <span style="color:#fcc013;">.</span>
                </h4>
                <p>
                    Engaging visuals that bring stories to life

                </p>
                <p>
                    Our team of motion graphics experts brings your message to life through dynamic and
                    engaging visuals, creating a unique
                    experience that captivates your audience.
                </p>
                <a class="adlance_primary_btn d-inline-block my-4" href="/services.html#motion-graphics">Learn More</a>
                <img loading="lazy" src="frontend_assets/images/motion-graphics-service.webp" alt="">
            </div>
            <div class="mobile_service_title">
                Digital Marketing
            </div>
            <div class="mobileService_contentContainer">
                <h4 class="qodef-m-title service_title">Winning Strategies. Measurable Results<span style="color:#fcc013;">.</span>
                </h4>
                <p>
                    Achieving your goals with data-driven marketing.
                </p>
                <p>
                    Our tailored digital marketing strategies help you connect with your audience across
                    all platforms, boost your online
                    presence, and ultimately drive more business to your door.
                </p>
                <a class="adlance_primary_btn d-inline-block my-4" href="/services.html#digital-marketing">Learn More</a>
                <img loading="lazy" src="frontend_assets/images/digital-marketing-service.webp" alt="">
            </div>

            <div class="mobile_service_title">
                Branding Essentials
            </div>
            <div class="mobileService_contentContainer">
                <h4 class="qodef-m-title service_title">Crafting Your Visual Identity<span style="color:#fcc013;">.</span>
                </h4>
                <p>
                    Creating a unique brand that stands out.
                </p>
                <p>
                    We create cohesive branding and visual identity systems that reflect your unique
                    brand and message. From logos and
                    typography to color schemes and messaging, our team will create a distinctive and
                    lasting impression.
                </p>
                <a class="adlance_primary_btn d-inline-block my-4" href="/services.html#branding-essentials">Learn More</a>
                <img loading="lazy" src="frontend_assets/images/branding mockup.webp" alt="">
            </div>
            <div class="mobile_service_title">
                Web App Development
            </div>
            <div class="mobileService_contentContainer">
                <h4 class="qodef-m-title service_title">Building Digital Homes <span style="color:#fcc013;">.</span>
                </h4>
                <p>
                    Crafted with expertise & maintained with care
                </p>
                <p>
                    Our team of experts builds custom, user-friendly websites that scale with your
                    business. We keep your website
                    up-to-date, secure and running smoothly so you can focus on growing your business.
                </p>
                <a class="adlance_primary_btn d-inline-block my-4" href="/services.html#web">Learn
                    More</a>
                <img loading="lazy" src="frontend_assets/images/Web dev.webp" alt="">
            </div>
            <div class="mobile_service_title">
                Search Engine Optimization
            </div>
            <div class="mobileService_contentContainer">
                <h4 class="qodef-m-title service_title">Boost Your Online Presence<span style="color:#fcc013;">.</span>
                </h4>
                <p>
                    Get noticed, rank higher, convert better
                </p>
                <p>
                    With our effective SEO strategies, we help your website rank higher in search engine
                    results, drive organic traffic and
                    generate leads. We keep up with the latest trends and algorithms to give your
                    business a competitive edge.
                </p>
                <a class="adlance_primary_btn d-inline-block my-4" href="/services.html#web-seo">Learn
                    More</a>
                <img loading="lazy" src="frontend_assets/images/seo-service.webp" alt="">
            </div>
        </div>
    </article>
    <!--====== OUR CLIENTS SECTION ======-->
    <article class="clients_section pt-md-4">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div data-aos="fade-up" class="mobile_padding col-md-12 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="adlance_heading text-center d-none d-lg-flex">Our Clients</h2>
                    <h2 class="our_clients_heading_mobile text-center d-lg-none">Our <br> Clients</h2>
                    <p class="our_clients_descrp text-center">
                        Join Our Growing Family of Partners. Click on a tile and learn more
                    </p>
                </div>
                <!-- CLIENTS SLIDER -->
                <div class="clients_slider_container">
                    <div class="left_arrow d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div data-aos="fade-up" class="swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="client_slide swiper-slide">
                                <img loading="lazy" src="frontend_assets/images/LogoEC.webp" alt="Eman Channel Logo">
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/emanchannel-popup.webp" alt="">
                                    <h3 class="card_title">Eman Channel</h3>
                                    <p class="client_overview">
                                        Eman Channel is a London-based media outlet producing
                                        high-quality, family-friendly Islamic programming for Muslims
                                        around the world. Available on satellite TV, mobile app, and
                                        online, our content is a real alternative for those seeking
                                        authentic Islamic values in today's technologically advanced
                                        world.<br class="mt-1"></br> We provide a wide range of unique and inspiring
                                        programs, from educational lectures to cookery and comedy shows,
                                        all while ensuring the highest standards of creativity
                                        and relevancy.
                                    </p>
                                    <span class="client_since_year">2020</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="https://www.emanchannel.tv/" class="client_website">Eman Channel</a>
                                    <span class="client_type">TV Channel</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/Muntada-Aid.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/muntadaaid-popup.webp" alt="">

                                    <h3 class="card_title">Muntada Aid</h3>
                                    <p class="client_overview">
                                        Muntada Aid is a humanitarian organization that provides aid to
                                        those in need across the globe. With a focus on
                                        sustainable development, Muntada Aid works to alleviate poverty,
                                        provide healthcare and education, and empower
                                        communities in need. They believe that everyone has the right to
                                        a dignified life, and they work tirelessly to make this
                                        a reality for those they serve.
                                    </p>
                                    <span class="client_since_year">2021</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="https://www.muntadaaid.org/" class="client_website">Muntada Aid</a>
                                    <span class="client_type">Charity Org</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/WLICC.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/wlicc-popup.webp" alt="">

                                    <h3 class="card_title">WLICC</h3>
                                    <p class="client_overview">
                                        WLICC is a prominent Islamic center located in the heart of the London Borough of Hammersmith & Fulham. Their primary
                                        objective is to make a positive impact on the lives of people in the local community and provide a spiritual sanctuary
                                        where all individuals, regardless of their background, can find peace. <br class="mt-1">
                                        The mosque is a beacon of hope for people seeking spiritual guidance and a sense of belonging. With its commitment to
                                        serving the local community, WLICC continues to impact the lives of thousands of individuals and families every day,
                                        making it a cherished and essential part of the community.
                                    </p>
                                    <span class="client_since_year">2021</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="http://wlicc.org/" class="client_website">WLICC</a>
                                    <span class="client_type">Islamic Charity</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/Abdulla-Aid.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/abdullah-popup.webp" alt="">

                                    <h3 class="card_title">Abdullah Aid</h3>
                                    <p class="client_overview">
                                        Abdullah Aid is a UK-based charity that provides humanitarian
                                        aid and support to people affected by poverty, conflict
                                        and natural disasters around the world. Their mission is to make
                                        a lasting and positive impact in the lives of those in
                                        need, by providing essential services and aid, such as food,
                                        shelter, healthcare, and education. Abdullah Aid is
                                        dedicated to delivering aid in the most efficient and effective
                                        way possible, while adhering to the highest ethical and
                                        moral standards.

                                    </p>
                                    <span class="client_since_year">2022</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="https://abdullahaid.org.uk/" class="client_website">Abdullah Aid</a>
                                    <span class="client_type">Islamic Charity</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/Eman-Academy.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/emanacademy-popup.webp" alt="">
                                    <h3 class="card_title">Eman Academy</h3>
                                    <p class="client_overview">
                                        Eman Academy is an online learning platform that offers courses
                                        and resources designed to help Muslims increase their
                                        knowledge of Islam. With a focus on providing high-quality
                                        education, Eman Academy is dedicated to promoting authentic
                                        Islamic teachings in an accessible and engaging manner. <br class="mt-1"></br> Their
                                        courses cover a variety of topics, including Quranic
                                        studies, Islamic history, and Arabic language, and are suitable
                                        for learners of all levels, from beginners to advanced
                                        students. At Eman Academy, they believe that the pursuit of
                                        knowledge is a lifelong journey, and they are committed to
                                        supporting learners on this path by providing them with the
                                        tools they need to succeed.


                                    </p>
                                    <span class="client_since_year">2020</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="https://www.emanacademy.tv/" class="client_website">Eman Academy</a>
                                    <span class="client_type">Online Islamic Academy</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/kutuby-client.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/kutuby-popup.webp" alt="">
                                    <h3 class="card_title">Kutuby</h3>
                                    <p class="client_overview">
                                        Kutuby is a learning platform that focuses on enhancing Islamic education for kids. Their primary goal is to equip
                                        future leaders with Prophetic values and promote sound Islamic teachings.
                                    </p>
                                    <span class="client_since_year">2020</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="https://www.kutuby.com/" class="client_website">Kutuby</a>
                                    <span class="client_type">Online Islamic Academy</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/wayoflife-client.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/waysoflife-popup.webp" alt="">
                                    <h3 class="card_title">WAY OF LIFE SQ</h3>
                                    <p class="client_overview">
                                        Way Of Life SQ is a prominent YouTuber who aims to help humanity draw closer to their Creator Allah SWT. He also works
                                        towards encouraging and motivating the Muslims of the world.
                                    </p>
                                    <span class="client_since_year">2022</span>
                                    <span class="client_based_on">USA</span>
                                    <a href="https://www.youtube.com/channel/UC3kfx81WYXgNBf1bNIcO5Fg" class="client_website">Youtube</a>
                                    <span class="client_type">Online Islamic Academy</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/Salah-Sounds-client.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/salahsound-popup.webp" alt="">
                                    <h3 class="card_title">Salah Sounds</h3>
                                    <p class="client_overview">
                                        Salah Sounds has established a reputation for its expertise in providing audio, video, and broadcasting installations as
                                        well as specialized training services tailored specifically for mosques.
                                    </p>
                                    <span class="client_since_year">2022</span>
                                    <span class="client_based_on">United Kingdom</span>
                                    <a href="https://www.instagram.com/salahsounds/" class="client_website">Salah Sounds</a>
                                    <span class="client_type">Online Islamic Academy</span>
                                </div>
                            </div>
                            <div style="background-image: url('/frontend_assets/images/Beleive-Itclient.webp');" class="client_slide swiper-slide">
                                <!-- <img src="frontend_assets/images/LogoEC.png" alt="Eman Channel Logo"> -->
                                <a href="javascript:;">Read More <span><i class="fa-solid fa-play"></i></span></a>
                                <div class="d-none">
                                    <img loading="lazy" class="client_cover_img" src="/frontend_assets/images/beleive-it-popup.webp" alt="">
                                    <h3 class="card_title">Believe It</h3>
                                    <p class="client_overview">
                                        Believe it App is a platform for individuals to pair goal setting and self-improvement with Islamic values. Individuals
                                        focused on self-improvement, habit tracking, progress tracking, mindset development, positivity, achievement, growth,
                                        self-discipline, time management, planning, and goal-orientation can, insha’Allah, achieve their goals while being
                                        focused on both Deen and Dunya.
                                    </p>
                                    <span class="client_since_year">2023</span>
                                    <span class="client_based_on">USA</span>
                                    <a href="https://believeit.app/" class="client_website">believeit.app</a>
                                    <span class="client_type">Online Islamic Academy</span>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination">
                            <div id="slide_index" class="index">1</div>
                            <div class="pagination_gap"></div>
                            <div class="custom_pagination"></div>
                        </div>
                    </div>
                    <div class="right_arrow d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--====== FEATURED CAMPAIGNS - For Desktop SECTION ======-->

    <!-- <article class="desktop_featured_campaigns_container container-fluid">
                        <div class="adlance_desktop_container pt-5 ">
                            <div data-aos="fade-up"
                                class="d-flex flex-column justify-content-center align-items-center">
                                <h2 class="text-center adlance_heading">FEATURED CAMPAIGNS
                                </h2>
                            </div>
                        </div>
                        <div class="clients_slider_container">
                            <div class="left_arrow d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/400" class="entity-img" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/seed/picsum/400/400" class="entity-img" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/id/34/400/400" class="entity-img" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/id/28/400/400" class="entity-img" />
                                    </div>
                                </div>
                            </div>
                            <div class="right_arrow d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </article> -->


    <!--====== LATEST STORIES SECTION ======-->
    <article class="d-none d-xl-flex stories_section d-flex align-items-center justify-content-center">
        <div class="container-fluid h-100">
            <div class="row pb-xl-3  pb-xxl-5 pt-lg-5">
                <div data-aos="fade-up" class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="adlance_heading text-center latest_stories_heading">Latest Stories
                    </h2>
                    <p class="our_clients_descrp text-center">
                        Experience the pulse of the marketing world with our dynamic collection of current stories and insightful narratives
                        that enlighten and inform.
                    </p>
                </div>
            </div>
            <!-- Stories Card Row -Desktop -->
            <div data-aos="fade-up" class="row w-100 mx-auto justify-content-center">
                <div class="col-md-3 col-md-2 col-sm-1 story_card">
                    <img loading="lazy" src="frontend_assets/images/ethical.webp" alt="No water No Life" srcset="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/ethical-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">The Importance of Ethical Marketing in Islam</h2>
                        <p class="story_summary">Let’s dive into why it's so important to keep things
                            real, honest, and respectful when marketing to our Muslim brothers
                            and sisters. We'll show you the benefits of being ethical in your marketing
                            efforts, and give you some tips on how to
                            create amazing Islamic content for social media or design sweet graphics for
                            Islamic charities that align with Islamic
                            values. So grab a cup of chai and let's jump into the world of halal
                            marketing - it's going to be awesome!</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 06</span>
                        <span class="story_author_name">Taha Khan</span>
                        <a href="/the-importance-of-ethical-marketing-in-islam.html" class="read_story_link"></a>
                    </div>
                </div>
                <div data-trigger='modal' class="col-md-3 col-md-2 col-sm-1 story_card">
                    <img loading="lazy" src="frontend_assets/images/boost-blog.webp" alt="eid ul adha image" srcset="">
                    <div class="d-none">
                        <img class="story_cover" src="frontend_assets/images/boost-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">Boost Your Productivity at Work with Your Daily Islamic
                            Prayers</h2>
                        <p class="story_summary">The key to success is prayer. This is something
                            engraved in the muslim mind. But as humans we forget, especially when we
                            are working long hours trying to survive the capitalistic lifestyle. From
                            the early morning Fajr prayer to the
                            night-time Isha prayer, each prayer offers its own unique benefits,
                            including seeking guidance, taking a break to
                            recharge, and seeking forgiveness. So why not start your workday with the
                            right mindset and intention, and tap into the
                            spiritual power of these daily Islamic prayers?</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 10</span>
                        <span class="story_author_name">Palvisha</span>
                        <a href="/boost-your-productivity-at-work-with-your-daily-Islamic-prayers.html" class="read_story_link"></a>

                    </div>
                </div>
                <div class="col-md-3 col-md-2 col-sm-1 story_card">
                    <img loading="lazy" src="frontend_assets/images/7ways.webp" alt="No water No Life" srcset="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/7ways-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">7 Ways to Increase Your Wealth: Quranic Advice for
                            Financial Prosperity</h2>
                        <p class="story_summary">Want to learn how to increase your wealth while staying
                            true to your faith? You can invite barakah into your income and
                            achieve financial success by applying timeless wisdom from Allah (SWT). From
                            the Taqwa of Allah to seeking forgiveness
                            and repentance, these Quranic tips will help you unlock the blessings of
                            Allah (SWT) in your finances. So, whether
                            you're looking to increase your income, start a family, or simply express
                            gratitude for Allah's blessings, these 7 tips
                            are sure to help you on your journey towards financial prosperity.
                        </p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 15 </span>
                        <span class="story_author_name">Hafsa Ahmad</span>
                        <a href="/7-ways-to-increase-your-wealth-quranic-advice-for-financial-prosperity.html" class="read_story_link"></a>

                    </div>
                </div>
                <div class="col-md-3 col-md-2 col-sm-1 story_card">
                    <img loading="lazy" src="frontend_assets/images/ramadan-stories.webp" alt="ramadan image" srcset="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/ramadan-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">Welcome Ramadan!</h2>
                        <p class="story_summary">As a way to spread joy and unity, we're thrilled to share our Ramadan calendar with you. We hope that it brings you ease
                            and inspiration throughout the month. Let's come together in gratitude and celebrate the beauty of this blessed month.
                            Ramadan Mubarak!

                            Share 4 links. Lahore calendar, Islamabad,</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 22</span>
                        <span class="story_author_name">Palvisha</span>
                        <a href="/stories/ramadan-calender-2023.html" class="read_story_link"></a>

                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 mb-lg-5">
                <a href="/stories.html" data-aos="fade-up" class="btn btn-primary w-auto mx-auto adlance_primary_btn all_stories_btn">All
                    Stories</a>
            </div>
        </div>
    </article>
    <!--====== FEATURED CAMPAIGNS SLIDER - For MOBILE ======-->
    <!-- <article class="mobile_featured_campaigns_container container-fluid">
                        <section class="adlance_mobile_container mobile_padding">
                            <div data-aos="fade-up"
                                class="d-flex flex-column justify-content-center align-items-center">
                                <h2 class="text-center mobile_heading">FEATURED <br> CAMPAIGNS
                                </h2>
                            </div>
                        </section>
                        <section class="mobile_featured_campaigns_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/400" class="entity-img" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/seed/picsum/400/400" class="entity-img" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/34/400/400" class="entity-img" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/28/400/400" class="entity-img" />
                                </div>
                            </div>
                        </section>
                        <section class="featured_yellow_strip">
                            <div class="next_btn_mobile_fc">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="pre_btn_mobile_fc">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </section>
                    </article> -->
    <!--====== LATEST STORIES SLIDER - For MOBILE ======-->
    <article class="container-fluid adlance_stories_slider_container">
        <section class="adlance_mobile_container mobile_padding">
            <div data-aos="fade-up" class="d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mobile_heading">Latest <br> Stories
                </h2>
                <p class="mobile_descrp_txt text-center">
                    Experience the pulse of the marketing world with our dynamic collection of current stories and insightful narratives
                    that enlighten and inform.
                </p>
            </div>
        </section>
        <section class="mobile_stories_slider">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide mobile_stories_slide">
                    <img loading="lazy" src="frontend_assets/images/ramadan-stories.webp" alt="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/ramadan-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">Welcome Ramadan!</h2>
                        <p class="story_summary">As a way to spread joy and unity, we're thrilled to share our Ramadan calendar with you. We hope that it brings you ease
                            and inspiration throughout the month. Let's come together in gratitude and celebrate the beauty of this blessed month.
                            Ramadan Mubarak!</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 22</span>
                        <span class="story_author_name">Palvisha</span>
                        <a href="/stories/ramadan-calender-2023.html" class="read_story_link"></a>
                    </div>
                </div>
                <div class="swiper-slide mobile_stories_slide">
                    <img loading="lazy" src="frontend_assets/images/ethical.webp" alt="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/ethical-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">The Importance of Ethical Marketing in Islam</h2>
                        <p class="story_summary">Let’s dive into why it's so important to keep things
                            real, honest, and respectful when marketing to our Muslim brothers
                            and sisters. We'll show you the benefits of being ethical in your marketing
                            efforts, and give you some tips on how to
                            create amazing Islamic content for social media or design sweet graphics for
                            Islamic charities that align with Islamic
                            values. So grab a cup of chai and let's jump into the world of halal
                            marketing - it's going to be awesome!</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 06</span>
                        <span class="story_author_name">Taha Khan</span>
                        <a href="/the-importance-of-ethical-marketing-in-islam.html" class="read_story_link"></a>
                    </div>
                </div>
                <div class="swiper-slide mobile_stories_slide">
                    <img loading="lazy" src="frontend_assets/images/boost-blog.webp" alt="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/boost-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">Boost Your Productivity at Work with Your Daily Islamic
                            Prayers</h2>
                        <p class="story_summary">The key to success is prayer. This is something
                            engraved in the muslim mind. But as humans we forget, especially when we
                            are working long hours trying to survive the capitalistic lifestyle. From
                            the early morning Fajr prayer to the
                            night-time Isha prayer, each prayer offers its own unique benefits,
                            including seeking guidance, taking a break to
                            recharge, and seeking forgiveness. So why not start your workday with the
                            right mindset and intention, and tap into the
                            spiritual power of these daily Islamic prayers?</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 10</span>
                        <span class="story_author_name">Palvisha</span>
                        <a href="/boost-your-productivity-at-work-with-your-daily-Islamic-prayers.html" class="read_story_link"></a>

                    </div>
                </div>
                <div class="swiper-slide mobile_stories_slide">
                    <img loading="lazy" src="frontend_assets/images/7ways.webp" alt="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/7ways-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">7 Ways to Increase Your Wealth: Quranic Advice for
                            Financial Prosperity</h2>
                        <p class="story_summary">Want to learn how to increase your wealth while staying
                            true to your faith? You can invite barakah into your income and
                            achieve financial success by applying timeless wisdom from Allah (SWT). From
                            the Taqwa of Allah to seeking forgiveness
                            and repentance, these Quranic tips will help you unlock the blessings of
                            Allah (SWT) in your finances. So, whether
                            you're looking to increase your income, start a family, or simply express
                            gratitude for Allah's blessings, these 7 tips
                            are sure to help you on your journey towards financial prosperity.
                        </p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 15 </span>
                        <span class="story_author_name">Hafsa Ahmad</span>
                        <a href="/7-ways-to-increase-your-wealth-quranic-advice-for-financial-prosperity.html" class="read_story_link"></a>

                    </div>
                </div>
                <div class="swiper-slide mobile_stories_slide">
                    <img loading="lazy" src="frontend_assets/images/prioritize-blog.webp" alt="">
                    <div class="d-none">
                        <img loading="lazy" class="story_cover" src="frontend_assets/images/prioritize-popup.webp" alt="story cover" class="story_cover">
                        <h2 class="story_title">Prioritize Your Day</h2>
                        <p class="story_summary">Assalamu Alaikum, fellow marketers! Are you feeling
                            overwhelmed and struggling to keep up with your daily tasks? We all
                            know how precious time is, especially when it comes to running a successful
                            marketing agency. That's why we're here to
                            share some tips on how to prioritize your day and manage your time like a
                            pro. But here's the catch - we're tailoring
                            our advice for virtually everyone!. So if you're looking for some practical
                            and halal-friendly ways to get the most out
                            of your day, keep reading!</p>
                        <span class="story_uploaded_year">2023</span>
                        <span class="story_uploaded_date">March 18</span>
                        <span class="story_author_name">Taha khan</span>
                        <a href="/prioritize-your-day.html" class="read_story_link"></a>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination">
                <div id="storiesSlide_index" class="index">1</div>
                <div class="pagination_gap"></div>
                <div class="custom_pagination"></div>
                <!-- <div class="pagination_dots"></div> -->
            </div>
        </section>
    </article>
</div>


@endsection

<!-- Homepage Video section  -->

@section('video_section')
<article class="section adlance_section">
    <video class="d-none d-lg-block" id="adlance_vid" src="{{ asset('frontend_assets/videos/5.mp4') }}" muted autoplay>
    </video>
    <!-- <video class="d-block d-lg-none" id="adlance_vid" src="frontend_assets/videos/movile-vid.mp4" muted autoplay>
            </video> -->
    <div id="adlance_video_img" class="d-flex d-lg-none w-100 d-flex justify-content-center">
        <img loading="lazy" loading="lazy" class="w-75" src="/frontend_assets/images/adlance-full-logo.webp" alt="">
        <span class="adlance_mobile_hero_down_icon d-md-flex"><i class="cursor-pointer fa-solid fa-arrow-down"></i></span>
    </div>
</article>
@endsection