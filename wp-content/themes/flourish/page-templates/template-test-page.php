<?php

/**
 * Template Name: Test
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>


<section class="test-page-content">
    <div class="header-content-test background jumbotron-fluid d-flex flex-column justify-content-center">
        <div class="container">
            <h1 class="display-4 text-white fw-bold">Fluid jumbotron</h1>
            <p class="lead text-center text-white fw-bold">Andres Suhendrawan</p>
        </div>
    </div>
    <?php
    while (have_posts()) :
        the_post();
        the_content(); // This will display the content with the shortcode
    endwhile; // End of the loop.
    ?>


    <?php
    get_footer();
