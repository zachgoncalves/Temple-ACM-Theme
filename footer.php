<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 */
?>

	</main>
	<div class="contact-banner">
		<div class="container text-center">
			<div class="row justify-content-center">
				<div class="col-md-2">
					<a href="/about-us/membership" class="btn btn-yellow btn-text-white btn-col">Join Us</a>
				</div>
				<div class="col-md-1 d-none d-md-block">
					<span class="col-divider"></span>
				</div>
				<div class="col-md-2">
					<a href="/contact-us" class="btn btn-cherry btn-text-white btn-col">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-pre">
		<div class="container">
			<address>
				<img src="" class="logo" alt="">
				<p>The Temple University Association for Computing Machinery</p>
				<p>1925 N 12th St<br>Philadelphia, PA 19122 <br />Office 364</p>
				<p><a href="mailto:tuacm@temple.edu" title="Email the Temple ACM">tuacm@temple.edu</a></p>
			</address>
			<div class="footer-social-container">
				<a href="https://twitter.com/TempleACM" target="_blank" class="btn btn-social-icon footer-social "><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/TempleACM/" target="_blank" class="btn btn-social-icon footer-social"><i class="fab fa-facebook"></i></a>
				<a href="https://github.com/zachgoncalves/Temple-ACM-Theme" target="_blank" class="btn btn-social-icon footer-social"><i class="fab fa-github"></i></a>
				<a href="mailto:tuacm@temple.edu" title="Email the Temple ACM" target="_blank" class="btn btn-social-icon footer-social"><i class="fas fa-envelope"></i></a>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-6 col-md-3">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/acm_logo.png" class="footer-logo">
				</div>
				<div class="col-6 col-md-8">
					<ul class="footer-links">
						<li><a class="transition" href="/about-us">About Us</a></li>
						<li><a class="transition" href="/events">Events</a></li>
						<li><a class="transition" href="/contact-us">Contact Us</a></li>
						<li><a class="transition" href="https://temple.edu">TU Website</a></li>
						<li><a class="transition" href="https://cst.temple.edu">College of Science & Technology</a></li>
						<li><a class="transition" href="https://cst.temple.edu/students/undergraduate-academic-advising">CST Advising</a></li>
						<li><a class="transition" href="https://www.temple.edu/provost/careercenter/">Career Center</a></li>
						<li><a class="transition" href="https://cis.temple.edu">CIS Website</a></li>
						<li><a class="transition" href="https://owlhacks.com/">OwlHacks</a></li>
					</ul>
				</div>
			</div>
			<div class="row pt-1">
				<div class="col-md-12">
					<div class="footer-text align-content-center">
						<p>&copy; Temple University ACM. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>