@extends('site.layouts.app')
@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcru  mb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg" style="background-image: url(&quot;assets/images/breadcrumb/bg/1-1-1919x388.jpg&quot;);">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Checkout Page</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="coupon-accordion">
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    <p class="coupon-text mb-1">Quisque gravida turpis sit amet nulla posuere lacinia. Cras
                                        sed est
                                        sit amet ipsum luctus.</p>
                                    <form action="javascript:void(0)">
                                        <p class="form-row-first">
                                            <label class="mb-1">Username or email <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Remember me</label>
                                        </p>
                                        <p class="lost-password"><a href="#">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="javascript:void(0)">
                                        <p class="checkout-coupon">
                                            <input placeholder="Coupon code" type="text">
                                            <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <form class="create-form"  method="post">

                            @csrf
{{--                            @method('post')--}}
{{--                            <input type="hidden" name="_token" value="<?php csrf_token() ?>">--}}
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Country</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="country">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input placeholder="" disabled="" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="lname">
                                        </div>
                                    </div>
                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="checkout-form-list">--}}
                                            {{--<label>Company Name</label>--}}
                                            {{--<input placeholder="" type="text">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text" name="address">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="checkout-form-list">--}}
{{--                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" name="city">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="checkout-form-list">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="exampleFormControlSelect1">Example select</label>--}}
{{--                                                <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                                    <option>1</option>--}}
{{--                                                    <option>2</option>--}}
{{--                                                    <option>3</option>--}}
{{--                                                    <option>4</option>--}}
{{--                                                    <option>5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="zip">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input disabled type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" value="" autocomplete="on" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox">
                                            <label for="cbox">Create an account?</label>
                                        </div>
                                        <div id="cbox-info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Ship to a different address?</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
                                    </div>
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="myniceselect country-select clearfix">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="myniceselect nice-select wide" style="display: none;">
                                                    <option data-display="Bangladesh">Bangladesh</option>
                                                    <option value="uk">London</option>
                                                    <option value="rou">Romania</option>
                                                    <option value="fr">French</option>
                                                    <option value="de">Germany</option>
                                                    <option value="aus">Australia</option>
                                                </select><div class="nice-select myniceselect wide" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="Bangladesh" data-display="Bangladesh" class="option selected">Bangladesh</li><li data-value="uk" class="option">London</li><li data-value="rou" class="option">Romania</li><li data-value="fr" class="option">French</li><li data-value="de" class="option">Germany</li><li data-value="aus" class="option">Australia</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input placeholder="Street address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input placeholder="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list checkout-form-list-2">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Place Order</button>
                        </form>
{{--                    <div class="col-lg-6 col-12">--}}
{{--                        <div class="your-order">--}}
{{--                            <h3>Your order</h3>--}}
{{--                            <div class="your-order-table table-responsive">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="cart-product-name">Product</th>--}}
{{--                                        <th class="cart-product-total">Total</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr class="cart_item">--}}
{{--                                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">--}}
{{--                                                × 1</strong></td>--}}
{{--                                        <td class="cart-product-total"><span class="amount">$165.00</span></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="cart_item">--}}
{{--                                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">--}}
{{--                                                × 1</strong></td>--}}
{{--                                        <td class="cart-product-total"><span class="amount">$165.00</span></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                    <tfoot>--}}
{{--                                    <tr class="cart-subtotal">--}}
{{--                                        <th>Cart Subtotal</th>--}}
{{--                                        <td><span class="amount">$215.00</span></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="order-total">--}}
{{--                                        <th>Order Total</th>--}}
{{--                                        <td><strong><span class="amount">$215.00</span></strong></td>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <div class="payment-method">--}}
{{--                                <div class="payment-accordion">--}}
{{--                                    <div id="accordion">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" id="#payment-1">--}}
{{--                                                <h5 class="panel-title">--}}
{{--                                                    <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">--}}
{{--                                                        Direct Bank Transfer.--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <h4>Cash on Delivery</h4>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" id="#payment-2">--}}
{{--                                                <h5 class="panel-title">--}}
{{--                                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">--}}
{{--                                                        Cheque Payment--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <p>Make your payment directly into our bank account. Please use your--}}
{{--                                                        Order--}}
{{--                                                        ID as the payment--}}
{{--                                                        reference. Your order won’t be shipped until the funds have cleared--}}
{{--                                                        in--}}
{{--                                                        our account.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" id="#payment-3">--}}
{{--                                                <h5 class="panel-title">--}}
{{--                                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">--}}
{{--                                                        PayPal--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <p>Make your payment directly into our bank account. Please use your--}}
{{--                                                        Order--}}
{{--                                                        ID as the payment--}}
{{--                                                        reference. Your order won’t be shipped until the funds have cleared--}}
{{--                                                        in--}}
{{--                                                        our account.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="order-button-payment">--}}
{{--                                        <button value="Place order" type="submit">Place Order</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>


    </main>

    @endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.create-form').on('submit', function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                // console.log(data);
                // return;


                $.ajax({
                    url: '{{route('product.order')}}',
                    type: 'POST',
                    dataType: 'json',
                    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data:data,
                    // cache: false,
                    // contentType: false,
                    // processData: false,
                    success:function(data){
                        $.unblockUI();
                        if(data.status == 1){

                            window.toastr.success(data.message);
                            // window.location.href = "/site";

                        }
                        if(data.status == 0){
                            // console.log(data);
                            window.toastr.error(data.message);
                            // errorMsg();
                        }
                    },
                    error:function(data) {
                        console.log('error');
                        $.unblockUI();

                    }

                });
            });
        });
    </script>
@endsection
