<?php

 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "kirthika_website";  
 $message = ""; 

 $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>