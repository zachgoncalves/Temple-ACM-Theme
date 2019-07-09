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
	
		<div class="container pt-5">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							<span class="card-title">Event Information</span>
						</div>
						<div class="card-body">
							<p class="card-text"><strong>Date: </strong> <?php the_field('event_date') ?></span></p>
							<p class="card-text"><strong>Time: </strong>  <?php the_field('event_start_time') ?> to <?php the_field('event_end_time') ?></p>
							<p class="card-text"><strong>Location: </strong>  <?php the_field('event_location') ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<?php the_content(); ?>
					<a href="/events" class="btn btn-primary">View More Events ></a>
				</div>
			</div>
		</div>	         
		
		<?php			
		endwhile;
	endif;
	
	posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;'));
			
	?>
		
<?php get_footer(); ?>