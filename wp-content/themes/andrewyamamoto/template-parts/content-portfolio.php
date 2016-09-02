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
                            $tmbs = get_sub_field('item_images');

    						// display a sub field value
    			?>

                    	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">



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
                        <?php endif; ?>
                        <?php if(!$url): ?>

                                <a href="#" class='item-container thumbs' data-toggle="modal" data-target=".modal<?php echo $count; ?>">
                                    <div class="overlay">
                                        <span><i class='fa fa-search'></i></span>
                                        <div class="info">
                                            <div class='title'><?php echo $title; ?></div>
                                            <div class='date'><?php echo $date; ?></div>
                                        </div>
                                    </div>
                                    <img src=<?php echo $img; ?> alt="<?php echo $title; ?>" class='img-responsive'/>
            					</a>

                                <div class="modal fade <?php echo "modal".$count; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div id=<?php echo "car" . $count; ?> class="carousel slide" data-ride="carousel" data-interval="false">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img class="img-responsive" src="<?php echo $img; ?>" alt="...">
                                                    </div>
                                                    <?php
                                                        $thumb_count = 1;
                                                        while ( have_rows('item_images') ) : the_row();
                                                            $tmb_url = get_sub_field('img');
                                                    ?>
                                                            <div class="item <?php echo $init; ?>">
                                                                <img class="img-responsive" src="<?php echo $tmb_url; ?>" alt="...">
                                                            </div>
                                                    <?php
                                                        $thumb_count++;
                                                        endwhile;
                                                    ?>

                                                </div>
                                                <?php if($thumb_count >=2): ?>
                                                    <a class="left carousel-control" href=<?php echo "#car" . $count; ?> role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </a>
                                                    <a class="right carousel-control" href=<?php echo "#car" . $count; ?> role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
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
