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
	
		    <div class="container">  
				<?php if(!empty(wpb_list_child_pages())): ?>
				<div class="row">
					<div class="col-md-3 order-1 order-md-0 mt-5 mt-md-0">
						<?php echo wpb_list_child_pages(); ?>
					</div>
					<div class="col-md-9">
						<div class="page-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php else: 
					the_content(); 
				endif;
				?>
			</div>					
		<?php
					
		endwhile;	
	endif;
			
	?>
	
<?php get_footer(); ?>