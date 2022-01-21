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

        <div class="container">

            <div class="row">

                <div class="col-12 px-0">
                    <h1 class="h1 h1-responsive title mb-5">Rentals</h1>

                    <div class="">
                        <h2 class="h2 h2-responsive grey-text pb-4" style="border-bottom: solid 2px #4A21F3">Avalaible Rooms</h2>

                        <div class="my-3" style="border-bottom: solid 2px #4A21F3">
                            <table class="table table-bordered">
                                <tr class="d-table-row">
                                    <td class="d-table-cell">
                                        <span class="">Check In</span><i class="fas fa-calendar-day"></i>
                                    </td>
                                    <td class="d-table-cell">
                                        <span class="">Check Out</span><i class="fas fa-calendar-day"></i>
                                    </td>
                                    <td class="d-table-cell">Search</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-4">

                    <!--Section: Content-->
                    <section class="text-center text-lg-left dark-grey-text">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-4 mb-md-0">

                                <!--Image-->
                                <div class="view overlay z-depth-1-half h-100">
                                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" class="img-fluid h-100" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-light"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-4 mb-md-0">
                                {{-- Title --}}
                                <h3 class="h3">{{ $property->title }}</h3>

                                {{-- Description --}}
                                <p class="text-muted">{{ $property->description }}</p>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </section>
                    <!--Section: Content-->
                </div>

                <div class="col-12 my-4" style="border-bottom: solid 2px #4A21F3">
                    <p class=""><span class="font-weight-bold">Beds: </span></p>
                </div>

                <div class="col-12 my-4" style="border-bottom: solid 2px #4A21F3">
                    <p class=""><span class="font-weight-bold">Amenities: </span></p>
                </div>

                <div class="col-12 my-4" style="border-bottom: solid 2px #4A21F3">
                    <p class=""><span class="font-weight-bold">Check In & Out: </span><span class="">{{ $property->check_in_time }}</span><span class="">{{ $property->check_out_time }}</span></p>
                </div>

                <div class="col-12 my-4" style="border-bottom: solid 2px #4A21F3">
                    <p class=""><span class="font-weight-bold">Terms: </span></p>
                </div>

            </div>

        </div>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/popper.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/mdb.min.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
    </body>
</html>
