<?php

/**
 * Template Name: Homepage
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

<div class="wrapper about-us" id="page-wrapper">
    <div class="header-content">
        <div class="container">
            <div class="row home-header">
                <div class="col-6 hero-about-us">
                    <div class="hero-text">
                        <h5 class="mb-2">I am Andres</h5>
                        <h1 class="title mb-5">Web Developer + UX Desginer</h1>
                        <p class="paragraph mt-5">I break down complex user experience problems to create integrity
                            focussed
                            solutions that connect billions of people</p>
                    </div>
                    <div class="social-media d-flex align-items-center mt-5">
                        <a href="/" class="btn btn-primary">Download my CV</a>
                        <div class="social-media-icon ml-3 d-flex justify-content-around">
                            <div class="icon ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                </svg>
                            </div>
                            <div class="icon ml-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                </svg>
                            </div>
                            <div class="icon ml-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hero-image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/hero.jpeg" class="ml-3" alt="Yamazen Arrow Icon">
                    </div>
                </div>
            </div>
        </div>
        <!-- services -->
    </div>
    <div class="my-quality-service-content container mt-5">
        <div class="container">
            <div class="text-title">
                <h1 class="text-center mb-2">
                    My Quality Services
                </h1>
                <p class="text-center text-white">We put your ideas and thus your wishes in the form of a unique web
                    project
                    that
                    inspires you and you customers.</p>
            </div>
            <div class="services">
                <div class="service row">
                    <div class="brand col-4 d-flex align-items-center align-items-center">
                        <p class="mr-3">01</p>
                        <h5>Branding Design</h5>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p class="brand-desc text-left">I break down complex user experience problems to create
                            integritiy focussed
                            solutions that
                            connect billions of people.</p>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <div class="brand-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="service row">
                    <div class="brand col-4 d-flex align-items-center align-items-center">
                        <p class="mr-3">02</p>
                        <h5>Web Design</h5>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p class="brand-desc text-left">I break down complex user experience problems to create
                            integritiy focussed
                            solutions that
                            connect billions of people.</p>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <div class="brand-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="service row">
                    <div class="brand col-4 d-flex align-items-center align-items-center">
                        <p class="mr-3">03</p>
                        <h5>UI/UX Design</h5>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p class="brand-desc text-left">I break down complex user experience problems to create
                            integritiy focussed
                            solutions that
                            connect billions of people.</p>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <div class="brand-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="service row">
                    <div class="brand col-4 d-flex align-items-center align-items-center">
                        <p class="mr-3">04</p>
                        <h5>App Design</h5>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p class="brand-desc text-left">I break down complex user experience problems to create
                            integritiy focussed
                            solutions that
                            connect billions of people.</p>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <div class="brand-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>

</div>

<?php
get_footer();
