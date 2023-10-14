<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "Null value";
} else {
    if (preg_match("/^[a-zA-Z0-9_.-]{2,}$/", $username) && strlen($password) >= 8 && preg_match("/[@#\$%]/", $password)) {
        header('Location: homepage.php');
    } else {
      
        header('Location: Loginform.html');
    }
}
?>
