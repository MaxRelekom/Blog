<?php
include ('inc/session.inc.php');
include ('app/functions/functions.php');

$msg = "";

// Connexion
if (isset($_POST['connect'])) {
    $mailUser = htmlentities($_POST['mail']);
    $passwordUser = htmlentities($_POST['password']);

    if (empty($mailUser) || empty($passwordUser)) {
        $msg = 'Il manque des infos';
    } else if (exists($mailUser, $passwordUser, $msg)) {
        $_SESSION['IDENTIFY'] = true;
        $_SESSION['mail'] = $mailUser;

        header('Location: manager.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title><?php echo NAME; ?></title>
</head>
<body>
<main>
    <?php include ('inc/header.inc.php'); ?>

    <form method = "POST" action = "connexion.php">
        <label for = "mail">Mail</label><input type = "email" id = "mail" name = "mail">
        <label for = "password">Password</label><input type = "password" id = "password" name = "password">
            
        <button id = "connect" type = "submit" name = "connect">Connect</button>
        <?php echo '<p>'.$msg.'</p>'; ?>
    </form>
</main>
</body>
</html>
