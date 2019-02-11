<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");
    include '../includes/header.php';
    include '../includes/nav.php';
?>
<div class="container-fluid">	
 	<div class="row">
 		<div class="col-1"></div>	 
		 <div class="col-10">
		 	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/uploads/20.jpg" alt="First slide" width="800px" height="500px">
		        <div class="carousel-caption d-none d-md-block">

                     <p></p>
                </div>
		    </div>
		    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/uploads/21.jpg " alt="Second slide" width="800px" height="500px">
		    </div>
		    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/uploads/24.jpg" alt="Third slide" width="800px" height="500px">
		    </div>
		    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/uploads/31.jpg" alt="Third slide" width="800px" height="500px">
		    </div>
		    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/uploads/22.jpg" alt="Third slide" width="800px" height="500px">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="col-1"></div>
	</div>
 </div>

 <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

 <div class="container_fluid">
 	<div class="row shadow-sm mt-3">
			<span class="col-12 estyle">Br</span>
		</div>
 </div>

 <div class="container_fluid">
 	<div class="row">
 	<div class="col-1"></div>
 	<div class="col-10">
 	<div class="row mt-3">
			<span class="col-12 bodystyle">Popular artists</span>
		</div>
	</div>
	<div class="col-1"></div>
</div>
 </div>

<div class="container-fluid">
	<div class="row">
	<div class="col-1"></div>
	<div class="col-10">
		<div class="row mt-3">
                    <?php 
                        $sql = "select * from artist where sub > 1";
                        $res = mysqli_query($con, $sql);
                        while ($get = mysqli_fetch_assoc($res)) {
                        ?>
			<div class="col-4">
				<div class="card shadow-sm testimonial-card">
				    <div class="card-up indigo lighten-1">
				    </div>
                                    <div class="avatar mx-auto white"><img src="../images/profiles/<?= $get['picture']?>" height="250px" width="250px" class="rounded-circle p-2">
				    </div>
				    <div class="card-body">
				        <h4 class="card-title"><?= $get['firstname']?> <?= $get['lastname']?></h4>
				        <hr>
				        <p><i class="fa fa-quote-left"></i><?= $get['about']?></p>
				    </div>
                                    <?php 
            $fn=$get['firstname'];
            $que="select id from artist where firstname='$fn'";
            $re= mysqli_query($con, $que);
            $d= mysqli_fetch_assoc($re);
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
                  <?php } ?>
			
				   
		</div>
	</div>
	<div class="col-1"></div>
</div>
</div>

<div class="container_fluid">
 	<div class="row shadow-sm mt-4">
			<span class="col-12 estyle">Br</span>
		</div>
 </div>

 <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

 

<?php include '../includes/footer.php'; ?>

