<?php
    session_start();

    if (isset($_SESSION["username"])) {
        session_destroy();
        header("Location: /views/pages/auth/sign-in.php");
    }else{
        header("Location: /views/pages/auth/sign-in.php");
    }
