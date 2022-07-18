<?php
require "links.php";
session_start();
if (isset($_SESSION['submit_btn'])) {
    echo "Thanks for creating account. Please your inbox for receiving activation link";
    unset($_SESSION['signup']);
    unset($_SESSION['submit_btn']);
    // echo 'Thanks for creating account please <a href="login.php">login </a> to continue....';
} else {
    echo '<h3 class="display-3">   Page NOT FOUND </h> ';
}
