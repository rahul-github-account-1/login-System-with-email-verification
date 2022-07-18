<?php
require "links.php";
session_start();
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $set = '1';
    $sql1 = "SELECT `is_verified` from  `registration` where `registration`.`token`='$token'";
    $checking_user_obj = mysqli_query($con, $sql1);
    $res = mysqli_fetch_row($checking_user_obj);
    if ($res[0] == '1') {
        echo "<h2> Page Not Found</h2>";
    } else {
        $sql = "UPDATE `registration` SET `is_verified`='$set' WHERE `registration`.`token`='$token'";

        $activate_user_obj = mysqli_query($con, $sql);
        if ($activate_user_obj) {
            echo "Your account is activated successfully. Redirecting you to login page...";
            header('Refresh: 2; URL=login.php');
        } else {
            echo "<h4> Something went wrong. Try contacting us for receiving new activation email<h4>";
        }
        // echo 'Thanks for creating account please <a href="login.php">login </a> to continue....';
    }
}
