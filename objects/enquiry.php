<?php

class Enquiry
{
    // database connection and table name
    private $conn;
    private $table_name = "out_patient_enquiry";

    // object properties
    public $id;
    public $patient_name;
    public $mobile_number;
    public $appointment_date;
    public $enquiry;
    public $appointment_time;
    public $service_name;
    public $doctor_status;
    public $staff_status;
    public $admin_status;
    public $created_at;
    public $updated_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    patient_name=:patient_name, 
                    mobile_number=:mobile_number, 
                    appointment_date=:appointment_date, 
                    enquiry=:enquiry, 
                    service_name=:service_name, 
                    appointment_time=:appointment_time, 
                    doctor_status=:doctor_status, 
                    staff_status=:staff_status, 
                    admin_status=:admin_status, 
                    created_at=:created_at, 
                    updated_at=:updated_at";
        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize and bind values
        $stmt->bindParam(":patient_name", $this->patient_name);
        $stmt->bindParam(":mobile_number", $this->mobile_number);
        $stmt->bindParam(":appointment_date", $this->appointment_date);
        $stmt->bindParam(":enquiry", $this->enquiry);
        $stmt->bindParam(":service_name", $this->service_name);
        $stmt->bindParam(":appointment_time", $this->appointment_time);
        $stmt->bindParam(":doctor_status", $this->doctor_status);
        $stmt->bindParam(":staff_status", $this->staff_status);
        $stmt->bindParam(":admin_status", $this->admin_status);
        $stmt->bindParam(":created_at", $this->created_at);
        $stmt->bindParam(":updated_at", $this->updated_at);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

}
