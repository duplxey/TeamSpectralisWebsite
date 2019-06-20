<?php include_once 'php/copyright.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Contact Us</title>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover1.png')center;background-size:cover;">
            <div class="container">
                <h2>Get in touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="https://formspree.io/teamspectralis@mailinator.com" method="POST" class="contact-form">
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
                            <li>Email: <a href="mailto:%mail%">%mail%</a></li>
                            <li>Discord: <a href="%discord%">Spectralis Discord</a></li>
                        </ul>
                        <h3>Follow us on social media</h3>
                        <div class="social">
                            <a href="%facebook%"><i class="fab fa-facebook fa-lg icon-link"></i></a>
                            <a href="%instagram%"><i class="fab fa-instagram fa-lg icon-link"></i></a>
                            <a href="%twitter%"><i class="fab fa-twitter fa-lg icon-link"></i></a>
                            <a href="%youtube%"><i class="fab fa-youtube fa-lg icon-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>