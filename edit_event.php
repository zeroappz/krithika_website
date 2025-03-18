<?php
session_start();
include 'config/database.php';

if(isset($_SESSION["email"])) {

} else {
    header('Location: index.php');
}

try {

    $id = $_GET['id'];
    $stmt = $connect->prepare("SELECT * FROM events WHERE id=? LIMIT 1");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

} catch(PDOException $error) {
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
                    <h3 class="wow fadeInUp delay-0-8s">Update Events</h3>
                    

                    <?php echo  $message; ?>
                    <form class="appointment wow fadeInUp delay-0-1s" action="update_events.php" method="post" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="file" name="image" class="form-control" id="image" placeholder="image" value="" autofocus>
                                            <label for="image" class="form-label">Image</label>
                                            <div class="invalid-feedback"> Valid patient Email id is required.</div>
                                              <div class="form-floating form-group">
                                           <img src="<?php echo $row['image']?>" height="200" width="200">
                                        </div>
                                        </div>

                                        <input type="hidden" name="old_image" value="<?php echo $row['image']?>">
                                    </div>
                                    <div class="col-lg-12 col-sm-12"></div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?php echo $row['title']?>" required="">
                                            <label for="title" class="form-label">Title</label>
                                            <div class="invalid-feedback"> Valid Password is required.</div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="text" name="description" class="form-control" id="description" placeholder="description" value="<?php echo $row['description']?>" required="">
                                            <label for="description" class="form-label">Description</label>
                                            <div class="invalid-feedback"> Valid Password is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="text" name="event_date" class="form-control" id="event_date" placeholder="event_date" value="<?php echo $row['event_date']?>" required="">
                                            <label for="event_date" class="form-label">Event Date</label>
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