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
                    <th scope="col">Datum</th>
                    <th scope="col">Titel</th>
                    <th scope="col">Kategorie</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>01.01.2018</td>
                    <td>Nachrichten-Titel 1</td>
                    <td>Sport</td>
                    <td>
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary btn-sm">Bearbeiten</button>
                            <button type="button" class="btn btn-danger btn-sm">Löschen</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>01.01.2019</td>
                    <td>Nachrichten-Titel 2</td>
                    <td>Wissenschaft</td>
                    <td>
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary btn-sm">Bearbeiten</button>
                            <button type="button" class="btn btn-danger btn-sm">Löschen</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>01.01.2020</td>
                    <td>Nachrichten-Titel 3</td>
                    <td>Wirtschaft</td>
                    <td>
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary btn-sm">Bearbeiten</button>
                            <button type="button" class="btn btn-danger btn-sm">Löschen</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>