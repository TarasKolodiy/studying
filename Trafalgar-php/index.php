<!DOCTYPE html>
<html>
<head>
	<title>Trafalgar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Mulish&family=Roboto&display=swap');
	</style>
	<script src="js/main.js"></script>
</head>
<body>
	<header id="header">
		<div class="logo">
			<a class=logo href="main.html">
				<b>T</b> <span>&nbsp;Trafalgar</span>
			</a>
		</div>
        <?php
        include ("menu.php");
        ?>
	</header>
		
	<section id="banner" class="wrapper">
		<div class="inner">
			<div class="text">
					<h1 onclick="onClick(this)" id="keks">Virtual healthcare for you</h1>
					<p>Trafalgar provides progressive, and affordable 
					healthcare, accessible on mobile and online 
					for everyone</p>
					<a>
						<div class="button" onclick="comfortableTime()">
							Consult today
						</div>
					</a>
			</div>
			<div class="image-banner"><img src="images/image1.png"></div>
		</div>
	</section>

	<section id="services" class="wrapper">
		<div class="inner">
			<div class="header">
				<h2>Our services</h2>
				<hr>
				<p>We provide to you the best choiches for you. Adjust it to your health needs and make sure your undergo treatment with our highly qualified doctors you can consult with us which type of service is suitable for your health</p>
			</div>
		
			<div class="service-boxes">
                <?php
                include ("boxes.php");
                ?>
			</div>
					<a>
						<div class="button" id="learn-more-button" onclick="onClickButton()">
							Learn more
						</div>
					</a>
		</div>
	</section>		

	<section id="providers" class="wrapper">
		<div class="inner">
			<div class="image-left"><img src="images/image2.png"></div>
			<div class="text">
				<h2>Leading healthcare providers</h2>
				<hr>
				<p>Trafalgar provides progressive, and affordable healthcare, 
					accessible on mobile and online for everyone. 
					To us, it’s not just work. 
					We take pride in the solutions we deliver</p>
				<a href="#">
					<div class="button">
						Learn more
					</div>
				</a>	
			</div>
		</div>
	</section>

	<section id="download-apps" class="wrapper">
		<div class="inner">
			<div class="text">
				<h2>Download our mobile apps</h2>
				<hr>
				<p>Our dedicated patient engagement app and 
				web portal allow you to access information instantaneously (no tedeous form, long calls, 
				or administrative hassle) and securely</p>
				<a>
					<div class="button" id="download-button" onclick="fileIsNotAvailable()">
						Download ↓
					</div>
				</a>
			</div>
			<div class="image-right"><img src="images/image3.png"></div>
		</div>
	</section>

	<section id="customer" class="wrapper">
		<div class="inner">
			<header>
				<h2>What our customer are saying</h2>
				<hr>
			</header>
			<div class="slide main-slide">
				<div class="founder">
					<div class="founder-image">
						<img src="images/founder.png">
					</div>
					<div class="founder-description">
						<h5>Edward Newgate</h5>
						<p>Founder Circle</p>
					</div>
				</div>
				<div class="customer-description">
						<p>“Our dedicated patient engagement app and
						web portal allow you to access information
						instantaneously (no tedeous form, long calls,
						or administrative hassle) and securely”</p>
				</div>
			</div>
			<div class="slide">
				<div class="founder">
					<div class="founder-image">
						<img src="images/smit.jpg">
					</div>
					<div class="founder-description">
						<h5>Will Smith</h5>
						<p>Founder Square</p>
					</div>
				</div>
				<div class="customer-description">
					<p>Notre application dédiée à l'engagement des patients et
						le portail Web vous permet d'accéder à des informations
						instantanément (pas de forme fastidieuse, appels longs)</p>
				</div>
			</div>
			<div class="slide">
				<div class="founder">
					<div class="founder-image">
						<img src="images/merfi.jpg">
					</div>
					<div class="founder-description">
						<h5>Eddie Murphey</h5>
						<p>Founder Triangle</p>
					</div>
				</div>
				<div class="customer-description">
					<p>“Naša namenska aplikacija za sodelovanje s pacienti in
						spletni portal vam omogoča dostop do informacij
						takoj (brez zapletene oblike, dolgih klicev)”</p>
				</div>
			</div>
			<div class="slide">
				<div class="founder">
					<div class="founder-image">
						<img src="images/sponge.png">
					</div>
					<div class="founder-description">
						<h5>Sponge Bob</h5>
						<p>Square Pants</p>
					</div>
				</div>
				<div class="customer-description">
					<p>Are you ready kids?
						Aye aye captain!
						I cant hear you!
						AYE AYE CAPTAIN!
						Oooooooh! Who lives in a
						pine-apple under the sea?
						SPONGE BOB SQUARE PANTS!</p>
				</div>
			</div>
		</div>
			<div class="slider">
					<a href="#"><div class="arrow-left">
						<img src="images/arrow-left.png" class="arrow"> 
					</div></a>
					<a href="#"><div class="ellipse ellipse-active"></div></a>
					<a href="#"><div class="ellipse"></div></a>
					<a href="#"><div class="ellipse"></div></a>
					<a href="#"><div class="ellipse"></div></a>
					<a href="#"><div class="arrow-right">
						<img src="images/arrow-left.png" class="arrow">
					</div></a>
			</div>
		</section>

		<section id="articles" class="wrapper">
			<div class="inner">
				<header>
					<h2>
						Check out our latest article
					</h2>
					<hr>
				</header>
				<div class="article-boxes">
					<div class="article-box">
						<img src="images/article1.png">
						<h4>Disease detection, check up in the laboratory</h4>
						<p>In this case, the role of the health laboratory is very important to do
						a disease detection...</p>
						<a href="#"><div class="article-button">Read more →</div></a>
					</div>
					<div class="article-box" id="middle-box">
						<img src="images/article2.png">
						<h4>Herbal medicines that are 
						safe for consumption</h4>
						<p>Herbal medicine is very widely used at this time because of its very good for your health...</p>
						<a href="#"><div class="article-button">Read more →</div></a>
					</div>
					<div class="article-box">
						<img src="images/article3.png">
						<h4>Natural care for healthy facial skin</h4>
						<p>A healthy lifestyle should start from now and also for your skin health.
						There are some...</p>
						<a href="#"><div class="article-button">Read more →</div></a>
					</div>
				</div>
				<a href="#">
					<div class="button">
						View all
					</div>
				</a>
			</div>
		</section>

		<footer>
			<div class="inner">
				<div class="footer-text">
					<div class="logo"><a class=logo href="main.html"><b>T</b> <span>Trafalgar</span></a></div>
					<p>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online 
					for everyone</p>
					<p class="rights">©Trafalgar PTY LTD 2020. All rights reserved</p>
				</div>
                <?php
                include ("footer-lists.php");
                ?>
			</div>
		</footer>
	<script src="js/main.js"></script>
</body>
</html>

