<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// get the task id from the hidden field
$id = $db->real_escape_string($_POST['id']);

// retrieve the task from the database
$sql = "SELECT * FROM tasks WHERE id = $id";
$result1 = $db->query($sql);
$task = $result1->fetch_assoc();

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the form data
    $id = $db->real_escape_string($_GET['id']);
    $title = $db->real_escape_string($_POST['title']);
    $task = $db->real_escape_string($_POST['task']);
    $due_date = $db->real_escape_string($_POST['due_date']);
    $type = $db->real_escape_string($_POST['type']);
    $person = $db->real_escape_string($_POST['person']);
  
    // prepare and execute the UPDATE statement
    $sql2 = "UPDATE tasks SET title = '$title', task = '$task', due_date = '$due_date', type = '$type', person = '$person' WHERE id = $id";
    $db->query($sql2);
  
    // redirect to the task overview page
    header('Location: tasks.php');
  }  

?>