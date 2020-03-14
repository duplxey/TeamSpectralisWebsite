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
<a class="result" <?php echo $resultLink?>>
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
                </ul>
            </div>
        </div>
    </div>
</a>