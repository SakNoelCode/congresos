<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="congreso, ingenieria, sistemas, fisme, untrm, ti, tecnologia" name="keywords">
    <meta content="Congresos Internacionales de Ingeniería de Sistemas, organizado por la Facultad de 
    Ingeniería de Sistemas y Mecánica Eléctrica - Universidad Nacional Toribio Rodríguez de Mendoza de
    Amazonas - Perú." name="description">

    <link href="img/favicon.png" rel="icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!--BootStrap--->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!---Icons--->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!----Others--->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('style/styles.css')}}" rel="stylesheet">

    <!-------Style Botman------------>
    <!---link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"---->
    @yield('styles')

</head>

<body>

    <!-- Page Content -->
    <div>
        @yield('content')
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('lib/js/main.js')}}"></script>

    <!-----Script Botman----->
    <script>
        var botmanWidget = {
            //frameEndpoint: '/iFrameUrl'
            aboutText: 'webappfix',
            introMessage: 'Hola, en que puedo ayudarte?'
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    @stack('scripts')
</body>

</html>