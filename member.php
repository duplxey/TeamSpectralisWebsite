<?php require_once 'php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Team</title>
        <meta name="description" content="This is our team."/>
        <meta name="keywords" content="team, roster, pros, professional, staff"/>
        <meta property="og:title" content="Team Spectralis | Team"/>
        <meta property="og:description" content="This is our team."/>
        <meta property="og:image" content="https://teamspectralis.com/img/thumbnail.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover2.png')center;background-size:cover;">
            <div class="container">
                <h2>Team</h2>
                <p>We strive to make our gaming community a better place for gamers looking for a team to play and cooperate with. This team is like a family to us. Down below you can see a list of our members and their social medias.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 center">
                        <h3 class="bold">Pircolino <i class="fas fa-trophy fa-sm"></i></h3><img src="img/members/PIRCOLINO.jpg" class="img-fluid rounded" alt="Pircolino" style="width: 250px;">
                        <div class="social-container">
                            <a href="https://twitter.com/teamspectralis" class="social"><i class="fab fa-twitter fa-lg icon-link"></i></a>
                            <a href="https://youtube.com/teamspectralis" class="social"><i class="fab fa-youtube fa-lg icon-link"></i></a>
                            <a href="https://facebook.com/teamspectralis" class="social"><i class="fab fa-facebook fa-lg icon-link"></i></a>
                            <a href="https://instagram.com/teamspectralis" class="social"><i class="fab fa-instagram fa-lg icon-link"></i></a>
                            <a href="https://teamspectralis.com/" class="social"><i class="fab fab fa-safari fa-lg icon-link"></i></a>
                            <a href="https://twitch.com/teamspectralis" class="social"><i class="fab fa-twitch fa-lg icon-link"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5>About me</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h5>Settings</h5>
                        <ul>
                            <li>Sensitivity: N/A</li>
                            <li>DPI: N/A</li>
                            <li>Ramp: N/A</li>
                            <li>Wall: N/A</li>
                            <li>Floor: N/A</li>
                            <li>Roof: N/A</li>
                            <li>Trap: N/A</li>
                            <li>Edit: N/A</li>
                            <li>Use: N/A</li>
                        </ul>
                    </div>
                </div>
                <div class="float-right">
                    <div class="btn btn-primary"><i class="fas fa-arrow-left"></i> Return</div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>