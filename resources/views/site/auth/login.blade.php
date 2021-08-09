@extends('site.layouts.app')
@section('content')
    <div class="login-register-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form class="loginform">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Email Address*</label>
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                                <div class="col-lg-12">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-1 mt-md-0">
                                    <div class="forgotton-password_info">
                                        <a href="#"> Forgotten pasward?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn btn-custom-size lg-size btn-pronia-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <form class="register-form">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name" name="fname">
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name" name="lname">
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address*</label>
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    {{--<input type="password" placeholder="Confirm Password" name="password">--}}
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-custom-size lg-size btn-pronia-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.register-form').on('submit',function (e){
        e.preventDefault();
        let data = $(this).serialize();

        blockUi();
        $.ajax({
        type:'POST',
        dataType:'json',
        url:'{{route('site-register')}}',
        data:data,
        success:function(data) {
        $.unblockUI();
        if(data.status == 1){

        window.toastr.success(data.message);
        }
        if(data.status == 0){
        console.log(data);
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
        $('.loginform').on('submit',function (e){
        e.preventDefault();
        let data = $(this).serialize();

        blockUi();
        $.ajax({
        type:'POST',
        dataType:'json',
        url:'{{route('site-login')}}',
        data:data,
        success:function(data) {
        $.unblockUI();
        if(data.status == 1){

        window.toastr.success(data.message);
        window.location.href = "/site";

        }
        if(data.status == 0){
        console.log(data);
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
    </script>


@endsection