<?php require_once 'php/config.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "php/preimports.php" ?>
        <title>Team Spectralis | Subscribe</title>
        <?php require_once "php/imports.php" ?>
    </head>
    <body>
        <?php include "components/header.php" ?>
        <div class="section" style="background:url('img/cover/cover2.png')center;background-size: cover;">
            <div class="container">
                <h2>Subscribe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">#mc-embedded-subscribe-form.validate{margin:0;padding:0;}</style>
                        <div id="mc_embed_signup">
                            <form action="https://gmail.us3.list-manage.com/subscribe/post?u=ff938294288b301bace654f32&amp;id=6a4cd1e8f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" tcute catarget="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="form-group">
                                        <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address" required>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ff938294288b301bace654f32_6a4cd1e8f2" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary" style="width:100px;border:0;"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <div class="col-12 col-md-6 mobile-padded">
                        <p>"We promise we won't spam you, but we might send you some cute cat pictures occasionally."</p>
                        <img src="img/subscribe/cat.jpg" class="img-fluid rounded" alt="Kitty" style="width: 150px;">
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php" ?>
    </body>
</html>