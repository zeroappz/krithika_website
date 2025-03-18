<?php
// doctors.php

// Include the database configuration file
include_once 'config/database.php';

// Create an instance of the Database class
$database = new Database();
$db = $database->getConnection();

// Fetch doctors' details from the database
$query = "
	SELECT users.*, doctor_departments.title
	FROM users
	JOIN doctor_departments
	ON users.department_id = doctor_departments.id
	ORDER BY users.employee_number;
";

// Prepare the query
$stmt = $db->prepare($query);

// Execute the query
$stmt->execute();

// Fetch all the rows from the executed query
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="zxx">

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
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!--=== Title ===-->
	<title>Kirthika Dental Care</title>
</head>

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
					<li><a href="index.php">Home</a></li>
					<li><span class="active">Doctors</span></li>
				</ul>
			</div>
		</div>
		<div class="page-banner-shape-1 shape"></div>
		<div class="page-banner-shape-2 shape"></div>
	</section>
	<!--=== End Page Banner Section ===-->

	<!--=== Start Doctors Section ===-->
	<section class="our-doctors-section mt-4 ptb-100">
		<div class="container">
			<div class="row justify-content-center">
				<?php foreach ($users as $user) : ?>
					<div class="col-lg-4 col-sm-6">
						<div class="main-doctors-item hover-style wow fadeInUp delay-0-2s">
							<div class="inner-border">
								<div class="doctor-img">
									<img src="<?php echo !empty($user['image']) ? htmlspecialchars($user['image']) : 'assets/doctors/beautiful-young-female-doctor-looking-camera-office_1301-7807.avif'; ?>" alt="Doctor Image" width="300" height="300">
								</div>
								<h3><?php echo htmlspecialchars($user['first_name']); ?></h3>
								<span><?php echo htmlspecialchars($user['qualification']); ?></span><br>
								<span><?php echo htmlspecialchars($user['title']); ?></span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--=== End Doctors Section ===-->

	<!-- Footer Start -->
	<?php include 'footer.php'; ?>
	<!-- Footer End -->

	<!--=== JS Link ===-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.meanmenu.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>