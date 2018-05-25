<?php 

require 'include_database.php';

$sql = "SELECT * FROM category WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$_GET['id']]);
$row = $statement->fetch(PDO::FETCH_ASSOC);

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
                <h1>Kategorie bearbeiten</h1>
                <form class="mt-4" method="POST" action="category_edit_thanks.php?id=<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="z. B. Politik" value="<?php echo $row['name'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Aktualisieren</button>
                </form>
            </div>
        </div>
        
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>