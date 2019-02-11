<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if (isset($_POST['btn_login'])) {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    
    $query="select * from artist where email='$email' and  password='$password'";
    $result= mysqli_query($con, $query);
    $data= mysqli_fetch_assoc($result);
    if ($data['email'] == $email && $data['password'] == $password){
        $id=$data['id'];
        $_SESSION['user']="Login Successful.";
        $_SESSION['username']=$data['username'];
        $_SESSION['id']=$data['id'];

        $newLocation = "../view/Myprofile.php?id=$id";
        header ("Location: $newLocation");
    }
    else{
        $_SESSION['user']="Invalid Email or Password";
        header("location:../view/login.php");
    }
    
}


