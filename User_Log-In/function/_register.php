<?php

    if(isset($_POST['sign-in']))
    {
        require "_config.php";
		
        $unm = $_POST['unm'];
        $fname = $_POST['fname'];
		$mono = $_POST['mono'];       
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$ref_cd = 'WIZ'.rand( 100 , 999999 );
         // to check if generated refer code is valid or not
            $rc = "SELECT * FROM `user` WHERE `ref_cd` = '$ref_cd'";
            $rc_fire = mysqli_query($conn , $rc);

            if(mysqli_num_rows($rc_fire) > 0) {
                $ref_cd = 'WIZ'.rand( 100 , 999999 );
            }
        //
         
        $p_ref_cd =$_POST['p_ref_cd'];
       
        // to check if inputed parent refer code is valid or not
        $prc = "SELECT * FROM `user` WHERE `ref_cd` = '$p_ref_cd'";
        $prc_fire = mysqli_query($conn , $prc);
         
        if(mysqli_num_rows($prc_fire) > 0) {
            $prc_fetch = mysqli_fetch_assoc($prc_fire);

            $points = 50 + 50  ;//50 bonus points 

            $prc_points = $prc_fetch['points'] + 100 ;

            mysqli_query($conn, "UPDATE `user` SET `points`='$prc_points' WHERE `ref_cd`='$p_ref_cd' ");

            $sql = "INSERT INTO `user`(`unm`, `fname` , `mono` , `email` , `pass`, `points` , `ref_cd` ,`p_ref_cd`) 
                    VALUES ('$unm','$fname' ,'$mono' ,'$email' ,'$pass' , '$points' , '$ref_cd' ,'$p_ref_cd')";
        }
        else{
            $points = 50 ; //NO BONUS
            $sql = "INSERT INTO `user`(`unm`, `fname` , `mono` , `email` , `pass` , `points` , `ref_cd`) 
                    VALUES ('$unm','$fname' ,'$mono' ,'$email' ,'$pass' , '$points' , '$ref_cd')";
        }

        $query_sql = mysqli_query($conn , $sql);

        if ($query_sql === TRUE) {
            header("Location: /refer_prog/User_Log-In/loginpage.php ");
        }
        else {
            echo "<script>alert('Error: Something went wrong');</script>";
        }
    }
    else
    {
        echo "<script>alert('FILL THE FORM');</script>";
    }

?>
