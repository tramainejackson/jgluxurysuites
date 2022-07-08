<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light grey lighten-3 shadow-none fixed-top py-4">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/" style="font-family: 'Cormorant Garamond', serif;">
            <img
                src="{{ url('/images/convocompanions_logo.png') }}"
                height="50"
                alt="Convo Companion Logo"
                loading="lazy"
                style="margin-top: 0px;"
            /> Convo Companion
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left links -->
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome').'#home' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome').'#contact' }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/application">Application</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
