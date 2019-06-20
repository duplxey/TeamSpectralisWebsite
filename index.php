<?php include_once 'php/copyright.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis</title>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <?php include "components/carousel.php" ?>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2>About us</h2>
                        <p>We are an ESports organization based in Europe, Slovenia. Our main focus is to provide our team members with opportunities to grow on social media, expand their gaming skills/tactics and to easily collab with other teammates.</p>
                        <a href="team" class="btn btn-primary">Read more...</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5>Player dedication</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95" style="width: 95%">95%</div>
                        </div>
                        <h5>Community</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                        </div>
                        <h5>Reach</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">9500+ followers across social medias</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="background:url('img/index/services.png')center;background-size:cover;">
            <div class="container">
                <div class="center">
                    <h2 class="padded">Services</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="center">
                            <i class="fas fa-gamepad fa-5x"></i>
                            <h3>Gaming</h3>
                            <p>We're all passionate gamers that are either really good at the game or even compete.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="center">
                            <i class="fas fa-wifi fa-5x"></i>
                            <h3>Streaming</h3>
                            <p>Many of our team members share their gaming moments via Youtube or Twitch.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="center">
                            <i class="fas fa-signal fa-5x"></i>
                            <h3>Promotion</h3>
                            <p>We are a growing, open-minded community giving growth opportunities to our team members and other partners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="background-image:url('img/index/promote.png');background-size:cover;background-position-x:25%;background-attachment:fixed;padding:120px;">
            <div class="container">
                <div class="center">
                    <h1>Promote with us</h1>
                    <p>Are you looking to advertise your product or service? If so, you are in the right place.</p>
                    <a href="contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>