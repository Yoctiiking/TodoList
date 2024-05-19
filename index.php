<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Todo List</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <h1 class="todo-header">Ma Todo List</h1>
  <ul class="todo-list">
    <!-- Les tâches seront ajoutées ici -->
  </ul>
  <div class="add-todo">
    <input type="text" placeholder="Ajouter une nouvelle tâche">
    <button>Ajouter</button>
  </div>
</div>

<!-- HTML pour une carte de tâche -->
<div class="todo-card">
  <div class="todo-content">
    <input type="checkbox" id="todo-2">
    <label for="todo-2">Faire les courses</label>
  </div>
  <div class="todo-actions">
    <button class="edit-btn">Modifier</button>
    <button class="delete-btn">Supprimer</button>
  </div>
</div>


</body>
</html>
