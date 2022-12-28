<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// get the task data from the request
$title = $_POST['titleEdit'];
$task = $_POST['taskEdit'];
$due_date = $_POST['due_dateEdit'];
$type = $_POST['typeEdit'];
$person = $_POST['personEdit'];

// prepare and execute the UPDATE statement
$sql = "UPDATE tasks SET title = ?, task = ?, due_date = ?, type = ?, person = ? WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('sssssi', $title, $task, $due_date, $type, $person, $id);
$stmt->execute();

// close the database connection
$db->close();    

?>