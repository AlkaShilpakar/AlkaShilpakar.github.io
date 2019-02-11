<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");

    $query="delete from artwork where id=".$_GET['id'];
    $result= mysqli_query($con, $query);
    if ($result) {
        $_SESSION['msg']="Delete Successful";
        header('location:artworks.php');
    }
    else{
        $_SESSION['msg']="Delete Unsuccessful";
        header('location:artworks.php');
    }

