<?php

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'Full Calendar Style', get_template_directory_uri() . '/css/addons-pro/fullcalendar.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.js', array(), '3.4.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Moment', get_template_directory_uri() . '/js/addons-pro/moment.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Full Calendar', get_template_directory_uri() . '/js/addons-pro/fullcalendar.min.js', array(), '3.9.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>