<?php
    if(isset($details['unm']))
    {
        $points = $details['points'];
        switch($points)
        {
            case $points > 1000 && $points <= 5000 : 
                $tier = 'BRONZE' ; 
                mysqli_query($conn, "UPDATE `user` SET `tier`='$tier' WHERE `unm`='$unm' ");
                break;

            case $points > 5000 && $points <= 10000 : 
                $tier = 'SILVER' ; 
                mysqli_query($conn, "UPDATE `user` SET `tier`='$tier' WHERE `unm`='$unm' ");
                break;

            case $points > 10000 && $points <= 20000 : 
                $tier = 'DIAMOND' ; 
                mysqli_query($conn, "UPDATE `user` SET `tier`='$tier' WHERE `unm`='$unm' ");
                break;
            case $points > 20000 : 
                $tier = 'CROWN' ; 
                mysqli_query($conn, "UPDATE `user` SET `tier`='$tier' WHERE `unm`='$unm' ");
                break;
        }
    }
?>