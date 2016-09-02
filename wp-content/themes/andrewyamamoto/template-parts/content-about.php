<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewyamamoto
 */

?>
<section id="about">

    
    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-lg-offset-3">
                <h2>
                    <?php
                        if ( get_field('about_title') ) {
                            the_field('about_title');
                        }
                    ?>
                </h2>
                <h3>
                    <?php
                        if ( get_field('about_subhead') ) {
                            the_field('about_subhead');
                        }
                    ?>
                </h3>

                <p>
                    <?php
                        if ( get_field('about_description') ) {
                            the_field('about_description');
                        }

                    ?>
                </p>

            </div>

        </div>

    </div>

</section>
