<?php
/**
 * The template for displaying site navigation
 *
 * @package andrewyamamoto
 */
?>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ay-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="#"><img src=<?php echo get_template_directory_uri() . '/img/ay-logo-01.svg' ?> alt="Andrew Yamamoto | Logo" width="70" /></a>
            </div>

            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'menu_id'         => 'primary-menu',
                    'menu_class'      => 'nav navbar-nav',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => 'ay-navbar-collapse',
                ) );
            ?>

        </div>
    </nav>
