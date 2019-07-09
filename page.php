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
	
		    <div class="container">         		                    
				<?php the_content(); ?>
			</div>					
		<?php
					
		endwhile;	
	endif;
			
	?>
	
<?php get_footer(); ?>