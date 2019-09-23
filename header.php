<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
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
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <div class="nav-content">
                        <div class="nav-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/acm_logo_black.png" class="nav-logo " alt="ACM logo">
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
    </header>

    <main> 
        