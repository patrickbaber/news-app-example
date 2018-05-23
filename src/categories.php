<!doctype html>
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
                <h1>Kategorien</h1>
            </div>
            <div class="col pt-1">
                <a class="btn btn-primary btn-lg float-right" href="category_add.php" role="button">Anlegen</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Sport</td>
                    <td>
                        <div class="float-right">
                            <a href="category_edit.php" class="btn btn-secondary btn-sm">Bearbeiten</a>
                            <a href="category_delete.php" class="btn btn-danger btn-sm">Löschen</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Wissenschaft</td>
                    <td>
                        <div class="float-right">
                            <a href="category_edit.php" class="btn btn-secondary btn-sm">Bearbeiten</a>
                            <a href="category_delete.php" class="btn btn-danger btn-sm">Löschen</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Wirtschaft</td>
                    <td>
                        <div class="float-right">
                            <a href="category_edit.php" class="btn btn-secondary btn-sm">Bearbeiten</a>
                            <a href="category_delete.php" class="btn btn-danger btn-sm">Löschen</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>