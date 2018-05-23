<!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Nachrichten-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <h1>Nachricht anlegen</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" placeholder="z. B. Wir sind Fußball-Weltmeister!">
            </div>
            <div class="form-group">
                <label for="short_text">Kurztext</label>
                <input type="text" class="form-control" id="short_text" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit.">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" id="text" rows="6" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit."></textarea>
            </div>
            <div class="form-group">
                <label for="category">Kategorie</label>
                <select class="form-control" id="category">
                    <option>Sport</option>
                    <option>Wirtschaft</option>
                    <option>Wissenschaft</option>
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="status">
                <label class="form-check-label" for="status">
                    Aktiviert
                </label>
            </div>
            <!-- <button type="submit" class="btn btn-primary mt-4">Hinzufügen</button> -->
            <a class="btn btn-primary mt-4" href="news_thanks.php" role="button">Hinzufügen</a>
        </form>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>