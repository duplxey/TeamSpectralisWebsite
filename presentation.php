<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Professional ESports Team</title>
        <meta name="description" content="TeamSpectralis is a professional ESports organization based in Europe, Slovenia. Our main focus is to provide our team members with opportunities to grow on social media, expand their gaming skills/tactics and to easily collab with other teammates."/>
        <meta name="keywords" content="teamspectralis, fortnite, esports, professional, team, competitive, slovenia, gaming, spectralis"/>
        <meta property="og:title" content="Team Spectralis | Professional ESports Team"/>
        <meta property="og:description" content="TeamSpectralis is a professional ESports organization based in Europe, Slovenia. Our main focus is to provide our team members with opportunities to grow on social media, expand their gaming skills/tactics and to easily collab with other teammates."/>
        <meta property="og:image" content="https://teamspectralis.com/img/thumbnail.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background-image: url('img/pres-back.png');background-size: 100%;background-repeat: no-repeat;">
            <div class="container" style="padding: 2% 5%">
                <h1>TeamSpectralis</h1>
                <p>We are an ESports organization based in Europe, Slovenia. Our main focus is to provide our team members with opportunities to grow on social media, expand their gaming skills/tactics and to easily collab with other teammates.</p>
                <a href="#" class="btn btn-primary">Read more...</a>
            </div>
        </div>
        <div class="section">
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
        <div class="section" style="background-image: url('img/pres-under.png');background-size: 100%;background-repeat: no-repeat; padding: 75px;">
            <div class="container" style="position: relative;">
                <div class="center">
                    <h1>Promote with us</h1>
                    <p>Are you looking to advertise your product or service? If so, you are in the right place.</p>
                    <a href="<?= WROOT ?>contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>