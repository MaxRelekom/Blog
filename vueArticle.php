<?php
include ('config/config.php');
include ('app/functions/article-functions.php');

$msg = "";
$article = getArticleBy($_GET['id'], $msg);

if (isset($_POST['delete'])) {
    delete($article['id'], $msg);
    header('Location: index.php');
}
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

    <article class = "article">
        <?php
            echo '<h2>'.$article['title'].'</h2><br>';
            echo $article['content'].'<br>';
        ?>
    </article>

    <article class = "options">
        <?php
        $id = $article['id'];
        $validTitle = $article['title'];

        $link = "href = \"editionArticle.php?id=$id\"";
        echo "<a $link>Editer article</a>";
        ?>

        <form method = "POST" action = "vueArticle.php">
            <button type = "submit" name = "delete">Supprimer article</button>
        </form>
    </article>
</main>
</body>
</html>
