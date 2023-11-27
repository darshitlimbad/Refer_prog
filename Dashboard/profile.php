<?php
	require "interface.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>PROFILE-Money Rain</title>

		<link rel="stylesheet" href="style/profile.css" type="text/css">
	</head>
	<body>
		<div class="container" style="background-image:url(img/bg.jpg)">
			<div class="row">
				<div class="col-30">
					<span>USER NAME : </span>
				</div>
				<div class="col-60">
					<span> <?php echo $details['unm']; ?> </span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-30">
					<span>FULL NAME : </span>
				</div>
				<div class="col-60">
					<span> <?php echo $details['fname']?> </span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-30">
					<span>Mobile No. : </span>
				</div>
				<div class="col-60">
					<span> <?php echo $details['mono']?> </span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-30">
					<span>Email : </span>
				</div>
				<div class="col-60">
					<span> <?php echo $details['email']?>
				</div>
			</div>
			
			<div class="row">
				<div class="col-30">
					<span>Ref Code: </span>
				</div>
				<div class="col-60">
					<span> <?php echo $details['ref_cd']?>
				</div>
			</div>
			
			<div class="row">
				<div class="col-30">
					<span>Tier : </span>
				</div>
				<div class="col-60">
					<span style="color:gold;"> <?php echo $details['tier']?>
				</div>
			</div>
		</div>
	</body>