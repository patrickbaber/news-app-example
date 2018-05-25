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
            <div class="col-sm-6">
                <h1>Nachricht anlegen</h1>
                <form class="mt-4" action="news_add_thanks.php" method="POST">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="z. B. Wir sind Fußball-Weltmeister!">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Kurztext</label>
                        <input type="text" class="form-control" id="short_text" name="short_text" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit.">
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" rows="6" name="text" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategorie</label>
                        <select class="form-control" id="category" name="category">
                            <option>Sport</option>
                            <option>Wirtschaft</option>
                            <option>Wissenschaft</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" value="true" id="is_active">
                        <label class="form-check-label" for="is_active">
                            Aktiviert
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Hinzufügen</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>