@extends('layout')
@section('title', 'Home')

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="19" class="elementor elementor-19">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-236474d9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="236474d9" data-element_type="section"
        data-settings='{"background_background":"classic","shape_divider_bottom":"tilt"}'>
        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z" />
            </svg>
        </div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6edd2342 elementor-invisible"
                data-id="6edd2342" data-element_type="column" data-settings='{"animation":"fadeIn"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-783127a4 elementor-widget elementor-widget-heading"
                        data-id="783127a4" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">
                                Coded.money
                            </h4>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-1580017d elementor-widget elementor-widget-heading"
                        data-id="1580017d" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                Buy Bitcoin with Credit Card or Debit Card
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-778f365b elementor-widget elementor-widget-text-editor"
                        data-id="778f365b" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>
                                First transaction — no fee!<br />Enjoy world-class
                                commission rates!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-313b0b0c"
                data-id="313b0b0c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1eea8cef elementor-widget elementor-widget-image"
                        data-id="1eea8cef" data-element_type="widget" data-widget_type="image.default">
                        @auth
                            <div class="elementor-widget-container" id="paybis-widget" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 600px; background-color: rgba(200, 200, 200, 0.2);">

                            </div>
                        @else
                            <div class="elementor-widget-container" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 80vh; background-color: rgba(200, 200, 200, 0.2);">
                                <div class="elementor-button elementor-button-link elementor-size-md elementor-animation-grow" style="background-color: white; box-shadow: 0px 15px 35px -10px #5C6680;">
									<a href="{{ route('login') }}" class="cta-button" style="color: #334A75;">Login To Access Widget</a>
								</div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-cbac313 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="cbac313" data-element_type="section"
        data-settings='{"background_background":"classic","shape_divider_bottom":"tilt"}'
        style="padding-bottom: 100px;">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cebbda"
                data-id="cebbda" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c65d87f elementor-widget elementor-widget-heading"
                        data-id="c65d87f" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                Our Features
                            </h2>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-5ca0436d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="5ca0436d" data-element_type="section" data-settings='{"animation":"fadeInUp"}'>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-101aa121"
                                data-id="101aa121" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6afe3565 eael-infobox-shape-square eael-infobox-hover-img-shape-square elementor-widget elementor-widget-eael-info-box"
                                        data-id="6afe3565" data-element_type="widget"
                                        data-widget_type="eael-info-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="eael-infobox">
                                                <div class="infobox-icon">
                                                    <img decoding="async"
                                                        src="{{ asset('assets/wp-content/uploads/2024/12/quick-payouts.svg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="infobox-content">
                                                    <h2 class="title">Instant payouts</h2>
                                                    <div>
                                                        <p>When you use your debit or credit card</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6e3ad97a"
                                data-id="6e3ad97a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-33613504 eael-infobox-shape-square eael-infobox-hover-img-shape-square elementor-widget elementor-widget-eael-info-box"
                                        data-id="33613504" data-element_type="widget"
                                        data-widget_type="eael-info-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="eael-infobox">
                                                <div class="infobox-icon">
                                                    <img decoding="async"
                                                        src="{{ asset('assets/wp-content/uploads/2024/12/support.svg') }}" alt="" />
                                                </div>
                                                <div class="infobox-content">
                                                    <h2 class="title">Round-the-clock support</h2>
                                                    <div>
                                                        <p>
                                                            Our support team is ready to help you 24/7
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-215c1e41"
                                data-id="215c1e41" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-325a774f eael-infobox-shape-square eael-infobox-hover-img-shape-square elementor-widget elementor-widget-eael-info-box"
                                        data-id="325a774f" data-element_type="widget"
                                        data-widget_type="eael-info-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="eael-infobox">
                                                <div class="infobox-icon">
                                                    <img decoding="async"
                                                        src="{{ asset('assets/wp-content/uploads/2024/12/available-worldwide.svg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="infobox-content">
                                                    <h2 class="title">Worldwide access</h2>
                                                    <div>
                                                        <p>
                                                            Buy crypto from more than 180 countries
                                                            worldwide
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-c02bf6f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="c02bf6f" data-element_type="section" data-settings='{"animation":"fadeInUp"}'>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-442aa872"
                                data-id="442aa872" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-f568bca eael-infobox-shape-square eael-infobox-hover-img-shape-square elementor-widget elementor-widget-eael-info-box"
                                        data-id="f568bca" data-element_type="widget"
                                        data-widget_type="eael-info-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="eael-infobox">
                                                <div class="infobox-icon">
                                                    <img decoding="async"
                                                        src="{{ asset('assets/wp-content/uploads/2024/12/efficient-fast-service.svg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="infobox-content">
                                                    <h2 class="title">Fast security checks</h2>
                                                    <div>
                                                        <p>Get into action as quickly as possible</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-31c708f1"
                                data-id="31c708f1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-184e1180 eael-infobox-shape-square eael-infobox-hover-img-shape-square elementor-widget elementor-widget-eael-info-box"
                                        data-id="184e1180" data-element_type="widget"
                                        data-widget_type="eael-info-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="eael-infobox">
                                                <div class="infobox-icon">
                                                    <img decoding="async"
                                                        src="{{ asset('assets/wp-content/uploads/2024/12/low-commissions.svg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="infobox-content">
                                                    <h2 class="title">Low commissions</h2>
                                                    <div>
                                                        <p>Get more crypto for your money</p>
                                                        <p> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4a96155d"
                                data-id="4a96155d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1309d9f0 eael-infobox-shape-square eael-infobox-hover-img-shape-square elementor-widget elementor-widget-eael-info-box"
                                        data-id="1309d9f0" data-element_type="widget"
                                        data-widget_type="eael-info-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="eael-infobox">
                                                <div class="infobox-icon">
                                                    <img decoding="async"
                                                        src="{{ asset('assets/wp-content/uploads/2024/12/user-friendly.svg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="infobox-content">
                                                    <h2 class="title">Simple and intuitive</h2>
                                                    <div>
                                                        <p>
                                                            Buying crypto is easy, even if you&#8217;re
                                                            just starting out
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-bcc7d63 elementor-widget elementor-widget-heading"
                        data-id="bcc7d63" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                Get your money's worth
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-db4db77 elementor-widget elementor-widget-heading"
                        data-id="db4db77" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                Ready to buy crypto? See below how much your money can get
                                you
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-5f565cd0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="5f565cd0" data-element_type="section" data-settings='{"background_background":"classic"}'>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65203294"
                data-id="65203294" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-27bb34a9 eael-dual-header-content-align-center elementor-invisible elementor-widget elementor-widget-eael-dual-color-header"
                        data-id="27bb34a9" data-element_type="widget" data-settings='{"_animation":"fadeInUp"}'
                        data-widget_type="eael-dual-color-header.default">
                        <div class="elementor-widget-container">
                            <div class="eael-dual-header">
                                <h2 class="title">
                                    <span class="lead solid-color">How to Buy Bitcoin with
                                    </span>
                                    <span>Credit Card or Debit Card</span>
                                </h2>
                                <span class="subtext"></span>
                            </div>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-5cb5b35 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="5cb5b35" data-element_type="section" data-settings='{"animation":"fadeInUp"}'>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-eca3e98"
                                data-id="eca3e98" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7fd8292 elementor-widget elementor-widget-image"
                                        data-id="7fd8292" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="200" height="230"
                                                src="{{ asset('assets/wp-content/uploads/2024/12/how-does-it-work.svg') }}"
                                                class="attachment-large size-large wp-image-126" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-89e1ec8"
                                data-id="89e1ec8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-506cd44 elementor-widget elementor-widget-heading"
                                        data-id="506cd44" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                Buy Bitcoin instantly from around the world
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2e3ba2c elementor-widget elementor-widget-text-editor"
                                        data-id="2e3ba2c" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>
                                                Bitcoin is the gold standard for cryptocurrencies
                                                and the go-to starter crypto for most beginners.
                                                And now, you can buy Bitcoin instantly using your
                                                bank&#8217;s credit card or debit card.<br /><br />Follow
                                                these steps:
                                            </p>
                                            <ol>
                                                <li>
                                                    Enter the amount of Bitcoin you want to buy or
                                                    how much local currency to spend
                                                </li>
                                                <li>Provide your Bitcoin wallet address</li>
                                                <li>
                                                    Complete payment and get your Bitcoin almost
                                                    instantly
                                                </li>
                                            </ol>
                                            <p>
                                                That’s how you buy crypto with credit card. Enjoy
                                                more BTC with fewer commissions!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-21ccafb4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="21ccafb4" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39396856 elementor-invisible"
                data-id="39396856" data-element_type="column" data-settings='{"animation":"fadeInLeft"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-55348f27 elementor-widget elementor-widget-heading"
                        data-id="55348f27" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                Frequently Asked Questions
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-735887f elementor-widget elementor-widget-image"
                        data-id="735887f" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="291" height="229"
                                src="{{ asset('assets/wp-content/uploads/2024/12/faq.svg') }}"
                                class="attachment-large size-large wp-image-128" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40cf4289"
                data-id="40cf4289" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7a4d6e67 elementor-invisible elementor-widget elementor-widget-eael-adv-accordion"
                        data-id="7a4d6e67" data-element_type="widget"
                        data-settings='{"_animation":"fadeInRight"}'
                        data-widget_type="eael-adv-accordion.default">
                        <div class="elementor-widget-container">
                            <div class="eael-adv-accordion" id="eael-adv-accordion-7a4d6e67"
                                data-scroll-on-click="no" data-scroll-speed="300" data-accordion-id="7a4d6e67"
                                data-accordion-type="accordion" data-toogle-speed="300">
                                <div class="eael-accordion-list">
                                    <div id="what-is-the-best-time-to-buy-bitcoin"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="1" aria-controls="elementor-tab-content-2051">
                                        <span class="eael-accordion-tab-title">What is the best time to buy
                                            Bitcoin?</span><span
                                            class="eael-advanced-accordion-icon-closed"><svg aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2051" class="eael-accordion-content clearfix"
                                        data-tab="1" aria-labelledby="what-is-the-best-time-to-buy-bitcoin">
                                        <p>
                                            If you&#8217;re looking to buy Bitcoin as an
                                            investment, it&#8217;s important to do your own
                                            research and consider your own financial goals and
                                            risk tolerance. It’s quite customary to invest in
                                            Bitcoin for the long term and not to try to time the
                                            market.
                                        </p>
                                        <p>
                                            Dollar-cost averaging is a popular strategy that
                                            involves investing a fixed amount of money in
                                            Bitcoin at regular intervals, regardless of the
                                            market price. This can help to reduce the impact of
                                            price volatility.
                                        </p>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="can-you-buy-partial-bitcoin"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="2" aria-controls="elementor-tab-content-2052">
                                        <span class="eael-accordion-tab-title">Can you buy partial
                                            Bitcoin?</span><span
                                            class="eael-advanced-accordion-icon-closed"><svg aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2052" class="eael-accordion-content clearfix"
                                        data-tab="2" aria-labelledby="can-you-buy-partial-bitcoin">
                                        <p>
                                            Yes, you can buy partial Bitcoin if you don&#8217;t
                                            want to buy a Bitcoin (whole). As per
                                            Bitcoin&#8217;s design, the smaller amount of
                                            Bitcoin you can own is 0.00000001 BTC (or 1
                                            Satoshi). 
                                        </p>
                                        <p>
                                            Verified accounts can purchase Bitcoins for a
                                            maximum of $20,000 per day or $50,000 per month.
                                        </p>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="what-can-you-buy-with-bitcoin"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="3" aria-controls="elementor-tab-content-2053">
                                        <span class="eael-accordion-tab-title">What can you buy with
                                            Bitcoin?</span><span
                                            class="eael-advanced-accordion-icon-closed"><svg aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2053" class="eael-accordion-content clearfix"
                                        data-tab="3" aria-labelledby="what-can-you-buy-with-bitcoin">
                                        <p>
                                            Some countries, like El Salvador, have declared BTC
                                            to be a legal tender. So, you will be able to buy
                                            anything in these countries with Bitcoin.
                                        </p>
                                        <p>
                                            Most countries currently do not accept Bitcoin as a
                                            legal tender. Hence, you cannot directly purchase
                                            goods and services with BTC in these countries.
                                        </p>
                                        <p>
                                            You can convert BTC back to USD, EUR, or other fiat
                                            currency and use those funds for your purchases.
                                            Some platforms offer coupons in exchange for
                                            Bitcoin, which you can then use to exchange for
                                            goods and services.
                                        </p>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="where-to-buy-bitcoin-with-credit-card"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="4" aria-controls="elementor-tab-content-2054">
                                        <span class="eael-accordion-tab-title">Where to buy Bitcoin with credit
                                            card?</span><span class="eael-advanced-accordion-icon-closed"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2054" class="eael-accordion-content clearfix"
                                        data-tab="4" aria-labelledby="where-to-buy-bitcoin-with-credit-card">
                                        <div class="accordion-item">
                                            <div class="accordion-item__content-wrapper">
                                                <div class="accordion-item__content">
                                                    <div class="text-block">
                                                        <p>
                                                            If you are wondering where to buy Bitcoin
                                                            with credit card instantly, coded.money
                                                            could be your choice.
                                                        </p>
                                                        <p>
                                                            coded.money provides its global customer
                                                            base with a platform for getting Bitcoin
                                                            with credit card, with a specific focus on
                                                            simplicity, intuitive user experience (UX),
                                                            low commissions, and user-centric features.
                                                        </p>
                                                        <p>
                                                            coded.money gives you a way to not only buy
                                                            Bitcoin, but also sell it when the price is
                                                            favorable to you. Everything you need is
                                                            under one roof.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"> </div>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="how-long-does-it-take-to-buy-bitcoin"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="5" aria-controls="elementor-tab-content-2055">
                                        <span class="eael-accordion-tab-title">How long does it take to buy
                                            Bitcoin?</span><span
                                            class="eael-advanced-accordion-icon-closed"><svg aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2055" class="eael-accordion-content clearfix"
                                        data-tab="5" aria-labelledby="how-long-does-it-take-to-buy-bitcoin">
                                        <div class="accordion-item">
                                            <div class="accordion-item__content-wrapper">
                                                <div class="accordion-item__content">
                                                    <div class="text-block">
                                                        <p>
                                                            You can buy Bitcoin within 2 minutes if you
                                                            have already completed the verification
                                                            process. Depending on the network capacity,
                                                            BTC might take a few minutes longer to
                                                            arrive in your wallet.<br /><br />If you
                                                            have not completed the verification or
                                                            signup process, it might take between 5–10
                                                            minutes to buy Bitcoin for first-time users.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="is-it-safe-to-buy-bitcoin-with-codedmoney"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="6" aria-controls="elementor-tab-content-2056">
                                        <span class="eael-accordion-tab-title">Is it safe to buy Bitcoin with
                                            coded.money?</span><span
                                            class="eael-advanced-accordion-icon-closed"><svg aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2056" class="eael-accordion-content clearfix"
                                        data-tab="6"
                                        aria-labelledby="is-it-safe-to-buy-bitcoin-with-codedmoney">
                                        <div class="accordion-item">
                                            <div class="accordion-item__content-wrapper">
                                                <div class="accordion-item__content">
                                                    <div class="text-block">
                                                        <p>
                                                            At Coded.money, we prioritize the security
                                                            of our platform and transactions. We
                                                            implement various security measures to
                                                            protect our users. However, it&#8217;s
                                                            important to note that buying Bitcoin, like
                                                            any investment in cryptocurrencies, involves
                                                            inherent risks.
                                                        </p>
                                                        <p>
                                                            The value of Bitcoin can be highly volatile,
                                                            and its market is subject to rapid changes.
                                                            We encourage our users to thoroughly
                                                            research and understand the risks associated
                                                            with cryptocurrency investments. While we
                                                            strive to provide a secure platform for
                                                            transactions, we advise users to always be
                                                            cautious and consider seeking independent
                                                            financial advice before making investment
                                                            decisions.
                                                        </p>
                                                        <p>
                                                            Please be aware that past performance of
                                                            cryptocurrencies is not a reliable indicator
                                                            of future performance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="can-you-buy-bitcoin-with-credit-card-no-verification"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="7" aria-controls="elementor-tab-content-2057">
                                        <span class="eael-accordion-tab-title">Can you buy Bitcoin with credit
                                            card no
                                            verification?</span><span
                                            class="eael-advanced-accordion-icon-closed"><svg aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2057" class="eael-accordion-content clearfix"
                                        data-tab="7"
                                        aria-labelledby="can-you-buy-bitcoin-with-credit-card-no-verification">
                                        <div class="accordion-item">
                                            <div class="accordion-item__content-wrapper">
                                                <div class="accordion-item__content">
                                                    <div class="text-block">
                                                        <p>
                                                            It is not possible to buy Bitcoin
                                                            anonymously, but it is possible to buy
                                                            Bitcoin with credit card instantly. This is
                                                            because Coded.money needs to comply with
                                                            international Anti-Money Laundering (AML)
                                                            standards, regulations and other
                                                            laws.<br /><br />Depending
                                                            on your payment method, location, and the
                                                            amount of Bitcoin you are purchasing, you
                                                            may be subject to fewer requirements during
                                                            the verification process. However, this does
                                                            not ensure complete anonymity.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="eael-accordion-list">
                                    <div id="can-i-buy-bitcoin-with-apple-pay"
                                        class="elementor-tab-title eael-accordion-header" tabindex="0"
                                        data-tab="8" aria-controls="elementor-tab-content-2058">
                                        <span class="eael-accordion-tab-title">Can I buy Bitcoin with Apple
                                            Pay?</span><span class="eael-advanced-accordion-icon-closed"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-plus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span><span class="eael-advanced-accordion-icon-opened"><svg
                                                aria-hidden="true"
                                                class="fa-accordion-icon e-font-icon-svg e-fas-minus"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div id="elementor-tab-content-2058" class="eael-accordion-content clearfix"
                                        data-tab="8" aria-labelledby="can-i-buy-bitcoin-with-apple-pay">
                                        <div class="accordion-item">
                                            <div class="accordion-item__content-wrapper">
                                                <div class="accordion-item__content">
                                                    <div class="text-block">
                                                        <p>
                                                            Yes, Coded.money allows you to use cards
                                                            saved in Apple Pay. All you need to do is
                                                            select the Credit/Debit Card as a payment
                                                            option, choose Apple Pay from the list of
                                                            cards and authenticate with your Touch or
                                                            Face ID before confirming the
                                                            transaction.<br /><br />Your card details
                                                            will not be shared with Coded.money, and all
                                                            payments are safely secured through
                                                            Apple&#8217;s encryption methods. This makes
                                                            Apple Pay an easy and secure alternative to
                                                            using a credit or debit card.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    !function() {
        if (window.PartnerExchangeWidget = window.PartnerExchangeWidget || {
                open(e) {
                    window.partnerWidgetSettings = {
                        immediateOpen: e
                    }
                }
            }, "PartnerExchangeWidget" !== window.PartnerExchangeWidget.constructor.name) {
            (() => {
                const e = document.createElement("script");
                e.type = "text/javascript", e.defer = !0, e.src = "https://widget.sandbox.paybis.com/partner-exchange-widget.js";
                const t = document.getElementsByTagName("script")[0];
                t.parentNode.insertBefore(e, t)
            })()
        }
    }();

    async function widgetRequest() {
        try {
            const response = await fetch("{{ route('widgetRequest') }}", {
                headers: {
                    'accept': 'application/json'
                },
                method: 'GET',
            });

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const result = await response.json();
            return result;
        } catch (error) {
            console.error("Fetch error:", error.message);
            return null;
        }
    }

    widgetRequest().then(result => {
        console.log("Result:", result);
        window.PartnerExchangeWidget.events.onclosed = function (e) {
            window.location.href = "{{ route('home') }}";
        };
        window.PartnerExchangeWidget.openInEmbed(
            { requestId: result.data.requestId },
            document.getElementById('paybis-widget')
        );
    });
</script>
@endsection
