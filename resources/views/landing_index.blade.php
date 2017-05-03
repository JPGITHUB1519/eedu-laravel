<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>
    <!-- Bootstrap Core CSS, this is not include because laravel already come with bootstrap -->
    {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css', config('app.use_ssl')) }}" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- app.css laravel generated css file -->
    {{-- <link href="{{ asset('css/app.css', config('app.use_ssl')) }}" rel="stylesheet"> --}}
    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css', config('app.use_ssl')) }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css', config('app.use_ssl')) }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/creative.min.css', config('app.use_ssl')) }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
    <!-- flash message -->
    @include('layouts.flash')
    @include('layouts.landing.header')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Jobs of Tomorrow Start Here</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a href="/programs" class="btn btn-primary btn-xl page-scroll">See Our Programs</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.landing.services')

    @include('layouts.landing.showcase')

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>

    @include('layouts.landing.footer')

    <!-- jQuery -->
    {{-- <script src="{{ asset('vendor/jquery/jquery.min.js', config('app.use_ssl')) }}"></script> --}}

    <!-- Bootstrap Core JavaScript -->
    {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js', config('app.use_ssl')) }}"></script> --}}

    <!-- this include bootstrap and jquery too --> 
    <script src="{{ asset('js/app.js', config('app.use_ssl')) }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js', config('app.use_ssl')) }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js', config('app.use_ssl')) }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('js/creative.min.js', config('app.use_ssl')) }}"></script>

</body>

</html>
