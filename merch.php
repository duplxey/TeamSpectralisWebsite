<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Merch (Coming soon)</title>
        <meta name="description" content="Represent us with our merch!"/>
        <meta name="keywords" content="merch, clothing, hoodie, tshirt, merchandise"/>
        <meta property="og:title" content="Team Spectralis | Merch (Coming soon)"/>
        <meta property="og:description" content="Represent us with our merch!"/>
        <meta property="og:image" content="https://teamspectralis.com/img/thumbnail.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/merch/slide.png" alt="First slide">
                    <div class="carousel-caption d-none d-lg-block">
                        <h3>Coming soon!</h3>
                        <p>Merch is currently under progress.</p>
                        <a href="<?= WROOT ?>subscribe" class="btn btn-primary"><i class="fas fa-bell"></i> Get notified on release</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>