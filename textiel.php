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
<body class="page">
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
					  	<li role="presentation"><a href="<?php echo $site_url; ?>">Home</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/slaapsystemen">Slaapsystemen</a></li>
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/merken">Merken</a></li>
					  	<li role="presentation" class="active"><a href="#">Textiel</a></li>
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
			<div class="header-img">
				<img src="images/header.gif">
			</div>
			<ol class="breadcrumb">
			  <li><a href="<?php echo $site_url; ?>">Home</a></li>
			  <li><a href="#">Textiel</a></li>
			</ol>
			<div class="row content-title text-center">
				<h1 style="margin-bottom: 60px;">Textiel</h1>
			</div>
			<div class="row content-descr text-center">
				<div class="col-md-14 col-md-offset-5">
					<h3 style="margin-top: 0; margin-bottom: 3px">Bedlinnen</h3>
					<p>
						Maak u welverdiende nachtrust nog aangenamer door bijpassend bedtextiel 
						van dekbedovertrekken en hoeslakens. Buiten de kwaliteit van de 
						materialen voor bedtextiel is kleur en design ook van groot belang voor het creëren van sfeer.
					</p>
					<h3 style="margin-top: 25px; margin-bottom: 3px">Kussens</h3>
					<p>
						Bij ons vindt u kussens in allerlei materialen en maten, gaande van dons, 
						kapok, synthetische en zelfs orthopedische kussens. U kan ze allemaal testen 
						in de uitgebreide showroom. Nog niet overtuigd? Neem dan één van onze Tempur 
						kussens op proef mee naar huis. Probeer gedurende 3 nachten het gewenste kussen 
						zodat u eigenhandig de proef op de som kan nemen.
					</p>
					<h3 style="margin-top: 25px; margin-bottom: 3px">Donsdekens</h3>
					<p>
						Bij ieder bed hoort een bijpassend donsdeken. Bent u tevreden over uw eigen 
						donsdeken maar klopt de afmeting niet of dient het dons bijgevuld te worden, 
						spring dan even binnen voor een advies op maat. Bovendien kunnen wij voor u uw donsdeken laten reinigen.
					</p>
				</div>
			</div>
			<!-- .content-descr -->
			<div class="row img-links">
				<div class="col-md-8">
					<img src="images/one-third.gif">
				</div>
				<div class="col-md-16">
					<img src="images/two-third.gif">
				</div>
				<div class="col-md-24">
					<img src="images/desktop-full-width.gif">
				</div>
			</div>
			<!-- .img-links -->
			<div class="row footer">

			</div>
			<!-- .footer -->
		</div>
		<!-- .content -->
	</div>
</body>
</html>