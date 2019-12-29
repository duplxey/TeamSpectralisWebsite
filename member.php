<?php
require_once 'php/config.php';

$user_regex = "/^[A-z0-9_]{3,16}$/";

if (!isset($_GET) || !isset($_GET["user"])) {
    header('location: team');
    exit();
}

$user = trim($_GET["user"]);

if (!preg_match($user_regex, $_GET["user"])) {
    header('location: error404');
    exit();
}

$sql = "SELECT * FROM `members`, `member_roles`, `member_social` WHERE `members`.`id` = member_social.id AND `members`.`role` = `member_roles`.`id` AND `username` = ?;";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);

if ($stmt->rowCount() == 0) {
    header('location: error404');
    exit();
}

$result = $stmt->fetch();

?>
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
                        <h3 class="bold" style="color: var(--yellow);"><?= $result["username"] ?> <i class="<?= $result["icon"] ?>" style="color: var(--yellow);"></i></h3>
                        <small>(<?= $result["name"] ?>)</small>
                        <br>
                        <img src="img/members/<?= $result["username"] ?>.png" class="img-fluid avatar-square" alt="<?= $result["username"] ?>">
                        <div class="social-container">
                            <?php
                                if ($result["twitter"] != null) echo '<a href="' . $result["twitter"] . '" class="social"><i class="fab fa-twitter fa-lg icon-link"></i></a>';
                                if ($result["youtube"] != null) echo '<a href="' . $result["youtube"] . '" class="social"><i class="fab fa-youtube fa-lg icon-link"></i></a>';
                                if ($result["facebook"] != null) echo '<a href="' . $result["facebook"] . '" class="social"><i class="fab fa-facebook fa-lg icon-link"></i></a>';
                                if ($result["instagram"] != null) echo '<a href="' . $result["instagram"] . '" class="social"><i class="fab fa-instagram fa-lg icon-link"></i></a>';
                                if ($result["website"] != null) echo '<a href="' . $result["website"] . '" class="social"><i class="fab fab fa-safari fa-lg icon-link"></i></a>';
                                if ($result["twitch"] != null) echo '<a href="' . $result["twitch"] . '" class="social"><i class="fab fa-twitch fa-lg icon-link"></i></a>';
                            ?>
                        </div>
                        <h4>About me</h4>
                        <p><?= $result["description"] ?></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php
                            $f_settings_sql = "SELECT * FROM `fortnite_settings` WHERE `id` = ?;";
                            $f_settings_stmt = $pdo->prepare($f_settings_sql);
                            $f_settings_stmt->execute([$result["id"]]);
                            $f_settings_result = $f_settings_stmt->fetch();

                            if ($f_settings_stmt->rowCount() != 0) {
                                echo "<h4>Settings</h4>";
                                echo "<table class='table table-dark'>";
                                echo "<tr><td>Sensitivity</td><td>" . $f_settings_result["sensitivity"] . "</td></tr>";
                                echo "<tr><td>DPI</td><td>" . $f_settings_result["dpi"] . "</td></tr>";
                                echo "<tr><td>Ramp</td><td>" . $f_settings_result["ramp"] . "</td></tr>";
                                echo "<tr><td>Wall</td><td>" . $f_settings_result["wall"] . "</td></tr>";
                                echo "<tr><td>Floor</td><td>" . $f_settings_result["floor"] . "</td></tr>";
                                echo "<tr><td>Roof</td><td>" . $f_settings_result["roof"] . "</td></tr>";
                                echo "<tr><td>Trap</td><td>" . $f_settings_result["trap"] . "</td></tr>";
                                echo "<tr><td>Edit</td><td>" . $f_settings_result["edit"] . "</td></tr>";
                                echo "<tr><td>Use</td><td>" . $f_settings_result["use"] . "</td></tr>";
                                echo "</table>";
                            }
                        ?>
                    </div>
                </div>
                <div style="text-align: right;">
                    <a href="<?= WROOT ?>team"><div class="btn btn-primary"><i class="fas fa-arrow-left"></i> Return</div></a>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>