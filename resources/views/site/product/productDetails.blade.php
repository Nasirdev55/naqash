@extends('site.layouts.app')
@section('content')

    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg" style="background-image: url(&quot;assets/images/breadcrumb/bg/1-1-1919x388.jpg&quot;);">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Single Product</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Single Product variable</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($product_id->images as $img)
                        <div class="single-product-img">
                            <div class="swiper-container single-product-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-bef3e2e9c212f765" aria-live="polite" style="transform: translate3d(-1632px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 10" style="width: 544px;">

                                        <a href="assets/images/product/large-size/1-2-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>

                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="2 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-3-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="3 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-4-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="4 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-1-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="5 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-2-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="6 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-3-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="7 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-4-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="8 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-1-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="9 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-2-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="10 / 10" style="width: 544px;">
                                        <a href="assets/images/product/large-size/1-3-570x633.jpg" class="single-img gallery-popup">
                                            <img class="img-full" src="{{asset($img->image)}}" alt="Product Image">
                                        </a>
                                    </div></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="thumbs-arrow-holder">
                                <div class="swiper-container single-product-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-1072ebea06b66e268" aria-live="polite" style="transform: translate3d(-426px, 0px, 0px); transition-duration: 0ms;"><a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Thumnail">
                                        </a><a href="#" class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="2 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-3-570x633.jpg" alt="Product Thumnail">
                                        </a><a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="3 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-4-570x633.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="4 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-1-570x633.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="5 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="6 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-3-570x633.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="7 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-4-570x633.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="8 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-1-570x633.jpg" alt="Product Thumnail">
                                        </a><a href="#" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="9 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Thumnail">
                                        </a><a href="#" class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="10 / 10" style="width: 122px; margin-right: 20px;">
                                            <img class="img-full" src="assets/images/product/large-size/1-3-570x633.jpg" alt="Product Thumnail">
                                        </a></div>
                                    <!-- Add Arrows -->
                                    <div class=" thumbs-button-wrap d-none d-md-block">
                                        <div class="thumbs-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-991c5d5f394c6631" aria-disabled="false">
                                            <i class="pe-7s-angle-left"></i>
                                        </div>
                                        <div class="thumbs-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-991c5d5f394c6631" aria-disabled="false">
                                            <i class="pe-7s-angle-right"></i>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <form class="create-form" enctype="multipart/form-data" method="post">

                            @csrf
                        <div class="single-product-content">
                                <input type="hidden" name="product_id" value="{{$product_id->id}}">
                                <input type="hidden" name="category_id" value="{{$product_id->category_id}}">
                                <input type="hidden" name="brand_id" value="{{$product_id->brand_id}}">
                                <input type="hidden" name="product_id" value="{{$product_id->id}}">
                            <h2 class="title">{{$product_id->name}}</h2>
                            <div class="price-box">
                                <span class="new-price">{{$product_id->price}}</span>
                                <input type="hidden" name="price" value="{{$product_id->price}}">
                            </div>
                            <div class="rating-box-wrap">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="review-status">
                                    <a href="#">( 1 Review )</a>
                                </div>
                            </div>
                            <div class="selector-wrap color-option">
                                <span class="selector-title border-bottom-0">Color</span>
                                @foreach($products as $pro)
                                    @foreach($pro->colors as $color)
                                <select class="nice-select wide border-bottom-0 rounded-0" name="color">

                                    <option value="{{$color->id}}">{{$color->color_name}}</option>

                                </select>
                                    @endforeach
                                @endforeach

                            </div>
                            <div class="selector-wrap size-option">
                                <span class="selector-title">Size</span>
                                @foreach($products as $pro)
                                    @foreach($pro->sizes as $size)
                                        <select  class="nice-select wide border-bottom-0 rounded-0" name="size">

                                            <option value="{{$size->id}}">{{$size->size_name}}</option>

                                        </select>
                                    @endforeach
                                @endforeach
                            </div>
                            <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod
                                tempo incid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate</p>
                            <ul class="quantity-with-btn">
                                <li class="quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text" name="quantity">
                                        <div class="dec qtybutton"><i class="fa fa-minus"></i></div><div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                </li>
                                <li class="add-to-cart">
                                    <button type="submit" class="btn btn-custom-size lg-size btn-pronia-primary">Add to cart</button>
                                    {{--<input class="btn btn-custom-size lg-size btn-pronia-primary" type="submit">Add to--}}
                                        {{--cart</input>--}}
                                </li>
                                <li class="wishlist-btn-wrap">
                                    <a class="custom-circle-btn" href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li class="compare-btn-wrap">
                                    <a class="custom-circle-btn" href="compare.html">
                                        <i class="pe-7s-refresh-2"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="service-item-wrap">
                                <li class="service-item">
                                    <div class="service-img">
                                        <img src="assets/images/shipping/icon/car.png" alt="Shipping Icon">
                                    </div>
                                    <div class="service-content">
                                        <span class="title">Free <br> Shipping</span>
                                    </div>
                                </li>
                                <li class="service-item">
                                    <div class="service-img">
                                        <img src="assets/images/shipping/icon/card.png" alt="Shipping Icon">
                                    </div>
                                    <div class="service-content">
                                        <span class="title">Safe <br> Payment</span>
                                    </div>
                                </li>
                                <li class="service-item">
                                    <div class="service-img">
                                        <img src="assets/images/shipping/icon/service.png" alt="Shipping Icon">
                                    </div>
                                    <div class="service-content">
                                        <span class="title">Safe <br> Payment</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="product-category">
                                <span class="title">SKU:</span>
                                <ul>
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category">
                                <span class="title">Categories :</span>
                                <ul>
                                    <li>
                                        <a href="#">Office,</a>
                                    </li>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category product-tags">
                                <span class="title">Tags :</span>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category social-link align-items-center pb-0">
                                <span class="title pe-3">Share:</span>
                                <ul>
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-tumblr"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">
                                    Information
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                    Description
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="tab-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                                    Reviews(3)
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content product-tab-content">
                            <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                <div class="product-information-body">
                                    <h4 class="title">Shipping</h4>
                                    <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to
                                        deliver. Our product is good with reasonable price and we believe you will worth it.
                                        So please wait for it patiently! Thanks.Any question please kindly to contact us and
                                        we promise to work hard to help you to solve the problem</p>
                                    <h4 class="title">About return request</h4>
                                    <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                        then we will help you to solve the problem, so please close the return request!
                                        Thanks</p>
                                    <h4 class="title">Guarantee</h4>
                                    <p class="short-desc mb-0">If it is the quality question, we will resend or refund to
                                        you; If you receive damaged or wrong items, please contact us and attach some
                                        pictures about product, we will exchange a new correct item to you after the
                                        confirmation.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-description-body">
                                    <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                        qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                        fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                        nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="product-review-body">
                                    <div class="blog-comment mt-0">
                                        <h4 class="heading">Comments (03)</h4>
                                        <div class="blog-comment-item">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/1-1-120x120.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content">
                                                <div class="user-meta">
                                                    <h2 class="user-name">Donald Chavez</h2>
                                                    <span class="date">21 July 2021</span>
                                                </div>
                                                <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                    elit, sed
                                                    do eiusmod tempor incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                    minim
                                                    veniam, quis nostrud exercitati ullamco laboris nisi ut aliquiex ea
                                                    commodo
                                                    consequat.
                                                </p>
                                                <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comment-item relpy-item">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/1-2-120x120.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content">
                                                <div class="user-meta">
                                                    <h2 class="user-name">Marissa Swan</h2>
                                                    <span class="date">21 July 2021</span>
                                                </div>
                                                <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                    elit, sed do
                                                    eiusmod tempr incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                    minim veniam,
                                                    quisnos exercitati ullamco laboris nisi ut aliquiex.
                                                </p>
                                                <a class="btn btn-custom-size comment-btn style-2" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comment-item">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/1-3-120x120.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content">
                                                <div class="user-meta">
                                                    <h2 class="user-name">Donald Chavez</h2>
                                                    <span class="date">21 July 2021</span>
                                                </div>
                                                <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                    elit, sed
                                                    do eiusmod tempor incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                    minim
                                                    veniam, quis nostrud exercitati ullamco laboris nisi ut aliquiex ea
                                                    commodo
                                                    consequat.
                                                </p>
                                                <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedback-area">
                                        <h2 class="heading">Leave a comment</h2>
                                        <form class="feedback-form" action="#">
                                            <div class="group-input">
                                                <div class="form-field me-md-30 mb-30 mb-md-0">
                                                    <input type="text" name="name" placeholder="Your Name*" class="input-field">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" name="email" placeholder="Your Email*" class="input-field">
                                                </div>
                                            </div>
                                            <div class="form-field mt-30">
                                                <input type="text" name="subject" placeholder="Subject (Optinal)" class="input-field">
                                            </div>
                                            <div class="form-field mt-30">
                                                <textarea name="message" placeholder="Message" class="textarea-field"></textarea>
                                            </div>
                                            <div class="button-wrap pt-5">
                                                <button type="submit" value="submit" class="btn btn-custom-size xl-size btn-pronia-primary" name="submit">Post
                                                    Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Product Area -->

        <!-- Product Area End Here -->

    </main>
    @endsection
@section('script')
<script>
        $('.create-form').on('submit',function (e){
            e.preventDefault();
            var data = $('.create-form');
            data = new FormData(data[0]);

//             console.log(data);
//             return;
            // let data = $(this);
            // data = new FormData(data[0]);
            // var data = $(this).serialize();
            // let formData = new FormData(this);
            blockUi();
            $.ajax({
                type:'POST',
                dataType:'json',
                url:'{{route('product.cart',['product'=> $product_id])}}',
                data:data,
                cache: false,
                contentType: false,
                processData: false,
                success:function(data) {
                    $.unblockUI();
                    if(data.status == 1){

                        swal("Successfully", "Added to Your Cart", "success", {
                            button: "OK",
                        });
//                        successMsg(data.message);
//                        window.location.href = data.url;
                         window.location.reload();
                    }
                    if(data.status == 0){
                        swal("Already", "Product is in Your Cart", "error", {
                            button: "OK",
                        });
//                        errorMsg(data.message);
                    }
                },
                error:function(data) {
                    console.log('error');
                    $.unblockUI();

                }

            });

        });
</script>
@endsection