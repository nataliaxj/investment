<!DOCTYPE html>
<html lang="en">


<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Crptiam - Cryptocurrency ICO Landing Page HTML Template">
		<meta name="keywords" content="bitcoin, bitcoin landing, blockchain, cryptocurrency, Cryptocurrency advisor, ICO Agency, ICO Consulting, ico landing, ico template, ico token, ico website">			
		<!-- SITE TITLE -->
		<title>Metavest - @yield('title')</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">  		
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/fonts/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/materialdesignicons-min.css')}}">	
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.css')}}">	
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">					
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">					
		<!-- Style CSS -->						
		<link rel="stylesheet" href="{{asset('assets/css/style-two.css')}}">	
        
        <style>
            .contact input{
                margin-bottom: 30px;
            }
        </style>
	</head>
	
    <body data-spy="scroll" data-offset="80">
	
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
			    <a class="navbar-brand" href="index.html"><img src="assets/img/default-monochrome.svg" alt=""></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
			    </button><!--end button-->
			    <div class="collapse navbar-collapse" id="navbarCollapse">
			        <ul id="navbar-navlist" class="navbar-nav ms-auto">
			            <li class="nav-item"><a class="nav-link active" href="{{route('welcome')}}">Home</a></li>
			            <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
					    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign In</a></li>						
			            <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Sign Up</a></li>
			            <li class="nav-item"><a class="nav-link" href="#download">App</a></li>
			            <li class="nav-item"><a class="nav-link" href="/#team">Team</a></li>
			            <li class="nav-item"><a class="nav-link" href="/#faq">faq</a></li>
			            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
						@auth
						<li class="nav-item">
							<form method="POST" id="logoutForm" action="{{route('logout')}}">@csrf</form>
							<a class="nav-link" style="color: brown !important" onclick="(e) => e.preventDefault; document.getElementById('logoutForm').submit()" href="#">Logout</a>
						</li>
						@endauth
			        </ul><!--END NAVBAR NAV-->
			    </div><!--END COLLAPSE-->
		    </div><!-- END CONTAINER -->
		</nav>
		<!-- END NAVBAR -->
			
		
		@yield('content')

		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">		
				<div class="row text-center">						
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div class="footer_menu">
							<ul>
								<li><a href="#home">Home</a></li>
								<li><a href="#">Terms of use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Cookie Policy</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>						
						<div class="footer_copyright">
							<p>&copy; 2022 Crptiam. All Rights Reserved.</p>
						</div>	
						<div class="footer_profile">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>						
					</div><!--- END COL -->							
				</div><!--- END ROW -->					
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->		

		<!-- Latest jQuery -->
			<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- modernizer JS -->		
			<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>																		
		<!-- owl-carousel min js  -->
			<script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>				
		<!-- magnific-popup js -->               
			<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>			
		<!-- jquery counterup -->
			<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>	
			<script src="{{asset('assets/js/countdown.js')}}"></script>		
		<!-- particles -->
			<script src="{{asset('assets/js/particles.min.js')}}"></script>
			<script src="{{asset('assets/js/app.js')}}"></script>			
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="{{asset('assets/js/wow.min.js')}}"></script>			
		<!-- scrolltopcontrol js -->																				
			<script src="{{asset('assets/js/scrolltopcontrol.js')}}"></script>																				
		<!-- scripts js -->
			<script src="{{asset('assets/js/scripts.js')}}"></script>		
    </body>

</html>