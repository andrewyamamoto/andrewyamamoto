<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewyamamoto
 */

?>
<section id="contact">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1>
                    <?php
                        if ( get_field('contact_title') ) {
                            the_field('contact_title');
                        }
                    ?>
                </h1>

                <p>
                    <?php
                        if ( get_field('contact_description') ) {
                            the_field('contact_description');
                        }
                    ?>

                </p>

            </div>

            <?php echo do_shortcode( '[pirate_forms]' ) ?>

        </div>

    </div>

</section>
