<!DOCTYPE html>
<html>


<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/assets/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Online School Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/move-top.js"></script>
<script type="text/javascript" src="/assets/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>

<!--header start here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			 <div class="logo">
			 	<h1><a href="<?php echo base_url();?>">Karate<span class="logo-clr">Life</span></a></h1>
			 </div>
			 <div class="head-right">
			   <div class="top-nav">
			   		<span class="menu"> <img src="/assets/images/icon.png" alt=""/></span>
					<ul class="res">
						<li><a class="active" href="<?php echo base_url();?>">Home</a></li>
						<li><a href="/index.php/about"><span data-hover="About">About</span></a></li>
						<li><a href="/gallary"><span data-hover="Gallary">Gallary</span></a></li>
						<li><a href="/blogs"><span data-hover="Blogs">Blogs</span></a></li>
						<li><a href="/index.php/contact"><span data-hover="Contact">Contact</span></a></li>
					<div class="clearfix"> </div>
					</ul>

				<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
			<!-- /script-for-menu -->
			  </div>
			 <!-- <div class="social btn btn-warning">
				<a href="index.php/auth/login">Login</a>
			</div> -->
			<div class="clearfix"> </div>
		   </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->