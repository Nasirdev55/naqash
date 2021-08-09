<script src="{{asset('assets/js/forslider.js')}}"></script>
<script src="{{asset('assets/js/forslider2.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.counterup.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    function blockUi(){
        $.blockUI({
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            }
        });
    }


    function successMsg(_msg){
        window.toastr.success(_msg);
    }

    function errorMsg(_msg){
        window.toastr.error(_msg);
    }

    function warningMsg(_msg){
        window.toastr.warning(_msg);
    }


</script>