<?php

/**
 * Template name:Front page
 *
 */

get_header();
?>
<div class="promo" style="background: url('<?php the_field('promo-banner'); ?>');">
    <h2 class="text-right pr-5  pb-5 pt-5 banner-title"> " Our customers " <br> "The heart of our organization "</h2>
</div>
<div class="tag-lines ">
    <div class="tag-lines__info">
        <div class="d-flex flex-row flex-wrap justify-content-around">
            <div class="p-2">
                <p class="text-center">
                    <i class="fas fa-globe-europe fa-3x"></i>
                </p>
                <p class="text-center text-white">
                    The World's Leading Robot Store
                </p>
            </div>
            <div class="p-2">
                <p class="text-center">
                    <i class="fas fa-mug-hot fa-3x"></i>
                </p>
                <p class="text-center text-white">
                    Customers Satisfaction 10/10
                </p>
            </div>
            <div class="p-2">
                <p class="text-center">
                    <i class="fas fa-chess-pawn  fa-3x"></i>
                </p>
                <p class="text-center text-white">
                    Simple Returns and Warranty Policies
                </p>
            </div>
            <div class="p-2">
                <p class="text-center">
                    <i class="fas fa-shipping-fast  fa-3x"></i>
                </p>
                <p class="text-center text-white">
                    Free shipping on orders over
                </p>
            </div>
        </div>
    </div>
</div>
<div class="product-banner pt-4">
    <div class="row no-gutters">
        <div class="col-lg-12">
            <div id="carouselCategoryControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row no-gutters">
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image1'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image2'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image3'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image4'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image3'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image4'); ?>" alt="..."></div>
                        </div>
                    </div>
                    <div class="carousel-item  row no-gutters">
                        <div class="row no-gutters">
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image7'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image2'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image3'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image4'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image3'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image4'); ?>" alt="..."></div>
                        </div>
                    </div>
                    <div class="carousel-item row no-gutters ">
                        <div class="row no-gutters">
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image1'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image2'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image3'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image8'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image3'); ?>" alt="..."></div>
                            <div class="col-lg-2 p-2"><img src="<?php the_field('slider-image4'); ?>" alt="..."></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselCategoryControls" role="button" data-slide="prev">
                    <i class="fas fa-arrow-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselCategoryControls" role="button" data-slide="next">
                    <i class="fas fa-arrow-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="random-products pt-5">
    <div class="random-products__wrap">
        <div class="row no-gutters">
            <div class="col-sm-12 col-lg-12">
                <h5 class="text-left font-weight-bold text-uppercase">Products you don't want to miss <small><a href="">Shop all products</a></small></h5>
            </div>
            </div>
   
            <?php echo do_shortcode('[products limit="4" ]'); ?>
            </div>
</div>
<div class="categories pt-4 pb-4">
    <div class="categories__wrap">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <h4 class="text-center title  mt-2 text-uppercase">Categories</h4>
            </div>
            <div class="col-lg-12">
                <div class="d-flex flex-row  flex-wrap justify-content-between">
                    <div class="">
                        <h4 class="font-weight-bold title mt-2-nav pt-3">Robot Parts</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'front-menu1',
                            'depth'             => 0,
                            'container'         => '',
                            'menu_class'        => 'nav flex-column  front-nav',
                        ));
                        ?>
                    </div>
                    <div class="">
                        <h4 class="font-weight-bold title  mt-2-nav pt-3">Robots & Kits</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'front-menu2',
                            'depth'             => 0,
                            'container'         => '',
                            'menu_class'        => 'nav flex-column   front-nav',
                        ));
                        ?>
                    </div>
                    <div class="">
                        <h4 class="font-weight-bold title  mt-2-nav pt-3">UAVs & Drones</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'front-menu3',
                            'depth'             => 0,
                            'container'         => '',
                            'menu_class'        => 'nav flex-column   front-nav',
                        ));
                        ?>
                    </div>
                    <div class="">
                        <h4 class="font-weight-bold title  mt-2-nav pt-3">Personal & Domestic Robots</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'front-menu4',
                            'depth'             => 0,
                            'container'         => '',
                            'menu_class'        => 'nav flex-column  front-nav',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feedback pt-3 pb-2">
    <div class="feedback__wrap">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div id="carouselFeedbackInterval" class="carousel slide pt-3 pb-3" data-ride="carousel">
                    <div class="carousel-inner pt-4">
                        <div class="carousel-item active" data-interval="10000">
                            <p class="text-center font-italic">“My order was quickly processed and shipped. All with email notifications. Order confirmation and Order shipped emails are the same day or next day. Awesome”</p>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <p class="text-center font-italic">“The service is always exceptional, and the range of parts match the service!!!!!”</p>
                        </div>
                        <div class="carousel-item">
                            <p class="text-center font-italic">“Fast shipping, well packed, very good quality products.”</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFeedbackInterval" role="button" data-slide="prev">
                        <i class="fas fa-arrow-left fa-2x"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFeedbackInterval" role="button" data-slide="next">
                        <i class="fas fa-arrow-right fa-2x"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
