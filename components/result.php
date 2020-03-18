<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 14. 03. 20
 * Time: 14:04
 */
if($result['link']){
    $resultLink = "href='".$result['link']."'";
}else{
    $resultLink = "";
}
?>
<div class="result" <?php echo $resultLink?>>
    <div class="row no-margin">
        <div class="col-xs-12 col-md-4 no-padding">
            <div class="result-image">
                <img src="<?php echo $result['image']?>" alt="<?php echo $result['name']?>" class="img-fluid"/>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 no-padding">
            <div class="result-info">
                <h5><?php echo $result['name']?></h5>
                <h6><?php echo date("d.m.Y", strtotime($result['date']))?></h6>
                <ul>
                    <li><i class="fas fa-trophy"></i><strong>Cup: </strong><?php echo $result['tournament']?></li>
                    <li><i class="fas fa-gamepad"></i><strong>Game: </strong><?php echo $result['game']?></li>
                    <li><i class="fas fa-star"></i><strong>Position: </strong><?php echo $result['placement']?></li>

                    <?php
                    if($result["players"]=="1"){
                     echo '
                    
                    <li><a href="' . WROOT . 'member?user=' . $result["nameLink"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink"].'</span></a><li>';}
                    if($result["players"]=="2"){
                    echo '
                    
                    <li><a href="' . WROOT . 'member?user=' . $result["nameLink"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink"].' </span></a> <a href="' . WROOT . 'member?user=' . $result["nameLink2"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink2"].' </span></a><li>';
                    }
                    if($result["players"]=="3"){
                    echo '
                    
                    <li><a href="' . WROOT . 'member?user=' . $result["nameLink"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink"].' </span></a> <a href="' . WROOT . 'member?user=' . $result["nameLink2"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink2"].' </span></a>  <a href="' . WROOT . 'member?user=' . $result["nameLink3"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink3"].' </span></a><li>';    
                    }
                    if($result["players"]=="4"){
                    echo '
                    
                    <li><a href="' . WROOT . 'member?user=' . $result["nameLink"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink"].' </span></a> <a href="' . WROOT . 'member?user=' . $result["nameLink2"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink2"].' </span></a>  <a href="' . WROOT . 'member?user=' . $result["nameLink3"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink4"].' </span></a>  <br><a href="' . WROOT . 'member?user=' . $result["nameLink4"].'"><i class="fas fa-user fa-lg icon-link-special" style="font-size: 13px;"></i><span style="font-style: italic; color:#e0f107;">View '.$result["nameLink3"].' </span></a><li>';    
                    }
                     ?>
                </ul>
            </div>
        </div>
    </div>
</div>