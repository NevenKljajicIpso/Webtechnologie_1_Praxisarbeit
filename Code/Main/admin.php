<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <link rel="stylesheet" href="../CSS/stylesheet.css" /> 
  </head>
  <body>
    <nav>
      <h1>Admin</h1>
      <h2><a href="tasks.php">TASKS</a><h2>
    </nav>    

    <main>

        <div>
            <h2>Create a type</h2>
            <form method="post" action="../functions/add_type.php">
                <label for="type">Type Name:</label>
                <input type="text" id="type" name="type">
                <br>
                <label for="color">Color:</label>
                <input type="color" id="color" name="color">
                <br>
                <label for="deadline">Deadline (days):</label>
                <input type="number" id="deadline" name="deadline">
                <br>
                <input type="submit" value="Add Type">
            </form>
        </div>

        <div>
            <h2>Add a person</h2>
            <form method="post" action="../functions/add_person.php">
                <label for="first_name">Persons First Name:</label>
                <input type="text" id="first_name" name="first_name">
                <br>
                <label for="last_name">Persons Last Name:</label>
                <input type="text" id="last_name" name="last_name">
                <br>
                <label for="email">E-Mail:</label>
                <input type="text" id="email" name="email">
                <br>
                <input type="submit" value="Add Person">
            </form>
        </div>

    </main>

    <footer>

    </footer>

    <script src="#"></script>
  </body>
</html>
