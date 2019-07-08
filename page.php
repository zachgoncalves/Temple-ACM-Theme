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
	
		<div id="page_<?php the_ID(); ?>" <?php post_class() ?>>				
			<div class="page__content">                	                    		                    
				<h1 class="page__title"><?php the_title(); ?></h1>					                                                           
				<?php the_content(); ?>					
			</div><!-- / page__content -->                                
		</div><!-- / page_<?php the_ID(); ?> -->
		
		<?php
					
		endwhile;	
	endif;
			
	?>
	
<?php get_footer(); ?>