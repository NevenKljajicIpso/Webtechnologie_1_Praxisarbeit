<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');

// retrieve the tasks from the database, sorted by due date
$sqlSelectTasks = "SELECT * FROM tasks ORDER BY due_date";
$result = $db->query($sqlSelectTasks);

// loop through the tasks and generate the HTML for the task list
echo '<ul>';
while ($task = $result->fetch_assoc()) {
  $id = $task['id'];
  $title = $task['title'];
  $taskDescription = $task['task'];
  $due_date = $task['due_date'];
  $type = $task['type'];
  $person = $task['person'];
  echo "<li>$title ($due_date) [$type] [$person]</li>";
  echo "<li>$taskDescription</li><br>";
}
echo '</ul>';

// close the database connection
$db->close();

?>