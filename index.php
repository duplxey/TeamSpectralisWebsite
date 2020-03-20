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
        <?php include "components/carousel.php" ?>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2>About us</h2>
                        <p>We are an ESports organization based in Europe, Slovenia. Our main focus is to provide our team members with opportunities to grow on social media, improve their skills/tactics in gaming/social media & to easily collab with other teammates. We currently compete in Fortnite tournaments.</p>
                        <a href="<?= WROOT ?>team" class="btn btn-primary">Read more...</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5>Player dedication</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                        </div>
                        <h5>Community</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                        </div>
                        <h5>Reach</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">40000+ followers across social media.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="background:url('img/index/services.png')center;background-size:cover;">
            <div class="container">
                <div class="center">
                    <h2 class="padded">What we do</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="center">
                            <i class="fas fa-gamepad fa-5x"></i>
                            <h3>Competitive Gaming</h3>
                            <p>We're all passionate gamers that are either really good at games or even compete.</p>
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
                            <p>We are a fast-growing, open-minded community giving growth opportunities to our team members and other partners.</p>
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
                    <a href="<?= WROOT ?>contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>