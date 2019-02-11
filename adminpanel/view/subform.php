<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="../asset/css/all.css">
        <script type="text/javascript" src="../asset/js/script.js"></script>
</head>
<body>
    <div class="container-fluid bgimage">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card mt-5 pt-10 shadow-lg" style="width: 30rem;">
                    <?php $g=$_GET['id'];?>
				  <h4 class="card-header bg-info text-light text-center">
				    <strong>Subscribe</strong>
				  </h4>
				  <div class="card-body mt-3">
                                      <form class="text-center" action="../action/act_subscribe.php?id=<?php echo $g?>" method="post">
				      <div class="form-group">
                                          <input type="text" id="FullName" name="fullname" class="form-control" placeholder="Name">
				      </div>
                                      <div class="form-group">
                                          <input type="email" id="Email" name="email" class="form-control" placeholder="Email">
				      </div>
				      
				      <button class="btn btn-outline-info btn-rounded" type="submit" name="btn_sub" value="Counter">Subscribe</button>
				    <div class="row">
                <div class="col">
                    <span style="color: red;">
                    <?php
                    if (isset($_SESSION['emsg'])) {
                        echo $_SESSION['emsg'];
                        unset($_SESSION['emsg']);                   
                        }
                        ?> </span>
                </div>
                </div>
				    </form>
				  </div>
				</div>
            </div>
        </div>
    </div>
</body>
</html>

