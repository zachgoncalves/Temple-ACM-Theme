<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 * Template Name: Homepage
 */

	get_header(); 
?>		<div class="site-header">
			<div class="header-events">
				<div class="container-fluid no-gutters">
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="homepage-title">
								<h1><span class="homepage-title-white">Developing</span><br />People</h1>
							</div>
						</div>
						<div class="col-md-6 header-events-list-container">
							<span class="header-events-list-title">Upcoming Events</span>
							<ul class="header-events-list">
								<?php $args = array(
									'post_type'      => 'Event', 
									'posts_per_page' => 3,
									'meta_key'       => 'event_date',
									'orderby'        => 'meta_value',
									'order'          => 'asc' 
									); ?>
								<?php $loop = new WP_Query($args); ?>
								<?php if ( $loop->have_posts() ) : while ( $loop->have_posts()) : $loop->the_post(); ?>

									<li class="event">
										<img class="event-image-preview" src="<?php the_field('preview_image') ?>" />
										<span class="event-title"><?php the_title() ?></span>
										<span class="event-date"><?php the_field('event_date') ?> in <?php the_field('event_location') ?></span>
										<span class="event-time"><?php the_field('event_start_time') ?> - <?php the_field('event_end_time') ?></span>
										<a href="<?php echo get_permalink(get_the_ID()) ?>" class="action-link">Learn More ></a>
									</li>

								<?php endwhile; ?>

								<?php else: ?>
									<h1>No upcoming events!</h1>
								<?php endif; ?>
								<?php wp_reset_postdata(); ?>         
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
	<?php

	if(have_posts()):
		while(have_posts()):
			the_post();
			
			?>
	
		<div id="page_<?php the_ID(); ?>" <?php post_class() ?>>				
			<div class="page__content">                	                    		                    
				<section>
					<div class="container mb-5">
						<div class="row align-items-center">
							<div class="col-md-4 ">
								<h2 class="section-title"><?php the_field('intro_title') ?></h2>
							</div>
							<div class="col-md-8">
								<p class="lead"><?php the_field('intro_text') ?></p>
							</div>
						</div>
					</div>
				</section>
				
				<section class="main-highlight mb-5">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-4 ">
								<h2 class="section-title"><?php the_field('call_to_action_title') ?></h2>
							</div>
							<div class="col-md-8">
								<p class="lead"><?php the_field('call_to_action_text') ?></p>
								<a href="<?php the_field('call_to_action_link') ?>" class="action-link">Learn More ></a>
							</div>
						</div>
					</div>
				</section>

				<section class="highlights">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">ACM-W</h2>
								<p>ACM-W focuses on encouraging and supporting professional development for women in computing.</p>
								<a href="#" class="action-link action-link-black">Learn More ></a>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">OwlHacks</h2>
								<p>Temple University’s premier hack-a-thon, sponsored by Temple ACM and our partners.</p>
								<a href="#" class="action-link action-link-black">Learn More ></a>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Starz CC</h2>
								<p>The STARZ Computing Corps works to provide computer science education to underprivileged schools.</p>
								<a href="#" class="action-link action-link-black">Learn More ></a>
							</div>
						</div>
					</div>
				</section>				
			</div><!-- / page__content -->                                
		</div><!-- / page_<?php the_ID(); ?> -->
		
		<?php
					
		endwhile;	
	endif;
			
	?>
	
<?php get_footer(); ?>