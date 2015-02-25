<?php include('../base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Beets</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">

	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="../js/angular.min.js"></script>
</head>
<body class="page">
	<div class="container">
		<div class="sidebar col-md-5 fixed">
			<div class="row sidebar-logo">
				<div class="col-md-24">
					<img src="../images/logo.png">
				</div>
			</div>
			<div class="row nav-menu text-center">
				<div class="">
					<ul class="nav">
					  	<li role="presentation"><a href="<?php echo $site_url; ?>">Home</a></li>
					  	<li role="presentation" class="active"><a href="#">Slaapsystemen</a></li>
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
					<a href="#"><img class="img-responsive" src="../images/fb.png"></a>
				</div>
			</div>
		</div>
		<!-- .sidebar -->
		<div class="content col-md-19 scrollit">
			<div class="header-img">
				<img src="../images/header.gif">
			</div>
			<ol class="breadcrumb">
			  <li><a href="<?php echo $site_url; ?>">Home</a></li>
			  <li><a href="<?php echo $site_url; ?>/slaapsystemen">Slaapsystemen</a></li>
			  <li><a href="#">Boxsprings</a></li>
			</ol>
			<div class="row content-title text-center">
				<h1>Boxsprings</h1>
			</div>
			<div class="row content-descr text-center">
				<p>
					Boxsprings zijn comfortabele verende en ventilerende bedden. De<br>
					nodige loze ruimte creëert extra ventilatie in de matras. Daarnaast<br>
					heeft deze matras een vochtregulerende werking waardoor de<br>
					duurzaamheid van de matras wordt vergroot en uw gewicht gelijkmatig<br>
					wordt verdeeld over de gehele matras. Deze boxsprings zijn<br>
					verkrijgbaar in de gewenste maat en zijn compleet aan te kleden<br>
					met verschillende hoofd- en voetborden.
				</p>
			</div>
			<div class="row img-links" style="margin-bottom: 30px;">
				<div class="col-md-8 col-md-offset-4">
					<a href="<?php echo $site_url; ?>/merken/elsach"><img src="../images/one-third.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/merken/elsach"><p class="img-title">ELSACH</p></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/jensen"><img src="../images/one-third.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/merken/jensen"><p class="img-title">JENSEN</p></a>
				</div>
				<div class="col-md-8 col-md-offset-4">
					<a href="<?php echo $site_url; ?>/merken/kreamat"><img src="../images/one-third.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/merken/kreamat"><p class="img-title">KREAMAT</p></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/magnitude"><img src="../images/one-third.gif"></a>
					<div class="img-link-over"></div>
					<a href="<?php echo $site_url; ?>/merken/magnitude"><p class="img-title">MAGNITUDE<br><em style="font-weight:700;">Pure luxe</em></p></a>
				</div>
			</div>
			<!-- .img-links -->
			<div class="row footer">
				
				<img src="../images/desktop-full-width.gif">
				
				<div class="under-img">
					<button type="button" class="btn btn-primary center-block btn-consult">Maak een afspraak met onze slaapconsulent</button>

					<div class="row foot-info">
						<div class="col-md-8 col-md-offset-1">
							<h4>Beets Patteet</h4>
							<p>Spoorwegstraat 2</p>
							<p>3200 Aarschot</p>
							<p>T. 016/ 56 32 84</p>
							<p>F. 016/57 09 79</p>
							<p>E. info@beets-patteet.be</p>
							<h4>Dinsdag tot Zaterdag</h4>
							<p>10.00 - 18.00</p>
							<h4>Zondag</h4>
							<p>13.00 - 18.00</p>
						</div>
						<div class="col-md-6">
							<a href="<?php echo $site_url; ?>/slaapsystemen"><h4>SLAAPSYSTEMEN</h4></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/boxsprings"><p>Boxsprings</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/freshbed"><p>Freshbed</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/gel"><p>Gel</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/latex"><p>Latex</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/perzona"><p>Perzona</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/visco"><p>Visco</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/waterbedden"><p>Waterbedden</p></a>
						</div>
						<div class="col-md-4">
							<a href="<?php echo $site_url; ?>/merken"><h4>MERKEN</h4></a>
							<a href="<?php echo $site_url; ?>/merken/bodyform"><p>Bodyform</p></a>
							<a href="<?php echo $site_url; ?>/merken/elsach"><p>Elsach</p></a>
							<a href="<?php echo $site_url; ?>/merken/freshbed"><p>Freshbed</p></a>
							<a href="<?php echo $site_url; ?>/merken/jensen"><p>Jensen</p></a>
							<a href="<?php echo $site_url; ?>/merken/kreamat"><p>Kreamat</p></a>
							<a href="<?php echo $site_url; ?>/merken/magnitude"><p>Magnitude</p></a>
							<a href="<?php echo $site_url; ?>/merken/mline"><p>M-Line</p></a>
							<a href="<?php echo $site_url; ?>/merken/perzona"><p>Perzona</p></a>
							<a href="<?php echo $site_url; ?>/merken/private"><p>Private Label</p></a>
							<a href="<?php echo $site_url; ?>/merken/swissflex"><p>Swissflex</p></a>
							<a href="<?php echo $site_url; ?>/merken/tempur"><p>Tempur</p></a>
						</div>
						<div class="col-md-5">
							<a href="<?php echo $site_url; ?>/textiel"><h4>TEXTIEL</h4></a>
							<a href="<?php echo $site_url; ?>/tips"><h4>TIPS&amp;ADVIES</h4></a>
							<a href="<?php echo $site_url; ?>/aanbiedingen"><h4>AANBIEDINGEN</h4></a>
							<a href="<?php echo $site_url; ?>/contact"><h4>CONTACT</h4></a>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer -->
		</div>
		<!-- .content -->
	</div>
</body>
</html>
