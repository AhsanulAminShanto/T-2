<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Dmedic";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $doctor_id = $_POST['doctor_id'];
    $days_of_week = $_POST['days_of_week'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $consulting_time = $_POST['consulting_time'];
    $fees = $_POST['fees'];

    $query = $pdo->prepare("INSERT INTO doctorSchedules (doctor_id, days_of_week, from_date, to_date, start_time, end_time, consulting_time, fees) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$doctor_id, $days_of_week, $from_date, $to_date, $start_time, $end_time, $consulting_time, $fees]);

    echo "Schedule saved successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>
