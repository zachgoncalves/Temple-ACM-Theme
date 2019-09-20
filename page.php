<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 */

	get_header(); 
?>
	<div class="page-titlebar mb-5">
		<h1 class="page-title"><?php the_title() ?></h1>	
	</div>
	<?php

	if(have_posts()):
		while(have_posts()):
			the_post();
			
			?>
	
		    <div class="container">  
				<?php if(!empty(wpb_list_child_pages())): ?>
				<div class="row">
					<div class="col-md-3 border-right">
						<?php echo wpb_list_child_pages(); ?>
					</div>
					<div class="col-md-9">
						<?php the_content(); ?>
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