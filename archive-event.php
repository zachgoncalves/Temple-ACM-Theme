<?php
/*
Template Name: Archives
*/
get_header(); 

$posts = get_posts(array(
	'post_type'			=> 'Event',
	'posts_per_page'	=> -1,
	'meta_key'			=> 'event_date',
	'orderby'			=> 'meta_value',
	'order'				=> 'asc'
));

?>

	<div class="page-titlebar mb-4">
		<h1 class="page-title">Events</h1>	
	</div>

	<div class="container">

	<?php if( $posts ): ?>
		
			
		<?php foreach( $posts as $post ): 
			
			setup_postdata( $post );
			if(strtotime(get_field('event_date'))>time()):
			?>
			<a href="<?php echo(get_permalink())?>" class="event-archive-container pt-5">
				<div class="event-single-header">
					<h2><?php the_title() ?></h2>
					<?php the_field('event_date') ?> at <?php the_field('event_start_time') ?> until <?php the_field('event_end_time') ?><br/>
					<strong>Location: </strong>  <?php the_field('event_location') ?>
				</div>	
				<?php the_content(); ?>
			</a>	     
		
		<?php
		    endif;
		    endforeach; ?>
		
		
		<?php wp_reset_postdata(); 
		else: ?>
		<span>There are no upcoming events!</span>
	<?php endif; ?>

	</div><!-- #container -->

<?php get_footer(); ?>