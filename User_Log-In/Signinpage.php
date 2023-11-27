<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/jpg" href="img/logo.jpg">
    <title>Sign-in Money Rain</title>
	<link href="https://fonts.googleapis.com/css?family=Tangerine:regular,700" rel="stylesheet" />

	<!-- style -->
    <link rel="stylesheet" href="style/style-01.css">
	<!--  -->

	<!-- js -->
	<script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous">
    </script>
	<script src="js/jquery-3.6.3.js"></script>
	<script type="text/javascript" src="js/js-01.js" ></script>
	<!--  -->
</head>
<body  onload="document.form.unm.focus()">
		<h1>Money Rain</h1>
    <div class="container">
		<!-- form -->
		<form action="function/_register.php" method="post" name="form">
			
			<!-- unm field -->
			<div class="input-field">
				<input type="text" id="unm" name="unm" placeholder=" ">
				<label for="unm" class="prevent_select" >Username</label>
				<span class="prevent_select" id="chk_unm"></span>
				<span class="prevent_select" id="span_unm"></span>
			</div>

			<!-- fname field -->
			<div class="input-field">
				<input type="text" id="fname" name="fname" placeholder=" ">
				<label for="fname" class="prevent_select" >Full name</label>
			</div>

			<!-- mobile no field -->
			<div class="input-field">
				<input type="text" id="mono" name="mono" placeholder=" " onkeyup="only_num_mono(this)">
				<label for="mono" class="prevent_select" >Mobile no</label>
				<span class="prevent_select" id="span_mono"></span>
			</div>
			
			<!-- email field -->
			<div class="input-field">
				<input type="text" id="email" name="email" placeholder=" " autocomplete="email">
				<label for="email" class="prevent_select" >Email</label>
				<span class="prevent_select" id="span_email">EMAIL IS WRONG</span>
			</div>
		
			<!-- password field -->
			<div class="input-field" >
				<input type="password" id="pass" name="pass" placeholder=" " onkeyup="pass_check()">
				<label for="pass"  class="prevent_select" >Password</label>
				<img class="prevent_select"  onclick="show1()" src="img/show_icon.png">
			</div>
			
			<!-- con pass field -->
			<div class="input-field">
				<input type="password" id="con_pass" name="con_pass" placeholder=" " onkeyup="pass_check()">
				<label for="con_pass"  class="prevent_select" >Confirm Password</label>
				<img class="prevent_select" onclick="show2()" src="img/show_icon.png">
				<span class="prevent_select" id="span_pass">Password does not match</span>
			</div>
			
			<!-- parent ref-cd field -->
			<div class="input-field">
				<input type="ref_cd" id="p_ref_cd" name="p_ref_cd" placeholder=" " value="<?php if(isset($_GET['REF_CD'])){ echo $_GET['REF_CD']; }?>">
				<label for="p_ref_cd" class="prevent_select" >parent refer code(optional)</label>
				<span class="prevent_select" id="chk_prc"></span> 
				</div>

			<!-- btn field -->
			<div class="btn">
				<input type="reset" name="Reset" id="Reset" class="reset" value="Reset">
				<input type="submit" name="sign-in" id="sign-in" class="sign-in" value="Sign-In" onclick="return check()">
			</div>
		</form>
		<!--  -->
	</div>
</body>
</html>