<?php
        session_start();
        $_SESSION['email']=$_REQUEST['email'];
        // $email = $_REQUEST['email'];

        echo("Email: " . $email);
?>