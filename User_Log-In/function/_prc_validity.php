<?php
    if(isset($_POST['prc']))
    {
        require "_config.php";

        $prc = mysqli_real_escape_string($conn , $_POST["prc"]);

        $sql = "SELECT * FROM `user` WHERE `ref_cd` = '$prc'";

        $sql_fire = mysqli_query($conn , $sql);

        $count = mysqli_num_rows($sql_fire);

        echo $count;
    }
?>