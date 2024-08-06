<?php

/**
 * Template Name: About us
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

<div class="about-us-page">
    <div class="scroll-trigger-char">
        <section class="bg-white">
            <h1>Hai Saya Andres Suhendrawan</h1>
        </section>

        <section>
            <p class="reveal-type" data-bg-color="#cccccc" data-fg-color="teal">Saya Frontend Developer dengan
                pengalaman lebih dari 2 Tahun</p>
        </section>

        <section>
            <p class="reveal-type" data-bg-color="#b6b600" data-fg-color="black">Saya sangat memiliki minat yang
                mendalam
                membuat website menggunakan wordpress</p>
        </section>
    </div>
    <div class="scroll-trigger-experiences">
        <section class="sticky">
            <div class="sticky__box">
                <p>SAYA SIAP BERGABUNG DENGAN FLOURSIH !!!</p>
                <div class="sticky__box-fill js-fill"></div>
            </div>
        </section>
        <section class="outro js-fill-end">
            <h2 class="outro__title">TERIMA KASIH !!!</h2>
            <p class="outro__text">Hope you enjoyed that.</p>
        </section>
    </div>
</div>


</section>

</div>
</div>

<?php
get_footer();