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

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Optional Flatpickr Theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_orange.css">



    <!--=== Favicon ===-->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!--=== Title ===-->
    <title>Kirthika Dental Care</title>
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
    <style>
        /* Style the input field (unchanged) */
        .flatpickr-time input.flatpickr-minute {
            font-weight: bold !important;
            background-color: #f0c64682 !important;
            color: #000000de !important;
            border-radius: 10px;
        }

        .flatpickr-time input.flatpickr-minute:hover {
            font-weight: bold !important;
            background-color: #f0c64682 !important;
            color: #000000de !important;
            border-radius: 10px;
        }

        .flatpickr-time input.flatpickr-hour {
            font-weight: bold !important;
            background-color: #f0c64682 !important;
            color: #000000de !important;
            border-radius: 10px;
        }

        .flatpickr-time input.flatpickr-hour:hover {
            font-weight: bold !important;
            background-color: #f0c64682 !important;
            color: #000000de !important;
            border-radius: 10px;
        }

        .flatpickr-calendar.timeOnly .flatpickr-time {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 9px;
            padding: 5px;
            max-height: 62px;
            /* overflow-y: auto; */
            text-align: center;
            line-height: 26px;
        }

        /* Time input boxes */
        .flatpickr-time input,
        .flatpickr-am-pm {
            font-size: 14px;
            font-weight: bold;
            border-radius: 6px;
            /* border: 1px solid #ccc; */
            padding: 6px 8px;
            text-align: center;
            background-color: #f0c64682 !important;
            color: #000000de !important;
            font-weight: bold !important;
        }



        .numInputWrapper span {
            position: absolute;
            right: 0;
            width: 14px;
            padding: 0 4px 0 2px;
            height: 50%;
            line-height: 50%;
            opacity: 0;
            cursor: pointer;
            border: 1px solid rgba(57, 57, 57, 0.15);
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: none !important;
            background-color: transparent !important;

        }

        /* Fade in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <style>
        /* Custom flatpickr styling */
        .flatpickr-calendar {
            background-color: #fff9e6 !important;
            border: 1px solid #f0c64682 !important;
        }

        .flatpickr-day.selected,
        .flatpickr-day.startRange,
        .flatpickr-day.endRange {
            background: #f0c64682 !important;
            color: black !important;
            border: none !important;
        }

        .flatpickr-day:hover {
            background: #f0c64682 !important;
            color: black !important;
        }

        .flatpickr-months .flatpickr-month {
            color: #a37400 !important;
        }

        /* Optional: Better spacing */
        .d-flex {
            display: flex;
            align-items: center;
            gap: 10px;
            max-width: 500px;
            margin: 40px auto;
        }

        .form-control {
            flex: 1;
        }

        .flatpickr-day.today {
            color: #a37400 !important;
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
                                                    <span class="input-group-text" style="font-size: 40px; border-bottom-color: lightgray; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-user" style="height: 40px; width: 40px; color: #f0c64682;"></i></span>
                                                </div>
                                                <input type="text" name="patient_name" class="form-control" style="border: none; border-bottom: 1px solid black; width: 400px;  background-color: transparent;" required placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; border-radius: 0.25rem; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-cogs" style="height: 40px; width: 40px; color: #f0c64682;"></i></span>
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
                                                    <span class="input-group-text" style="font-size: 50px; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-mobile" style="height: 40px; width: 40px; color: #f0c64682;"></i></span>
                                                </div>
                                                <input type="tel" name="mobile_number" class="form-control" style="border: none; border-bottom: 1px solid black; width: 400px;  background-color: transparent;" required placeholder="Enter Your Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; background-color: transparent; border: none;">
                                                        <i class="fa fa-calendar" style="height: 40px; width: 40px; color: #f0c64682;"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="appointment_date" id="appointment_date" class="form-control"
                                                    style="border: none; border-bottom: 1px solid black; background-color: transparent;"
                                                    placeholder="Appointment Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; background-color: rgba(255, 255, 255, 0); border: none;">
                                                        <i class="fa fa-calendar-check-o" style="height: 40px; width: 40px; color: #f0c64682;"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="appointment_time" id="appointment_time" class="form-control"
                                                    style="border: none; border-bottom: 1px solid black; width: 400px; background-color: transparent;"
                                                    placeholder="Appointment Time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <div class="d-flex">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-size: 40px; background-color: rgba(255, 255, 255, 0); border: none;"><i class="fa fa-comment" style="height: 40px; width: 40px; color: #f0c64682;"></i></span>
                                                </div>
                                                <textarea name="enquiry" style="height: 55px; border: none; background-color: transparent; border-bottom: 1px solid black; width: 400px; " class="form-control" required placeholder="Enter Special Request"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="d-flex flex-wrap align-items-center">
                                    <li class="nav-item">
                                        <a href="https://app.kirthikadentalcare.in/" class="nav-link">Already have an account?</a>
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
<!-- time picker  -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#appointment_time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "h:i K",
        time_24hr: false,
        minuteIncrement: 5,
        disableMobile: true,
        allowInput: true,
        onReady: function(selectedDates, dateStr, instance) {
            instance.calendarContainer.classList.add("timeOnly");
        }
    });
</script>


<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#appointment_date", {
        dateFormat: "Y-m-d",
        allowInput: true,
        defaultDate: "today"
    });
</script>




</html>