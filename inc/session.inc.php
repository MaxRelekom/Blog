<?php
include_once ('./config/config.php');

// Configuration du cookie de session
$name = session_name(str_replace(' ', '', NAME).'_session');
$domain = $_SERVER['HTTP_HOST'];
$time = time() + 3600;

setcookie($name, NAME, [
    'expires' => $time,
    'path' => '/',
    'domain' => $domain,
    'secure' => false,
    'httponly' => true,
    'samesite' => 'strict',
]);

// Lancement session
session_start();

if (isset($_SESSION['mail'])){
    $courriel = $_SESSION['mail'];
} else {
    $path = $_SERVER['PHP_SELF'];
    $file = basename ($path);
    if ($file !== 'index.php') header('Location: index.php');
}

