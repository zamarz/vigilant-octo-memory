<?php

function portfolio_files() {
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('portfolio_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //icons
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    //fonts


}

add_action('wp_enqueue_scripts', 'portfolio_files');
//portfolio instead of uni




?>