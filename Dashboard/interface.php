<?php
	require "function/_config.php";
    session_start();

    if(!isset($_SESSION['unm'])) {
        header('location: /refer_prog/User_Log-In/Loginpage.php');
    }
	
	$unm = $_SESSION["unm"];
	
	$sql = "SELECT * FROM `user` WHERE `unm` = '$unm'";
	
	$fire_sql = mysqli_query($conn , $sql);
	
	if($fire_sql === FALSE)
	{
		die("FAILED");
	}
	
	$details=mysqli_fetch_assoc($fire_sql);

    require 'function/_tier_update.php';
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/jpg" href="img/logo.jpg">
    
    <link rel="stylesheet" href="style/interface.css" type="text/css">

    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"	>
    </script>
	<script src="js/jquery-3.6.3.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded" , function () {
            document.getElementById("menu_icon").addEventListener("click" , function () {
               $("#header_nav").toggle(500);
            });
        })
    </script>

</head>
<body>
<header id="header" style="background-image: url('img/bg.jpg');">

    <div class="logo font" onclick="window.location.assign('/refer_prog/dashboard/')">
        <img src="img/logo.jpg" alt="Logo" class="prevent_select">
        <h2>MONEY RAIN</h2>
    </div>

    <nav id="header_nav" >
        <ul>
            <li><a href="/refer_prog/dashboard">HOME</a></li>
            <li><a href="/refer_prog/dashboard/refer.php">REFER</a></li>
            <li><a href="/refer_prog/dashboard/help.php">HELP</a></li>
			<img src="img/profile.jpg" onclick="window.location.assign('/refer_prog/dashboard/profile.php')" class="profile_img prevent_select">
				<div class="profile">
					<table cellspacing="5px">
						<tr>
							<td>ID:</td> <td><?PHP echo $details['id']; ?></td>
						</tr>
						<tr>
							<td>USER NAME :</td> <td>@<?PHP echo $details['unm']; ?></td> 
						</tr>
                        <tr>
                            <td>REFER CODE :</td> <td><?PHP echo $details['ref_cd']; ?></td>
                        </tr>
                        <tr>
                            <td></td><td style="text-align: end;"><a href="function/_log_out.php">Log Out</a> </td>
                        </tr>
                    </table>
				</div>
            <a class="prevent_select m_logout" href="function/_log_out.php">Log Out</a>
        </ul>
    </nav>
            <div id="menu_icon" onclick="this.classList.toggle('change')">
                <div class="bar_1"></div>
                <div class="bar_2"></div>
                <div class="bar_3"></div>
            </div>
</header>
</body>
</html>