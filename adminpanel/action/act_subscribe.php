<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");


if (isset($_POST['btn_sub'])) {
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $g=$_GET['id'];
    
    $a="SELECT * FROM artist where id='$g'";
    $ra=mysqli_query($con,$a);
    $b=mysqli_fetch_assoc($ra);
    $_SESSION['counter']=$b['sub'];


    $q="SELECT * FROM users WHERE email='$email' and aid='$g'";
    $ch = mysqli_query($con, $q);
    $chec = mysqli_fetch_array($ch);
    $emailcheck = $chec['email'];

  if($emailcheck == $email){
      $_SESSION['emsg']="You are already subscribed";
  }
  else{
        $query="insert into users(fullname,email,aid)".
            "values('$fname','$email','$g')";     
  }
       
    $result= mysqli_query($con, $query); 
    if ($result){   
        $s=++$_SESSION['counter']; 

        $qu="update artist set sub='$s' where id='$g'";
        $r=mysqli_query($con,$qu);
        header("location:../profiles/profile1.php?id=$g");
    }
    else{        
        header("location:../view/subform.php?id=$g");
    }
   
}
?>

