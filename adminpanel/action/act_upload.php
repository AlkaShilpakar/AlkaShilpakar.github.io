<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if (isset($_POST['btn_upload'])) {
    $title=$_POST['imagename'];
    $category=$_POST['category'];
    $description=$_POST['desc'];
    $img=$_FILES['image']['name'];
    $d= $_SESSION['id'];
    $img_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($img_tmp, "../images/uploads/".$img);
         
   if($title!=null && $category!=null && $img!=null){
       $query="insert into artwork(title,category,description,image,u_id)"."values('$title','$category','$description','$img','$d')";
   }
   else{
       header("location:../view/upload.php");
   }
    $resul= mysqli_query($con, $query);
    if ($resul) { 
        $_SESSION['img']="Image Uploaded Successfully.";
    }else{
        $_SESSION['img']="Image Upload Unsuccessful.";
        header("location:../view/Myprofile.php");
    }
    
    $a=mysqli_query($con,"select * from users where aid='$d'");
   $row=mysqli_fetch_assoc($a);
    $to=$row['email'];
    $subject="New Upload";
    $txt="Hello, Your favourite artist has uploaded a new artwork. Check it out on by visiting their profile on ArtMela. ";
    $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";
    $success = mail($to, $subject, $txt, $headers);

    $q="select * from artist where id='$d'";
    $res= mysqli_query($con, $q);
    $data= mysqli_fetch_assoc($res);
    if ($data && $success == TRUE){
         $_SESSION['msg'] = "Notifications sent";
        $new=$data['id'];
        $newLocation = "../view/Myprofile.php?id=$new";
        header ("Location: $newLocation");
    }
    else{
    $_SESSION['msg'] = "fail";
    header('location:../view/upload.php');
}
}
