<?php

class Database
{
    // specify your own database credentials
    private $host = "localhost";
    private $database = "kirthfmw_dental";
    private $username = "kirthfmw_dental";
    private $password = "Rajkumar_6253";
    public $connect;

    // private $host = "localhost";
    // private $database = "kirthika_dental";
    // private $username = "root";
    // private $password = "";
    // public $conn;

    // get the database connection
    public function getConnection()
    {
        $this->connect = null;
        try {
            $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connect;
    }
}
