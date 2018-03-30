<?php
    require_once('auth.php');
    session_destroy();
    header("location: home1.php");
    exit();
?>