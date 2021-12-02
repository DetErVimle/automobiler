<?php 
    function automobiler_register_styles() {
        wp_enqueue_style('automobiler-style', get_template_directory_uri()."/style.css", array(), '1.0' , 'all');
        wp_enqueue_style('automobiler-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css", array(), '6.0.0-beta3', 'all');
    }

    add_action('wp_enqueue_scripts', 'automobiler_register_styles');

    function automobiler_register_scripts() {
         wp_enqueue_script('automobiler-custom', get_template_directory_uri()."/assets/js/main.js", array(),true);
    }

    add_action('wp_enqueue_scripts', 'automobiler_register_scripts');

    function automobiler_register_menu() {
        register_nav_menu("main-menu", "Main menu");
    }
    add_action("init", "automobiler_register_menu");

    // add custom logo
    add_theme_support("custom-logo");

    // remove admin navigation
    show_admin_bar(false);
?>