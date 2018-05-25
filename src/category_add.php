<?php 

require 'include_database.php';

$results = $pdo->query('SELECT * FROM category');

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Nachrichten-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6">
                <h1>Kategorie anlegen</h1>
                <form class="mt-4" action="category_add_thanks.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="z. B. Politik">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Hinzufügen</button>
                </form>
            </div>
        </div>
        
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>