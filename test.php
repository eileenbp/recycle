<?php
    session_start();

    unset($_SESSION['user-login']);

    header("Location: index.php");

    die;



?>