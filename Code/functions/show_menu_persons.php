<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// retrieve the people from the database
$sql = "SELECT * FROM person ORDER BY first_name";
$result = $db->query($sql);

// loop through the people and generate the options for the dropdown menu
//echo '<select id="person" name="person">';
echo '<option value=""></option>';
while ($person = $result->fetch_assoc()) {
  $p_id = $person['p_id'];
  $first_name = $person['first_name'];
  $last_name = $person['last_name'];
  $email = $person['email'];
  echo "<option value='$first_name $last_name'>$first_name  $last_name  $email</option>";
}
//echo '</select>';

// close the database connection
$db->close();

?>