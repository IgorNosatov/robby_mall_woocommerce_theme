<?php

if (! function_exists('robby_mall_setup')) :

    function robby_mall_setup()
    {
        load_theme_textdomain('robby_mall', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(
			array(
                'header-menu' => __( 'Header menu', 'robby_mall' ),
                'footer-menu1' => __( 'Footer menu1', 'robby_mall' ),
                'footer-menu2' => __( 'Footer menu2', 'robby_mall' ),
                'footer-menu3' => __( 'Footer menu3', 'robby_mall' ),
                'footer-menu4' => __( 'Footer menu4', 'robby_mall' ),
                'front-menu1' => __( 'Front menu1', 'robby_mall' ),
                'front-menu2' => __( 'Front menu2', 'robby_mall' ),
                'front-menu3' => __( 'Front menu3', 'robby_mall' ),
                'front-menu4' => __( 'Front menu4', 'robby_mall' ),
			)
		);
      
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 120,
                'width'       => 120,
            )
        );
    }
endif;
add_action('after_setup_theme', 'robby_mall_setup');
