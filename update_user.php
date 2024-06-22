
<?php
session_start();
include 'config/database.php';

if(isset($_SESSION["email"])) {

} else {
    header('Location: index.php');
}


//update code
try {

    $data = [

        'role_id' => $_POST['role_id'],
        'email' => $_POST['email'],
        'updated_at' =>  date("Y-m-d H:i:s"),
        'id' => $_POST['id'],
    ];

    $sql = "UPDATE users SET id=:id,role_id=:role_id, email=:email,updated_at=:updated_at WHERE id=:id";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    if ($stmt->rowCount() > 0) {
        $message = '<label style="color:green">Events details updated</label>';
    } else {
        $message = '<label style="color:red">Record not updated</label>';
    }

    header('Location: user_list.php');
    exit(); // Ensure no further code execution after redirection
} catch (PDOException $error) {
    $message = $error->getMessage();
}

?>
