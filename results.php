<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 14. 03. 20
 * Time: 13:52
 */
require_once 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Results</title>
        <meta name="description" content="Results from tournaments"/>
        <meta name="keywords" content="tournaments"/>
        <meta property="og:title" content="Team Spectralis | Results"/>
        <meta property="og:description" content="Results from tournaments"/>
        <meta property="og:image" content="https://teamspectralis.com/img/thumbnail.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Results</h2>
                <p>Here are some of our tournament and other event results (UPDATING SOON)</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <?php
                    //Always sort these by date, descending
                    $results = [
                        [
                            "name"=>"Pircolino",
                            "image"=>"https://i.imgur.com/8vCdl6Z.png",
                            "tournament" => "Winter royale duos - 900$",
                            "placement" => "#52",
                            "game" => "Fortnite",
                            "link" => "https://fortnitetracker.com/events/epicgames_S11_WinterRoyale_PC_EU",
                            "date" => "20.12.2019",
                            "nameLink" => "pircolino",
                            "nameLink2" => "",
                            "nameLink3" => "",
                            "nameLink4" => "",
                            "players" => "1",
                        ],
                                                [
                            "name"=>"Pircolino & Jekouc",
                            "image"=>"https://i.imgur.com/bzYLHDH.png",
                            "tournament" => "Contender cash cup duos event - 400$",
                            "placement" => "#40",
                            "game" => "Fortnite",
                            "link" => "https://fortnitetracker.com/events/epicgames_S12_CC_Contenders_EU_Ghost",
                            "date" => "18.3.2020",
                            "nameLink" => "pircolino",
                            "nameLink2" => "jekouc",
                            "nameLink3" => "",
                            "nameLink4" => "",
                            "players" => "2",
                        ],
                    ];
                    if($results){
                        $cc = 0;
                        foreach($results as $result){
                            ?>
                            <div class="col-xs-12 col-md-6">
                                <?php
                                include "components/result.php";
                                ?>
                            </div>
                            <?php
                            $cc++;
                            if($cc%2 == 0){
                                ?>
                                <div class="clearfix"></div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>