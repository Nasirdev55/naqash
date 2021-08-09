@extends('site.layouts.app')
@section('content')

    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg" style="background-image: url(&quot;assets/images/breadcrumb/bg/1-1-1919x388.jpg&quot;);">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h1 class="breadcrumb-heading">About Us</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-area section-space-top-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <h2 class="about-title">Our <span>Story</span></h2>
                            <p class="about-desc">
                                I-Shop differences are what make it unique, and it matters to the brand that people can share every brilliant aspect of themselves with the world, comfortably and with confidence. I-Store was founded on a belief that the clothes you choose should let you wear your individuality. Since its inception, it has been making it possible for women to dress in an inspiring, vibrant, affordable way – whilst celebrating their uniqueness with every style, stitch and weave.
                            </p>
                            {{--<div class="about-signature">--}}
                                {{--<img src="assets/images/about/icon/2.png" alt="Signature">--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Shipping Area -->
        <div class="shipping-area section-space-y-axis-100">
            <div class="container">
                <div class="shipping-bg">
                    <div class="row shipping-wrap">
                        <div class="col-lg-4 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="assets/images/shipping/icon/car.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Free Shipping</h2>
                                    <p class="short-desc mb-0">Capped at $319 per order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="assets/images/shipping/icon/card.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Safe Payment</h2>
                                    <p class="short-desc mb-0">With our payment gateway</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="assets/images/shipping/icon/service.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Best Services</h2>
                                    <p class="short-desc mb-0">Friendly &amp; Supper Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-with-counter">
            <div class="banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-boxshadow">
                                <div class="banner-item" data-bg-image="assets/images/banner/3-1-1208x542.jpg" style="background-image: url(&quot;assets/images/banner/3-1-1208x542.jpg&quot;);">
                                    <div class="popup-btn">
                                        <a class="popup-vimeo wave-btn" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <div class="icon">
                                                <i class="pe-7s-play"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-area">
                <div class="container">
                    {{--<h2 class="counter-title">Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do--}}
                        {{--<span>eiusmod tempor</span> incididunt.--}}
                    {{--</h2>--}}
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="counter-item">
                                <div class="count-wrap">
                                    <h3 class="count mb-0" data-counterup-time="500">150</h3>
                                    <span class="prefix">+</span>
                                </div>
                                <h4 class="count-title mb-0">Products</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="counter-item">
                                <div class="count-wrap">
                                    <h3 class="count mb-0" data-counterup-time="1000">359</h3>
                                    <span class="prefix">+</span>
                                </div>
                                <h4 class="count-title mb-0">Clients</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 pt-4 pt-md-0">
                            <div class="counter-item">
                                <div class="count-wrap">
                                    <h3 class="count mb-0" data-counterup-time="1500">251</h3>
                                    <span class="prefix">+</span>
                                </div>
                                <h4 class="count-title mb-0">Rating</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 pt-4 pt-lg-0">
                            <div class="counter-item">
                                <div class="count-wrap">
                                    <h3 class="count mb-0" data-counterup-time="2000">110</h3>
                                    <span class="prefix">+</span>
                                </div>
                                <h4 class="count-title mb-0">Award</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <div class="team-area section-space-top-100">
            <div class="container">
                <div class="section-title-wrap without-tab">
                    <h2 class="section-title">Our Team</h2>
                    {{--<p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots--}}
                        {{--in a piece of classical Latin literature--}}
                    {{--</p>--}}
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 pt-sm-5">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets/images/ammar.jpeg')}}" alt="Team Member">
                                <div class="inner-content">
                                    <h2 class="team-member-name">Ammar</h2>
                                    <span class="occupation">CEO</span>
                                    <div class="social-link with-border">
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="team-member-name mb-0">Ammar</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 pt-5 pt-sm-0">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets/images/naqash.jpeg')}}" alt="Team Member">
                                <div class="inner-content">
                                    <h2 class="team-member-name">Naqash</h2>
                                    <span class="occupation">Co-Founder</span>
                                    <div class="social-link with-border">
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="team-member-name mb-0">Naqash</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 pt-5">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets/images/umair.jpeg')}}" alt="Team Member">
                                <div class="inner-content">
                                    <h2 class="team-member-name">Umair</h2>
                                    <span class="occupation">Dirctor</span>
                                    <div class="social-link with-border">
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="team-member-name mb-0">Umair</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 pt-5 pt-sm-0">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets/images/usama.jpeg')}}" alt="Team Member">
                                <div class="inner-content">
                                    <h2 class="team-member-name">Usama</h2>
                                    <span class="occupation">Manager</span>
                                    <div class="social-link with-border">
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="team-member-name mb-0">Usama</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Brand Area -->

        <!-- Brand Area End Here -->

    </main>
    @endsection