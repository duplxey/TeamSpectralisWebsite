<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= WROOT ?>img/carousel/1.png" alt="First slide">
            <div class="carousel-caption d-none d-lg-block">
                <h3>Watch us live</h3>
                <p>Everything TS, all in one place. Updates and everything fun.</p>
                <a href="<?= WROOT ?>live" class="btn btn-primary"><i class="fas fa-tv"></i> Watch</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= WROOT ?>img/carousel/2.png" alt="Second slide">
            <div class="carousel-caption d-none d-lg-block">
                <h3>Grow with us</h3>
                <p>Join a growing community and get opportunities for collaboration and promotion.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= WROOT ?>img/carousel/3.png" alt="Third slide">
            <div class="carousel-caption d-none d-lg-block">
                <h3>Join us</h3>
                <p>Tryout and get a chance to join our team. Get awesome perks like Free social media redesign and constant promotion.</p>
                <a href="<?= DISCORD ?>" class="btn btn-primary"><i class="fab fa-discord"></i> Join our Discord</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>