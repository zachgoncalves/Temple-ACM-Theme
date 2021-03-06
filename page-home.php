<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 * Template Name: Homepage
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        
<meta name="viewport" content="width=device-width, minimum-scale=1.0" />               

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />		                 

<title>Temple University ACM | <?php wp_title(the_title()); ?></title>        

<?php wp_head(); ?>
		
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="/">
                    <div class="nav-content">
                        <div class="nav-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/acm_logo.png" class="nav-logo " alt="ACM logo">
                        </div>
                        <div class="nav-title">
                            Association for Computing Machinery
                            <span class="brand-uni">Temple University</span>
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-acm-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </ul>
                </div>
            </nav>
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="homepage-title">
						<h1><span class="homepage-title-white">Developing People</span> <span class="blinking-cursor">|</span></h1>
						<p>Temple University's ACM is the student professional organization for CIS Department majors.</p>
					</div>
				</div>
			</div>
		</div>
    </header>

    <main> 
		
	<?php

	if(have_posts()):
		while(have_posts()):
			the_post();
			
			?>
	
		<div id="page_<?php the_ID(); ?>" <?php post_class() ?>>				
			<div class="page__content">                	                    		                    
				<section>
					<div class="container mission-highlight">
						<div class="row justify-content-between">
							<div class="col-md-4">
								<div class="header-events-container mb-5 mb-md-0">
									<span class="header-events-list-title">Events <a href="/events" class="header-events-list-all-link">View All</a></span>
									<?php $args = array(
										'post_type'      => 'Event', 
										'meta_key'       => 'event_date',
										'posts_per_page' => '-1',
										'orderby'        => 'meta_value',
										'order'          => 'asc' 
									); 
									$counter = 0;
									$loop = new WP_Query($args);
										if ( $loop->have_posts() ) : while ( $loop->have_posts()) : $loop->the_post(); 
											$end_date_time = get_field('event_date') . ' - ' . get_field('event_end_time');
											$obj_end_date_time = DateTime::createFromFormat('F j, Y - g:i a', $end_date_time);
											$current_time = new DateTime('now', new DateTimeZone('America/New_York'));

											if($obj_end_date_time > $current_time && $counter < 3): 
												$counter++; 
										?>
												<div class="mb-4">
													<a href="<?php echo get_permalink(get_the_ID()) ?>" class="event d-flex justify-content-between align-items-center">
														<div class="event-preview-info">
															<span class="event-title"><?php the_title() ?></span>
															<span class="event-date"><?php the_field('event_date') ?> in <?php the_field('event_location') ?></span>
														</div>
														<div class='event-preview-arrow'>
															<i class="fas fa-arrow-right"></i>
														</div>
													</a>
												</div>
											<?php 
											endif;
											endwhile; ?>

									<?php else: ?>
										<p>There are no scheduled ACM events. Check back soon to see what we're up to.</p>
									<?php endif; ?>
									<?php wp_reset_postdata(); ?>     
								</div>  
							</div>
							<div class="col-md-7">
								<h2 class="section-title"><?php the_field('intro_title') ?></h2>
								<p class="lead"><?php the_field('intro_text') ?></p>
							</div>
						</div>
					</div>
				</section>
				
				<section class="main-highlight">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-4 ">
								<h2 class="section-title"><?php the_field('call_to_action_title') ?></h2>
							</div>
							<div class="col-md-8">
								<p class="lead"><?php the_field('call_to_action_text') ?></p>
								<a href="<?php the_field('call_to_action_link') ?>" class="action-link action-link-white">Learn More <span class="action-link-icon"><i class="fas fa-arrow-right"></i></span></i></a>
							</div>
						</div>
					</div>
				</section>

				<section class="highlights">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<a href="https://tu-acmw.onrender.com/" class="highlight-cta">
									<h2 class="highlight-title">ACM-W</h2>
									<p>ACM-W is our sister organization that focuses on encouraging and supporting professional development for women in computing.</p>
									<span class="btn btn-black btn-highlight"><i class="fas fa-angle-right"></i></span>
								</a>
							</div>
							<div class="col-md-4">
								<div class="highlight-box">
									<span class="highlight-box-icon"><i class="fas fa-terminal fa-fw"></i></span>
									<h2 class="section-title">OwlHacks</h2>
									<p>Temple University’s premier hack-a-thon, sponsored by Temple ACM/ACM-W and our partners.</p>
									<a href="https://owlhacks.com/" class="action-link action-link-black">Learn More <span class="action-link-icon"><i class="fas fa-arrow-right"></i></span></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="highlight-box">
									<span class="highlight-box-icon"><i class="fas fa-chalkboard fa-fw"></i></span>
									<h2 class="section-title">STARS</h2>
									<p>The STARS Computing Corps works to provide computer science education to underserved schools.</p>
									<a href="http://tu-stars.org/" class="action-link action-link-black">Learn More <span class="action-link-icon"><i class="fas fa-arrow-right"></i></span></a>
								</div>
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