<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");

    $query="delete from artist where id=".$_GET['id'];
    $result= mysqli_query($con, $query);
    if ($result) {
        $_SESSION['delmsg']="Delete Successful";
        header('location:artists.php');
    }
    else{
        $_SESSION['delmsg']="Delete Unsuccessful";
        header('location:artists.php');
    }


