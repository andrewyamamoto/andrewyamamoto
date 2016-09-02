<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewyamamoto
 */

?>
<section id="intro">
    <?php get_template_part('nav'); ?>
    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-lg-offset-3">

                <h1 class='animated fadeInUp'>
                    <?php
                        if ( get_field('intro_title') ) {
                            the_field('intro_title');
                        }
                    ?>
                </h1>
                <p>
                    <?php
                        if ( get_field('intro_description') ) {
                            the_field('intro_description');
                        }
                    ?>
                </p>

            </div>

        </div>

    </div>
    <canvas id="background-anime"></canvas>
    <!-- <aside class=''></aside> -->

</section>
