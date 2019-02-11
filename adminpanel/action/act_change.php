<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if (isset($_POST['btn_change'])) {
     $d= $_SESSION['id'];
       $img=$_FILES['change']['name'];
    $img_tmp=$_FILES['change']['tmp_name'];
    move_uploaded_file($img_tmp, "../images/profiles/".$img);        

    $query="UPDATE artist
                SET picture = '$img'
                WHERE id = '$d'";
    $result= mysqli_query($con, $query);
    if ($result) { 
        $_SESSION['img']="Image change Successful.";
    }else{
        $_SESSION['img']="Image Uploaded Unsuccessful.";
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
