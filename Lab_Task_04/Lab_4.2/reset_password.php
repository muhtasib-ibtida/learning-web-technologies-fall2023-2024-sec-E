<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $retype_password = $_POST["retype_password"];


    if ($new_password == $retype_password) {

        echo "New Password set.";
    } else {
        echo "New Password and Retype Password do not match.";
    }
}
?>
