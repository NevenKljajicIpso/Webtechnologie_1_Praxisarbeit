<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aufgabenverwaltung</title>

    <link rel="stylesheet" href="stylesheet.css" />
  </head>
  <body>
    <header>
      <h1>Aufgabenverwaltung !!!</h1>
      <form id="new-task-form">
        <input
          type="text"
          name="new-task-input"
          id="new-task-input"
          placeholder="What do you have planned?"
        />
        <input type="submit" id="new-task-submit" value="Add task" />
      </form>
    </header>
    <main>
      <section class="task-list">
        <h2>Aufgaben</h2>
        <?php
        for ($i = 9; $i >= 0; $i--){ echo "$i"; } >
        <div id="tasks">
          <!-- <div class="task">
					<div class="content">
						<input 
							type="text" 
							class="text" 
							value="A new task"
							readonly>
					</div>
					<div class="actions">
						<button class="edit">Edit</button>
						<button class="delete">Delete</button>
					</div>
				</div> -->
        </div>
      </section>
    </main>

    <script src="#"></script>
  </body>
</html>
