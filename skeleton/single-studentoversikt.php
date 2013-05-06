<?php
/*
Template Name: Studentoversikt
*/
?>

<?php

get_header();
//st_before_content($columns=''); ?>

<div id="primary">
    <div id="content" role="main">
		<div id="grid-wrapper">
    <?php
	
    $mypost = array( 'category_name' => 'forsteklasse', ); ?>
	
	<div class= "klassetrinn">
	<h3>KULL 12/13</h3>
	<?php
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
	
            <a href="<?php echo  get_permalink($post->ID); ?>"><div id="student-grid">
 
                <!-- Display featured image in right-aligned floating div -->
                <div class="student-thumb">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
 
                <!-- Display Title and Author Name -->
                <?php the_title(); ?><br /></a>

            </div> <!--#studentgrid-->
 
    <?php endwhile; ?>
	</div> <!--.klassetrinn-->
	
	<!-- NUMERO DOS -->
	
	<?php
	
    $mypost2 = array( 'category_name' => 'andreklasse', ); ?>
	
	<div class= "klassetrinn">
	<h3>KULL 11/12</h3>
	<?php
    $loop2 = new WP_Query( $mypost2 );
    ?>
    <?php while ( $loop2->have_posts() ) : $loop2->the_post();?>
	
            <a href="<?php echo  get_permalink($post->ID); ?>"><div id="student-grid2">
 
                <!-- Display featured image in right-aligned floating div -->
                <div class="student-thumb">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
 
                <!-- Display Title and Author Name -->
                <?php the_title(); ?><br /></a>

            </div> <!--#studentgrid-->
 
    <?php endwhile; ?>
	</div> <!--.klassetrinn-->
	
	<!-- NUMERO TRESE-->
	
	<?php $mypost3 = array( 'category_name' => 'tredjeklasse', ); ?>
	
	<div class= "klassetrinn">
	<h3>KULL 10/11</h3>
	
    <?php $loop3 = new WP_Query( $mypost3 );
    ?>
    <?php while ( $loop3->have_posts() ) : $loop3->the_post();?>
	
            <a href="<?php echo  get_permalink($post->ID); ?>"><div id="student-grid3">
 
                <!-- Display featured image in right-aligned floating div -->
                <div class="student-thumb">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
 
                <!-- Display Title and Author Name -->
                <?php the_title(); ?><br /></a>

            </div> <!--#studentgrid-->
 
    <?php endwhile; ?>
	
			</div> <!--.klassetrinn-->
		</div><!-- #grid-wrapper-->
    </div>
</div>


<?php
//st_after_content();
get_sidebar('page');
get_footer();
?>