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
            <p class="reveal-type" data-bg-color="#b6b600" data-fg-color="black">Saya sangat memiliki ketertarikan dalam
                membuat website menggunakan wordpress</p>
        </section>

        <section>
            <p class="reveal-type" data-bg-color="#353535" data-fg-color="red">The web isn't static anymore,
                interactivity
                and motion now dominate.</p>
        </section>
    </div>

    <div class="scroll-trigger-carousel">
        <h1 class="text-center">My experience</h1>
        <section class="horizontal">
            <div class="pin-wrap">
                <div class="animation-wrap to-right">
                    <div class="item">
                        <div class="text mt-5">
                            <h4>Ozora Publishing, Jakarta</h4>
                            <h5>Sep 2020 - Nov</h5>
                            <h4>Internship Web Designer</h4>
                            <p>Eaque ullam illum nobis deleniti mollitia unde, sed, nemo ipsa ratione ex, dicta
                                aliquam voluptates! Odio vitae eum nobis dignissimos sunt ipsum repellendus totam optio
                                distinctio. Laborum suscipit quia aperiam.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text mt-5">
                            <h4>Asjaya Mukti Graha, Jakarta</h4>
                            <h5>Oct 2021 - Dec</h5>
                            <h4>Internship Web Designer</h4>
                            <p>Eaque ullam illum nobis deleniti mollitia unde, sed, nemo ipsa ratione ex, dicta
                                aliquam voluptates! Odio vitae eum nobis dignissimos sunt ipsum repellendus totam optio
                                distinctio. Laborum suscipit quia aperiam.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text mt-5">
                            <h4>PT Visi Kreasi Asia, Bogor</h4>
                            <h5>Nov 2021 - May 2022</h5>
                            <h4>Frontend Developer</h4>
                            <p>Eaque ullam illum nobis deleniti mollitia unde, sed, nemo ipsa ratione ex, dicta
                                aliquam voluptates! Odio vitae eum nobis dignissimos sunt ipsum repellendus totam optio
                                distinctio. Laborum suscipit quia aperiam.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text mt-5">
                            <h4>Bicarapede Academy</h4>
                            <h5>Aug 2022 - Dec 2023</h5>
                            <h4>Web Designer</h4>
                            <p>Eaque ullam illum nobis deleniti mollitia unde, sed, nemo ipsa ratione ex, dicta
                                aliquam voluptates! Odio vitae eum nobis dignissimos sunt ipsum repellendus totam optio
                                distinctio. Laborum suscipit quia aperiam.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text mt-5">
                            <h4>PT Asia Quest Indonesia </h4>
                            <h5>May 2022 - Present</h5>
                            <h4>Web Designer</h4>
                            <p>Eaque ullam illum nobis deleniti mollitia unde, sed, nemo ipsa ratione ex, dicta
                                aliquam voluptates! Odio vitae eum nobis dignissimos sunt ipsum repellendus totam optio
                                distinctio. Laborum suscipit quia aperiam.</p>
                        </div>
                    </div>
                </div>
        </section>

    </div>
    <!-- <div class="scroll-trigger-carousel">
        <section class="horizontal">
            <div class="pin-wrap">
                <div class="animation-wrap to-right">
                    <div class="item"> <img class="mt-5"
                            src="<?php echo get_template_directory_uri(); ?>/img/Portfolio-1.png" class="ml-3"
                            alt="Yamazen Arrow Icon"></div>
                    <div class="item"> <img class="mt-5"
                            src="<?php echo get_template_directory_uri(); ?>/img/Portfolio-2.png" class="ml-3"
                            alt="Yamazen Arrow Icon"></div>

                    <div class="item">Animi, porro molestias? Reiciendis dolor aspernatur ab quos nulla impedit, dolores
                        ullam hic commodi nobis nam. Dolorem expedita laudantium dignissimos nobis a. Dolorem, unde
                        quidem. Tempora et a quibusdam inventore!</div>
                    <div class="item">Labore, unde amet! Alias delectus hic laboriosam et dolorum? Saepe, dicta eaque?
                        Veniam eos blanditiis neque. Officia et nostrum, tempore modi quo praesentium aspernatur vero
                        dolor, ipsa unde perspiciatis minima.</div>
                    <div class="item">Quaerat error dolorem aspernatur magni dicta ut consequuntur maxime tempore. Animi
                        odio eos quod culpa nulla consectetur? Aperiam ipsam ducimus delectus reprehenderit unde, non
                        laborum voluptate laboriosam, officiis at ea!</div>
                    <div class="item">Rem nobis facere provident magni minima iste commodi aliquam harum? Facere error
                        quos cumque perspiciatis voluptatibus deserunt maiores, fugiat sunt sit ab inventore natus
                        saepe, eveniet alias ipsam placeat voluptas!</div>
                    <div class="item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus,
                        temporibus esse magni illum eos natus ipsum minus? Quis excepturi voluptates atque dolorum minus
                        eligendi! Omnis minima magni recusandae ex dignissimos.</div>
                    <div class="item">Magnam eveniet inventore assumenda ullam. At saepe voluptatibus sed dicta
                        reiciendis, excepturi nisi perferendis, accusantium est suscipit tempora dolorum praesentium
                        cupiditate doloribus non? Sint numquam recusandae dolore quis esse ea?</div>
                    <div class="item">Temporibus cum dolor minima consequatur esse veritatis enim nemo cupiditate
                        laborum doloribus reiciendis perferendis, quas fugit earum rerum, at beatae alias amet
                        aspernatur dolorem dolore error commodi. Perspiciatis, reiciendis amet!</div>
                    <div class="item">Vitae, tenetur beatae error corrupti odit expedita quisquam commodi ea aspernatur
                        aliquid, eveniet reprehenderit sequi, similique maiores praesentium quam! Optio tenetur saepe
                        unde voluptatem minus tempora maxime temporibus ducimus ullam!</div>
                </div>
            </div>
        </section>

    </div> -->
</div>

<?php
get_footer();