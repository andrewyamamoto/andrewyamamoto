<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewyamamoto
 */

?>
<section id="skills">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-lg-offset-3">
                <h2>
                    <?php
                        if ( get_field('skills_title') ) {
                            the_field('skills_title');
                        }
                    ?>
                </h2>
                <h3>
                    <?php
                        if ( get_field('skills_subhead') ) {
                            the_field('skills_subhead');
                        }
                    ?>
                </h3>

                <p>
                    <?php
                        if ( get_field('skills_description') ) {
                            the_field('skills_description');
                        }
                    ?>

                </p>
            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">

            <?php
    			// check if the repeater field has rows of data
    			if( have_rows('skill_items') ):
    				$count = 0;

    				// loop through the rows of data
    				while ( have_rows('skill_items') ) : the_row();

    					$title = get_sub_field('program_title');
    					$percent = get_sub_field('program_percentage');

    					// display a sub field value
    		?>
    				<?php if (!$count): ?>

                	<div class="col-lg-6">

        			<?php else:?>

    				<div class="col-lg-6">

    				<?php endif; ?>

    				<?php $count++;?>

    				<div class='item-container' data-percent=<?php echo $percent; ?>>
                        <div class="skill-info">
                            <span class='skill-type'><?php echo $title; ?></span>
                        </div>

                        <div class="skill-bar">
                            <span class='skill-percent'></span>
                        </div>
    				</div>

    			</div>

    	    <?php
                endwhile;
                else:// no rows found
                endif;
            ?>

        </div>

    </div>

</section>
