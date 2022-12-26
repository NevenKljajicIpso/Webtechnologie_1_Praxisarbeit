<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get the form data
  $first_name = $db->real_escape_string($_POST['first_name']);
  $last_name = $db->real_escape_string($_POST['last_name']);
  $email = $db->real_escape_string($_POST['email']);

  // prepare and execute the INSERT statement
  $sql = "INSERT INTO person (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
  $db->query($sql);

  // redirect to the admin page
  header('Location: ../Main/admin.php');
}

// close the database connection
$db->close();    

?>