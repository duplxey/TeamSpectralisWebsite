<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Merch</title>
        <link rel="stylesheet" href="<?= WROOT ?>css/merch.css">
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="row no-gutters">
            <div class="col-12 col-md-4">
                <div class="hovereffect">
                    <img class="img-fluid" src="img/merch/hoodie1.png" alt="Hoodie 1">
                    <div class="overlay">
                        <div class="highly-padded">
                            <h2>Team Spectralis Hoodie</h2>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="hovereffect">
                    <img class="img-fluid" src="img/merch/hoodie1.png" alt="">
                    <div class="overlay">
                        <div class="highly-padded">
                            <h2>Team Spectralis Hoodie</h2>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="hovereffect">
                    <img class="img-fluid" src="img/merch/hoodie1.png" alt="">
                    <div class="overlay">
                        <div class="highly-padded">
                            <h2>Team Spectralis Hoodie</h2>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>