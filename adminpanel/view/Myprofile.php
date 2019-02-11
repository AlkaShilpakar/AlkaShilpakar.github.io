<?php 
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
if ($_SESSION['user']=="") {
    header("location:login.php");
}
include '../includes/header.php';
include '../includes/nav1.php';

        $query = "select * from artist WHERE ID=".$_SESSION['id'];
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_assoc($result);
?>

<div class="container-fluid">
    <div class="container">
        <div class="row  pt-3">
            <div class="col-1"></div>
            <div class="col-4">
                <span class="p-2"><img src="../images/profiles/<?= $data['picture']?>" height="320px" width="320px" class="rounded-circle"></span>
                <span class="pl-4"><a href="../profiles/change.php" ><h6>Change Profile Picture</h6></a> 
                </span>
            </div>
            <div class="col-7 pt-4">
                <div class="row">
                <div class="col-5">
                    <h3><?= $data['firstname']?> <?= $data['lastname']?></h3>
                  </div>   
                    <div class="col-7 pl-5" style="font-size: 20px; color: red;">
                         Subscribers: <?php echo $data['sub']?></div>
    
                </div>  
                <h4><?= $data['address']?></h4>
                
                <div class="pt-4">
                    <span class="pstyle"><h4>About <?= $data['firstname']?></h4></span>
                    <h5><?= $data['about']?></h5>
                     
                </div>
               <div class="pt-3 pstyle"><h5> If you like my artworks, Contact me at <?= $data['email']?></h5></div>
               <div class="pt-5">
                  
                   <span class="pt-5"><a href="upload.php" class=" btn btn-outline-danger"><h6>Upload Art</h6></a>
                       <span class="p-4"><a href="delete.php" class="btn btn-outline-danger"><h6>Delete Art</h6></a></span>
                   <span style="color: red;">   <?php
                        if (isset($_SESSION['img'])) {
                        echo $_SESSION['img'];
                        unset($_SESSION['img']);                   
                        }
                        ?> </span><span style="color: red;">   <?php
                        if (isset($_SESSION['imga'])) {
                        echo $_SESSION['imga'];
                        unset($_SESSION['imga']);                   
                        }
                        ?> </span>
                   <span style="color: red;">   <?php
                        if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);                   
                        }
                        ?> </span>
                   </span>
                  
               </div>
                    
            </div>

        </div>
    </div>
</div>
    <div class="container_fluid">
 	<div class="row shadow-sm pt-3">
            <span class="col-12 estyle">Br</span>
        </div>
    </div>

<div class="container-fluid">
    <div class="container">
        <div class="row pt-3">
            
            <span class="bodystyle">My Artworks</span>
        </div>
        <div class="row pt-3"> 
            
            <?php
            $sql = "select * from artwork where u_id=".$_SESSION['id'];
            $res = mysqli_query($con, $sql);
            while ($get = mysqli_fetch_assoc($res)) {
            ?>
            
            <div class="center pt-4">
                <img class="" height="500px" width="800px" src="../images/uploads/<?= $get['image']?>" >
                <div class="text-center">
                    <h5 class="pt-1"><?= $get['title']?></h5>
                    <p><?= $get["category"]?> </br> <?= $get["description"]?></p>
                </div>
            </div>          
            <?php
            }
            ?>
            
        </div>
    </div>
</div>

 <?php include '../includes/footer.php';?> 



