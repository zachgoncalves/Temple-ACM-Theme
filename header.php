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
                    <ul class="navbar-nav m-auto navbar-acm-nav">
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
        <div class="header-events">
            <div class="container-fluid no-gutters">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="homepage-title">
                            <h1><span class="homepage-title-white">Developing</span><br />People</h1>
                        </div>
                    </div>
                    <div class="col-md-6 header-events-list-container">
                        <span class="header-events-list-title">Upcoming Events</span>
                        <ul class="header-events-list">
                            <li class="event">
                                <span class="event-title">ACM Presents Lockheed Martin</span>
                                <span class="event-date">September 25, 2019</span>
                                <span class="event-time">5PM-6PM SERC 356</span>
                                <a href="#" class="action-link">Learn More ></a>
                            </li>
                            <li class="event">
                                <span class="event-title">ACM Presents Lockheed Martin</span>
                                <span class="event-date">September 25, 2019</span>
                                <span class="event-time">5PM-6PM SERC 356</span>
                                <a href="#" class="action-link">Learn More ></a>
                            </li>
                            <li class="event">
                                <span class="event-title">ACM Presents Lockheed Martin</span>
                                <span class="event-date">September 25, 2019</span>
                                <span class="event-time">5PM-6PM SERC 356</span>
                                <a href="#" class="action-link">Learn More ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main> 
        <section>
            <div class="container-small mb-5">
                <h2 class="section-title">Our Mission</h2>
                <p class="lead">Temple University’s Student Chapter of the Association for Computing Machinery brings computing to local students, develops CIS students skills, and links academia with the business world. </p>
            </div>
        </section>
        
        <section class="main-highlight mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <h2 class="section-title">Join ACM</h2>
                    </div>
                    <div class="col-md-8">
                        <p class="lead">All students are welcome to attend ACM meetings. ACM members receive special benefits, as well as a plethora of perks, from ACM Nationals, including newsletters and software. </p>
                        <a href="#" class="action-link">Learn More ></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="highlights">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="section-title">ACM-W</h2>
                        <p>ACM-W focuses on encouraging and supporting professional development for women in computing.</p>
                        <a href="#" class="action-link action-link-black">Learn More ></a>
                    </div>
                    <div class="col-md-4">
                        <h2 class="section-title">OwlHacks</h2>
                        <p>Temple University’s premier hack-a-thon, sponsored by Temple ACM and our partners.</p>
                        <a href="#" class="action-link action-link-black">Learn More ></a>
                    </div>
                    <div class="col-md-4">
                        <h2 class="section-title">Starz CC</h2>
                        <p>The STARZ Computing Corps works to provide computer science education to underprivileged schools.</p>
                        <a href="#" class="action-link action-link-black">Learn More ></a>
                    </div>
                </div>
            </div>
        </section>