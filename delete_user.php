<?php

session_start();
include 'config/database.php';

if(isset($_SESSION["email"])) {

} else {
    header('Location: index.php');
}

try {

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->execute([$id]);
    if($stmt) {
        $message =  '<label style="color:red">User details deleted</label>';
        header('Location: user_list.php');
        exit(0);
    } else {
        $message =  '<label style="color:red">Record not delete</label>';
        header('Location: doctors_list.php');
        exit(0);
    }
} catch(PDOException $error) {
    $message = $error->getMessage();
}
