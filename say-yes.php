<?php
	/* Template Name: Landing Page */
	get_header(); ?>

<!-- Say Yes Page -->
<article class="landing-page">
	<div class="landing-page-sidebar">
		<div class="landing-sidebar-logo">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/landing-page-logo.png' ?>" alt="" title="Yes User Logo"  style="place-self: end;">
		</div>
		<div class="landing-sidebar-navigate text-center">
			<div class="row">
				<div class="col-12">
					<h2 class="sidebar-navigate-home my-5"><a href="<?php echo get_site_url(); ?>"><?php pl_e( 'Home' ) ?></a></h2>
				</div>
				<div class="col-12">
					<h2 class="sidebar-navigate-contact my-5"><a href="<?php echo get_site_url(); ?>"><?php pl_e( 'Contact Us' ) ?></a></h2>
				</div>
			</div>
		</div>
	</div>
</article>
<!-- Say Yes Page -->

<?php get_footer(); ?>

