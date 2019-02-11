<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if (isset($_POST['btn_logina'])) {

    $name=$_POST['text'];
    $password=$_POST['password'];
    if ($name== ('admin') && $password== ('admin')){
        $_SESSION['us']="Login Successful.";

        $newLocation = "../admin/index1.php";
        header ("Location: $newLocation");
    }
    else{
        $_SESSION['us']="Invalid Email or Password";
        header("location:../admin/loga.php");
    }
    
}

