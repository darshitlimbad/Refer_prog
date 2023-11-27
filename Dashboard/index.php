<?php 
	require "interface.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Money Rain</title>

		<link rel="stylesheet" href="style/index.css" type="text/css">
		<script src="js/index.js"></script>
	</head>
	<body>
		<div class="display_points">
			<p><?php echo $details['points']?></p>
			<img src="img/coin.jpg">
		</div>

		<div class="permision">
			
		</div>

		<section id="img_swiper" class="prevent_select">
			<div class="swipe_left" id="sl" style="background-image: url(img/bg.jpg);">
				<
			</div>

			<div class="img_1 ">
				<img src="img/img-1.jpg" alt="ERROR : IMG NOT FOUND" >
			</div>
			<div class="img_2">
				<img src="img/img-2.jpg" alt="ERROR : IMG NOT FOUND" >
			</div>
			<div class="img_3">
				<img src="img/img-3.jpg" alt="ERROR : IMG NOT FOUND" >
			</div>
			<div class="img_4">
				<img src="img/img-4.jpg" alt="ERROR : IMG NOT FOUND" >
			</div>

			<div class="swipe_right" id="sr" style="background-image: url(img/bg.jpg);">
				>
			</div>
		</section>
		<nav class="swiper_nav">
			<ul type="circle" id="nav-bar" >
				<li type="disc">
				<li>
				<li>
				<li>
			</ul>
		</nav>

		<div id="intro">
			<div class="box"  style="background-image: url(img/bg.jpg) ; height:350px;">
				<h1>Why Choose US?</h1>

				<p>The simple reason is we are the next future of earning money from just
					doing simple tasks ;).
				</p>

				<div class="btn">
					Let's get started,
				</div>
			</div>

			<div class="intro_child">
				<div class="box"  style="background-image: url(img/bg.jpg)">
					<h1>What we have?</h1>

					<p>
						<ul>
							<li>A point system</li>
							<li>A way to earn credits</li>
							<li>Earn credits without leaving home:)</li>
						</ul>
					</p>
				</div>
				<div class="box"  style="background-image: url(img/bg.jpg)">
					<h3 style="font-size: 25px;">COMMING SOON</h3>

					<p>
						<ul>
							<li>A game zone.</li>
							<li>A CTP(credits transfer protocol)</li>
							<li>A purchasing system</li>
						</ul>
					</p>
				</div>
			</div>
		</div>

	
	</body>
</html>