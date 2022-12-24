<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get the form data
  $title = $db->real_escape_string($_POST['title']);
  $task = $db->real_escape_string($_POST['task']);
  $due_date = $db->real_escape_string($_POST['due_date']);
  $type = $db->real_escape_string($_POST['type']);
  $person = $db->real_escape_string($_POST['person']);

  // prepare and execute the INSERT statement
  $sqlInsertTask = "INSERT INTO tasks (title, task, due_date, type, person) VALUES ('$title', '$task','$due_date', '$type', '$person')";
  $db->query($sqlInsertTask);

  // redirect to the task overview page
  header('Location: tasks.php');
}

// close the database connection
$db->close();    

?>