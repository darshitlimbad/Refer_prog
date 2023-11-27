<?php
    if(isset($_POST['unm']))
    {
        require "_config.php";

        $unm = mysqli_real_escape_string($conn , $_POST['unm']);

        $sql = "SELECT * FROM `user` WHERE `unm` = '$unm'";

        $sql_fire = mysqli_query($conn , $sql);

        $count = mysqli_num_rows($sql_fire);

        echo $count;
    }
?>