<!doctype html>
<html lang="zxx">



<head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--=== CSS Link ===-->
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="assets/css/enquiry_style.css">
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
                          

                                <!-- <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" name="patient_name" class="form-control" required placeholder="Patient Name">
                                    <label for="patient_name">Enter Your Name</label>
                                </div> -->
                                <div class="form-floating form-floating-outline mb-4">
                                    <div class="d-flex">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="patient_name" class="form-control" required placeholder="Enter Your Name">
                                    </div>
                                </div>


                                <div class="form-floating form-floating-outline mb-4">
                                    <select name="service_name" class="form-control" required placeholder="Select Your Services">
                                        <option value="">-Select-</option>
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
                                    <label for="exampleFormControlInput1">Select Your Services</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" name="mobile_number" id="mobile_number" pattern="[789][0-9]{9}" class="form-control" required placeholder="Mobile Number">
                                    <label for="mobile_number">Your Phone</label>
                                    <div id="mobile_number_error" class="text-danger"></div>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" name="appointment_date" id="appointment_date" class="form-control" placeholder="Appointment Date">
                                    <label for="appointment_date">Appointment Date</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" name="appointment_time" id="appointment_time" class="form-control flatpickr-datetime" placeholder="Appointment Date">
                                    <label for="appointment_date">Appointment Time</label>
                                </div>

                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea name="enquiry" class="form-control auto-resize" required placeholder="Enquiry"></textarea>
                                    <label for="enquiry">Special Request</label>
                                </div>



                                <ul class="d-flex flex-wrap align-items-center">
                                    <li class="nav-item">
                                        <a href="https://app.kirthikadentalcare.in" class="nav-link">Already have an account?</a>
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
                    <p>Copyright © <span>Kirthika Dental Care</span> All RIghts Reserved <a href="https://macincode.com/" target="_blank">Macincode</a></p>
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
            dateFormat: "H:i:s", // Format for displaying time
            time_24hr: true // Use 24-hour time format
        });
    });
</script>
<script>
    const mobileNumberInput = document.getElementById('mobile_number');
    const mobileNumberError = document.getElementById('mobile_number_error');

    mobileNumberInput.addEventListener('keyup', function() {
        const mobileNumber = mobileNumberInput.value.trim();
        const mobileNumberPattern = /^[6789][0-9]{0,9}$/; // Limit to maximum of 10 digits

        if (mobileNumberPattern.test(mobileNumber)) {
            // Valid mobile number format
            mobileNumberError.textContent = '';
        } else {
            // Invalid mobile number format
            if (mobileNumber.length > 10) {
                mobileNumberError.textContent = 'Mobile number cannot exceed 10 digits';
            } else {
                mobileNumberError.textContent = 'Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9';
            }
        }
    });
</script>




</html>