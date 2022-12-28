<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aufgabenverwaltung</title>

    <link rel="stylesheet" href="../CSS/stylesheet.css" />

      <!-- JavaScript for opening and closing the modal -->
      <script>
        function openModal() {
          document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
          document.getElementById('modal').style.display = 'none';
        }

        function openModalEditing(id) {
          // set the value of the hidden field
          document.getElementById('hiddenId').value = id;
          // make an AJAX request to get the task data
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
              // parse the response as JSON
              var tasks = JSON.parse(xhr.responseText);

              // populate the form fields with the task data
              document.getElementById('titleEdit').value = tasks.title;
              console.log("Heloou");
              document.getElementById('taskEdit').value = tasks.task;
              document.getElementById('due_dateEdit').value = tasks.due_date;
              document.getElementById('typeEdit').value = tasks.type;
              document.getElementById('personEdit').value = tasks.person;

              // show the modal window
              showModalEditing();
            }
          };

          // create a FormData object to send the task ID as form data
          var formData = new FormData();
          formData.append('id', id);

          // send the request
          xhr.open('POST', '../functions/get_task.php');
          xhr.send(formData);

        }

        function showModalEditing() {
          // get the modal element
          // var modal = document.getElementById('modalEditing');
          console.log("Should open the modal");
          document.getElementById('modalEditing').style.display = 'block';
          // add the "show" class to the modal
          // modal.classList.add('show');
        }

        function closeModalEditing() {
          document.getElementById('modalEditing').style.display = 'none';
        }    

      </script> 
  </head>
  <body>
    <nav>
      <h1>Aufgabenverwaltung</h1>
      <h2><a href="admin.php">ADMIN</a><h2>
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

      <!-- Shows all the tasks -->
      <div id="">
      <?php include '../functions/show_tasks.php';?>
      </div>

      <!-- modal for editing a  task -->
      <div id="modalEditing" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModalEditing()">&times;</span>
          <form method="post" action="../functions/update_task.php">
            <label for="title">Task title:</label>
            <input type="text" id="titleEdit" name="title">
            <br>
            <label for="task">Description:</label>
            <textarea id="taskEdit" name="task"></textarea>
            <br>
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_dateEdit" name="due_date">
            <br>
            <label for="type">Type:</label>
            <select id="typeEdit" name="type">
              <?php include '../functions/show_menu_types.php';?>
              <!-- options will be populated with task types from the database -->
            </select>
            <br>
            <label for="person">Assign To:</label>
            <select id="personEdit" name="person">
              <?php include '../functions/show_menu_persons.php';?>
              <!-- options will be populated with people from the database -->
            </select>
            <br>
            <button type="submit" onclick="saveTask()">Save</button>
            <input type="hidden" id="hiddenId" name="id">
          </form>
        </div>
      </div>







    </main>

    <footer>

    </footer>



    <script src="#"></script>
  </body>
</html>
