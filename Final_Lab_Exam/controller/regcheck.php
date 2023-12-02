<?php 
    require_once '../Model/usermodel.php';
   
    if (isset($_POST['submit'])) {
                $emp_name      = $_POST['name'];
                $emp_username = $_POST['username'];
                $contact = $_POST['contact'];
                $pass        = $_POST['password'];
                
            insertUserData($emp_name,$emp_username,$contact,$pass);
            header('location: ../view/login.php');
        }
?>