<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get the form data
  $type = $db->real_escape_string($_POST['type']);
  $color = $db->real_escape_string($_POST['color']);
  $deadline = $db->real_escape_string($_POST['deadline']);

  // prepare and execute the INSERT statement
  $sql = "INSERT INTO types (type, color, deadline) VALUES ('$type', '$color', '$deadline')";
  $db->query($sql);

  // redirect to the admin page
  header('Location: ../Main/admin.php');
}

// close the database connection
$db->close();    

?>