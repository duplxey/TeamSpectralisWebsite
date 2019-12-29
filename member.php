<?php require_once 'php/config.php'; ?>
<?php require 'generate.php';

if(isset($_POST["member"])){

$member = $_POST["member"];
$type = $_POST["type"];

}else{header("Location: team.php");} 
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
                    <div class="col-12 col-md-6">
                    <div class="center">
            <?php
            if(isset($member)){
            echo'<div class="container">';
            if($type=="player")
            {echo'<h3 style="color:#E0F107; font-weight:bold;">'.$member.'&nbsp;<small style="font-size:17px;"><i class="fas fa-trophy"></i></small></h3>';}
            else if($type=="staff")
            {echo'<h3 style="color:#E0F107; font-weight:bold;">'.$member.'&nbsp;<small style="font-size:17px;"><i class="fas fa-user-cog"></i></small></h3>';}
            else if($type=="content")
            {echo'<h3 style="color:#E0F107; font-weight:bold;">'.$member.'&nbsp;<small style="font-size:17px;"><i class="fas fa-chart-line"></i></small></h3>';}
            else if($type=="devedit")
            {echo'<h3 style="color:#E0F107; font-weight:bold;">'.$member.'&nbsp;<small style="font-size:17px;"><i class="fas fa-user-edit"></i></small></h3>';}

            echo'<img src="'.@getinfo($member,"profile").'" class="img-fluid rounded" alt="'.$member.'" style="width: 250px;"></br></br>';

            echo'<div class="social">';
           @getsocials($member,"socials");
        echo'</div>';

            echo'</div>';
            }else echo '<h3 style="color:#E0F107;">Member not selected!</h3>';
            ?>      </div>
            <?php
            echo'</br><h3 style="color:#fff;">About me:</h3></br>';
            echo'<p>'.@getinfo($member,"desc").'</br></br>'; 
            ?>
                    </div>
                    <div class="col-12 col-md-6 mobile-padded">
                    <div class="center">
            <?php
            if(isset($member)){
                echo'</br><h3 style="color:#fff;">Settings:</h3></br>';
                @getdata($member,"settings");
            }
            ?>   
                        <a href="team.php" style="text-decoration:none;"><i class="fas fa-arrow-left"></i> Back</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>