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
                    <?php
                        $YOUTUBE_CHANNELS = array(
                            "Swagter" => "https://www.youtube.com/embed/live_stream?channel=UCqIpJDo8G4YIeuvtKFHpx7A",
                        );

                        $TWITCH_CHANNELS = array(
                            "Swagter" => "https://player.twitch.tv/?channel=ogswagter",
                        );

                        $index = 1;

                        /* Display all the channels */
                        display_channels($YOUTUBE_CHANNELS);
                        display_channels($TWITCH_CHANNELS);

                        function display_channels($array) {
                            global $index;

                            foreach ($array as $author => $channel) {
                                echo '<div class="card">';
                                echo '<div class="card-header" id="heading' . $index . '">';
                                echo '<h5 class="mb-0">';
                                echo '<button class="btn btn-link" data-toggle="collapse" data-target="#collapse' . $index . '" aria-expanded="true" aria-controls="collapse' . $index . '">' . $author . ' <i class="fas fa-caret-down"></i></button>';
                                echo '</h5>';
                                echo '</div>';
                                echo '<div id="collapse' . $index . '" class="collapse" aria-labelledby="heading' . $index . '" data-parent="#accordion">';
                                echo '<div class="card-body">';
                                echo '<iframe src="' . $channel . '" height="600" allowfullscreen></iframe>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                $index++;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>