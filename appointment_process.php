<?php
include "database/config.php";

$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$disease = $_POST["disease"];
$dt = $_POST["time"];

$stmt = $conn->prepare("INSERT INTO appointment (name,gender,age,phone,email,disease,time) VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("ssiisss", $name, $gender,$age,$phone,$email, $disease, $dt);

if ($stmt->execute()) {
    echo "ragistration successfully";
} else {
    echo "ragistration failed";
}

$stmt->close();
$conn->close();
?>
