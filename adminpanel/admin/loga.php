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
</head>
<body>
	<div class="container-fluid bgimage">
     	<div class="row">
     		<div class="col-4"></div>
				<div class="col-4">
				<div class="card mt-5 pt-10 shadow-lg" style="width: 30rem;">
				  <h4 class="card-header bg-info text-light text-center">
				    <strong>Admin Sign in</strong>
				  </h4>
				  <div class="card-body mt-3">
                                      <form class="text-center" action="../action/act_logina.php" method="post">
				      <div class="form-group">
                                          <input type="text" id="text" name="text" class="form-control" placeholder="Username">
				      </div>
				      <div class="form-group">

                                          <input type="password" id="Password" name="password" class="form-control" placeholder="Password">
				      </div>
				      <button class="btn btn-outline-info btn-rounded" type="submit" name="btn_logina" value="Save">Log in</button>
                                      
                                      <div class="form-group mt-3">
                                          <span style="color: red;">
                                       <?php
                                            if (isset($_SESSION['us'])) {
                                                    echo $_SESSION['us'];
                                                    unset($_SESSION['us']);                   
                                                    }
                                                    ?> </span>
				      
				    </div>
                                      
				    </form>
				  </div>
				</div>
	        </div>
     	</div>
     </div>


   <script type="text/javascript" src="../asset/js/jquery-3.3.1.slim.min.js"></script>
   <script type="text/javascript" src="../asset/js/popper.min.js"></script>
   <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
</body>
</html>

