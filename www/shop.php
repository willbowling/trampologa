<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>Power Trampologa | Shop Now</title>
    <?php include('includes/head.php') ?>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
 <!--    <nav class="top-bar">
        <div class="row">
        <img src="images/power-trampologa.png" width="150" class="logo" alt="Power Trampologa Logo">
        <h1>Jaimyn Jupiter's <em>Power Trampologa</em></h1>
        </div>
    </nav> -->

            <!-- Add your site or application content here -->
            <div class="wrapper">      
                <div data-role="page" class="content">      
                    <header>
                        <img src="images/power-trampologa.png" width="150" class="logo" alt="Power Trampologa Logo">
                        <h1>Jaimyn Jupiter's <em>Power Trampologa</em></h1>
                        <h2>NEW FITNESS WORKOUT EQUIPMENT &amp; EXERCISE</h2>
                        <?php include('includes/nav.php') ?>
                    </header>

                    <section class="intro clearfix">
                        <h3>Power Trampologa - Pricing and Availability</h3>
                        <h4>A Priceless Full Body Gym!</h4>
                        <ul class="pricing">
                            <li>Standard Unit - <span class="price">$599</span> <em>plus shipping</em> (69"X 33"X5") approx the size of an exercise mat.. 35 lbs</li>
                            <li>Deluxe unit - <span class="price">$675</span> (same) 45 lbs</li>
                        </ul>
                        
                        <p>Both Power Trampologa Units can be used for most individuals including persons weighing over 300 Lbs. The deluxe model is heavier and great for sports specific explosive and plyometric exercises as well as for stronger, heavier, older, or individuals requiring more help with balance and rehab. POWER TRAMPOLOGA is VERSATILE.</p>
                        <p>Valued at Priceless for your Health and WELL BEING!</p>
                        <!-- <h4 class="pricing"><a href="mailto:powertrampologa@gmail.com?subject=Pricing" "Get Pricing">Contact Us now for Pricing and Availability</a></h4> -->

                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="RXN2LCJU7LUWE">
                            <input type="hidden" name="on0" value="Package">
                            <input type="hidden" name="currency_code" value="USD">
                            <select name="os0">
                                <option value="Standard">Standard $599.00 USD</option>
                                <option value="Deluxe">Deluxe $675.00 USD</option>
                            </select>
                            <input type="image" class="paypal-btn" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                        
                        

                    </section>
                    <aside class="aside1 clearfix">
                        <?php include('includes/sidebar.php') ?>
                    </aside>
                    <div class="clearfix"></div>
                </div>
                <footer>
                    <?php include('includes/footer.php') ?>
                </footer>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script> -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
            <?php include('includes/scripts.php') ?>
    </body>
    </html>
