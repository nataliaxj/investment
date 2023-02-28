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
			    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
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
 	
		<!-- START HOME -->
		<section id="home" class="home_bg">
			<div class="container">
				<div class="row">
				  <div class="col-lg-7 col-sm-12 col-xs-12">
					<div class="hero-text">
						 <h2>Invest in Bitcoin: Secure Your Financial Future Today</h2>
						 <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure seamless rental experience.</p>
						<div class="home_btn">
							<a href="/register" class="btn_one">Get Started</a>
							<a href="#about" class="btn_two">Learn More</a>
						</div>
					</div> 
				  </div><!--- END COL -->
				  <div class="col-lg-5 col-sm-12 col-xs-12 text-center">
					<div class="buy-icons">
						<div class="ca-starts-in">
							<h3>Own Your Future</h3>
                            <div class="timer-area">
                                <div>
                                    <span class="cdown days">
                                        <span class="time-count">0</span> 
                                        <p>Total Invested (USD)</p>
                                    </span> 
                                    <span class="cdown hour">
                                        <span class="time-count">0</span> 
                                        <p>Total Value (USD)</p>
                                    </span> 
                                    <span class="cdown minutes">
                                        <span class="time-count">00</span> 
                                        <p>Total Percentage (USD)</p>
                                    </span> 
                                </div>
                            </div>
							<a href="/register" class="btn_one">Get Started</a>
						</div>
						<div class="payment_img">
							<a href="#"><img src="assets/img/icon/bitcoin.png" alt="logo-image" /></a>
							<a href="#"><img src="assets/img/icon/ethereum.png" alt="logo-image" /></a>
						</div>						
					</div>
				  </div><!--- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME -->
		
		<!-- START ABOUT -->
		<section class="about_us section-padding">
		   <div class="container">			
				<div class="section-title text-center">
					<h1>The most trusted cryptocurrency platform</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row">					
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_about">
							<img src="assets/img/icon/secure.png" alt="image" />
							<h3>Secure storage</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_about">
							<img src="assets/img/icon/insurance.png" alt="image" />
							<h3>Protected by insurance</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_about">
							<img src="assets/img/icon/industry.png" alt="image" />
							<h3>Industry best practices</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div><!-- END COL -->							
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END ABOUT -->		

		<!-- START BUY SELL -->
		<section id="buy_sell" class="buy_sell_area section-padding">
			<div class="container">					
				<div class="section-title text-center">
					<h1>How to Buy and Sell Cryptocurrency</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>					
				<div class="row">
				  <div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="buy_sell_list">
						<img src="assets/img/icon/bank.png" alt="image" />
						<h4>Bank Transfers</h4>
						<p>There are many variations of passages of Lorem Ipsum the majority.</p>
					</div>
					<div class="buy_sell_list">
						<img src="assets/img/icon/wallet.png" alt="image" />
						<h4>Online Wallets</h4>
						<p>There are many variations of passages of Lorem Ipsum the majority.</p>
					</div>
				  </div><!--- END COL -->	
				  <div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="portfolio_list_img">
						<img src="assets/img/about-one.png" class="img-fluid" alt="" />
					</div>
				  </div><!--- END COL -->	
				  <div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="buy_sell_list">
						<img src="assets/img/icon/cash.png" alt="image" />
						<h4>Cash Payment</h4>
						<p>There are many variations of passages of Lorem Ipsum the majority.</p>
					</div>
					<div class="buy_sell_list">
						<img src="assets/img/icon/debit.png" alt="image" />
						<h4>Debit/Credit Cards</h4>
						<p>There are many variations of passages of Lorem Ipsum the majority.</p>
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END BUY SELL -->

		<!-- START HOW TO BUY -->
		<section class="how_to_buy_area section-padding">
		   <div class="container">			
				<div class="section-title text-center">
					<h1>Get Started in a Few Minutes</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row text-center">					
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_how_to_buy">
							<img src="assets/img/icon/man.png" alt="image" />
							<h4>Create Account</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_how_to_buy">
							<img src="assets/img/icon/bank2.png" alt="image" />
							<h4>Link Your Bank Account</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="single_how_to_buy">
							<img src="assets/img/icon/buy.png" alt="image" />
							<h4>Start Buying & Selling</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						</div>
					</div><!-- END COL -->							
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END HOW TO BUY  -->			
		 
		<!-- START ABOUT US CONTENT -->
		<section id="about" class="about_area section-padding">
			<div class="container">			
				<div class="row">
				  <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="about-img">
						<img src="assets/img/about-two.png" class="img-fluid" alt="about-image" />
					</div>
				  </div><!--- END COL -->				  
				  <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="about-text">
						 <h2>Build the future  <br />of finance</h2>
						 <p class="about-bold">We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
					<div class="about_btn">
						<a href="https://www.youtube.com/watch?v=CMPebxJjE8o" class="video-play btn_one">Watch Video</a>
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ABOUT US CONTENT -->	
		
		<!-- START TOKEN SALE -->
		<section id="token_sale" class="token_sale_area section-padding">
		   <div class="container">			
				<div class="section-title text-center">
					<h1>Pre sale & Values</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row text-center">					
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_token single_token_bg_one">
							<h4>Start Time</h4>
							<p>July 30,2022 (10:00 GMT)</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_token single_token_bg_two">
							<h4>Tokens for sale</h4>
							<p>900,000 ICC (9%)</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="single_token single_token_bg_three">
							<h4>Acceptable Currency</h4>
							<p>BTC, ETH, LTC</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="single_token single_token_bg_four">
							<h4>End Time</h4>
							<p>Oct 30,2022 (10:00 GMT)</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="single_token single_token_bg_five">
							<h4>Soft Cops</h4>
							<p>$90 M</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="single_token single_token_bg_six">
							<h4>Exchange rate</h4>
							<p>1 BTC = 1940 ICC </p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="single_token single_token_bg_seven">
							<h4>Available Token</h4>
							<p>$100 M</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="single_token single_token_bg_eight">
							<h4>Minimal Transction</h4>
							<p>1BTC/1ETH/1LTC</p>
						</div>
					</div><!-- END COL -->									
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END TOKEN SALE  -->	

		
		<!-- START TOKEN IMAGE AREA -->
		<section class="token_img_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Token Management</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>			
				<div class="row text-center">
				  <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="token-img">
						<img src="assets/img/02-Chat.png" class="img-fluid" alt="" />
						<h4>Token Distribution</h4>
					</div>
				  </div><!--- END COL -->	
				  <div class="col-lg-6 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<div class="fund-img">
						<img src="assets/img/01-Chat.png" class="img-fluid" alt="" />
						<h4>Fund Distribution</h4>
					</div>
				  </div><!--- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TOKEN IMAGE AREA -->			
		
		<!-- START ROADMAP -->
		<section id="roadmap" class="roadmap_area section-padding">
			<div class="container">			
				<div class="section-title text-center">
					<h1>Roadmap</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="timeline">
					  <div class="time_contain time_left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Project Idea - <span>July, 2022</span></h2>
						  <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						</div>
					  </div>
					  <div class="time_contain time_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Business Conception - <span>Aug, 2022</span></h2>
						  <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						</div>
					  </div>
						<div class="time_contain time_left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Legal Review - <span>Sep, 2022</span></h2>
						 <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						</div>
					  </div>
					  <div class="time_contain time_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Token Sale and Marketing - <span>Oct, 2022</span></h2>
						  <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						</div>
					  </div>
					  <div class="time_contain time_left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="time_content">
						  <h2>ICO and Token Design - <span>Nov, 2022</span></h2>
						  <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						</div>
					  </div>
					  <div class="time_contain time_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Keep going - <span>Dec, 2022</span></h2>
						  <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure embarrassing hidden seamless.</p>
						</div>
					  </div>
					</div>					
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ROADMAP -->		

		<!-- START DOWNLOAD APP -->
		<section id="download" class="download_area section-padding">
		   <div class="container">							
				<div class="row">					
					<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="app-text">
							 <h2>Install Crptiam app today</h2>
							 <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure seamless rental experience and wants to help tenants unfreeze millions of dollars tied up in rental.</p> 
							 <ul>
								<li><span class="ti-download"></span>Download It for Free</li>
								<li><span class="ti-package"></span>Install App</li>
								<li><span class="ti-user"></span>Create Profile</li>
								<li><span class="ti-cup"></span>Enjoy this app</li>
							 </ul>
						</div>
						<div class="app_btn">
							<a href="#" class="btn_one wow bounceIn" data-wow-delay=".3s"><i class="fa fa-apple"></i>App Store</a>
							<a href="#" class="btn_two wow bounceIn" data-wow-delay=".4s"><i class="fa fa-play"></i>Google Play</a>
						</div>
					</div><!-- END COL -->	
					<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">	
						<div class="app_img">
							<img src="assets/img/app-mockup.png" class="img-fluid" alt="" />
						</div>					
					</div><!-- END COL -->									
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END DOWNLOAD APP -->
		
		<!-- START TEAM -->
		<section id="team" class="team_member section-padding">
			<div class="container">				
				<div class="section-title text-center">
					<h1>Meet our Professionals</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="our-team">
							<img src="assets/img/team/team1.jpg" class="img-fluid" alt="board-image">
							<h3>Charles Martin</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>
					</div><!--- END COL -->														
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="our-team">
							<img src="assets/img/team/team2.jpg" class="img-fluid" alt="board-image">
							<h3>Kathleen Hall</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="our-team">
							<img src="assets/img/team/team3.jpg" class="img-fluid" alt="board-image">
							<h3>Mildred Watson</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="our-team">
							<img src="assets/img/team/team4.jpg" class="img-fluid" alt="board-image">
							<h3>Helen Petersen</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12"></div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="our-team">
							<img src="assets/img/team/team5.jpg" class="img-fluid" alt="board-image">
							<h3>Joshua Ladner</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="our-team">
							<img src="assets/img/team/team6.jpg" class="img-fluid" alt="board-image">
							<h3>Alexandra Cruz</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>
					</div><!--- END COL -->				
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END TEAM -->
		
		<!-- START BOARD ADVISOR -->
		<section id="board_advisor" class="board_member section-padding">
			<div class="container">				
				<div class="section-title text-center">
					<h1>Board Advisor</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="our-board">
							<img src="assets/img/board/1.jpg" class="img-fluid" alt="board-image">
							<h3>Marina Mojo</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>						
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="our-board">
							<img src="assets/img/board/2.jpg" class="img-fluid" alt="board-image">
							<h3>Mark Linomi</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>						
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="our-board">
							<img src="assets/img/board/3.jpg" class="img-fluid" alt="board-image">
							<h3>Amira Yerden</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>						
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="our-board">
							<img src="assets/img/board/4.jpg" class="img-fluid" alt="board-image">
							<h3>Ayoub Fennouni</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<span>Crypto Developer</span>
						</div>						
					</div><!--- END COL -->				
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END BOARD ADVISOR -->		
		
		<!-- START PARTNER -->
		<div class="partner_area section-padding">
			<div class="container">				
				<div class="section-title text-center">
					<h1>Partners & Supporters</h1>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
				</div>
				<div class="row text-center">
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/1.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/2.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/3.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/4.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/5.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/6.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/1.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="assets/img/partner/2.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END PARTNER -->

		<!-- START FAQ -->
		<section id="faq" class="faq1-area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Frequently Asked Questions</h1>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="accordion" id="accordionExample">
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What is cryptocurrency?
							  </button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								What are the best cryptocurrency for buy?
							  </button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								How to buy cryptocurrency?
							  </button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How to sell cryptocurrency?
							  </button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
							  </div>
							</div>
						  </div>
						</div>						
					</div><!-- END COL  -->
					<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="faq-img">
							<img src="assets/img/faq.png" class="img-fluid" alt="faq image" />
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END FAQ -->		
		
		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
		   <div class="container">			
				<div class="section-title text-center">
					<h1>In the News</h1>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row text-center">					
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="assets/img/blog/1.jpg" class="img-fluid" alt="image" />
								<a href="blog.html">July 28, 2022</a>
							</div>
							<span><a href="blog.html">Development</a></span>
							<h2><a href="blog.html">Fast food is popular because it's convenient</a></h2>
							<a href="blog.html" class="btn_one">Read More</a>
						</div>						
					</div><!-- END COL -->					
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="assets/img/blog/2.jpg" class="img-fluid" alt="image" />
								<a href="blog.html">July 29, 2022</a>
							</div>
							<span><a href="blog.html">Technology</a></span>
							<h2><a href="blog.html">The incredible thing about Virtual Reality</a></h2>
							<a href="blog.html" class="btn_one">Read More</a>
						</div>						
					</div><!-- END COL -->					
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="assets/img/blog/3.jpg" class="img-fluid" alt="image" />
								<a href="blog.html">July 30, 2022</a>
							</div>
							<span><a href="blog.html">Fashion</a></span>
							<h2><a href="blog.html">For good results must be make good plan </a></h2>
							<a href="blog.html" class="btn_one">Read More</a>
						</div>						
					</div><!-- END COL -->						
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END BLOG -->	
		
		<!-- START PROMOTION -->
		<section class="promotion_area section-padding">
		   <div class="container">			
				<div class="row">					
					<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="newsletter_form">
							<h4>Subscribe our newsletter for get updates <br />We don't make any spam</h4>
							<form action="#">
								<input type="text" class="subscribe__input" placeholder="Email Address">
								<button type="button" class="btn_one">Subscribe</button>
							</form>
						</div>					
					</div><!-- END COL -->							
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END PROMOTION -->	
		
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<h4>Write Your Message </h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<form class="form" name="enq" method="post" action="https://bestwpware.com/html/tf/crptiam-demo/crptiam/contact.php" onsubmit="return validation();">
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" name="name" class="form-control" placeholder="Name" required="required">
									</div>
									<div class="form-group col-md-6">
										<input type="email" name="email" class="form-control" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg contact_btn" title="Submit Your Message!">Submit Message</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->	
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">	
						<div class="address_bg">
							<div class="single_address">
								<div class="address_br"><span class="ti-location-pin"></span></div>
								<h4>Address</h4>
								<p>3481 Melrose Place, Beverly Hills</p>
							</div>							
							<div class="single_address">
								<div class="address_br"><span class="ti-mobile"></span></div>
								<h4>Phone</h4>
								<p>+512 513 96324</p>
							</div>	
							<div class="single_address">
								<div class="address_br"><span class="ti-email"></span></div>
								<h4>Email</h4>
								<p>example@example.com</p>
							</div>
							<div class="single_address">
								<div class="address_br"><span class="ti-alarm-clock"></span></div>
								<h4>Working Hours</h4>
								<p>Mon to Sat 9:00am to 5:00pm</p>
							</div>
						</div>
					</div><!-- END COL  -->					
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END CONTACT -->		

		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>	
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">		
				<div class="row text-center">						
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div class="footer_menu">
							<ul>
								<li><a href="#home">Dashboard</a></li>
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