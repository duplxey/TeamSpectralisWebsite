<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Live</title>
        <meta name="description" content="live-description"/>
        <meta name="keywords" content="keyword1, keyword2, keyword3, keyword4, keyword5"/>
        <meta property="og:title" content="Team Spectralis | Live"/>
        <meta property="og:description" content="live-description"/>
        <meta property="og:image" content="https://teamspectralis.com/img/logo.png"/>
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
                            "Team Spectralis" => "https://www.youtube.com/embed/live_stream?channel=UCYeVnOpF0Yt6ipAOJaFpz2g",
                            "Gtehnic" => "https://www.youtube.com/embed/live_stream?channel=UCfBkq9Ndho8W2FJymDXeviw",
                            "v1dus" => "https://www.youtube.com/embed/live_stream?channel=vidusslo",
                            "Clumsy Mark" => "https://www.youtube.com/embed/live_stream?channel=UCMacEQ-nR-W2QOt1h6oUjsw",
                            "ScorpLZ" => "https://www.youtube.com/embed/live_stream?channel=scorplz",
                            "Aljazek" => "https://www.youtube.com/embed/live_stream?channel=UCgkTyjIHIhDoQ5QUtyNzwBA",
                            "Swagter" => "https://www.youtube.com/embed/live_stream?channel=swagter",
                        );

                        $TWITCH_CHANNELS = array(
                            "AntonTheOne" => "https://player.twitch.tv/?channel=antontheone",
                            "Tricksy" => "https://player.twitch.tv/?channel=tricksyfn",
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