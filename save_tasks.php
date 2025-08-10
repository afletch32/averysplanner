<?php
$host = 'localhost'; $db = 'your_db_name'; $user = 'your_db_user'; $pass = 'your_db_password';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$user_id = intval($_POST['user_id']);
$date = $_POST['date'];
$tasks = $_POST['tasks'];
$stmt = $conn->prepare("REPLACE INTO completed_tasks (user_id, date, tasks_json) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $user_id, $date, $tasks); $stmt->execute(); echo "Saved";
?>