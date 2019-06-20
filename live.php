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
        <div class="section" style="background: url('img/whatwedo.jpg');">
            <div class="container">
                <h2>Live</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <iframe
                        src="https://player.twitch.tv/?<channel, video, or collection>"
                        height="600"
                        width="100%"
                        frameborder="0"
                        scrolling="false"
                        allowfullscreen="<allowfullscreen>">
                </iframe>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>