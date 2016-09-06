<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package andrewyamamoto
 */

?>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">
                <img src=<?php echo get_template_directory_uri() . '/img/ay-logo.png' ?> alt="Andrew Yamamoto | Logo" width="70" />
            </div>
            <div class="col-lg-2">
                <h2>Navigation</h2>
                <p>
                    About  |  Portfolio  |  Skills
                </p>
            </div>
            <div class="col-lg-2 social-icons">
                <h2>Social</h2>
                <a href="https://www.facebook.com/digital80" target="_blank"><i class='social fa fa-facebook-square'></i></a>
                <a href="https://www.instagram.com/_and_roo_/" target="_blank"><i class='social fa fa-instagram'></i></a>
                <a href="https://twitter.com/andrew_yamamoto" target="_blank"><i class='social fa fa-twitter-square'></i></a>
                <a href="https://www.linkedin.com/in/andrew-yamamoto-8941944" target="_blank"><i class='social fa fa-linkedin-square'></i></a>
            </div>
            <div class="col-lg-3 contact-icons">
                <h2>Contact</h2>
                <div><i class='fa fa-phone'></i> 714.263.5962</div>
                <div><i class='fa fa-at'></i> andrew.asada@gmail.com</div>
            </div>
            <div class="col-lg-2 location-icons">
                <h2>Location</h2>
                <i class='fa fa-map-marker'></i> West Covina, Ca
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
