<?php
include ('config/config.php');
include ('app/functions/functions.php');

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

    <section class = allArticles">
        <h2>Articles publiés</h2>

        <ul>
        <?php displayArticles(getArticlesBy(1, $msg)); ?>
        </ul>
    </section>

    <a href = "ajoutArticle.php">Publier un article</a>
</main>
</body>
</html>
