<?php
$host = 'localhost'; $db = 'your_db_name'; $user = 'your_db_user'; $pass = 'your_db_password';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$user_id = intval($_POST['user_id']);
$habits = $_POST['habits'];
$stmt = $conn->prepare("REPLACE INTO habit_tracker (user_id, habits_json) VALUES (?, ?)");
$stmt->bind_param("is", $user_id, $habits); $stmt->execute(); echo "Saved";
?>
