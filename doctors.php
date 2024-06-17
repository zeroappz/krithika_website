<!doctype html>
<html lang="zxx">


<head>
	<!--=== Required meta tags ===-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!--=== Title ===-->
	<title>Kirthika Dental Care</title>
</head>

<body>
	<!-- Header Start -->
	<?php include 'header.php'; ?>
<body>
	<!-- Header Start -->
	<?php include 'header.php'; ?>

	<!-- Header End -->
	<!--=== Start Page Banner Section ===-->
	<section class="page-banner-section bg-color-ebeef5 ptb-100">
		<div class="container">
			<div class="page-banner-content">
				<h2>Doctors</h2>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<span class="active">Doctors</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-banner-shape-1 shape">
			<!-- <img src="assets/images/banner/banner-shape-1.png" alt="Image"> -->
		</div>
		<div class="page-banner-shape-2 shape">
			<!-- <img src="assets/images/banner/banner-shape-1.png" alt="Image"> -->
		</div>
	</section>
	<!--=== End Page Banner Section ===-->
	<!-- Header End -->
	<!--=== Start Page Banner Section ===-->
	<section class="page-banner-section bg-color-ebeef5 ptb-100">
		<div class="container">
			<div class="page-banner-content">
				<h2>Doctors</h2>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<span class="active">Doctors</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-banner-shape-1 shape">
			<!-- <img src="assets/images/banner/banner-shape-1.png" alt="Image"> -->
		</div>
		<div class="page-banner-shape-2 shape">
			<!-- <img src="assets/images/banner/banner-shape-1.png" alt="Image"> -->
		</div>
	</section>
	<!--=== End Page Banner Section ===-->

	<!--=== Start Doctors Section ===-->
	<section class="our-doctors-section mt-4 ptb-100">
		<div class="container">
			<!-- <div class="main-section-title wow fadeInUp delay-0-2s">
	<!--=== Start Doctors Section ===-->
	<section class="our-doctors-section mt-4 ptb-100">
		<div class="container">
			<!-- <div class="main-section-title wow fadeInUp delay-0-2s">
					<span class="up-title">Our Doctors</span>
					<h2>Our Experienced Dentists Strive For Improved Services</h2>
				</div> -->
			<div class="row justify-content-center">
				<?php
				// Include the database configuration file
				include_once 'config/database.php';

				// Create an instance of the Database class
				$database = new Database();
				$db = $database->getConnection();

				// Define the query to retrieve data from the users table
				// $query = "SELECT * FROM users";
				// Define the query to retrieve data from the users table and join with doctor_departments
				$query = "
SELECT users.*,doctor_departments.title
FROM users
JOIN doctor_departments ON users.department_id = doctor_departments.id
";

				// Prepare the query
				$stmt = $db->prepare($query);

				// Execute the query
				$stmt->execute();

				// Fetch all the rows from the executed query
				$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
				?>
				<?php foreach ($users as $user) : ?>
					<div class="col-lg-4 col-sm-6">



						<div class="main-doctors-item hover-style wow fadeInUp delay-0-4s doctor-p1">
							<div class="inner-border">
								<div class="doctor-img">
									<?php
									// Define the user's image path
									$userImage = !empty($user['image']) ? $user['image'] : 'assets/images/doctors/doctor-1.jpg';
									?>

									<img src="<?php echo $userImage; ?>" style ="height: 450px;width: 450px" alt="Image">

								</div>
								<h3><?php echo htmlspecialchars($user['first_name'] . '.' . $user['surname']); ?></h3>
								<!-- <span>ID: <?php echo htmlspecialchars($user['id']); ?></span><br> -->
								<span><?php echo htmlspecialchars($user['qualification']); ?></span><br>
								<span><?php echo htmlspecialchars($user['title']); ?></span><br>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>










	<!--=== End Subscribe Section ===-->

	<!-- Footer Start -->
	<?php include 'footer.php'; ?>

	<!-- Footer End -->
	<!-- Footer End -->

	<!--=== Start Copy Right Section ===-->
	<div class="copy-right-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-7">
					<p>Copyright © <span>Kirthika Dental Care</span> Is Proudly Owned by <a href="https://www.macincode.com/" target="_blank">Macincode</a></p>
				</div>
				<div class="col-lg-4 col-md-5">
					<ul>
						<li>
							<a href="terms-conditions.php">Terms & Condition</a>
						</li>
						<li>
							<a href="privacy-policy.php">Privacy Policy</a>
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

	<!-- <ul class="rtl-buy">
	<!-- <ul class="rtl-buy">
			<li>
				<a href="https://www.macincode.com/Witte Dental Care/Witte Dental Care-rtl/">RTL</a>
			</li>
			<li>
				<a href="https://themeforest.net/item/blad-ai-blood-donation-activism-campaign-html-template/41923002" target="_blank" class="bg-color">BUY</a>
			</li>
		</ul> -->

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