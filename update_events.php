<?php

session_start();
include 'config/database.php';

if(isset($_SESSION["email"])) {

} else {
    header('Location: index.php');
}

try {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $date_uploaded = date("Y-m-d");
        $location = "assets/events/" . $file_name;
        move_uploaded_file($file_temp, $location);
    } else {
        $location = $_POST['old_image'];
    }

    $data = [
        'image' => $location,
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'event_date' => $_POST['event_date'],
        'updated_at' =>  date("Y-m-d H:i:s"),
        'id' => $_POST['id'],
    ];

    $sql = "UPDATE events SET id=:id,image=:image, title=:title, description=:description, event_date=:event_date,updated_at=:updated_at WHERE id=:id";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    if ($stmt->rowCount() > 0) {
        $message = '<label style="color:green">Events details updated</label>';
    } else {
        $message = '<label style="color:red">Record not updated</label>';
    }

    header('Location: event_list.php');
    exit(); // Ensure no further code execution after redirection
} catch (PDOException $error) {
    $message = $error->getMessage();
}
