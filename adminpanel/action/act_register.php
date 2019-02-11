<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");

if(isset($_POST['btn_register'])){
    $valid=TRUE;
    if($_POST['firstname']== ""){
        $valid=false;
        $_SESSION['fmsg']="[Please enter firstname]";
        header("location:../view/home.php");
    }
    if($_POST['lastname']== ""){
        $valid=false;
        $_SESSION['lmsg']="[Please enter lastname]";
        header("location:../view/home.php");
    }
    if($_POST['password']== ""){
        $valid=false;
        $_SESSION['pamsg']="[Invalid Password]";
        header("location:../view/home.php");
    }
    if($_POST['email']== ""){
        $valid=false;
        $_SESSION['emmsg']="[Invalid email]";
        header("location:../view/home.php");
    }
    if($_POST['address']== ""){
        $valid=false;
        $_SESSION['amsg']="[Enter address]";
        header("location:../view/home.php");
    }

    
}

if (isset($_POST['btn_register'])) {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=md5($_POST['password']);
    $addr=$_POST['address'];
    $abo=$_POST['about'];
    $imag=$_FILES['pic']['name'];
    $imag_tmp=$_FILES['pic']['tmp_name'];
    move_uploaded_file($imag_tmp, "../images/profiles/".$imag);
    
    if($fname!=null && $lname!=null && $email!=null && $pass!=null){
        $query="insert into artist(firstname,lastname,email,password,address,about,picture)".
            "values('$fname','$lname','$email','$pass','$addr','$abo','$imag')";     
    }
    else{
         header("location:../view/register.php");
    } 
       
    $result= mysqli_query($con, $query); 
    
   if ($result){
        $_SESSION['user']="Register Successful.";
        header("location:../view/login.php");
    }
    else{
        $_SESSION['user']="Register Failed.";
        header("location:../view/register.php");
    }
}
?>

