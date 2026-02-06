<?php
// IMPORTANT: Do NOT put any HTML, spaces, or echo before this file

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

/* =========================
   DATABASE CONNECTION
========================= */
$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pacy_db";

$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

/* =========================
   GET FORM DATA
========================= */
$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $email === '' || $password === '') {
    header("Location: index.html?signup=error");
    exit();
}

/* =========================
   HASH PASSWORD
========================= */
$password_hash = password_hash($password, PASSWORD_BCRYPT);

/* =========================
   CHECK EXISTING USER
========================= */
$check = $conn->prepare(
    "SELECT id FROM users WHERE email = ? OR username = ?"
);
$check->bind_param("ss", $email, $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    // User already exists
    $check->close();
    $conn->close();
    header("Location: index.html?signup=error");
    exit();
}

$check->close();

/* =========================
   INSERT NEW USER
========================= */
$insert = $conn->prepare(
    "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)"
);
$insert->bind_param("sss", $username, $email, $password_hash);

if ($insert->execute()) {
    $insert->close();
    $conn->close();
    header("Location: index.html?signup=success");
    exit();
} else {
    $insert->close();
    $conn->close();
    header("Location: index.html?signup=error");
    exit();
}
?>
