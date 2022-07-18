<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light grey lighten-3 shadow-none fixed-top py-4">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{ url('/') }}" style="font-family: 'Cormorant Garamond', serif;">
            <img
                src="{{ url('/images/convocompanions_logo.png') }}"
                height="50"
                alt="Convo Companion Logo"
                loading="lazy"
                style="margin-top: 0px;"
            /> Convo Companions
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
                    <a class="nav-link" href="/applicants">Applicants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/settings">Settings</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
