<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= WROOT ?>">
                <img src="<?= WROOT ?>img/logo.png" width="36" height="36" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggler" aria-controls="toggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggler">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WROOT ?>team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WROOT ?>results">Results</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WROOT ?>live"><span class="pulse">● </span>Live</a><!-- TODO: make me pulse only when someone is streaming -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WROOT ?>partners">Partners</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="<?= WROOT ?>support">Support us</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WROOT ?>merch">Merch <sup class="mini-alert">Soon</sup></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= WROOT ?>contact">Contact</a>
                            <a class="dropdown-item" href="<?= WROOT ?>subscribe">Subscribe</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>