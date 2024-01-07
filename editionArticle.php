<?php
include ('config/config.php');
include ('app/functions/article-functions.php');

$msg = "";
$article = getArticleBy($_GET['id'], $msg);

// Màj l'article
if (isset($_POST['valid'])) {
    edit($article['id'], $_POST['title'], $_POST['content'], $msg);
    $url = "vueArticle.php?id=".$article['id'];

    header('Location: '.$url);
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

    <section class = "editForm">
        <h1>Edition d'un article</h1>

        <form method = "POST" action = "<?php
        $url = "editionArticle.php?id=" . $article['id'];
        echo $url; ?>">
            <label for = "title">Titre</label><input type = "text" id = "title" name = "title" value = "<?php echo $article['title']; ?>">
            <label for = "content">Contenu article</label><textarea id = "content" name = "content"><?php echo $article['content']; ?></textarea>

            <button type = "submit" name = "valid">Valider</button>
        </form>
    </section>
</main>
</body>
</html>
