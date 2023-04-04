<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title')</title>
<link rel="icon" type="image/png" href="{{ asset('front/images/favicon.png') }}"><!-- fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i">
<!-- css -->
<link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.rtl.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/vendor/owl-carousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/vendor/photoswipe/photoswipe.css') }}">
<link rel="stylesheet" href="{{ asset('front/vendor/photoswipe/default-skin/default-skin.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
<!-- fontawesome -->
<link rel="stylesheet" href="{{ asset('front/vendor/fontawesome/css/all.min.css') }}">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-97489509-8');

</script>
@yield('css')
