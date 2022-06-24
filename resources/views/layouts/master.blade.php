<!DOCTYPE html>
@if (App::getLocale() == 'en')
    <html lang="en" dir="ltr">
@elseif(App::getLocale() == 'fr')
    <html lang="en" dir="ltr">
@else
    <html lang="ar" dir="rtl">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <meta content="@yield('description')" name="description">
    <meta content="@yield('keywords')" name="keywords">

    <meta name="_token" content="{{ csrf_token() }}" />
    <!-- Favicons -->
    <link href="assets/user/img/favicon.png" rel="icon">
    <link href="assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/user/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/user/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/user/css/style.css" rel="stylesheet">
    <link href="assets/user/css/hstyle.css" rel="stylesheet">
    @if (App::getLocale() == 'ar')
        <link href="assets/user/css/rtl.css" rel="stylesheet">
    @endif

    @if (App::getLocale() == 'fr')
        <style>
            .navbar .nav-link, .navbar .dropdown a
            {
                font-size: 12px !important;
                font-weight: 600;
            }
        </style>

    @endif


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    {{-- <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $(window).scroll(function() {
                var scroll_top = $(this).scrollTop();

                if (scroll_top > 10 && scroll_top < 100) {
                    jQuery.ajax({
                        url: "{{ url('about') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#about_load").html() == '') {
                                $("#about_load").html(data);
                            }

                        }
                    });

                    jQuery.ajax({
                        url: "{{ url('bookNow') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#booknow_load").html() == '') {
                                $("#booknow_load").html(data);
                            }
                        }
                    });

                }


                if (scroll_top > 800 && scroll_top < 1000) {
                    jQuery.ajax({
                        url: "{{ url('mapOne') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#map1_load").html() == '') {
                                $("#map1_load").html(data);
                            }
                        }
                    });

                    jQuery.ajax({
                        url: "{{ url('mapTow') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#map2_load").html() == '') {
                                $("#map2_load").html(data);
                            }
                        }


                    });

                }

                if (scroll_top > 1000 && scroll_top < 1100) {
                    jQuery.ajax({
                        url: "{{ url('ourservices') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#services_load").html() == '') {
                                $("#services_load").html(data);
                            }
                        }
                    });

                }


                if (scroll_top > 1200 && scroll_top < 13000) {
                    jQuery.ajax({
                        url: "{{ url('doctors') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#doctors_load").html() == '') {
                                $("#doctors_load").html(data);
                            }

                        }
                    });

                    jQuery.ajax({
                        url: "{{ url('review') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#review_load").html() == '') {
                                $("#review_load").html(data);
                            }
                        }
                    });


                }


                if (scroll_top > 3000) {

                    jQuery.ajax({
                        url: "{{ url('contactUs') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#contact_load").html() == '') {
                                $("#contact_load").html(data);
                            }

                        }
                    });



                    jQuery.ajax({
                        url: "{{ url('branches') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#branches_load").html() == '') {
                                $("#branches_load").html(data);
                            }

                        }
                    });

                    jQuery.ajax({
                        url: "{{ url('formBooking') }}",
                        type: 'GET',
                        success: function(data) {
                            if ($("#appointment_load").html() == '') {
                                $("#appointment_load").html(data);
                            }

                        }
                    });





                }

            });
        });
    </script> --}}

</head>

<body id="body">

    @include('sweetalert::alert')
    @include('user.inc.social_contacts')

    @include('user.inc.topbar')

    @include('user.inc.navbar')

    @yield('content')

    @include('user.inc.footer')
