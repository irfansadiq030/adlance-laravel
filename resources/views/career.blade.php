@extends('layouts.master')

@section('page_content')

<div class="adlance_sections_container">
    <!--====== HERO SECTION ======-->
    <article class="teams_section">
        <div class="container-fluid h-100">
            <div class="row d-flex justify-content-center justify-content-xl-start align-items-end h-100">
                <div class="col-md-5 col-sm-12 d-flex justify-content-end flex-column">
                    <h1 data-aos="fade-in" class="hero_heading text-light teams_heading pt-5 pt-md-0">
                        Balancing <br />
                        Deen <span class="small_heading">with</span>
                        <span class="duny_txt">Dunya</span>
                    </h1>
                    <div data-aos="fade-up" class="d-none d-md-flex pt-4 hero_btns_container pb-5">
                        <!-- <a href="#" class="me-4 hero_secondary_sbtn">Learn More</a> -->
                        <a href="/about.html" class="hero_primary_btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--====== OUR STORY SECTION ======-->
    <article class="container-fluid our_story_section d-flex justify-content-center align-items-center">
        <div class="row justify-content-start">
            <div class="order-1 col-xl-5 col-sm-12 text-md-start text-center adlance_story_container">
                <h2 class="adlance_heading pb-md-4 py-3 py-md-0">Our Team</h2>
                <p class="our_story_txt">
                    At our company, we believe in creating a work environment that supports both personal and professional
                    growth. We
                    understand that our employees have responsibilities and commitments outside of work, and we strive to
                    provide them with
                    the flexibility and resources they need to balance their deen and duniya.
                    We value our employees as individuals, and we believe that happy and fulfilled employees make for a
                    more productive and
                    successful team. That's why we make an effort to create a supportive culture that encourages work-life
                    balance, promotes
                    mental and physical well-being, and fosters a sense of community and belonging.
                </p>
                <p class="our_story_txt">
                    Whether it's providing flexible work arrangements, offering opportunities for professional
                    development, or organizing
                    social events, we're committed to helping our employees thrive both inside and outside of the
                    workplace.
                </p>

            </div>
            <div class=" order-3 col-md-12">
                <p class="our_story_txt">
                    We believe that by creating a supportive and inclusive work environment, we can attract and retain the
                    best talent, and
                    build a team that is passionate, motivated, and dedicated to our mission.
                </p>
                <p class="our_story_txt">
                    If you're looking for a company that values your well-being and supports your personal and
                    professional growth, we
                    invite you to consider joining our team. We're always on the lookout for talented and driven
                    individuals who share our
                    values and are committed to making a positive impact in the world.
                </p>
            </div>
            <div class="order-2 col-md-5 offset-md-1 col-sm-12 mx-md-auto d-flex align-items-center">
                <img class="w-100 adlance_guru d-md-block" src="frontend_assets/images/adlance-team.png" alt="Adlance MD" />
            </div>
        </div>
    </article>
    <!--====== ADLANCE PERKS SECTION ======-->
    <article class="container-fluid adlance_perks d-flex flex-column justify-content-center">
        <div class="row py-5">
            <div class="col-12">
                <h2 class="adlance_heading text-center">Perks</h2>
            </div>
        </div>
        <div class="row justify-content-center px-3 px-md-5">
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Salah Breaks</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">20 Mins Quran Break</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Maternity Leaves</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Hajj/Umrah Paid Leaves</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Salah Breaks</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Salah Breaks</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Training Days</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Monthly Company Meetings</h6>
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Extended Eid Holidays</h6>
            </div>
            <!-- <div
                class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Salah Breaks</h6>
              </div>
              <div
                class="col-4 col-md-3 col-lg-2 px-2 px-md-5 my-2 my-md-3 d-flex flex-column justify-content-center align-items-center">
                <img class="w-100" src="/frontend_assets/images/salah-breaks.svg" alt="" />
                <h6 class="text-center">Salah Breaks</h6>
              </div> -->
        </div>
    </article>
    <!--====== ADLANCE TESTIMONIALS SECTION ======-->
    <article class="container-fluid testimonials_section d-flex flex-column justify-content-between align-items-center">
        <div class="row">
            <div class="col-12">
                <h2 class="pt-5 mt-2 pb-5 pt-md-0 pb-md-0 mt-md-0 adlance_heading text-center pt-xxl-5">
                    Testimonials
                </h2>
            </div>
        </div>
        <div class="teams_testimonial_slider_section row">
            <div class="team_testimonial_slider col-12 col-md-10 col-xxl-8 mx-auto pb-5 pt-4">
                <div class="swiper-wrapper">
                    <div class="testimonial_box swiper-slide d-flex flex-column align-items-center">
                        <img class="rounded-circle" src="/frontend_assets/images/majid.png" alt="" />
                        <h2 class="text-center">Lorem Ipsum name</h2>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Numquam doloribus omnis rerum accusamus eveniet
                            consequatur possimus consequuntur
                        </p>
                    </div>
                    <div class="testimonial_box swiper-slide d-flex flex-column align-items-center">
                        <img class="rounded-circle" src="/frontend_assets/images/majid.png" alt="" />
                        <h2 class="text-center">Lorem Ipsum name</h2>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Numquam doloribus omnis rerum accusamus eveniet
                            consequatur possimus consequuntur
                        </p>
                    </div>
                    <div class="testimonial_box swiper-slide d-flex flex-column align-items-center">
                        <img class="rounded-circle" src="/frontend_assets/images/majid.png" alt="" />
                        <h2 class="text-center">Lorem Ipsum name</h2>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Numquam doloribus omnis rerum accusamus eveniet
                            consequatur possimus consequuntur
                        </p>
                    </div>
                    <div class="testimonial_box swiper-slide d-flex flex-column align-items-center">
                        <img class="rounded-circle" src="/frontend_assets/images/majid.png" alt="" />
                        <h2 class="text-center">Lorem Ipsum name</h2>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Numquam doloribus omnis rerum accusamus eveniet
                            consequatur possimus consequuntur
                        </p>
                    </div>
                </div>
                <div class="swiper-pagination d-flex d-md-none">
                    <div id="storiesSlide_index" class="index">1</div>
                    <div class="pagination_gap"></div>
                    <div class="custom_pagination"></div>
                </div>
            </div>
            <!-- <div class="testimonial_bg_strip"></div> -->
        </div>
    </article>
</div>

@endsection