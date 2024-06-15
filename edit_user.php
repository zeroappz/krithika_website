<?php  
session_start();
include 'conn.php';
 
if(isset($_SESSION["email"])){

}
else{
    header('Location: index.php');  
}

 try  
 {  

$id = $_GET['id'];
$stmt = $connect->prepare("SELECT * FROM users WHERE id=? LIMIT 1"); 
$stmt->execute([$id]); 
$row = $stmt->fetch(PDO::FETCH_ASSOC);

 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  


<!doctype html>
<html lang="en">

<head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--=== CSS Link ===-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--=== Favicon ===-->
    <link rel="icon" type="image/png" href="assets/images/kirthika.png" style="width:80px; height:107px !important;">
    <!--=== Title ===-->
    <title>Kirthika Dental Care</title>
</head>

<body>
    <!-- Header Start -->
    

    <!-- Header End -->
<a href="logout.php" style="float: right; margin-right:50px!important" class="main-btn">Logout</a>

    <br>
    <!--=== Start Banner Section ===-->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-6">
                
                    <br>
                    <h3 class="wow fadeInUp delay-0-8s">Update User</h3>
                    

                    <?php echo  $message; ?>
                    <form class="appointment wow fadeInUp delay-0-1s" action="update_user.php" method="post" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="row">
                                   <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <!-- <input type="file" name="image" class="form-control" id="image" placeholder="image" value="" required="" autofocus> -->
<select name="role_id" class="form-control">
                               
<?php

  $stmt = $connect->prepare(
                                "SELECT * FROM role");
                        $stmt->execute();
                        $details = $stmt->fetchAll();
                        foreach($details as $role_details)
                        {
                            ?>
                        <option value="<?php echo $role_details['id']?>" <?php if($role_details['id'] == $row['role_id']) { ?> selected="selected"<?php } ?>><?php echo $role_details['role_name']?></option>
                            <?php

                        }
?>
</select>



                                            <label for="image" class="form-label">Role</label>
                                            <div class="invalid-feedback"> Valid patient Email id is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12"></div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="text" name="email" class="form-control" id="email" placeholder="email" value="<?php echo $row['email']?>" required="">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="invalid-feedback"> Valid Password is required.</div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <input type="hidden" name="id" value="<?php echo $row['id']?>">

                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <button type="submit" name="submit" class="main-btn">
                                            <span>Update</span>
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-6 col-sm-6">
                                        <button type="submit" class="main-btn1">
                                            <span>Cancel</span>
                                        </button>
                                    </div> -->

                                </div>
                               <!--  <div class="row">
                                    <div class="col-lg-3 col-sm-3"></div>
                                    <div class="col-lg-8 col-sm-8">
                                        Don't have an account?
                                        <a href="register.php">Register </a>
                                    </div>
                                </div> -->
                            </div>


                        </div>
                    </form>

                    <!-- <div class="banner-shape-2 shape">
							<img src="assets/images/banner/banner-shape-2.png" alt="Image">
						</div> -->
                </div>
            </div>


        </div>
        </div>
        <!-- <div class="banner-shape-1 shape">
			<img src="assets/images/banner/banner-shape-1.png" alt="Image">
		</div> -->
    </section>
    <!--=== End Banner Section ===-->

    <!-- Footer Start -->
  

    <!-- Footer End -->
    <!--=== Start Copy Right Section ===-->
    
    <!--=== End Copy Right Section ===-->



    <!--=== JS Link ===-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/carousel-thumbs.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>