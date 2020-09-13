<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RobbyMall
 */

?>

<footer class="footer">
        <div class="footer__top pt-3 pb-3">
            <div class="footer__wrap">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-6 col-lg-2">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="title mt-2">Let Us Help You</h5>
                            </li>
                            <li class="nav-item">
                            <?php
						wp_nav_menu( array(
							 'theme_location'    => 'footer-menu1',
							 'depth'             => 0,
							 'container'         => '',
							 'menu_class'        => 'nav flex-column  footer-nav',
						 ) );
                        ?>
                        </li>
                        </ul>
                    </div>
                    <div class="col-sm-12  col-md-6 col-lg-2">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="title mt-2">Get to Know Us</h5>
                            </li>
                            <li class="nav-item">
                            <?php
						wp_nav_menu( array(
							 'theme_location'    => 'footer-menu2',
							 'depth'             => 0,
							 'container'         => '',
							 'menu_class'        => 'nav flex-column  footer-nav',
						 ) );
                        ?>
                        </li>
                        </ul>
                    </div>
                    <div class="col-sm-12  col-md-6 col-lg-2">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="title mt-2">Business Opportunities</h5>
                            </li>
                            <li class="nav-item">
                            <?php
						wp_nav_menu( array(
							 'theme_location'    => 'footer-menu3',
							 'depth'             => 0,
							 'container'         => '',
							 'menu_class'        => 'nav flex-column  footer-nav',
						 ) );
                        ?>
                        </li>
                        </ul>
                    </div>
                    <div class="col-sm-12  col-md-6 col-lg-2">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="title mt-2">Community</h5>
                            </li>
                            <li class="nav-item">
                            <?php
						wp_nav_menu( array(
							 'theme_location'    => 'footer-menu4',
							 'depth'             => 0,
							 'container'         => '',
							 'menu_class'        => 'nav flex-column  footer-nav',
						 ) );
                        ?>
                        </li>
                        </ul>
                    </div>
                    <div class="col-sm-12  col-md-12 col-lg-4">
                        <h5 class=" pt-1 pb-1 title mt-2">Don’t Miss a Thing, Subscribe to our Newsletter</h5>
                        <form method="post" action="http://localhost:8000/?na=s" onsubmit="return newsletter_check(this)">
                          <input type="hidden" name="nlang" value="">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="input-group mb-2"> <input type="email" name="ne" required class="form-control"  placeholder="Enter Email .....">
                                        <div class="input-group-prepend"> <button type="submit" class="btn-main">Submit</button> </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6 class="title mt-2">Stay in Touch</h6>
                        <div class="d-flex flex-row flex-wrap">
                            <div><a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x p-2"></i></a></div>
                            <div><a href="https://www.instagram.com/"><i class="fab fa-instagram  fa-2x p-2"></i></a></div>
                            <div><a href="https://twitter.com/"><i class="fab fa-twitter-square  fa-2x p-2"></i></a></div>
                            <div><a href="https://twitter.com/"><i class="fas fa-basketball-ball  fa-2x p-2"></i></a></div>
                            <div><a href="https://www.google.com"><i class="fab fa-google-plus-g  fa-2x p-2"></i></div>
                            <div><a href="https://www.linkedin.com/"><i class="fab fa-linkedin  fa-2x p-2"></i></a></div>
                            <div><a href="https://www.reddit.com/"><i class="fab fa-reddit  fa-2x p-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__mid pt-3 pb-3">
            <div class="footer__wrap">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="d-flex flex-row justify-content-start">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom  pt-3 pb-3">
            <div class="footer__wrap"></div>
            <div class="row no-gutters">
                <div class="col-lg-12 p-2">
                    <p class="text-center">Service Time Monday to Friday: 12 PM - 22 PM CET (Central Europe Time)</p>
                    <p class="text-center">+99 (0) 8 01 99 99 99 (Europe)(Sales Department Only. Technical queries should be directed to the Robby Mall Forum)</p>
                    <p class="text-center">Robby Mall, the World's Leading Robot Store For Personal and Professional Robot Technology. <br> Here you will find the best selection of Robot Vacuums and other Domestic Robots, Professional Robots, Robot Toys, Robot Kits, and Robot
                        Parts for building your own robots. Robby Mall is also a leading force in Robotics Education & Research. <br> We provide a diverse product selection, educational and quantity discounts, useful resources and specialized support.
                        </p>
                    <p class="text-center">© 2020 Robby Mall inc. All Rights Reserved.</p>
                    <p class="text-center">Putting robotics at your service is a trademark of Robby Mall inc.</p>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
