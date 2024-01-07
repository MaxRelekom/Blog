<?php
include ('config/config.php');
include ('app/functions/article-functions.php');

$msg = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo NAME; ?></title>
</head>
<body>
<main>

    <?php include ('inc/header.inc.php'); ?>

    <section class = "ajoutForm">
        <h1>Publication d'un article</h1>

        <form method = "POST" action = "ajoutArticle.php">
            <label for = "title">Titre</label><input type = "text" id = "title" name = "title">
            <label for = "content">Contenu article</label><textarea id = "content" name = "content" cols = "5"></textarea>

            <button type = "submit" name = "publish">Publier</button>
            <button type = "submit" name = "save">Sauvegarder</button>
        </form>

        <?php
        // Publication d'un article
        if (isset($_POST['publish'])) {
            if (empty($_POST['title']) || empty($_POST['content'])) {
                $msg = 'Il manque des informations';
            } else {
                $title = htmlentities($_POST['title']);
                $content = htmlentities($_POST['content']);

                publish($title, $content, $msg);
            }
        }

        // Sauvegarde d'un article
        if (isset($_POST['save'])) {
            if (empty($_POST['title']) || empty($_POST['content'])) {
                $msg = 'Il manque des informations';
            } else {
                $title = htmlentities($_POST['title']);
                $content = htmlentities($_POST['content']);

                save($title, $content, $msg);
            }
        }

        echo "<p>$msg</p>";
        ?>
    </section>
</main>
</body>
</html>
