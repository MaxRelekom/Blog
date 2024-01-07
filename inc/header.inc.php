<?php
include_once ("session.inc.php");

?>
<header>
    <div>
        <h1><?php echo NAME; ?></h1>

        <article class = "profile">
            <p><?php echo ""; ?></p>

            <form action = "logout.php" method = "POST">
                <button name = "deconnexion"><?php if (isset($_SESSION['mail'])) { echo "Se déconnecter"; } else { echo "Se connecter"; } ?></button>
            </form>
        </article>

    </div>

    <nav>
        <a href = "<?php echo isset($_SESSION['mail']) ? "./manager.php" : "./index.php"; ?>">Home</a>
    </nav>
</header>
