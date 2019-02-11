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
     		<div class="col-3"></div>
     		<div class="col-6">
		<div class="card bg-light m-5 shadow-lg">
	    <h3 class="card-header bg-info text-center text-light pt-3">
	        <strong>Upload Art</strong>
	    </h3>
	    <div class="card-body">	    	
                <form class="text-center" action="../action/act_upload.php" method="post"  enctype="multipart/form-data">
	            <div class="form-group mt-2">
		         <div class="form-row">
                             <div class="col">
                                 <label>Image Title</label>
                                  <input type="text" id="imagename" name="imagename" class="form-control" placeholder="Enter Your Image Title.">
			    </div>
                             
                             <div class="col">
                                <label>Category</label>                  
                                  <select class="form-control" name="category">                                                               
                                      <option>Water color</option>              
                                      <option>Potrait</option>
                                      <option>Landscape</option>  
                                      <option>Oil Painting</option>
                                  </select>                               
                             </div>                              
                         </div>
                        <div class="form-group mt-4">
                            <label>Description</label>
                            <textarea type="text" rows="3" class="form-control" name="desc"></textarea>
                        </div>
                       <div class="form-group">
                           <label><h5>Image</h5></label>
                    <input type="file" name="image">
                     </div>
                        <div class="form-group text-center">
                    <input type="submit" class="btn btn-outline-primary" name="btn_upload" value="Upload">
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


