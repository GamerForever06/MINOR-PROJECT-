<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

$conn = new mysqli("localhost","root","","pacy_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delivery_mode   = $_POST['delivery_mode'] ?? '';
$pickup_location = trim($_POST['pickup_location'] ?? '');
$drop_location   = trim($_POST['drop_location'] ?? '');
$notes           = trim($_POST['notes'] ?? '');

if ($delivery_mode === '' || $pickup_location === '' || $drop_location === '') {
    header("Location: delivery.html?status=error");
    exit();
}

$stmt = $conn->prepare(
    "INSERT INTO deliveries (delivery_mode, pickup_location, drop_location, notes)
     VALUES (?, ?, ?, ?)"
);

$stmt->bind_param(
    "ssss",
    $delivery_mode,
    $pickup_location,
    $drop_location,
    $notes
);

if ($stmt->execute()) {
    header("Location: delivery.html?status=success");
    exit();
} else {
    header("Location: delivery.html?status=error");
    exit();
}

$stmt->close();
$conn->close();
?>
