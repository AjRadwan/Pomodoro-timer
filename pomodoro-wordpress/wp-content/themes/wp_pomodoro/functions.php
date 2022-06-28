<?php
function pomodoro_theme_scripts(){
    //main css
    wp_register_style('pomodoro-timer', get_template_directory_uri(). '/assets/css/pomodoro-timer.css');

     //bootstrap
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '5.0.2', 'all');

    wp_enqueue_style('custom-style', get_stylesheet_uri());

     wp_enqueue_style('pomodoro-timer');
    wp_enqueue_style('bootstrap');

    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('pomodoro', get_template_directory_uri().'/assets/js/pomodoro.js', array(), '1.0.0');

    wp_enqueue_script('pomo-jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.12.0', 'true' );

}


add_action('wp_enqueue_scripts', 'pomodoro_theme_scripts');