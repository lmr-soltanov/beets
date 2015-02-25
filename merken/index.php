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
					  	<li role="presentation"><a href="<?php echo $site_url; ?>/slaapsystemen">Slaapsystemen</a></li>
					  	<li role="presentation" class="active"><a href="#">Merken</a></li>
					  	<ul class="sub-menu">
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/bodyform">Bodyform</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/kreamat">Kreamat</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/elsach">Elsach</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/freshbed">Freshbed</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/jensen">Jensen</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/magnitude">Magnitude</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/mline">M-Line</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/perzona">Perzona</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/poseidon">Poseidon</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/sleepline">Sleepline</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/swissflex">Swissflex</a></li>
					  		<li role="presentation"><a href="<?php echo $site_url; ?>/merken/tempur">Tempur</a></li>
					  	</ul>
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
			  <li><a href="#">Merken</a></li>
			</ol>
			<div class="row content-title text-center">
				<h1>Merken</h1>
			</div>
			<div class="row img-links">
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/merken/bodyform"><img src="../images/two-third.gif"></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/elsach"><img src="../images/one-third.gif"></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/freshbed"><img src="../images/one-third.gif"></a>
				</div>
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/merken/jensen"><img src="../images/two-third.gif"></a>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/merken/kreamat"><img src="../images/two-third.gif"></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/magnitude"><img src="../images/one-third.gif"></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/mline"><img src="../images/one-third.gif"></a>
				</div>
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/merken/perzona"><img src="../images/two-third.gif"></a>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/merken/private"><img src="../images/two-third.gif"></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/poseidon"><img src="../images/one-third.gif"></a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo $site_url; ?>/merken/swissflex"><img src="../images/one-third.gif"></a>
				</div>
				<div class="col-md-16">
					<a href="<?php echo $site_url; ?>/merken/tempur"><img src="../images/two-third.gif"></a>
				</div>
			</div>
			<!-- .img-links -->
			<div class="row footer">
				
				<img src="../images/desktop-full-width.gif">
				
				<div class="under-img">
					<button type="button" class="btn btn-primary center-block btn-consult">Maak een afspraak met onze slaapconsulent</button>

					<div class="row foot-info col-md-22 col-md-offset-1">
						<div class="col-md-8">
							<h4>Beets Patteet</h4>
							<p>Spoorwegstraat 2</p>
							<p>3200 Aarschot</p>
							<p style="margin-top: 18pt;">T. 016/ 56 32 84</p>
							<p>F. 016/57 09 79</p>
							<p>E. info@beets-patteet.be</p>
							<h4 style="margin-top: 40pt;">Dinsdag tot Zaterdag</h4>
							<p>10.00 - 18.00</p>
							<h4 style="margin-top: 18pt;">Zondag</h4>
							<p>13.00 - 18.00</p>
						</div>
						<div class="col-md-6">
							<a href="<?php echo $site_url; ?>/slaapsystemen"><h4 style="margin-bottom: 17px;">SLAAPSYSTEMEN</h4></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/boxsprings"><p>Boxsprings</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/freshbed"><p>Freshbed</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/gel"><p>Gel</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/latex"><p>Latex</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/perzona"><p>Perzona</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/visco"><p>Visco</p></a>
							<a href="<?php echo $site_url; ?>/slaapsystemen/waterbedden"><p>Waterbedden</p></a>
						</div>
						<div class="col-md-4">
							<a href="<?php echo $site_url; ?>/merken"><h4 style="margin-bottom: 17px;">MERKEN</h4></a>
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
						<div class="col-md-6">
							<a href="<?php echo $site_url; ?>/textiel"><h4>TEXTIEL</h4></a>
							<a href="<?php echo $site_url; ?>/tips"><h4>TIPS&amp;ADVIES</h4></a>
							<a href="<?php echo $site_url; ?>/aanbiedingen"><h4>AANBIEDINGEN</h4></a>
							<a href="<?php echo $site_url; ?>/contact"><h4>CONTACT</h4></a>
							<button type="button" class="btn btn-default btn-inschrijven">inschrijven</button>
						</div>
					</div>
					<!-- .foot-info -->
					<div class="row foot-disclaim col-md-22 col-md-offset-1 clearfix">
						<p class="pull-left">Algemene voorwaarden • Disclaimer • Sitemap • Cookies</p>
						<p class="pull-right">Design &amp; Development by <a href="#">concuria</a></p>
					</div>
					<!-- .foot-disclaim -->
					<div class="row foot-comp col-md-22 col-md-offset-1">
						<p class="text-center">© Beets Patteet</p>
					</div>
				</div>
				<!-- .under-img -->
			</div>
			<!-- .footer -->
		</div>
		<!-- .content -->
	</div>
</body>
</html>
