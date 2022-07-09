<!-- Footer -->
<footer class="page-footer font-small lighten-2 grey black-text">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center ml-lg-n3 ml-xl-0">Convo Companions</h5>

                <p class="ml-md-3 ml-xl-0">{{ $settings->mission }}</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">Contact</h5>

                <ul class="list-unstyled ml-md-3 mr-md-n4 ml-lg-5 ml-xl-5 pl-xl-4">
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
            <div class="col-md-4 mx-auto">

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

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© {{ \Carbon\Carbon::now()->year }} Copyright:
        <a href="https://tramainejackson.com/"> TramaineJackson.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
