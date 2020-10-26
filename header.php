<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
  echo 'active'; //class name in css 
 } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>BforUS</title>
		<meta name="description" content="Creative Agency, Marketing Agency Template">
		<meta name="keywords" content="Creative Agency, Marketing Agency">
		<meta name="author" content="rajesh-doot">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#c7ecff">
		<!--website-favicon-->
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!--plugin-css-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!--google-fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<!-- template-style-->
		<link type="text/css" href="css/style.css" rel="stylesheet">
		<link type="text/css" href="css/responsive.css" rel="stylesheet">
		<style type="text/css">

		</style>
	</head>
	<body >
		<!--Start Header -->
		<header class="top-header">
			<nav class="navbar navbar-expand-lg navbar-light justify-content-right navbar-mobile fixed-top">
				<div class="container">
					<!-- <a class="navbar-brand" href="index.html"> <img src="images/bforus.png" alt="Logo" width="100" /></a> -->
					<button class="navbar-toggler mobile-none" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse animate slideIn mobile-none" id="navbar4">
					<ul class="mr-auto"></ul>
					<div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
					<ul class="navbar-nav d-menu" id="mynav">
						<li class="nav-item dropdown <?php active('home.php');?>">
							<a class="colr-ali nav-link "href="home.php" id="homepage1" aria-haspopup="true" aria-expanded="false">Home</a>
						</li>
						<li class="nav-item <?php active('service.php');?>"> <a class="nav-link" href="service.php">Services</a> </li>
						
						<li class="nav-item dropdown <?php active('portfolio.php');?>">
							<a class="nav-link" href="portfolio.php" id="Portfolio" aria-haspopup="true" aria-expanded="false">Portfolio</a>
							
						</li>
						
						<li class="nav-item <?php active('contact.php');?>"> <a class="nav-link" href="contact.php">Contact</a> </li>
				
					</ul>
				</div>

				</div>
				<div class="mobile-menu">
					<ul class="mob-nav">
						
					<li> <a class="nav-link mobilemenu" href="#" data-toggle="modal" data-target="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a> </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--End Header -->