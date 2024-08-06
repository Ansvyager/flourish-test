<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper-footer" id="wrapper-footer">
    <div class="<?php echo esc_attr($container); ?>">
        <div class="row">
            <div class="col-md-12">
                <footer class="site-footer" id="colophon">
                    <div class="site-info">
                        <nav class="footer-nav "></nav>
                        <ul class="d-flex justify-content-around text-decoration-none" style="list-style: none;">
                            <li><a class="text-white fw-bold" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li><a class="text-white fw-bold"
                                    href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                            <li><a class="text-white fw-bold"
                                    href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                            <li><a class="text-white fw-bold"
                                    href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        </ul>
                        </nav>

                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!-- col -->

        </div><!-- .row -->

    </div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. 
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>