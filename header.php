<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RobbyMall
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”robots” content="index, follow">
    <meta name="description" content="Place where you can find your future robo gadgets.">
    <title>Robby Mall</title>
    <link rel="shortcut icon" type="image/png" href="./img/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__mid pt-1 logo-desktop">
            <div class="header__wrap">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="d-flex flex-row  justify-content-center">
                            <div class="logo-image">
                                <?php echo get_custom_logo(); ?>
                            </div>
                            <div class="logo-title mt-2">
                                <h4 class="text-center pt-4 font-weight-bold text-white"> Robby Mall</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4  col-lg-5">
                        <form class="pt-4" role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="input-group mb-2">
                                        <input type="search" class="form-control header-input text-black" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__('Find Products&hellip;', 'woocommerce'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                       <div class="input-group-prepend"> <button type="submit"
                                         class="btn btn-main  title" value="<?php echo esc_attr_x('Search', 'submit button', 'woocommerce'); ?>">Search</button></div> 
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="post_type" value="product" />
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-4  offset-lg-1 col-lg-3">
                        <div class="d-flex justify-content-around flex-row flex-wrap">
                            <div class="enter-menu d-flex flex-row">
                                <div class="enter-menu__icon  pt-4 pr-2"> <i class="far fa-user-circle fa-2x"></i>
                                </div>
                                <div class="enter-menu__text mt-2 pt-4">
                                    <?php if (is_user_logged_in()) { ?>
                                        <a class="site-title text-white font-weight-bold mt-2" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" title="<?php _e('Your Account', 'woothemes'); ?>">My account</a>
                                    <?php } else { ?>
                                        <a class="text-white font-weight-bold mt-2" href="<?php echo esc_url(get_permalink(get_page_by_title('Login'))); ?>">Sign In</a>  
                                        <span class="text-white font-weight-bold mt-2">|</span>
                                        <a class="text-white font-weight-bold mt-2" href="<?php echo esc_url(get_permalink(get_page_by_title('Register'))); ?>">Join</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="cart-menu d-flex flex-row">
                                <div class="cart-menu__icon pt-4 pr-2"> <i class="fas fa-shopping-cart fa-2x"></i>
                                </div>
                                <div class="cart-menu__text pt-4">
                                    <p> <?php echo '<a class="site-link" href="' . wc_get_cart_url() . '">Your cart</a>'; ?><br> <span class="site-link"> (<?php echo WC()->cart->get_cart_contents_count(); ?>)
                                            Items</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg header__bottom pt-3 pb-3">
            <div class="row no-gutters logo-mobile">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="d-flex flex-row  justify-content-center">
                        <div class="logo-image">
                            <?php echo get_custom_logo(); ?>
                        </div>
                        <div class="logo-title mt-2">
                            <h4 class="header__logo-text text-center pt-4 title"> Robby Mall</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8  col-lg-3">
                    <div class="d-flex justify-content-around flex-row flex-wrap">
                        <div class="enter-menu d-flex flex-row">
                            <div class="enter-menu__icon  pt-4 pr-2"> <i class="far fa-user-circle fa-2x"></i> </div>
                            <div class="enter-menu__text pt-4">
                                <?php if (is_user_logged_in()) { ?>
                                    <a class="site-title text-white font-weight-bold mt-2" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" title="<?php _e('Your Account', 'woothemes'); ?>"><?php _e('My Account', 'woothemes'); ?></a>
                                <?php } else { ?>
                                    <a class="text-white font-weight-bold mt-2" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" title="<?php _e('Sign In', 'woothemes'); ?>"><?php _e('Sign In', 'woothemes'); ?></a>
                                    <span class="text-white font-weight-bold mt-2">|</span>
                                    <a class="text-white font-weight-bold mt-2" href="<?php echo esc_url(get_permalink(get_page_by_title('Register'))); ?>">Join</a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cart-menu d-flex flex-row">
                            <div class="cart-menu__icon pt-4 pr-2"> <i class="fas fa-shopping-cart fa-2x"></i> </div>
                            <div class="cart-menu__text pt-4">
                                <p> <?php echo '<a class="site-link" href="' . wc_get_cart_url() . '">Your cart</a>'; ?><br> <span class="site-link"> (<?php echo WC()->cart->get_cart_contents_count(); ?>)
                                        Items</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-1 col-2 offset-sm-1 col-sm-2 mx-auto"> <button class="navbar-toggler pt-4" type="button" data-toggle="collapse" data-target="#navHeader" aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars fa-2x"></i>
                    </button> </div>
                <div class="col-9 col-sm-9 col-md-4  col-lg-6 mx-auto">
                    <form class="pt-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="input-group mb-2"> <input type="text" class="form-control header-input text-black" id="inlineFormInputGroup" placeholder="Find Products .....">
                                    <div class="input-group-prepend"> <button type="submit" class="btn btn-main  title">Submit</button> </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="collapse navbar-collapse header-nav d-flex flex-row justify-content-center w-100" id="navHeader">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'depth' => 0,
                    'container' => '',
                    'menu_class' => 'navbar-nav desktop d-flex flex-row flex-wrap justify-content-center w-100',
                ));
                ?>
            </div>
            <div class="collapse navbar-collapse justify-content-center header-nav" id="navHeader">
                <ul class="navbar-nav d-flex flex-column mobile">
                    <li class="nav-item p-1"> <a class="nav-link" href="#">ROBOTICS EDUCATION</a> </li>
                    <li class="nav-item p-1"> <a class="nav-link" href="#">BEST SELLERS</a> </li>
                    <li class="nav-item p-1"> <a class="nav-link" href="#">NEW ARRIVALS</a> </li>
                    <li class="nav-item p-1"> <a class="nav-link" href="#">GIFT IDEAS</a> </li>
                    <li class="nav-item p-1"> <a class="nav-link" href="#">CLOSEOUT</a> </li>
                    <li class="nav-item  p-1 dropdown"> <a class="nav-link dropdown-toggle" href="#" id="dropdownmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SHOP BY CATEGORY</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownmenu">
                            <div class="d-flex flex-column">
                                <div>
                                    <div class="dropdown-header"> Robot Parts</div> <a class="dropdown-item" href="#">Microcontrollers</a> <a class="dropdown-item" href="#">Motors &
                                        Actuators</a> <a class="dropdown-item" href="#">Motor Controllers</a> <a class="dropdown-item" href="#">Robot Sensors</a> <a class="dropdown-item" href="#">Power Systems</a>
                                </div>
                                <div>
                                    <div class="dropdown-header">Robots & Kits</div> <a class="dropdown-item" href="#">Robot Construction Kits</a> <a class="dropdown-item" href="#">Robotic
                                        Arms & Grippers</a> <a class="dropdown-item" href="#">Humanoid and Biped
                                        Robots</a> <a class="dropdown-item" href="#">Hexapod Robots</a> <a class="dropdown-item" href="#">Wheeled & Tracked Robots</a>
                                </div>
                                <div>
                                    <div class="dropdown-header">UAVs & Drones</div> <a class="dropdown-item" href="#">UAV & Drone Kits</a> <a class="dropdown-item" href="#">UAV & Drone
                                        ARF</a> <a class="dropdown-item" href="#">UAV & Drone RTF</a> <a class="dropdown-item" href="#">UAV & Drone Mini / Micro</a> <a class="dropdown-item" href="#">UAV & Drone FPV / Video</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>