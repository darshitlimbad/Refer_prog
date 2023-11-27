<?php
    if(!(isset($_GET['KEY'])))
    {
        header('HTTP/1.0 401 Unauthorized');
    }
    
    require "_config.php";

    $unm = $_POST['unm'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `user` WHERE `unm` = '$unm'";

    $sql_fire = mysqli_query($conn , $sql);

    $row = mysqli_fetch_assoc($sql_fire);

    $count = mysqli_num_rows($sql_fire);

    if($count == 0) {
        header("location: /Refer_prog/User_Log-In/Loginpage.php?ERROR=404");
    }
    else if($row['pass'] != $pass ) {
        header("location: /Refer_prog/User_Log-In/Loginpage.php?ERROR=PASSWORD_INCORRECT&unm=$unm");
    }
    else {
        session_start();
        $_SESSION['unm'] = $unm;

        if(isset($_REQUEST["save-radio"]))
        {
            if($_COOKIE['unm'] == '') {
                setcookie( "unm" , $unm , time() + 10800 , "/");
                setcookie( "pass" , $pass , time() + 10800 , "/");
            }
        }

        // header('location: /');
        header('location: /refer_prog/Dashboard/');
    }
?>