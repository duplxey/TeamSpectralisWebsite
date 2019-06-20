<?php include_once 'php/copyright.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Partners</title>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Currently live</h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <!-- TODO: list channels that are online, fullscreen one. -->
                <iframe
                        src="https://player.twitch.tv/?<channel, video, or collection>"
                        class="livestream"
                        allowfullscreen="true">
                </iframe>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>