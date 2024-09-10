<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Dmedic";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];

    $query = $pdo->prepare("DELETE FROM doctorSchedules WHERE id = ?");
    $query->execute([$id]);

    echo "Schedule deleted successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>
