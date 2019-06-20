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
        <div class="section">
            <div class="container">
                <h2>Currently live</h2>
                <iframe
                        src="https://player.twitch.tv/?<channel, video, or collection>"
                        height="600"
                        width="100%"
                        frameborder="0"
                        allowfullscreen="<allowfullscreen>">
                </iframe>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>