<?php
/*
Template Name: Archives
*/
get_header(); 

?>

	<div class="container">
	<?php                                                                                                                                      
		$posts = array(
			'post_type'         =>  'Event',
			'post_status'       =>  'publish',
			'post_parent'       =>  0,
			'posts_per_page'	=>  -1,
			'meta_key'			=> 'event_date',
			'orderby'			=> 'meta_value',                                                    
			'order'             =>  'ASC'                       
		);                    
		$post_counter = 0;    
		query_posts($posts);                                                                   
		while (have_posts()) : the_post(); 
			$post_id = get_the_ID();
			if(get_field('event_end_time', $post_id) && get_field('event_date', $post_id)):
				$end_date_time = get_field('event_date', $post_id) . ' - ' . get_field('event_end_time', $post_id);
				$obj_end_date_time = DateTime::createFromFormat('F j, Y - g:i a', $end_date_time);
			endif;
			$current_time = new DateTime('now', new DateTimeZone('America/New_York'));

			if($obj_end_date_time > $current_time):
				$post_counter++; ?>
				<a href="<?php the_permalink(); ?>" class="event-archive-container"> 
					<div class="event-single-header">                                            
						<h2><?php the_title(); ?></h2>
						<?php 
							if(get_field('event_start_time', $post_id) && get_field('event_end_time', $post_id)):
								echo get_field('event_date', $post_id) . ' from ' . get_field('event_start_time', $post_id) . ' until ' . get_field('event_end_time', $post_id); 
							else: 
								echo get_field('event_date', $post_id) . ' at ' . get_field('event_start_time', $post_id); 
							endif;
						?> 
						<br />
						<strong>Location: </strong>  <?php the_field('event_location') ?>
					</div>  
				</a>                                         
		<?php 
			endif;
		endwhile;   
		wp_reset_query(); ?>
		<?php if($post_counter == 0): ?>
			<header>
				<h2>There are no upcoming events.</h2>
				<hr>
				<p>We are sorry for the inconvenience. Check back soon to see what we're up to at ACM.</p>                
			</header> 
		<?php endif;?>          
	
	</div><!-- #container -->

<?php get_footer(); ?>