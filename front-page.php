<?php	get_header(); ?>

<!-- Say Yes Page -->
<article class="landing-page">
  <div id="typed-header-strings" class="text-white">
    <p><?php pl_e( 'Say Yes To ...' ) ?></p>
    <p><?php pl_e( 'Say Yes To Creative' ) ?></p>
    <p><?php pl_e( 'Say Yes To Magnates' ) ?></p>
    <p><?php pl_e( 'Say Yes To Yes User' ) ?></p>
  </div>
  <h2 id="typed" class="text-white"></h2>
  <div class="landing-page-sidebar">
    <div class="landing-sidebar-logo">
      <div class="logo-box bg-white">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/FINAL-LOGO.png' ?>" alt="" title="Yes User Logo"  style="place-self: end;">
      </div>
    </div>
    <div class="landing-sidebar-navigate text-center">
      <div class="row">
        <div class="col-12">
          <h2 class="sidebar-navigate-home my-5"><a href="<?php echo get_site_url() . '/home'; ?>"><?php pl_e( 'Home' ) ?></a></h2>
        </div>
        <div class="col-12">
          <h2 class="sidebar-navigate-contact my-5">
            <a href="<?php echo get_site_url() . '/contact-us'; ?>">
							<?php pl_e( 'Contact Us' ) ?>
              <i class="fa fa-chevron-right fa-fw fa-1x text-white" aria-hidden="true"></i>
            </a>
          </h2>
        </div>
      </div>
    </div>
  </div>
</article>
<!-- Say Yes Page -->

<?php get_footer(); ?>

