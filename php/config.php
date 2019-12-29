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

// MySQL credentials
DEFINE("DB_USER", "HIDDEN");
DEFINE("DB_PASSWORD", "HIDDEN");
DEFINE("DB_HOST", "HIDDEN");
DEFINE("DB_NAME", "HIDDEN");

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    die("ERROR: Failed to connect to the MySQL database.");
}