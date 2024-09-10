<?php
include 'db_connect.php';

// Collect data from form
$patient_id = $_POST['patient_id'];
$diagnosis = $_POST['diagnosis'];
$date = $_POST['date'];

// Insert data into database
$sql = "INSERT INTO diagnosis (patient_id, diagnosis, date) VALUES ('$patient_id', '$diagnosis', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
