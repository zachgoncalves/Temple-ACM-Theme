<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 */

	get_header(); 
?>                         
	<div class="page-titlebar">
		<h1 class="page-title"><?php the_title() ?></h1>	
	</div>
	<?php

	if(have_posts()):
		while(have_posts()):
			the_post();
			
			?>
	
		<div class="event-single-container pt-5">
			<div class="event-single-header">
				<h2><?php the_title() ?></h2>
				<?php the_field('event_date') ?> at <?php the_field('event_start_time') ?> until <?php the_field('event_end_time') ?><br/>
				<strong>Location: </strong>  <?php the_field('event_location') ?>
			</div>	
			<?php the_content(); ?>
			<div class="event-single-footer">
				<a href="/events" class="btn btn-cherry">View More Events <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>	         
		
		<?php			
		endwhile;
	endif;
	
	posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;'));
			
	?>
		
<?php get_footer(); ?>