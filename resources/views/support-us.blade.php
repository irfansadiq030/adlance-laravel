@extends('layouts.master')

@section('page_content')

<div class="adlance_sections_container">
    <!--====== SUPPORT US SECTION ======-->
    <article class="support_us_section">
        <div class="container-fluid h-100">
            <div class="row h-50 align-items-center">
                <div class="col-12 pt-5 mt-3 text-center text-md-start">
                    <h2 class="supportUs_heading">Support <span>Us</span></h2>
                    <div data-aos="fade-up" class="d-flex pt-4 justify-content-center justify-content-md-start">
                        <a href="#" class="hero_primary_btn">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--====== SUPPORT US FORM SECTION ======-->
    <article class="supportUs_form d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 h-25 d-flex justify-content-center align-items-end">
                    <p class="text-center pt-5">
                        Your donation makes a difference. <br />
                        No matter how small, we will run a mile with it.
                    </p>
                </div>
                <div class="col-12 col-md-8 col-lg-7 col-xl-9 pt-3 pt-md-5 d-flex flex-column align-items-center mx-auto h-75">
                    <form action="#" class="w-100 mx-auto">
                        <div class="row mb-3">
                            <div class="col-12 col-md-6 one-off-btn">
                                <input class="form-check-input visually-hidden support_check" type="radio" name="inlineRadioOptions" id="one-off" value="one-off" checked />
                                <label class="btn support_radio_btn w-100 d-block" for="one-off">One off</label>
                            </div>
                            <div class="col-12 col-md-6 pt-3 pt-md-0">
                                <input class="form-check- visually-hidden support_check" type="radio" name="inlineRadioOptions" id="monthly" value="monthly" />
                                <label class="btn support_radio_btn w-100 d-block" for="monthly">Monthly</label>
                            </div>
                        </div>
                        <div class="row mb-3 pt-3 pt-md-5">
                            <div class="col-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text support_currency">&pound;</span>
                                    <input id="donation-amount" placeholder="00.00" type="number" class="form-control support_options" aria-label="donation ammount input" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-3 pt-md-0">
                                <select class="form-select support_options" aria-label="Default select example">
                                    <option selected>General</option>
                                    <option value="1">123</option>
                                    <option value="2">ABC</option>
                                    <option value="3">XYZ</option>
                                </select>
                            </div>
                            <div class="col-12 pt-5">
                                <h5 class="text-uppercase text-center">OR</h5>
                            </div>
                            <div class="col-12 flex-wrap d-flex justify-content-between pt-5">
                                <button class="donate-button" id="donate-10" data-amount="10">
                                    &pound;10
                                </button>
                                <button class="donate-button" id="donate-20" data-amount="20">
                                    &pound;25
                                </button>
                                <button class="donate-button" id="donate-50" data-amount="50">
                                    &pound;50
                                </button>
                                <button class="donate-button" id="donate-100" data-amount="100">
                                    &pound;100
                                </button>
                                <button class="donate-button" id="donate-500" data-amount="500">
                                    &pound;500
                                </button>
                                <button class="donate-button" id="donate-1000" data-amount="1000">
                                    &pound;1000
                                </button>
                                <button class="donate-button" id="donate-5000" data-amount="5000">
                                    &pound;5000
                                </button>
                                <button class="donate-button" id="donate-8000" data-amount="8000">
                                    &pound;8000
                                </button>
                            </div>
                            <button class="hero_primary_btn mx-auto mt-5 mb-5">
                                Donate Now
                            </button>
                            <!-- Paypal  -->
                            <div id="smart-button-container">
                                <div style="text-align: center">
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>

@endsection