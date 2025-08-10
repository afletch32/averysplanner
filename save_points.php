<?php
$host = 'localhost'; $db = 'your_db_name'; $user = 'your_db_user'; $pass = 'your_db_password';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$user_id = intval($_POST['user_id']);
$total_points = intval($_POST['total_points']);
$stmt = $conn->prepare("INSERT INTO points (user_id, total_points) VALUES (?, ?) ON DUPLICATE KEY UPDATE total_points = ?");
$stmt->bind_param("iii", $user_id, $total_points, $total_points); $stmt->execute(); echo "Saved";
?>