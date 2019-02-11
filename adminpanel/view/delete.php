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
				    <strong>Delete Art</strong>
				  </h4>
				<div class="card-body">	    	
                <form class="text-center" action="../action/act_delete.php" method="post"  enctype="multipart/form-data">
	            <div class="form-group mt-2">
		         <div class="form-row">
                             <div class="col">
                                 <label>Image Title</label>
                                  <input type="text" id="imgname" name="imgname" class="form-control" placeholder="Enter Your Image Title.">
			    </div>                  
                         </div>
                        <div class="form-group text-center mt-4">
                    <input type="submit" class="btn btn-outline-primary" name="btn_delete" value="Delete">
                        </div>
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


