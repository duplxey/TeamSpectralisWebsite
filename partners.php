<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Partners</title>
        <meta name="description" content="Our partners and sponsors."/>
        <meta name="keywords" content="sponsor, sponsors, partner, partners, business"/>
        <meta property="og:title" content="Team Spectralis | Partners"/>
        <meta property="og:description" content="Our partners and sponsors."/>
        <meta property="og:image" content="https://teamspectralis.com/img/thumbnail.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Partners</h2>
                <p>We are a new open-minded ESports organization looking for new partners and sponsors to grow and co-operate with. Our team consists of professional players, content creators and designers, but most importantly we've got the best community. Please contact us if interested.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                            <div class="center padded-top">
                                <a href="http://www.softbase.si/"><img src="img/partner/softbase.png" class="img-fluid" alt="SoftBase Logo"></a>
                            </div>
                    </div>
                    <div class="col-12 col-md-3">
                            <div class="center padded-top">
                                <a href="https://steelseries.com/"><img src="img/partner/steelseries.png" class="img-fluid" alt="SteelSeries Logo"></a>
                            </div>
                    </div>
                    <div class="col-12 col-md-3">
                            <div class="center padded-top">
                                <a href="#"><img src="img/partner/partner.png" class="img-fluid" alt="Partner Logo"></a>
                            </div>
                    </div>
                    <div class="col-12 col-md-3">
                            <div class="center padded-top">
                                <a href="#"><img src="img/partner/partner.png" class="img-fluid" alt="Partner Logo"></a>
                            </div>
                    </div>
                </div>
                <div class="calert" style="margin-top: 60px;">
                    <div class="mobile-center">
                        Are you interested in becoming our partner? <a href="<?= WROOT ?>contact" class="btn btn-dark">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>