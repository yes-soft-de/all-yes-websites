<?php	get_header(); ?>

<!-- Say Yes Page -->
<article class="landing-page">
  <div id="typed-header-strings" class="text-white">
    <p><?php pl_e( 'Say Yes To ...' ) ?></p>
    <p><?php pl_e( 'Say Yes To Perfection,' ) ?></p>
    <p><?php pl_e( 'Say Yes To Creativity,' ) ?></p>
    <p><?php pl_e( 'Say Yes To High Professionalism,' ) ?></p>
    <p><?php pl_e( 'Say Yes To Excellent User Experience,' ) ?></p>
    <p><?php pl_e( 'and Technology.' ) ?></p>
    <p><?php pl_e( 'Say Yes To Yes User Company' ) ?></p>
    <p><?php pl_e( ' ' ) ?></p>
    <p><?php pl_e( 'With the best tools and experience in' ) ?></p>
    <p><?php pl_e( 'UI & UX design' ) ?></p>
    <p><?php pl_e( 'UX Studies' ) ?></p>
    <p><?php pl_e( 'Software digital product innovation' ) ?></p>
    <p><?php pl_e( 'Ui review & provide solutions' ) ?></p>
    <p><?php pl_e( 'Ux review & provide solutions' ) ?></p>
    <p><?php pl_e( 'Digital strategy' ) ?></p>
    <p><?php pl_e( 'Visual Design' ) ?></p>
    <p><?php pl_e( 'Branding & Graphic Design' ) ?></p>
  </div>
  <h2 id="typed" class="text-white"></h2>
  <div class="landing-page-sidebar d-none d-md-block">
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
          <h2 class="sidebar-navigate-contact my-5 mx-auto">
            <a href="<?php echo get_site_url() . '/contact-us'; ?>">
							<?php pl_e( 'Contact Us' ) ?>
              <i class="fa fa-chevron-right fa-fw fa-1x text-white" aria-hidden="true"></i>
            </a>
          </h2>
        </div><!--.col-12-->
      </div><!--.row-->
    </div><!--.landing-sidebar-navigate-->
  </div><!--.landing-page-sidebar-->
  <div class="landing-page-sidebar-mobile d-md-none">
    <div class="row w-100">
      <div class="col-6 col-sm-5 mx-auto">
        <div class="landing-sidebar-logo h-100">
          <div class="logo-box bg-white h-100">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/FINAL-LOGO.png' ?>" alt="" title="Yes User Logo"  style="place-self: end;">
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="landing-sidebar-navigate h-100 text-center">
          <div class="row h-100 align-items-center">
            <div class="col-4 col-sm-12">
              <h2 class="sidebar-navigate-home"><a href="<?php echo get_site_url() . '/home'; ?>"><?php pl_e( 'Home' ) ?></a></h2>
            </div>
            <div class="col-8 col-sm-12">
              <h2 class="sidebar-navigate-contact mx-auto">
                <a href="<?php echo get_site_url() . '/contact-us'; ?>">
						      <?php pl_e( 'Contact Us' ) ?>
                  <i class="fa fa-chevron-right fa-fw fa-1x text-white" aria-hidden="true"></i>
                </a>
              </h2>
            </div><!--.col-12-->
          </div><!--.row-->
        </div><!--.landing-sidebar-navigate-->
      </div>
    </div>


  </div><!--.landing-page-sidebar-->
</article>
<!-- Say Yes Page -->

<?php get_footer(); ?>

