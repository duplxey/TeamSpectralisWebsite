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
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Results</h2>
                <p>Here are some of our tournament and other event results</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <?
                    //Always sort these by date, descending
                    $results = [
                        [
                            "name"=>"Janez Nooobak",
                            "image"=>"https://picsum.photos/400/300",
                            "tournament" => "TeamSpectralis cup",
                            "placement" => "6th",
                            "game" => "Fortnite",
                            "link" => "#",
                            "date" => "6.4.2020"
                        ],
                        [
                            "name"=>"Metka Bot",
                            "image"=>"https://picsum.photos/400/300",
                            "tournament" => "TeamSpectralis cup",
                            "placement" => "5th",
                            "game" => "Fortnite",
                            "link" => "#",
                            "date" => "6.4.2020"
                        ],
                    ];
                    if($results){
                        $cc = 0;
                        foreach($results as $result){
                            ?>
                            <div class="col-xs-12 col-md-6">
                                <?
                                include "components/result.php";
                                ?>
                            </div>
                            <?
                            $cc++;
                            if($cc%2 == 0){
                                ?>
                                <div class="clearfix"></div>
                                <?
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