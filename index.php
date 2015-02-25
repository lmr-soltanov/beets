<?php include('base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Beets</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
</head>
<body class="home">
	<div class="container">
		<div class="sidebar col-md-5 fixed">
			<div class="row sidebar-logo">
				<div class="col-md-24">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="row nav-menu text-center">
				<div class="">
					<ul class="nav">
						<li role="presentation" class="active"><a href="#">Home</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/slaapsystemen">Slaapsystemen</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/merken">Merken</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/textiel">Textiel</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/tips">Tips&amp;Advies</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/aanbiedingen">Aanbiedingen</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/contact">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="row expirience text-center">
				<div class="cycle-slideshow" 
				    data-cycle-fx="scrollHorz" 
				    data-cycle-timeout="2000"
				    data-cycle-slides="> div"
				    >
					<div>
						<p>40 jaar ervaring!</p>
					</div>
					<div>
						<p>Ruime parking</p>
					</div>
					<div>
						<p>Ontvangst met drankje</p>
					</div>
					<div>
						<p>Gratis matras op proef</p>
					</div>
					<div>
						<p>Gratis depanage van bed</p>
					</div>
					<div>
						<p>Gratis levering en plaatsing</p>
					</div>
					<div>
						<p>Koop in vertrouwen: zonder voorschot</p>
					</div>
					<div>
						<p>Gratis Taxi shuttle dienst bij beperkte mobiliteit</p>
					</div>
					<div>
						<p>Gratis kinderanimatie</p>
					</div>
				</div>
			</div>
			<div class="row work-hours text-center">
				<p>Dinsdag tot Zaterdag<br>10.00 - 18.00</p>
				<p>Zondag<br>13.00 - 18.00</p>
			</div>
			<div class="row fb-share">
				<div class="col-md-6 col-md-offset-9">
					<a href="#"><img class="img-responsive" src="images/fb.png"></a>
				</div>
			</div>
		</div>
		<!-- .sidebar -->
		<div class="content col-md-19 scrollit">
			<video autoplay loop poster="video/I52A9839.jpg" id="bgvid" muted="false">
				<source src="video/I52A9810.mp4" type="video/mp4">
			</video>
			<div class="row content-logo">
				<div class="col-md-8 col-md-offset-8">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="row content-descr text-center">
				<p>
					Welkom op de website van Beets-Patteet.<br>
					Beets-Patteet is de slaapspecialist bij uitstek en heeft de betere<br>
					merken in huis (zoals Hypnos, Auping, Swissflex, Tempur, Jensen,<br>
					Phi-ton, enz…)
				</p>
				<p>
					Wie gezond slaapt verstaat niet alleen de kunst van het<br>
					wegdromen, maar vooral ook van het weer fit opstaan. Als u wil<br>
					genieten van een stevige nachtrust en een 100% uitgeslapen<br>
					gevoel, dan is een degelijk en correct slaapadvies doorslaggevend.<br>
					Wij hebben de expertise en de kwaliteitsproducten in huis om u<br>
					een gezonde slaapoplossing te kunnen aanbieden.
				</p>
			</div>
			<div class="row img-links">
				<div class="col-md-24">
					<a href="<?php echo $site_url; ?>/slaapsystemen"><img src="images/desktop-full-width.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/slaapsystemen"><p class="img-title">SLAAPSYSTEMEN</p></a>
				</div>
				<div class="col-md-24">
					<a href="<?php echo $site_url; ?>/merken"><img src="images/desktop-full-width.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/merken"><p class="img-title">MERKEN</p></a>
				</div>
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/textiel"><img src="images/two-third.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/textiel"><p class="img-title">TEXTIEL</p></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/tips"><img src="images/one-third.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/tips"><p class="img-title">TIPS&amp;ADVIES</p></a>
				</div>
				<div class="col-md-24">
					<a href="<?php echo $site_url; ?>/aanbiedingen"><img src="images/desktop-full-width.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/aanbiedingen"><p class="img-title">AANBIEDINGEN</p></a>
				</div>
				<div class="col-md-24">
					<a href="<?php echo $site_url; ?>/contact"><img src="images/desktop-full-width.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/contact"><p class="img-title">CONTACT</p></a>
				</div>
			</div>
		</div>
		<!-- .content -->
	</div>
</body>
</html>
