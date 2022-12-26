<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aufgabenverwaltung</title>

    <link rel="stylesheet" href="../CSS/stylesheet.css" /> 
  </head>
  <body>
    <nav>
      <h1>Aufgabenverwaltung</h1>
    </nav>    

    <main>

      <!-- button for opening the modal -->
      <button type="button" onclick="openModal()">Create Task</button>

      <!-- modal for creating a new task -->
      <div id="modal" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModal()">&times;</span>
          <form method="post" action="../functions/add_task.php">
            <label for="title">Task title:</label>
            <input type="text" id="title" name="title">
            <br>
            <label for="task">Description:</label>
            <textarea id="task" name="task"></textarea>
            <br>
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date">
            <br>
            <label for="type">Type:</label>
            <select id="type" name="type">
              <?php include '../functions/show_menu_types.php';?>
              <!-- options will be populated with task types from the database -->
            </select>
            <br>
            <label for="person">Assign To:</label>
            <select id="person" name="person">
              <?php include '../functions/show_menu_persons.php';?>
              <!-- options will be populated with people from the database -->
            </select>
            <br>
            <input type="submit" value="Add Task">
          </form>
        </div>
      </div>

      <div class="">
      <?php include '../functions/show_tasks.php';?>
      </div>

      <!-- modal for editing a  task -->
      <div id="modalEditing" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModalEditing()">&times;</span>
          <form method="post" action="../functions/edit_task.php">
            <label for="title">Task title:</label>
            <input type="text" id="title" name="title">
            <br>
            <label for="task">Description:</label>
            <textarea id="task" name="task"></textarea>
            <br>
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date">
            <br>
            <label for="type">Type:</label>
            <select id="type" name="type">
              <?php include '../functions/show_menu_types.php';?>
              <!-- options will be populated with task types from the database -->
            </select>
            <br>
            <label for="person">Assign To:</label>
            <select id="person" name="person">
              <?php include '../functions/show_menu_persons.php';?>
              <!-- options will be populated with people from the database -->
            </select>
            <br>
            <input type="submit" value="Save Task">
          </form>
        </div>
      </div>







    </main>

    <footer>

    </footer>

      <!-- JavaScript for opening and closing the modal -->
      <script>
        function openModal() {
          document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
          document.getElementById('modal').style.display = 'none';
        }

        function openModalEditing() {
          document.getElementById('modalEditing').style.display = 'block';
        }

        function closeModalEditing() {
          document.getElementById('modalEditing').style.display = 'none';
        }        


      </script>

    <script src="#"></script>
  </body>
</html>
