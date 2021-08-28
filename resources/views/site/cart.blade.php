@extends('site.layouts.app')
@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg" style="background-image: url(&quot;assets/images/breadcrumb/bg/1-1-1919x388.jpg&quot;);">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Cart Page</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Cart Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="product_remove">remove</th>
                                        <th class="product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($carts as $cart)
                                    <tr class="cartpage">
                                        <td class="product_remove">
                                            {{--<input type="hidden" class="product_id" value="{{$pro->id}}" >--}}
                                            <button class="btn btn-danger delete_cart_data">
                                                <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" tabindex="0"></i>
                                            </button>
                                        </td>
{{--                                        @foreach($cart->products as $img)--}}
                                        <td class="product-thumbnail">
                                            <a href="#">
{{--                                                <img src="{{asset($img->image)}}" alt="Cart Thumbnail">--}}
                                            </a>
                                        </td>
                                        {{--@endforeach--}}
                                        @foreach($cart->products as $pro)
                                        <td class="product-name"><a href="#">{{$pro->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{$pro->price}}</span></td>
                                        <td class="quantity">
                                            <input type="hidden" class="product_id" value="{{$pro->id}}" >
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box qty-input" value="{{$cart->quantity}}" type="number" min="1" max="100">
                                                <div class="dec qtybutton">
                                                    <i class="fa fa-minus"></i>
                                                </div>
                                                <div class="inc qtybutton">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                        </td>
                                            <?php $total = $cart->sum('total_price');
                                            ?>
                                        @endforeach
                                        <td class="product-subtotal"><span class="amount">{{$cart->total_price}}</span></td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div>
                                        {{--<div class="coupon2">--}}
                                            {{--<input class="button" name="update_cart" value="Update cart" type="submit">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>


                                            <li>Subtotal <span>Rs:{{$total}}</span></li>
                                            <li>Total <span>Rs:{{$total}}</span></li>

                                        </ul>
                                        @if(\Illuminate\Support\Facades\Auth::user())
                                        <a href="{{route('product.checkouts',['user' => \Illuminate\Support\Facades\Auth::id()])}}">Proceed to checkout</a>

                                        @endif
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @endsection
@section('script')

    <script>
        $(document).ready(function () {

//            delete code for cart

            $('.delete_cart_data').on('click',function (e) {
                e.preventDefault();


                var product_id = $(this).closest(".cartpage").find('.product_id').val();

                var data = {
                    "_token": "{{ csrf_token() }}",
                    "product_id": product_id,
                };

//                console.log(data);
//                return;
                $.ajax({
                    url: '/product/cart-delete',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        swal("Successfully", "You Delete Cart!", "success", {
                            button: "OK",
                        });
                        window.location.reload();
                    }
                });

            });
//            end delete code


            function notify() {
            event.preventDefault();
                var quantity = $(this).closest(".cartpage").find('.qty-input').val();
                var product_id = $(this).closest(".cartpage").find('.product_id').val();
                var data = {
                    "_token": "{{ csrf_token() }}",
                    'quantity':quantity,
                    'product_id':product_id,
                };

                $.ajax({
                    url: '/product/cart-update',
                    type: 'POST',
                    data: data,
                    success: function (response) {

                        swal("Successfully", "You Update Cart!", "success", {
                            button: "OK",
                        });
//                        alert('Cart Update Successfully');
//                        window.location.reload();
//                        alertify.set('notifier','position','top-right');
//                       alertify.success(response.status);
                    }
                });
            }
            $( ".qtybutton" ).on( "click", notify );

        });


    </script>
    @endsection
