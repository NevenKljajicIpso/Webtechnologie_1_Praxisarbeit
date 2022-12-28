<?php

// connect to the database
$db = new mysqli('localhost', 'neno', '1234', 'aufgabenverwaltung');


// retrieve the tasks from the database, sorted by due date
$sqlSelectTasks = "SELECT * FROM tasks ORDER BY due_date";
$result = $db->query($sqlSelectTasks);

// loop through the tasks and generate the HTML for the task list
echo '<div>';
while ($task = $result->fetch_assoc()) {
  $id = $task['id'];
  $title = $task['title'];
  $taskDescription = $task['task'];
  $due_date = $task['due_date'];
  $type = $task['type'];
  $person = $task['person'];
  echo "<h3>$title ($due_date) [$type] [$person]</h3>";
  echo "<p>$taskDescription</p><br>";
  echo "<!-- Ends task and start edit Button -->";
  echo '<form method="post" action="">';
  echo '<input type="hidden" name="id" value="' . $task['id'] . '">';
  echo '<button type="button" onclick="openModalEditing(' . $task['id'] . ')">Edit Task</button>';
  echo '</form>';
}
echo '</div>';

// close the database connection
$db->close();

?>