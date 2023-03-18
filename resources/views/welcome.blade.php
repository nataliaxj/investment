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
		<!-- Favicon -->
		<link rel="icon" href="{{asset('/assets/img/favicon.ico')}}">
		<!-- SITE TITLE -->
		<title>Metavest Crypto Capital: Your Gateway to Crypto Investments</title>

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
			    <a class="navbar-brand" href="#"><img src="assets/img/default-monochrome.svg" alt=""></a>
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
						 <h2>Revolutionize Your Wealth: Invest in the Future with Metavest</h2>
						 <p>At Metavest, we've simplified investing so you can focus on what matters most – making sound financial decisions. With our cutting-edge technology, investing is as effortless as posting a tweet. Leave the technicalities to us, and enjoy the peace of mind that comes with a seamless investment experience.</p>
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
                                        <span class="time-count">1000</span> 
                                        <p>Invest (USD)</p>
                                    </span> 
                                    <span class="cdown hour">
                                        <span class="time-count">8</span> 
                                        <p>Daily Profit (%)</p>
                                    </span> 
                                    <span class="cdown minutes">
                                        <span class="time-count">80</span> 
                                        <p>Daily Profit (USD)</p>
                                    </span> 
                                </div>
                            </div>
							<a href="/register" class="btn_one">Get Started</a>
						</div>
						<div class="payment_img">
							<a href="#"><img src="assets/img/icon/bitcoin.png" alt="logo-image" /></a>
							<a href="#"><img src="assets/img/icon/ethereum.png" alt="logo-image" /></a>
							<a href="#"><img src="assets/img/icon/bnb.png" alt="bnb icon" /></a>
							<a href="#"><img src="assets/img/icon/tether.png" alt="bnb icon" /></a>
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
					<p>This is why you should invest with us.</p>
				</div>				
				<div class="row">					
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_about">
							<img src="assets/img/icon/secure.png" alt="image" />
							<h3>Advanced Technology</h3>
							<p>Our cutting-edge investment technology allows you to invest seamlessly and efficiently, with real-time market data and lightning-fast transactions.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_about">
							<img src="assets/img/icon/insurance.png" alt="image" />
							<h3>Robust Security Measures</h3>
							<p>At Metavest, we take your security seriously. Our platform is equipped with state-of-the-art security features, including two-factor authentication, encryption, and secure storage, to ensure that your investments are protected from unauthorized access and cyber threats.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_about">
							<img src="assets/img/icon/industry.png" alt="image" />
							<h3>Expert Team</h3>
							<p>Our team of experienced financial professionals is dedicated to ensuring the success of your investments, with personalized support and tailored advice every step of the way.</p>
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
					<p>From Exchanges to Wallets: Where to Buy and Safely Store Cryptocurrencies for New Investors</p>
				</div>					
				<div class="row">
				  <div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="buy_sell_list">
						<img src="assets/img/icon/bank.png" alt="image" />
						<h4>Cryptocurrency Exchanges</h4>
						<p>Buy, sell, and trade cryptocurrencies on platforms like Binance, Coinbase, or Kraken.</p>
					</div>
					<div class="buy_sell_list">
						<img src="assets/img/icon/wallet.png" alt="image" />
						<h4>Peer-to-Peer Marketplaces</h4>
						<p>Buy and sell cryptocurrencies directly with other users on marketplaces like LocalBitcoins or Paxful.</p>
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
						<h4>Bitcoin ATMs</h4>
						<p>Buy and sell bitcoin and other cryptocurrencies using cash or debit cards on physical machines found in public places.</p>
					</div>
					<div class="buy_sell_list">
						<img src="assets/img/icon/debit.png" alt="image" />
						<h4>Cryptocurrency Brokers</h4>
						<p>Buy and sell cryptocurrencies through a broker, similar to stocks, on platforms like eToro or Robinhood.</p>
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
					<p>Don't wait – start your journey to financial freedom today! Follow these simple steps to begin your cryptocurrency investment journey and unlock the potential for long-term wealth growth.</p>
				</div>				
				<div class="row text-center">					
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_how_to_buy">
							<img src="assets/img/icon/man.png" alt="image" />
							<h4>Create Account</h4>
							<p>Click the Get Started or Sign Up button above to join millions of satisfied users and begin your cryptocurrency investment journey.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_how_to_buy">
							<img src="assets/img/icon/mail_check.png" alt="image" />
							<h4>Verify Your Email</h4>
							<p>Our email verification process ensures that only serious investors like you can access our platform, so you can invest with confidence.</p>
						</div>
					</div><!-- END COL -->			
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="single_how_to_buy">
							<img src="assets/img/icon/buy.png" alt="image" />
							<h4>Start Investing</h4>
							<p>Unlock the power of crypto investment by making your first deposit and start earning profits as soon as 24 hours from confirmation. Join the thousands of investors who have already benefited from our secure and reliable platform.</p>
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
						 <h2>Invest in the <br />Future with Crypto</h2>
						 <p class="about-bold">Metavest is a leading investment platform that empowers users to invest in cryptocurrencies with ease. With our intuitive platform, investors can easily navigate the complex world of cryptocurrency and make informed investment decisions. Our secure and reliable platform provides users with the tools they need to achieve their financial goals, whether they're investing for the short-term or the long-term.</p>
					</div>
					<div class="about_btn">
						<a href="https://www.youtube.com/watch?v=CMPebxJjE8o" class="video-play btn_one">Watch Video</a>
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ABOUT US CONTENT -->					
		
		<!-- START ROADMAP -->
		<section id="roadmap" class="roadmap_area section-padding">
			<div class="container">			
				<div class="section-title text-center">
					<h1>Roadmap</h1>
					<p>How we came here and where we are headed.</p>
				</div>				
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="timeline">
					  <div class="time_contain time_left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Project Idea - <span>July, 2022</span></h2>
						  <p>At its core, Metavest was created with the idea of making cryptocurrency investment accessible to everyone. We recognized that many potential investors were hesitant to enter the market due to its perceived complexity and lack of user-friendly platforms. With this in mind, we set out to create a simple and intuitive investment platform that would make it easy for anyone to invest in cryptocurrencies, regardless of their level of expertise or experience.</p>
						</div>
					  </div>
					  <div class="time_contain time_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Business Conception - <span>Oct, 2022</span></h2>
						  <p>With that in mind, we set out to create a new kind of investment platform that would be intuitive, user-friendly, and accessible to all. We spent countless hours researching and testing different technologies and investment strategies, refining their approach along the way. After months of hard work, Metavest was launched, with a mission to empower users to achieve their financial goals through the power of cryptocurrency investment.</p>
						</div>
					  </div>
						<div class="time_contain time_left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Project Launch - <span>Dec, 2022</span></h2>
						 <p>Metavest launched in Dec 2022, marking a major milestone for our team and investors. The initial launch was met with great excitement and enthusiasm, as users quickly recognized the power and potential of our innovative investment platform. In the first three weeks, we processed 7k investments, which served as a validation of our team's hard work and dedication.</p>
						</div>
					  </div>
					  <div class="time_contain time_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Metavest Token (MVT) Creation - <span>Aug, 2023</span></h2>
						  <p>Metavest's custom cryptocurrency token, [token name], is set to launch in [year], marking a major milestone in our mission to provide a comprehensive and user-friendly investment platform</p>
						</div>
					  </div>
					  <div class="time_contain time_left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="time_content">
						  <h2>ICO and Token Sale - <span>Sept, 2023</span></h2>
						  <p>Metevest token will be available for public sale in September. That will be your chance to invest in the next big thing in crypto and take advantage of our team's plans to add even more utilities to our token. Don't miss out!.</p>
						</div>
					  </div>
					  <div class="time_contain time_right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="time_content">
						  <h2>Keep going - <span>forever</span></h2>
						  <p>At MetaVest, we're committed to constantly improving our platform for our valued investors. Our dedicated team works tirelessly to enhance every aspect of our service, from the user experience to the latest technology. You can trust us to keep building and delivering excellence, every day.</p>
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
							 <h2>Install Metavest app today</h2>
							 <p>We offers users a fully operational long-term rental platform. It plans to leverages blockchain technology to ensure seamless rental experience and wants to help tenants unfreeze millions of dollars tied up in rental.</p> 
							 <ul>
								<li><span class="ti-download"></span>Download It for Free</li>
								<li><span class="ti-package"></span>Install App</li>
								<li><span class="ti-user"></span>Create Profile</li>
								<li><span class="ti-cup"></span>Enjoy this app</li>
							 </ul>
						</div>
						<div class="app_btn">
							<a href="#download" class="btn_one wow bounceIn" data-wow-delay=".3s"><i class="fa fa-apple"></i>App Store</a>
							<a href="#download" class="btn_two wow bounceIn" data-wow-delay=".4s"><i class="fa fa-play"></i>Google Play</a>
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
		
		<!-- START PARTNER -->
		<div class="partner_area section-padding">
			<div class="container">				
				<div class="section-title text-center">
					<h1>Partners & Supporters</h1>
					<p>We have partnereships with some of the biggest giants in the industry.</p>
				</div>
				<div class="row text-center">
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Binance/Binance-Horizontal2-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Coinbase/Coinbase-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Ethereum/Ethereum-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Tether_(cryptocurrency)/Tether_(cryptocurrency)-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Bitcoin/Bitcoin-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Ripple_(payment_protocol)/Ripple_(payment_protocol)-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/Meta_Platforms/Meta_Platforms-Logo.wine.png" alt="partner-image" />
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" data-wow-offset="0">
						<div class="partner-logo">
							<img src="https://download.logo.wine/logo/SpaceX/SpaceX-Logo.wine.png" alt="partner-image" />
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
					<p>New users usually ask these questions</p>
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
								Cryptocurrency is a digital or virtual form of currency that uses encryption techniques to secure and verify transactions and control the creation of new units.
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								What crypto currency does Metavest Accept ?
							  </button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								As at now, metavest accept's deposits in four cryto coins which are as follows Bitcoin(BTC), Ethereum(ETH), Binanace Coin(BNB) and Tether(USDT)
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Can I withdraw my Investment ?
							  </button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								You can withdraw your investments and profits once the investment period has reached. However, it should be noted that withdrawal is not allowed untill the investment period is over.
							  </div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How to Invest?
							  </button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								You can start investing right away by signing up and verifying your email address. With MetaVest, you can access a world of exciting investment opportunities, right at your fingertips.
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
					<p>Some latest from the crypto space.</p>
				</div>				
				<div class="row text-center">					
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="https://public.bnbstatic.com/image/cms/blog/20230315/1b8a4c80-f91a-40b7-819c-ccfed5455246" class="img-fluid" alt="image" />
								<a href="#blog">March 15, 2023</a>
							</div>
							<span><a href="#blog">Technology/Trading</a></span>
							<h2><a target="blank" href="https://www.binance.com/en-NG/blog/all/introducing-the-binance-p2p-block-trade-zone-in-kenya-5751513665321161263">Introducing the Binance P2P Block trade zone in Kenya</a></h2>
							<a target="blank" href="https://www.binance.com/en-NG/blog/all/introducing-the-binance-p2p-block-trade-zone-in-kenya-5751513665321161263" class="btn_one">Read More</a>
						</div>						
					</div><!-- END COL -->					
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="https://blog.ethereum.org/_next/image?url=https%3A%2F%2Fstorage.googleapis.com%2Fethereum-hackmd%2Fupload_c721600b9f9448a141574b76a38159e6.jpg&w=3840&q=75" class="img-fluid" alt="image" />
								<a href="#blog">March 08, 2023</a>
							</div>
							<span><a href="#blog">Technology/Protocol</a></span>
							<h2><a target="blank" href="https://blog.ethereum.org/2023/03/08/goerli-shapella-announcement">Goerli Shapella Announcement</a></h2>
							<a target="blank" href="https://blog.ethereum.org/2023/03/08/goerli-shapella-announcement" class="btn_one">Read More</a>
						</div>						
					</div><!-- END COL -->					
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*rQMsPIGIJUUBFjFjo6xIGQ.png" class="img-fluid" alt="image" />
								<a href="#blog">February 09, 2023</a>
							</div>
							<span><a href="#blog">Technology/Finance</a></span>
							<h2><a target="blank" href="https://blog.bitcoin.com/yield-farming-is-live-on-bitcoin-coms-verse-dex-caf871aa6aec">Yield farming is live on Bitcoin.com's Verse DEX</a></h2>
							<a target="blank" href="https://blog.bitcoin.com/yield-farming-is-live-on-bitcoin-coms-verse-dex-caf871aa6aec" class="btn_one">Read More</a>
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
							<form action="{{ route('subscribe') }}" method="POST">
								@csrf
								<input type="email" name="email" class="subscribe__input" placeholder="Email Address" required>
								<button type="submit" class="btn_one">Subscribe</button>
							</form>
							@if(session('newsletter'))
							<p class="text-success">Email subscribed Successfully</p>
							@endif
						</div>					
					</div><!-- END COL -->							
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END PROMOTION -->				
		
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
							</ul>
						</div>						
						<div class="footer_copyright">
							<p>&copy; <script> const date = new Date(); document.write(date.getFullYear())</script> Metavest. All Rights Reserved.</p>
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