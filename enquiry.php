<!doctype html>
<html lang="zxx">



<head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--=== CSS Link ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<<<<<<< HEAD
    <title>Witte Dental Care</title>
=======
    <title>Kirthika Dental Care</title>
>>>>>>> 5cd01a3688f546cff6fd83af87dd1ce9ba1977e1
    <style>
        /* Add this CSS to your stylesheet */
        textarea.auto-resize {
            resize: vertical;
            /* Allow vertical resizing */
            min-height: 100px;
            /* Set a minimum height */
        }

        /* Add this CSS to your stylesheet */
        /* Add this CSS to your stylesheet */
        .btn-hover:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
    <!-- Header Start -->
    <?php include 'header.php'; ?>

    <!-- Header End -->

    <!--=== Start Contact Us Section ===-->
    <section class="contact-us-section pt-100 pb-70">
        <div class="container">
            <div class="main-section-title wow fadeInUp delay-0-2s">
                <h2>We are here for You.</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <form action="api/store_enquiry.php" method="POST" enctype="multipart/form-data">
                        <div class="main-contact-info-item hover-style wow fadeInUp delay-0-2s contact3">
                            <div class="inner-border">


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; border-bottom-color: lightgray; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-user" style="height: 40px; width: 40px; color: blue;"></i></span>
                                                </div>
                                                <input type="text" name="patient_name" class="form-control" style="border: none; border-bottom: 1px solid black; width: 400px;  background-color: transparent;" required placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; border-radius: 0.25rem; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-cogs" style="height: 40px; width: 40px; color: green;"></i></span>
                                                </div>
                                                <select name="service_name" class="form-control" style="border: none; border-bottom: 1px solid black; width: 400px;  background-color: transparent;" required placeholder="Select Your Services">
                                                    <option value="">-Select Your Services-</option>
                                                    <option value="Oral Medicine and Pathology">Oral Medicine and Pathology</option>
                                                    <option value="Restorative Dentistry">Restorative Dentistry</option>
                                                    <option value="Endodontics">Endodontics</option>
                                                    <option value="Periodontics">Periodontics</option>
                                                    <option value="Oral and maxillo facial surgery">Oral and maxillo facial surgery</option>
                                                    <option value="Prosthodontics">Prosthodontics</option>
                                                    <option value="Orthodontics">Orthodontics</option>
                                                    <option value="Implant Dentistry">Implant Dentistry</option>
                                                    <option value="Laser Dentistry">Laser Dentistry</option>
                                                    <option value="Pediatric Dentistry">Pediatric Dentistry</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 50px; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-mobile" style="height: 40px; width: 40px; color: red;"></i></span>
                                                </div>
                                                <input type="tel" name="mobile_number" class="form-control" style="border: none; border-bottom: 1px solid black; width: 400px;  background-color: transparent;" required placeholder="Enter Your Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-calendar" style="height: 40px; width: 40px; color: orange;"></i></span>
                                                </div>
                                                <input type="text" name="appointment_date" id="appointment_date" class="form-control" style="border: none; border-bottom: 1px solid black; width: 400px;  background-color: transparent;" placeholder="Appointment Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-calendar-check-o" style="height: 40px; width: 40px; color: purple;"></i></span>
                                                </div>
                                                <input type="text" name="appointment_time" id="appointment_time" class="form-control" style="border: none;  border-bottom: 1px solid black; width: 400px; background-color: transparent;" placeholder="Appointment Time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-comment" style="height: 40px; width: 40px; color: brown;"></i></span>
                                                </div>
                                                <textarea name="enquiry" style="height: 55px; border: none; background-color: transparent; border-bottom: 1px solid black; width: 400px; " class="form-control" required placeholder="Enter Special Request"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="d-flex flex-wrap align-items-center">
                                    <li class="nav-item">
<<<<<<< HEAD
                                        <a href="http://witteapp.macincode.in/" class="nav-link">Already have an account?</a>
=======
                                        <a href="https://app.kirthikadentalcare.in/" class="nav-link">Already have an account?</a>
>>>>>>> 5cd01a3688f546cff6fd83af87dd1ce9ba1977e1
                                    </li>
                                    <li class="nav-item ms-auto">
                                        <div class="form-floating form-floating-outline mb-0">
                                            <button type="submit" name="submit" class="btn btn-primary btn-hover me-2">Inquiry</button>
                                            <button type="reset" name="reset" class="btn btn-danger btn-hover">Cancel</button>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>


    </section>
    <!--=== End Contact Us Section ===-->





    <!-- Footer Start -->
    <?php include 'footer.php'; ?>

    <!-- Footer End -->

    <!--=== Start Copy Right Section ===-->
    <div class="copy-right-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
<<<<<<< HEAD
                    <p>Copyright © <span>Witte Dental Care</span> All RIghts Reserved <a href="https://macincode.com/" target="_blank">Macincode</a></p>
=======
                    <p>Copyright © <span>Kirthika Dental Care</span> All RIghts Reserved <a href="https://macincode.com/" target="_blank">Macincode</a></p>
>>>>>>> 5cd01a3688f546cff6fd83af87dd1ce9ba1977e1
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>
<script>
    // Add this JavaScript code to your page
    document.addEventListener('DOMContentLoaded', function() {
        var textareas = document.querySelectorAll('.auto-resize');
        textareas.forEach(function(textarea) {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto'; // Reset height to auto to recalculate height
                this.style.height = this.scrollHeight + 'px'; // Set the height to the scrollHeight
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var appointmentDateInput = document.getElementById('appointment_date');
        flatpickr(appointmentDateInput, {
            enableTime: false,
            dateFormat: "Y-m-d",
            // minDate: "today"
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var appointmentTimeInput = document.getElementById('appointment_time');
        flatpickr(appointmentTimeInput, {
            enableTime: true, // Enable time selection
            noCalendar: true, // Hide calendar
            dateFormat: "H:i", // Format for displaying time
            time_24hr: true // Use 24-hour time format
        });
    });
</script>





</html>