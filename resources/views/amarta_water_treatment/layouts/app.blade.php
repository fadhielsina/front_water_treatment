<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Amarta Water Treatment</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#13c5dd" />
    <meta property="og:title" content="Amarta Water Treatment">
    <meta property="og:description" content="Merupakan perusahaan yang bergerak di bidang pengolahan air.">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <!-- Place favicon.ico in the root directory -->
    <!--====== Favicon Icon ======-->
    <link rel="icon" href="{{url('landing_page')}}/images/logo/logo_io/favicon.ico" type="image/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/preloader.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/meanmenu.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/backToTop.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/vendor/fontAwesome6Pro.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="{{url('water_treatment')}}/assets/css/main.css">
</head>

<body>
    @include('amarta_water_treatment.layouts.header')
    <!-- Add your site or application content here -->
    <main>
        <div class="adjust-header-space bg-common-white"></div>
        @yield('content')
    </main>
    @include('amarta_water_treatment.layouts.footer')
</body>

</html>