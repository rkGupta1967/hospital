<?php
include "database/config.php";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

if ($password !== $confirmpassword) {
    echo "Password do not matched";
    exit();
}

$password = password_hash($password, PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO user (username,email,password,confirmpassword) VALUES(?,?,?,?)");
$stmt->bind_param("ssss", $username, $email, $password, $confirmpassword);

if ($stmt->execute()) {
    echo "ragistration successfully";
} else {
    echo "ragistration failed";
}

$stmt->close();
$conn->close();
?>
