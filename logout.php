<?php
        session_start();
        if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
            header('Location: login.php');
        }
        else{
            session_unset();
            session_destroy();
            header('Location: login.php');
        }

?>