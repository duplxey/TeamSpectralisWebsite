<?php require_once 'php/config.php' ?>
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
        <link rel="stylesheet" type="text/css" href="css/formstyle.css">
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
                <?php
                    $player_tags = [1, 2, 3];

                    $roles_sql = "SELECT * FROM `member_roles`;";
                    $roles_stmt = $pdo->prepare($roles_sql);
                    $roles_stmt->execute();
                    $roles = $roles_stmt->fetchAll();

                    foreach ($roles as $role) {
                        echo "<div class='padded-top'><h3 style='color: var(--yellow);'>" . $role["name"] . "s <i class='" . $role["icon"] . "' style='color: var(--yellow);'></i></h3></div>";

                        $members_sql = "SELECT * FROM `members`, `member_roles`, `member_social` WHERE `members`.`id` = member_social.id AND `members`.`role` = `member_roles`.`id` AND `member_roles`.`id` = ?;";
                        $members_stmt = $pdo->prepare($members_sql);
                        $members_stmt->execute([$role["id"]]);
                        $members = $members_stmt->fetchAll();

                        echo "<div class='row'>";
                        foreach ($members as $member) {
                            $image = "img/members/" . $member["username"] . ".png";
                            $image = file_exists($image) ? $image : "img/members/temp.png";
                            echo "<div class='col-12 col-md-3 center padded-top'>";
                            echo "<img src='" . $image . "' alt='Avatar' width='128px' style='border-radius:50%'>";
                            echo "<h4>" . $member["username"] . (in_array($member["role"], $player_tags) ? ("<small style='color: var(--purple); font-size: 14px;'> (" . $member["tag"] . ")</small>") : "") . "</h4>";
                            if ($member["twitter"] != null) echo '<a href="' . $member["twitter"] . '" class="social"><i class="fab fa-twitter fa-lg icon-link"></i></a>';
                            if ($member["youtube"] != null) echo '<a href="' . $member["youtube"] . '" class="social"><i class="fab fa-youtube fa-lg icon-link"></i></a>';
                            if ($member["facebook"] != null) echo '<a href="' . $member["facebook"] . '" class="social"><i class="fab fa-facebook fa-lg icon-link"></i></a>';
                            if ($member["instagram"] != null) echo '<a href="' . $member["instagram"] . '" class="social"><i class="fab fa-instagram fa-lg icon-link"></i></a>';
                            if ($member["website"] != null) echo '<a href="' . $member["website"] . '" class="social"><i class="fab fab fas fa-globe fa-lg icon-link"></i></a>';
                            if ($member["twitch"] != null) echo '<a href="' . $member["twitch"] . '" class="social"><i class="fab fa-twitch fa-lg icon-link"></i></a>';
                            echo '<a href="' . WROOT . 'member?user=' . $member["username"] . '" class="social"><i class="fas fa-user fa-lg icon-link"></i></a>';
                            echo "</div>";
                        }
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>