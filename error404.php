<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Error 404</title>
        <meta name="description" content="Oops, this page could not be found! Are you sure you have the correct URL?"/>
        <meta name="keywords" content="error, error404, no page, page, not, found"/>
        <meta property="og:title" content="Team Spectralis | Erorr 404"/>
        <meta property="og:description" content="Oops, this page could not be found! Are you sure you have the correct URL?"/>
        <meta property="og:image" content="https://teamspectralis.com/img/logo.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Error 404</h2>
                <p>Our ferret cannot find a site with that URL. Are you sure you have the correct URL?</p>
                <img src="img/error404.jpg" alt="Ferret searching" width="400">
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>