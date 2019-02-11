<?php
    session_start();
    $con= mysqli_connect("localhost", "root", "", "gallery");
    include '../includes/header.php';
    include '../includes/nav.php';
                
            $query = "select * from artist where id=".$_GET['id'];
            $result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);           
?>
<div class="container-fluid">
    <div class="container">
        <div class="row  pt-3">
            <div class="col-1"></div>
            <div class="col-4">
                <img src="../images/profiles/<?= $data['picture']?>" height="320px" width="320px" class="rounded-circle">
            </div>
            <div class="col-7 pt-5">
                <div>
                    <h3><?= $data['firstname']?> <?= $data['lastname']?><span class="p-5"><input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
                            <a class=" btn btn-outline-danger" href="../view/subform.php?id=<?php echo $data['id']?>" >
                                <h6>Subscribe</h6></a>
                        
                        <?php echo $data['sub'] ?></span></h3>
                    <h4><?= $data['address']?></h4>
                    
                </div>
                
                <div class="pt-4">
                    <span class="pstyle"><h4>About <?= $data['firstname']?></h4></span>
                    <h5><?= $data['about']?></h5>
                     
                </div>
                <div class="pt-3 pstyle"><h5> If you like my artworks, Contact me at <?= $data['email']?><br> and press the subscribe button to get notified whenever I upload new Art.</h5></div>           
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
            $sql = "select * from artwork where u_id=".$_GET['id'];
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

    
<?php include '../includes/footer.php'; ?>