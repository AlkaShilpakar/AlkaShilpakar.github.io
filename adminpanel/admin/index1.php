<?php 
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if ($_SESSION['us']=="") {
    header("location:loga.php");
} ?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="../asset/css/all.css">
    </head>
    <body>
     
 		<div class="row headercolor shadow-lg mb-1">
 		
 			<div class="col-6 text-light">
 				<div class="row">
                     <img src="../images/6.png" height="70px" width="80px">
                     <h2 class="mt-3" style="font-family:Jokerman; color: #4a148c; font-size: 34px">ARTMELA</h2>
                 </div>
 			</div>
                    <div class="col-3"></div>
                    <span class="p-3" >
                        <a href="artists.php" style="font-size: 25px; color: red;">Artists</a>
                        <span class="pl-3">
                            <a href="artworks.php" style="font-size: 25px; color: red; ">Artworks</a></span>
                        <span class="pl-5">
                            <a href="logout.php" style="font-size: 25px; color: red; ">Log Out</a></span>
                    </span>
 			
	 </div>
        <div class="container">
            <div class="row pt-5" style="font-family: cambria; font-size: 70px; color: darkblue;">
            WELCOME ADMIN
        </div></div>
        
  <!--###########################################################################-->

	 	 
    
        
        
    </body>
    <script type="text/javascript" src="../asset/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../asset/js/popper.min.js"></script>
    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../asset/js/mdb.min.js"></script>
</html>



