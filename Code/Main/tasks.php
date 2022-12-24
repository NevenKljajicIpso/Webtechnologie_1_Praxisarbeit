<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aufgabenverwaltung</title>

    <!--<link rel="stylesheet" href="stylesheet.css" /> -->
  </head>
  <body>
    <nav>
      <h1>Aufgabenverwaltung</h1>
    </nav>    

    <main>
      <form method="post" action="add_task.php">
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title">
        <br>
        <label for="task">Task Descritpion:</label>
        <input type="text" id="task" name="task">
        <br>
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date">
        <br>
        <label for="type">Type:</label>
        <select id="type" name="type">
          <option value=""></option>
          <!-- Typs will be added in the admin section -->
        </select>
        <br>
        <label for="person">Person:</label>
        <select id="person" name="person">
          <option value=""></option>
          <!-- Person will be added in the admin section -->
        </select>
        <br>
        <input type="submit" value="Add Task">
      </form>
      <div>
        <?php include 'show_tasks.php';?>
      </div>
    </main>

    <footer>

    </footer>

    <script src="#"></script>
  </body>
</html>
