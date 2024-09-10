<?php
include 'db_connect.php';

// Collect data from form
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];

// Insert data into database
$sql = "INSERT INTO demographics (name, age, gender, address) VALUES ('$name', '$age', '$gender', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
