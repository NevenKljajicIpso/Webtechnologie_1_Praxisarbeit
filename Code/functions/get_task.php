<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

$id = $_POST['id'];

// prepare and execute the SELECT statement
$sql = "SELECT * FROM tasks WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

// fetch the task data
$result = $stmt->get_result();
$tasks = $result->fetch_assoc();

// return the task data as JSON
echo json_encode($tasks);

?>