<?php
$host = 'localhost'; $db = 'your_db_name'; $user = 'your_db_user'; $pass = 'your_db_password';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$user_id = intval($_GET['user_id']);
$date = $_GET['date'];
$result = $conn->query("SELECT content FROM notes WHERE user_id = $user_id AND date = '$date'");
if ($result && $row = $result->fetch_assoc()) echo $row['content']; else echo "";
?>