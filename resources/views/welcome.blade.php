<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JGLuxurySuites</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/mdb.min.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body class="">
        <!--Main Navigation-->
        <header>

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav flex-1">
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ url('/') }}"><strong>JG Luxury Suites</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="white-text" style="top: 25%;" href="{{ route('properties.index') }}">Rentals</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-1 justify-content-end">
                        <li class="nav-item">
                            <button class="btn btn-sm rounded white-text" style="background-color: #B321F3;"><a class="nav-link">Book Now</a></button>
                        </li>
                    </ul>

                </div>
            </nav>

        </header>
        <!--Main Navigation-->

        <div class="container-fluid grey lighten-3">

            <div class="row">

                <div class="col-12 px-0">

                    <!-- Jumbotron -->
                    <div class="card card-image" style="background-image: url('/images/family-and-house1.jpg');">
                        <div class="text-white text-center rgba-stylish-strong py-5 px-4 rounded-0">
                            <div class="py-5">

                                <!-- Content -->
                                <h2 class="card-title h2 my-4 py-2">JG Luxury Suites</h2>
                                <p class="mb-4 pb-2 px-md-5 mx-md-5">{{ $settings->mission }}</p>
                                {{-- <a class="btn peach-gradient"><i class="fas fa-clone left"></i> View project</a>--}}

                            </div>
                        </div>
                    </div>
                    <!-- Jumbotron -->
                </div>

                <div class="col-12 px-0">
                    @foreach($properties as $property)

                        <div class="white-text p-5" style="background-color: #4A21F3;">
                            <h1 class="h1 h1-responsive title text-center">{{ $property->title }}</h1>
                            <p class="text-justify mx-5 p-5">{{ $property->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Content -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">JG Luxury Suites</h5>
                        <p>{{ $settings->mission }}</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">Contact</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p class=""><i class="fas fa-envelope mr-3"></i> {{ $settings->email }}</p>
                            </li>
                            <li>
                                <p class=""><i class="fas fa-phone mr-3"></i> {{ $settings->concat_phone() }}</p>
                            </li>
                            <li>
                                <p class=""><i class="fas fa-home mr-3"></i> {{ $settings->concat_address() }}</p>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">Accepting Payments</h5>

                        <ul class="list-unstyled">
                            <li class="text-center">
                                <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/na/us/logo-center/15_nowaccepting_blue_badge.jpg" border="0" alt="Secured by PayPal"></a></td></tr></table><!-- PayPal Logo -->
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <hr>

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© {{ \Carbon\Carbon::now()->year }} Copyright:
                <a href="https://mdbootstrap.com/"> TramaineJackson.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/popper.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/mdb.min.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
    </body>
</html>
