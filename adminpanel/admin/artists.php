<?php 
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if ($_SESSION['us']=="") {
    header("location:loga.php");
} 
?>
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
                        <span class="pl-5">
                            <a href="artworks.php" style="font-size: 25px; color: red;">Artworks</a></span>
                    </span>
 			
	 </div>
<div class="container">
    <div class="row pt-4 ">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>E-Mail</th>
                        <th>Address</th>
                        <th>Profile Picture</th>
                        <th>Subscribers</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "select * from artist";
                    $result = mysqli_query($con, $query);
                  
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td> <?= $data['id']?> </td>
                            <td> <?= $data['firstname'] ?> </td>
                            <td> <?= $data['lastname'] ?> </td>
                            <td> <?= $data['email'] ?> </td>
                            <td> <?= $data['address'] ?> </td>
                            <td> <?= $data['picture'] ?> </td>
                            <td> <?= $data['sub'] ?> </td>
                            <td>
                                
                                <a href="act_delete_data.php?id=<?= $data['id']?>" name="btn_del" value="Delete">Deactivate</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        <div class="col-2">
            
            <div class="row">
                <div class="col" style="color: red;">
                    <?php
                    if (isset($_SESSION['delmsg'])) {
                        echo $_SESSION['delmsg'];
                        unset($_SESSION['delmsg']);
                    }
                    ?> 
                </div>
            </div>
            
        </div>
    </div>
</div>
    </body>
    <script type="text/javascript" src="../asset/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../asset/js/popper.min.js"></script>
    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../asset/js/mdb.min.js"></script>
</html>
