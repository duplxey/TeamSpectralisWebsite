<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Live</title>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Live</h2>
                <p>Our members are highly motivated to bring you the best live content they can provide.
Check them out on Youtube or Twitch on their respective channels.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <!-- TODO: list channels that are online, fullscreen one. -->
                <iframe
                        src="https://player.twitch.tv/ogswagter<channel, video, or collection>"
                        class="livestream"
                        allowfullscreen="true">
                </iframe>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>