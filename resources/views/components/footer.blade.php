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
