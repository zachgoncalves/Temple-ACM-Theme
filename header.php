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

<title><?php wp_title(''); ?></title>        

<?php wp_head(); ?>
		
</head>

<body <?php body_class(); ?>>
 
    <header class="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
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
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid no-gutters head-events">
            <div class="row justify-content-end">
                <div class="col-md-6 head-events-list-container">
                    <span>Upcoming Events</span>
                    <ul class="head-events-list">
                        <li>
                            <span class="event-title">ACM Presents Lockheed Martin</span>
                            <span class="event-date">September 25, 2019</span>
                            <span class="event-time">5PM-6PM SERC 356</span>
                            <a href="#" class="action-link">Learn More ></a>
                        </li>
                        <li>
                            <span class="event-title">ACM Presents Lockheed Martin</span>
                            <span class="event-date">September 25, 2019</span>
                            <span class="event-time">5PM-6PM SERC 356</span>
                            <a href="#" class="action-link">Learn More ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <section>