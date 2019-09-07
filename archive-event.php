<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<div class="page-titlebar mb-4">
		<h1 class="page-title">Events</h1>	
	</div>

	<div class="container">
	<?php
		if(have_posts()):
			while(have_posts()):
				the_post();

				if(strtotime(get_field('event_date'))<time()): 
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
			endwhile;
		endif;
		?>
	</div><!-- #container -->

<?php get_footer(); ?>