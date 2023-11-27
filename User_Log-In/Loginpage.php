<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/jpg" href="img/logo.jpg">
    <title>Log-in Money Rain</title>
	<link href="https://fonts.googleapis.com/css?family=Tangerine:regular,700" rel="stylesheet" />
    <!-- style -->
	<link rel="stylesheet" href="style/style-01.css">
	<!-- js -->
	<!-- <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous">
    </script> -->
	<script src="js/jquery-3.6.3.js"></script>
	<script type="text/javascript" src="js/js-01.js" ></script>
</head>
<body onload="document.form.unm.focus()">
		<h1>Money Rain</h1>
    <div class="container">
		<!-- form -->
		<form action="function/_log-in.php?KEY=log-in" method="post" name="form" >
			<!-- unm field -->
			<div class="input-field">
				<input type="text" id="unm" name="unm" placeholder=" " value="<?PHP if(isset($_COOKIE['unm'])){echo $_COOKIE['unm'];} if((isset($_GET['ERROR'])) && ($_GET['ERROR'] == 'PASSWORD_INCORRECT')){ echo $_GET['unm'];} ?>" >
				<label for="unm" class="prevent_select" >Username</label>
			</div>

			<!-- password field -->
			<div class="input-field">
				<input type="password" id="pass" name="pass" placeholder=" " value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];} ?>">
				<label for="pass"  class="prevent_select" >Password</label>
				<img onclick="show1()" class="prevent_select"  src="img/show_icon.png">
				<span id="span_pass" class="prevent_select" >Re-enter your pass</span>
			</div>

			<!-- save or not -->
			<div class="save-details">
				<input type="checkbox" id="save-radio" name="save-radio"> 
				<span for="save-span">SAVE LOG-IN DETAILS</span> 
			</div>

			<!-- btn field -->
			<div class="btn">
				<input type="reset" name="Reset" id="Reset" class="reset" value="Reset">
				<input type="submit" name="log-in" id="log-in" class="log-in" value="Log-in" onclick="return check()">
			</div>	

			<!-- sign-up link -->
			<div class="new_user">
				<p>Register if you are new user:- &nbsp;&nbsp;</p>
				<a href="Signinpage.php">Sign up</a>
			</div>
		</form>
	</div>
</body>
</html>

<?php
		if( (isset($_GET['ERROR'])) && ($_GET['ERROR'] == '404'))
		{
			echo "<script>alert('ERROR-404 : USER NOT FOUND , CHECK DETAILS AGAIN OR SIGN-UP');</script>";
		}
		else if( (isset($_GET['ERROR'])) && ($_GET['ERROR'] == 'PASSWORD_INCORRECT'))
		{
			echo "<script>alert('ENTERED PASSWORD IS WRONG PLEASE CHECK AGAIN');</script>";
		?>
			<script>
				document.getElementById("pass").style.border = "3px solid red";
				document.getElementById("span_pass").style.display = "block";
			</script>
		<?php
		}
		?>