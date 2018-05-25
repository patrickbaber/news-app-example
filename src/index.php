<?php 

require 'include_database.php';

$results = $pdo->query('SELECT 
    news.title, 
    news.id, 
    category.name
FROM 
    news, 
    category
WHERE 
    news.id_category = category.id');

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
            <div class="col">
                <h1>Nachrichten</h1>
            </div>
            <div class="col pt-1">
                <a class="btn btn-primary btn-lg float-right" href="news_add.php" role="button">Anlegen</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titel</th>
                    <th scope="col">Kategorie</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td>
                        <div class="float-right">
                            <a href="news_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm">Bearbeiten</a>
                            <a href="news_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Löschen</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>