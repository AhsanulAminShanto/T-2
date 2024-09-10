<?php
include 'db_connect.php';

// Collect data from form
$patient_id = $_POST['patient_id'];
$risk_factor = $_POST['risk_factor'];
$description = $_POST['description'];

// Insert data into database
$sql = "INSERT INTO risk_analysis (patient_id, risk_factor, description) VALUES ('$patient_id', '$risk_factor', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
