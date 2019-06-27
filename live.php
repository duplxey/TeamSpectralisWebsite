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
                <p>Our members are highly motivated to bring you the best live content they can provide. Check them out on Youtube or Twitch on their respective channels.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Swagter</button>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                            <div class="card-body">
                                <iframe
                                        src="https://player.twitch.tv/?channel=ogswagter"
                                        class="livestream"
                                        allowfullscreen="true">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Swagter</button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                            <div class="card-body">
                                <iframe
                                        src="https://player.twitch.tv/?channel=ogswagter"
                                        class="livestream"
                                        allowfullscreen="true">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>