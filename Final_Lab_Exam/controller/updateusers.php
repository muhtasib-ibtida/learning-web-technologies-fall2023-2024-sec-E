<?php 
require_once '../Model/usermodel.php';
   
if (isset($_POST['submit'])) {
    $emp_name      = $_POST['name'];
    $emp_username = $_POST['username'];
    $contact = $_POST['contatc'];
                
    if ($emp_name == "" || $emp_username == "" || $contact == "") {
        echo "Informations cannot be null.";
    } else { 
        updateUserInfo($emp_name, $emp_username, $contact);
    }
    header('Location: ../view/viewusers.php');    
} 
?>