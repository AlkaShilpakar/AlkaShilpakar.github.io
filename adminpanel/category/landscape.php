<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");

include '../includes/header.php';
include '../includes/nav.php';
?>
<div class="container-fluid cardstyle">
    <div class="container">   
        <div class="row pt-3">
            
            <span class="bodystyle">Artworks: Landscape</span>
        </div>
        <div class="row pt-3">
             <?php
            $sql = "select * from artwork where category='landscape'";
            $res = mysqli_query($con, $sql);
            while ($get = mysqli_fetch_assoc($res)) {
            ?>
            <span class="p-4 col-4">
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" height="250px" width="270px" src="../images/uploads/<?= $get['image']?>">
            <div class="card-body">
            <?php
            $a=$get['u_id'];
            $q = "select * from artist where id='$a'";
            $resu = mysqli_query($con, $q);
            $g = mysqli_fetch_assoc($resu);
            ?>
                <h4 class="card-title">By: <?= $g['firstname']?> <?= $g['lastname']?></h4>           
                <h5 class="card-title">Title: <?= $get['title']?></h5>
                <p class="card-text">Category: <?= $get['category']?> </p>
                 <a href="../profiles/profile1.php?id=<?php echo $g['id']?>"><button class=" btn btn-outline-danger float-right">View Profile</button></a>
            </div>
            </div>
            </span>
            <?php }?>
        </div>

    </div>
         
</div>

<?php include '../includes/footer.php'; ?>