@extends('layouts.master')

@section('page_content')

<div class="adlance_sections_container">
    <!--====== CONTACT US HEADER ======-->
    <article class="container-fluid d-flex justify-content-center align-items-center contact_us_page_header">
        <section class="row">
            <div class="col-md-12">
                <h2 class="adlance_heading text-center">Contact Us</h2>
            </div>
            <div class="col-md-12 mt-xxl-5 mt-md-3">
                <h2 class="adlance_help_heading">How can we <nobr>help you?</nobr>
                </h2>
            </div>
        </section>
    </article>
    <!--====== CONTACT US HEADER - END ======-->

    <!--====== CONTACT US INFORMATION ======-->
    <article class="pt-sm-5 container-fluid d-flex flex-column justify-content-center adlance_contact_info_section">
        <section class="row">
            <div class="col-md-12 contact_info_description text-center mx-auto">
                <p>We will address your questions and make recommendations based on the
                    specifics of your brand and what you’re aiming to accomplish.</p>
            </div>
        </section>
        <section class="row mt-md-4 d-flex justify-content-center align-items-center adlance_contact_info_desktop">
            <div class="mt-sm-5 order-xl-1 order-sm-1 col-xl-3 col-lg-12 col-md-12 col-sm-12">
                <a href="tel:+442032394930">+44 20 3239 4930</a>
            </div>

            <div class="order-xl-2 order-sm-4 mt-sm-5 adlance_contact_btn_circle col-xl-6 col-lg-12 col-md-12 d-flex position-relative justify-content-center align-items-center">
                <div class="circle circle1"></div>
                <div class="circle circle2"></div>
                <div class="circle circle3"></div>
                <div class="d-flex justify-content-center align-items-center adlance_get_direction_btn">
                    <a href="javascript:;">Get In Touch</a>
                </div>
            </div>
            <div class="mt-sm-5 order-xl-3 order-sm-2 col-xl-3 col-lg-12 col-md-12 col-sm-12 desktop_contact_mail">
                <a href="mailto:info@adlance.co.uk">info@adlance.co.uk</a>
            </div>
            <div class="order-xl-4 order-sm-3 col-md-12 mt-xl-5 adlance_address mx-auto">
                <a target="_blank" href="https://wa.me/00923217340568"> <i class="me-2 fab fa-whatsapp wtsApp_contact"></i> +92 321 7340568</a>
            </div>
        </section>
        <section class="row mt-md-5 desktop_contact_address">

        </section>
    </article>
    <!--====== CONTACT US INFORMATION END ======-->

    <!--====== CONTACT US FORM ======-->
    <article class="container-fluid py-5 d-flex flex-column justify-content-center adlance_contact_form_section">
        <section class="row h-100 adlance_contact_form">
            <div class="form_progress mb-4 mx-auto d-flex justify-content-between align-items-center col-xxl-7 col-xl-8 col-lg-10 col-md-10 col-sm-10">
                <div id="step1" class="step active">1</div>
                <div class="step_line"></div>
                <div id="step2" class="step">2</div>
            </div>
            <div class="mx-auto col-xxl-7 col-xl-8 col-lg-10 col-md-10 col-sm-10">
                <form action="#" class="needs-validation" novalidate>
                    <div id="form_step1" class="form_steps">
                        <div class="mb-3">
                            <input id="userName" type="text" class="px-4 py-3 rounded-5 border-0 form-control" placeholder="Your name">
                            <div class="nameError d-none text-danger ms-4 mt-2">
                                Please Enter Name
                            </div>
                        </div>
                        <div class="mb-3">
                            <input id="userEmail" type="email" class="px-4 py-3 rounded-5 border-0 form-control" placeholder="Email Address">
                            <div class="emailError d-none text-danger ms-4 mt-2">
                                Please Enter Email
                            </div>
                        </div>
                        <div class="mb-3">
                            <input id="companyName" type="text" class="px-4 py-3 rounded-5 border-0 form-control" placeholder="Company name (Optional)">
                        </div>
                        <div class="mb-3">
                            <button id="form_nxt_btn" class="btn_txt p-3 btn btn-outline-light rounded-5 form-control"> Next
                            </button>
                        </div>
                    </div>
                    <div id="form_step2" class="form_steps">
                        <div class="mb-3 ">
                            <textarea placeholder="Let us know how we can help you by writing to us here" id="userMsg" class="p-4 rounded-3 border-0 form-control" rows="5"></textarea>
                            <div class="msgError d-none text-danger ms-4 mt-2">
                                Please Enter Message
                            </div>
                        </div>
                        <div class="mb-3 ">
                            <input id="dateInput" type="date" class="py-3 rounded-5 border-0 form-control" placeholder="Company name">
                        </div>
                        <div class="mb-3">
                            <button id="form_prev_btn" class="btn_txt py-3 btn btn-outline-light rounded-5 form-control">
                                Previous </button>
                        </div>
                        <div class="mb-3">
                            <button id="adlance_send_btn" type="submit" class="btn_txt py-3 btn btn-light rounded-5 form-control"> Send
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </article>
    <!--====== CONTACT US FORM END ======-->
</div>

@endsection