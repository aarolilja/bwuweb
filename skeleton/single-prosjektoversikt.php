<?php
/*
Template Name: Prosjektoversikt
*/
?>

<?php

get_header();
//st_before_content($columns=''); ?>

<div id="primary">
    <div id="content" role="main">
		<div id="grid-wrapper">
    <?php
	
    $mypost = array( 'category_name' => 'prosjekt', ); ?>
	
	<div class= "nyhet-content">
	<h3>PROSJEKTER</h3>
	<?php
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
	
		<div id="nyhetsgrid">
            <a href="<?php echo  get_permalink($post->ID); ?>">
 
                <!-- Display featured image in right-aligned floating div -->
                <div class="nyhet-thumb">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
 
                <!-- Display Title and Author Name -->
                <?php the_title(); ?><br /></a>
				<?php the_excerpt() ?>

            </div> <!--#nyhetsgrid-->
 
    <?php endwhile; ?>
			</div> <!--#nyhet-content-->
		</div><!-- #grid-wrapper-->
    </div>
</div>


<?php
//st_after_content();
get_sidebar('page');
get_footer();
?>