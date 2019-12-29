<?php

include_once 'copyright.php';

// General
DEFINE("ROOT", "C:\wamp64\www\spectralis\website");
DEFINE("WROOT", "http://localhost/spectralis/website/");

// Social
DEFINE("MAIL", "info@teamspectralis.com");
DEFINE("FACEBOOK", "https://www.facebook.com/TeamSpectralis/");
DEFINE("INSTAGRAM", "https://www.instagram.com/teamspectralis/");
DEFINE("TWITTER", "https://twitter.com/TeamSpectralis");
DEFINE("YOUTUBE", "https://www.youtube.com/c/TeamSpectralis");
DEFINE("DISCORD", "https://invite.gg/teamspectralis");

/*
 * If you're just setting up the workspace, you should copy database_credentials.php.foo and create
 * database_credentials.php and fill it up with real credentials. Otherwise the site won't work!
 */
include_once 'database_credentials.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    die("ERROR: Failed to connect to the MySQL database.");
}