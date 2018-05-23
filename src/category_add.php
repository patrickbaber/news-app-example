<!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Nachrichten-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <h1>Kategorie anlegen</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="z. B. Politik">
            </div>
            <!-- <button type="submit" class="btn btn-primary mt-4">Hinzufügen</button> -->
            <a class="btn btn-primary mt-4" href="category_thanks.php" role="button">Hinzufügen</a>
        </form>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>