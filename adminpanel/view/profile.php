<?php
    session_start();
    $con= mysqli_connect("localhost", "root", "", "gallery");
    include '../includes/header.php';
    include '../includes/nav.php';
?>
<div class="container-fluid">
    <div class="container">
        <span class="col-12 bodystyle">Artists</span>

    <div class="row pt-2">
       <?php
        $query = "select * from artist";
        $result = mysqli_query($con, $query);
        while ($data = mysqli_fetch_assoc($result)) {
            ?>
        <div class="col-4">
        <div class="card shadow-sm testimonial-card p-2">
            <div class="card-up indigo lighten-1">
                </div>
                <div class="avatar mx-auto white"><img src="../images/profiles/<?= $data['picture']?>" height="250px" width="250px" class="rounded-circle">
		</div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $data['firstname']?> <?= $data['lastname']?></h4>
				        <hr>
                            <p><i class="fa fa-quote-left"></i><?= $data['about']?></p>
                    </div>
            <?php 
            $fn=$data['firstname'];
            $que="select id from artist where firstname='$fn'";
            $res= mysqli_query($con, $que);
            $d= mysqli_fetch_assoc($res);
            if ($d){
                $newid=$d['id'];
            }
            ?>
            <div class="p-2">
                <span class="float-right">
                    <a href="../profiles/profile1.php?id=<?php echo $d['id']?>"><button class=" btn btn-outline-danger">View Profile</button></a>
                    
            </div>
	</div>
    </div>
        <?php
            }
        ?>
        
	</div>
    </div>
        </div>

<?php include '../includes/footer.php'; ?>



