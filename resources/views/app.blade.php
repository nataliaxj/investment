<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Crptiam - Cryptocurrency ICO Landing Page HTML Template">
		<meta name="keywords" content="bitcoin, bitcoin landing, blockchain, cryptocurrency, Cryptocurrency advisor, ICO Agency, ICO Consulting, ico landing, ico template, ico token, ico website">			
		<!-- SITE TITLE -->
		<title>Crptiam - Cryptocurrency ICO Landing Page HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">  		
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<link rel="stylesheet" href="assets/css/materialdesignicons-min.css">	
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">					
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">					
		<!-- Style CSS -->						
		<link rel="stylesheet" href="assets/css/style-two.css">	

        <title inertia>{{ config('app.name', 'Laravel') }}</title>


        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body data-spy="scroll" data-offset="80" class="font-sans antialiased">
        <!-- particles -->
        <div id="particles-js"></div>	

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
		<!-- END PRELOADER -->

        <!-- START NAVBAR -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
			    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
			    </button><!--end button-->
			    <div class="collapse navbar-collapse" id="navbarCollapse">
			        <ul id="navbar-navlist" class="navbar-nav ms-auto">
			            <li class="nav-item"><a class="nav-link active" href="#home">Dashboard</a></li>
			            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
					    <li class="nav-item"><a class="nav-link" href="/login">Sign In</a></li>						
			            <li class="nav-item"><a class="nav-link" href="register">Sign Up</a></li>
			            <li class="nav-item"><a class="nav-link" href="#download">App</a></li>
			            <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
			            <li class="nav-item"><a class="nav-link" href="#faq">faq</a></li>
			            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
			        </ul><!--END NAVBAR NAV-->
			    </div><!--END COLLAPSE-->
		    </div><!-- END CONTAINER -->
		</nav>
		<!-- END NAVBAR -->


        @inertia


        <!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																		
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>				
		<!-- magnific-popup js -->               
			<script src="assets/js/jquery.magnific-popup.min.js"></script>			
		<!-- jquery counterup -->
			<script src="assets/js/jquery.counterup.min.js"></script>	
			<script src="assets/js/countdown.js"></script>		
		<!-- particles -->
			<script src="assets/js/particles.min.js"></script>
			<script src="assets/js/app.js"></script>			
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>			
		<!-- scrolltopcontrol js -->																				
			<script src="assets/js/scrolltopcontrol.js"></script>																				
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>
    </body>
</html>
