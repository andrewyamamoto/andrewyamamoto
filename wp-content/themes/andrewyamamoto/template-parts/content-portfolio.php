<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewyamamoto
 */

?>
<section id="portfolio">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-lg-offset-3">

                <h2>
                    <?php
                        if ( get_field('portfolio_title') ) {
                            the_field('portfolio_title');
                        }
                    ?>
                </h2>
                <h3>
                    <?php
                        if ( get_field('portfolio_subhead') ) {
                            the_field('portfolio_subhead');
                        }
                    ?>
                </h3>

                <p>
                    <?php
                        if ( get_field('portfolio_description') ) {
                            the_field('portfolio_description');
                        }
                    ?>
                </p>

            </div>

        </div>

    </div>

    <div class="container work">

        <div class="row-fluid">

                <?php
    				// check if the repeater field has rows of data
    				if( have_rows('portfolio_items') ):
    					$count = 0;

    					// loop through the rows of data
    					while ( have_rows('portfolio_items') ) : the_row();

    						$title = get_sub_field('item_title');
    						$date = get_sub_field('item_year');
                            $img = get_sub_field('item_image');
                            $url = get_sub_field('item_url');

    						// display a sub field value
    			?>
    					<?php if (!$count): ?>

                    	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

            			<?php else:?>

    					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

    					<?php endif; ?>

    					<?php $count++;?>
                        <?php if($url): ?>
                        <a href=<?php echo $url; ?> class='item-container' target="_blank">
                            <div class="overlay">
                                <span><i class='fa fa-search'></i></span>
                                <div class="info">
                                    <div class='title'><?php echo $title; ?></div>
                                    <div class='date'><?php echo $date; ?></div>
                                </div>
                            </div>
                            <img src=<?php echo $img; ?> alt="<?php echo $title; ?>" class='img-responsive'/>
    					</a>

                        <?php else: ?>

                        <div class='item-container'>
                            <div class="overlay">
                                <span><i class='fa fa-search'></i></span>
                                <div class="info">
                                    <div class='title'><?php echo $title; ?></div>
                                    <div class='date'><?php echo $date; ?></div>
                                </div>
                            </div>
                            <img src=<?php echo $img; ?> alt="<?php echo $title; ?>" class='img-responsive'/>
    					</div>
                        <?php endif; ?>


    				</div>
    		<?php
    			endwhile;

    			else:

    				// no rows found

    			endif;
    		?>

        </div>

    </div>


</section>
