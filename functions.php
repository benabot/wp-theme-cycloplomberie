<?php

/***
 *
 * fonctionnalités du sites sur la boucle 'after setup'
 *
 ***/
if (!function_exists('ecotheme_theme_support')) {
    function ecotheme_theme_support()
    {
        add_theme_support('title-tag');
        add_theme_support('custom_logo');
    }

    add_action('after_setup_theme', 'ecotheme_theme_support');
}
