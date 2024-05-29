<?php


$role_id = $_SESSION["role_id"];
    $stmt = $connect->prepare("SELECT * FROM role WHERE id = :id");
    // Bind the ID parameter
    $stmt->bindParam(':id', $role_id);
    // Execute the query
    $stmt->execute();
    // Fetch the result
    $user_role = $stmt->fetch(PDO::FETCH_ASSOC);
?>