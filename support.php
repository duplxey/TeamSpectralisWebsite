<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Support</title>
        <meta name="description" content="Support us by donating."/>
        <meta name="keywords" content="doante, suupport, donations, dono, tip"/>
        <meta property="og:title" content="Team Spectralis | Support"/>
        <meta property="og:description" content="Support us by donating."/>
        <meta property="og:image" content="https://teamspectralis.com/img/thumbnail.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover2.png')center;background-size: cover;">
            <div class="container">
                <h2>Support us by donating</h2>
                <p>We never expect donations, but if someone decides to donate, we highly appreciate it. Donations are only used for organization growth and upgrades. <i><small>(Member peripheral upgrades, merch funding, event hosting etc.)</small></i></p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                Want to support our organization? Tap on the following button to donate:<br>
                <!-- TODO: link the donation page -->
                <a href="#"><img src="img/subscribe/donate.png" class="img-fluid rounded" alt="donate" style="width: 100px;"></a>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>