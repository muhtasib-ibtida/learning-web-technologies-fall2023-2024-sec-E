<?php
require_once('../model/emp_model.php');

if (isset($_GET['empid'])) {   
    $id = $_GET['empid'];
    delemp($id);
    } else {
        echo "Operation Failed!";
    }
?>