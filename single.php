<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 */

	get_header(); 
?>                         
		
	<?php

	if(have_posts()):
		while(have_posts()):
			the_post();
			
			?>
	
		<div id="single_<?php the_ID(); ?>" <?php post_class() ?>>
			<div class="post__content">
				<h1 class="post__title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!-- / post__content -->            
		</div><!-- / single_<?php the_ID(); ?> -->			         
		
		<?php			
		endwhile;
	endif;
	
	posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;'));
			
	?>
		
<?php get_footer(); ?>