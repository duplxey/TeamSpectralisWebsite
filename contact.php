<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Contact Us</title>
        <meta name="description" content="contact-us-description"/>
        <meta name="keywords" content="keyword1, keyword2, keyword3, keyword4, keyword5"/>
        <meta property="og:title" content="Team Spectralis | Contact Us"/>
        <meta property="og:description" content="contact-us-description"/>
        <meta property="og:image" content="https://teamspectralis.com/img/logo.png"/>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Get in touch</h2>
                <p>Want to work with us or have anything important to ask or suggest? Feel free to send us a message, we would love to hear from you.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="https://formspree.io/info@teamspectralis.com" method="POST" class="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" name="name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Your Message" name="name"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                    <div class="col-md-6 mobile-padded">
                        <h3>Other contact options</h3>
                        <ul>
                            <li>Email: <a href="mailto:<?= MAIL ?>"><?= MAIL ?></a></li>
                            <li>Discord: <a href="<?= DISCORD ?>">Spectralis Discord</a></li>
                        </ul>
                        <h3>Follow us on social media</h3>
                        <div class="social">
                            <a href="<?= FACEBOOK ?>"><i class="fab fa-facebook fa-lg icon-link"></i></a>
                            <a href="<?= INSTAGRAM ?>"><i class="fab fa-instagram fa-lg icon-link"></i></a>
                            <a href="<?= TWITTER ?>"><i class="fab fa-twitter fa-lg icon-link"></i></a>
                            <a href="<?= YOUTUBE ?>"><i class="fab fa-youtube fa-lg icon-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>