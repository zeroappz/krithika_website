<?php
session_start();

include 'config/database.php';
try {

    if(isset($_POST["login"])) {

        if(empty($_POST["email"]) || empty($_POST["password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                      'email'     =>     $_POST["email"],
                      'password'     =>     md5($_POST["password"])
                 )
            );
            $count = $statement->rowCount();
            if($count > 0) {


                $email = $_POST["email"];
                $stmt = $connect->prepare("SELECT * FROM users WHERE email = :email");
                // Bind the ID parameter
                $stmt->bindParam(':email', $email);
                // Execute the query
                $stmt->execute();
                // Fetch the result
                $user_result = $stmt->fetch(PDO::FETCH_ASSOC);



                $_SESSION["email"] = $_POST["email"];
                $_SESSION["role_id"] = $user_result["role_id"];
                $_SESSION["id"] = $user_result["id"];
                header("location:doctors_list.php");
            } else {
                $message = '<label style="color:red">Invalid user</label>';
            }
        }
    }
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
    <?php include 'header.php';?>

    <!-- Header End -->


    <br>
    <!--=== Start Banner Section ===-->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-6">
                    <h3 class="wow fadeInUp delay-0-8s">Admin Login</h3>
                    <br>


                    <?php echo $message; ?>
                    <form class="appointment wow fadeInUp delay-0-1s" action="adminlogin.php" method="post">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="email" name="email" class="form-control" id="emailid" placeholder="Email id" required="" autofocus>
                                            <label for="emailid" class="form-label">Email</label>
                                            <div class="invalid-feedback"> Valid patient Email id is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12"></div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-floating form-group">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="invalid-feedback"> Valid Password is required.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <button type="submit" class="main-btn" name="login">
                                            <span>Login</span>
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
    <?php include 'footer.php';?>

    <!-- Footer End -->
    <!--=== Start Copy Right Section ===-->
    <div class="copy-right-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <p>Copyright © <span>Kirthika Dental Care</span> All RIghts Reserved <a href="https://macincode.com/" target="_blank">Macincode</a></p>
                </div>
                <div class="col-lg-4 col-md-5">
                    <ul>
                        <li>
                            <a href="404.php">Terms & Condition</a>
                        </li>
                        <li>
                            <a href="404.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--=== Start back To Top Section ===-->
        <div class="back-to-top">
            <i class="icofont-simple-up"></i>
        </div>
        <!--=== End Back To Top Section ===-->
    </div>
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