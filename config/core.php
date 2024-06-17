<?php
// show error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// home page url
<<<<<<< HEAD
$home_url = "http://localhost/Witte_website";
=======
$home_url = "http://localhost/kirthika_website";
>>>>>>> 5cd01a3688f546cff6fd83af87dd1ce9ba1977e1

// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
$records_per_page = 5;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
