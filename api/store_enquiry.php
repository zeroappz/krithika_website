<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Include necessary files
include_once '../config/database.php';
include_once '../objects/enquiry.php';
include_once '../objects/mail.php';
ob_start();
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a new Database instance and establish a connection
    $database = new Database();
    $db = $database->getConnection();

    // Create a new Enquiry object
    $Enquiry = new Enquiry($db);
    $emailSender = new EmailSender();

    // Retrieve data from the POST request body
    $patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
    $mobile_number = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : null;
    $appointment_date = isset($_POST['appointment_date']) ? $_POST['appointment_date'] : null;
    $enquiry = isset($_POST['enquiry']) ? $_POST['enquiry'] : null;
    $service_name = isset($_POST['service_name']) ? $_POST['service_name'] : null;
    $appointment_time = isset($_POST['appointment_time']) ? $_POST['appointment_time'] : null;

    // Set Enquiry object properties
    $Enquiry->patient_name = $patient_name;
    $Enquiry->mobile_number = $mobile_number;
    $Enquiry->appointment_date = $appointment_date;
    $Enquiry->enquiry = $enquiry;
    $Enquiry->service_name = $service_name;
    $Enquiry->appointment_time = $appointment_time;
    $Enquiry->doctor_status = "waiting";
    $Enquiry->staff_status = "waiting";
    $Enquiry->admin_status = "waiting";
    $Enquiry->created_at = date('Y-m-d H:i:s');
    $Enquiry->updated_at = date('Y-m-d H:i:s');

 
    if ($Enquiry->create()) {
        $to = "bhuvanamic@gmail.com";
        $subject = "A new enquiry has been submitted!";
        $message = file_get_contents('../template/email_template.html');
    
        $message = str_replace('{patient_name}', $patient_name, $message);
        $message = str_replace('{mobile_number}', $mobile_number, $message);
        $message = str_replace('{appointment_date}', $appointment_date, $message);
        $message = str_replace('{enquiry}', $enquiry, $message);
        $message = str_replace('{feed_back}', $feed_back, $message);
    
        $mailSuccess = $emailSender->sendEmail($to, $subject, $message);
    
        if ($mailSuccess) {
            $response = array('status' => 'success', 'message' => 'Enquiry was created. Email sent successfully');
            echo json_encode($response);
    
                header('Location: ../index.php');
                exit;
        } else {
            $response = array('status' => 'error', 'message' => 'Error sending email');
            echo json_encode($response);
        }
    } else {
        http_response_code(503);
        echo json_encode(array("message" => "Unable to create enquiry."));
    }

    
    
  
} else {
    // Invalid request method
    http_response_code(405);
    echo json_encode(array("message" => "Method Not Allowed"));
}
