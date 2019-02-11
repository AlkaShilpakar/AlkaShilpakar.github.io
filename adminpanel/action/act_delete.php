<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if (isset($_POST['btn_delete'])) {
    $title=$_POST['imgname'];
    $d= $_SESSION['id'];
         
   if($title!=null){
       $query="delete from artwork where title='$title'";
   }
   else{
       header("location:../view/upload.php");
   }
    $result= mysqli_query($con, $query);
    if ($result) { 
        $_SESSION['imga']="Image Deleted Successfully.";
    }else{
        $_SESSION['imga']="Image Deleted Unsuccessful.";
        header("location:../view/Myprofile.php");
    }
    
    
    $q="select * from artist where id='$d'";
    $res= mysqli_query($con, $q);
    $data= mysqli_fetch_assoc($res);
    if ($data){
        $new=$data['id'];
        $newLocation = "../view/Myprofile.php?id=$new";
        header ("Location: $newLocation");
    }
}


