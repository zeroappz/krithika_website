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
        $location = "assets/doctors/" . $file_name;
        move_uploaded_file($file_temp, $location);
    } else {
        $location = $_POST['old_image'];
    }

    $data = [
        'image' => $location,
        'name' => $_POST['name'],
        'qualification' => $_POST['qualification'],
        'specialist' => $_POST['specialist'],
        'profile_description' => $_POST['profile_description'],
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'linkedin' => $_POST['linkedin'],
        'instagram' => $_POST['instagram'],
        'id' => $_POST['id'],
    ];

    $sql = "UPDATE doctors SET id=:id,image=:image, name=:name, qualification=:qualification, specialist=:specialist,profile_description=:profile_description, facebook=:facebook, twitter=:twitter, linkedin=:linkedin, instagram=:instagram WHERE id=:id";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    if ($stmt->rowCount() > 0) {
        $message = '<label style="color:green">Doctor details updated</label>';
    } else {
        $message = '<label style="color:red">Record not updated</label>';
    }

    header('Location: doctors_list.php');
    exit(); // Ensure no further code execution after redirection
} catch (PDOException $error) {
    $message = $error->getMessage();
}
