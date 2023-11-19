<?php 
    session_start();
    unset($_SESSION['flag']);
    unset($_SESSION['userid']);
    header('location: ../view/login.php');
?>