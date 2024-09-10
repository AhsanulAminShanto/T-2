<?php
include 'db_connect.php';

// Collect data from form
$patient_id = $_POST['patient_id'];
$notification = $_POST['notification'];

// Insert data into database
$sql = "INSERT INTO notifications (patient_id, notification) VALUES ('$patient_id', '$notification')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
