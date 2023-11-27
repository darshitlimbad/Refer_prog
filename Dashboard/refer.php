<?php
    require "interface.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REFER and EARN</title>

    <link rel="stylesheet" href="style/refer.css" type="text/css">
	<script src='js/refer.js'> </script>
</head>
<body>
    <div class="credits">
        <h1 class='font'>Your current credits is : <?php echo $details['points']?> <img src="img/coin.jpg"></h1>
        <h1>Your Current tier is : <span><?php echo $details['tier']?><span></h1>
        <p> Here you can refer and earn points.</p>
    </div>

    <div class="box" style="background-image:url(img/bg.jpg)">
        <div class="refcd">
            <p>This is your Reference code :</p>
            <input type="text" value="<?php echo $details['ref_cd']; ?>" DISABLED>
        </div>
        <div class="text">
            <p>This is your Reference code , You can share this code to your friend's if he/she
                joins our MONEY RAIN WEB-APP with this code then he/she will get points but You also get Credits.</p>
            </p>
            <p>If they uses your code then You will get <strong>100 credits</strong> and he will get <strong>50 extra credits.</strong></p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="text">

            <p>OR You can share this URL to your friend for refer :</p>
			<input type="text" id="URL" style="width:60%;color:white;" value="http://localhost/refer_prog/User_Log-In/Signinpage.php?REF_CD=<?php echo $details['ref_cd'];?>" DISABLED>
			
            <div class='copyTip'>

				<button name='copy' id='copy'>
					<span class="span_copy">Click to COPY</span>COPY
                </button>

			</div>
		
        </div>

    </div>
    
</body>
</html>