

<link rel="icon" href="{{ asset('assets/img/logo-spice.png') }}" type="image/png"/>

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}"/>

<link rel="stylesheet" href="{{ asset('assets/css/style.css?'.date('ymdhis'))}}">
{{--<link rel="stylesheet" href="{{ asset('assets/css/responsive.css?'.date('ymdhis'))}}">--}}

{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"--}}
{{--      integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous"/>--}}
<link rel="preload" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></noscript>

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" /></noscript>

@yield('pagecss')

@yield('initialscripts')

@if(\Illuminate\Support\Facades\Session::has('loginnotify'))
    <script>
        dataLayer = [{
            'eventCategory': 'NTG subscription',
            'eventAction': 'submit',
            'eventLabel': 'success',
            'nonInteraction': 'false'
        }];
    </script>
@endif

<!-- Google Tag Manager -->
<script async src="https://cse.google.com/cse.js?cx=011965659370381653902:7awkdkhs2_y"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9511843-17"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-9511843-17');
</script>




