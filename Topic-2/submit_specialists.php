<?php
include 'db_connect.php';

// Collect data from form
$specialist_name = $_POST['specialist_name'];
$specialty = $_POST['specialty'];
$contact_info = $_POST['contact_info'];
$associated_risks = $_POST['associated_risks'];

// Insert data into database
$sql = "INSERT INTO specialists (specialist_name, specialty, contact_info, associated_risks) VALUES ('$specialist_name', '$specialty', '$contact_info', '$associated_risks')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
