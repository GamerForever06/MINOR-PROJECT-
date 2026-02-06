<?php
session_start();
$conn = new mysqli("localhost", "root", "", "pacy_db");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, username, password_hash FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $username, $password_hash);

if ($stmt->fetch()) {
    if (password_verify($password, $password_hash)) {
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $username;
        echo "Login successful! Welcome, " . htmlspecialchars($username);
        // Redirect to dashboard if needed:
        // header("Location: dashboard.php");
    } else { echo "Incorrect password!"; }
} else { echo "User not found!"; }

$stmt->close();
$conn->close();
?>
