<?php
/*
Template Name Posts: Student
*/
?>

<?php

get_header();
st_before_content($columns='');


 if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								
				<?php if (!is_page_template('onecolumn-page.php')) { ?>
					<?php if (is_front_page() && !get_post_meta($post->ID, 'hidetitle', true)) { ?>
						
						<h2 class="entry-title"><?php the_title(); ?></h2>
						
						
					<?php } elseif (!get_post_meta($post->ID, 'hidetitle', true)) { ?>
						
						<h1 class="entry-title"><?php the_title(); ?></h1>
						
					<?php } else {
						echo '<br />';
					} ?>
				<?php } ?>
				
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'skeleton' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'skeleton' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop.

st_after_content();
//get_sidebar('page');
get_footer();
 ?>