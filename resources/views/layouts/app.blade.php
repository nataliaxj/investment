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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body data-spy="scroll" data-offset="80 class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

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

            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


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
