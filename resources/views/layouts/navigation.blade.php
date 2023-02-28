<!-- START NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
        </button><!--end button-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul id="navbar-navlist" class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('/')}}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Sign In</a></li>						
                <li class="nav-item"><a class="nav-link" href="register">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="#download">App</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq">faq</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                @auth
                <li class="nav-item">
                    <form method="POST" id="logoutForm" action="{{route('logout')}}">@csrf</form>
                    <a class="nav-link" onclick="(e) => e.preventDefault; document.getElementById('logoutForm').submit()" href="#">Logout</a>
                </li>
                @endauth
            </ul><!--END NAVBAR NAV-->
        </div><!--END COLLAPSE-->
    </div><!-- END CONTAINER -->
</nav>
<!-- END NAVBAR -->
