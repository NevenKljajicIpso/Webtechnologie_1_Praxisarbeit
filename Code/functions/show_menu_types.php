<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// retrieve the people from the database
$sql = "SELECT * FROM types ORDER BY type";
$result = $db->query($sql);

// loop through the people and generate the options for the dropdown menu
//echo '<select id="person" name="person">';
echo '<option value=""></option>';
while ($types = $result->fetch_assoc()) {
  $t_id = $types['t_id'];
  $type = $types['type'];
  $color = $types['color'];
  $deadline = $types['deadline'];
  echo "<option value='$type'>$type $deadline</option>";
}
//echo '</select>';

// close the database connection
$db->close();

?>