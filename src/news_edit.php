<?php 

require 'include_database.php';

// Get news
$sql = "SELECT * FROM news WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$_GET['id']]);
$row = $statement->fetch(PDO::FETCH_ASSOC);

// Get categories
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
                <h1>Nachricht bearbeiten</h1>
                <form class="mt-4" action="news_edit_thanks.php?id=<?php echo $row['id'] ?>" method="POST">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="z. B. Wir sind Fußball-Weltmeister!" value="<?php echo $row['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Kurztext</label>
                        <input type="text" class="form-control" id="short_text" name="short_text" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit." value="<?php echo $row['short_text'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" rows="6" name="text" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit."><?php echo $row['text'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategorie</label>
                        <select class="form-control" id="category" name="category">
                            <?php foreach ($results as $rowCategory): ?>
                                <option value="<?php echo $rowCategory['id'] ?>"<?php if($row['id_category'] == $rowCategory['id']) { ?> selected<?php } ?>><?php echo $rowCategory['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="is_active" id="status"<?php if($row['is_active'] == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="status">
                            Aktiviert
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Aktualisieren</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>