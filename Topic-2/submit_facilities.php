<?php
include 'db_connect.php';

// Collect data from form
$facility_name = $_POST['facility_name'];
$facility_type = $_POST['facility_type'];
$location = $_POST['location'];
$contact_info = $_POST['contact_info'];

// Insert data into database
$sql = "INSERT INTO facilities (facility_name, facility_type, location, contact_info) VALUES ('$facility_name', '$facility_type', '$location', '$contact_info')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
