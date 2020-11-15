<!DOCTYPE html>
<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo( 'description' );?>">
  <title><?php bloginfo( 'name' ); wp_title(); ?></title>
<!--  <link rel="shortcut icon" href="--><?php //echo get_template_directory_uri() . '/img/sunset-icon.png'; ?><!--">-->
  <!-- Check If The pingback is enable or not in the backend and check if the page is single post or single page-->
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php echo is_rtl() ? 'style="direction: rtl;"' : ''; ?>>
<?php
  if ( !is_front_page() ): ?>

  <nav class="navbar navbar-expand-lg navbar-desktop p-0 d-none d-md-block">
    <div class="nav-box position-relative w-100 p-3 pb-4">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/bg-nav.png' ?>" alt="header background">
      <div class="container">
        <div class="row">
          <div class="col-5 mx-auto align-self-center">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item facebook-icon pr-md-2">
                <a class="nav-link" href="#">
                  <i class="fa fa-facebook fa-fw fa-lg"></i>
<!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/Facebook.png' ?><!--">-->
                </a>
              </li>
              <li class="nav-item linkedin-icon px-md-2">

                <a class="nav-link" href="#">
                  <i class="fa fa-linkedin fa-fw fa-lg"></i>
<!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/icon-linkedin.png' ?><!--">-->
                </a>
              </li>
              <li class="nav-item slack-icon px-md-2">
                <a class="nav-link" href="#">
                  <i class="fa fa-slack fa-fw fa-lg"></i>
<!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/icon-slack.png' ?><!--">-->
                </a>
              </li>
              <li class="nav-item twitter-icon px-md-2">
                <a class="nav-link" href="#">
                  <i class="fa fa-twitter fa-fw fa-lg"></i>
<!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/icon-twitter.png' ?><!--">-->
                </a>
              </li>
            </ul>
            <?php yes_user_display_left_menu(); ?>
          </div>
        <div class="col-2 mx-auto" style="display: grid">
          <div class="logo-bg bg-white">
            <a href="<?php echo get_site_url() . '/home'; ?>">
              <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/FINAL-LOGO.png' ?>" alt="" title="Yes User Logo"  style="place-self: end;">
            </a>
          </div>
        </div>
          <div class="col-5 align-self-center justify-content-end">
            <?php yes_user_display_language_menu(); ?>
            <?php yes_user_display_right_menu(); ?>
          </div>
        </div>
      </div>
    </div>
  </nav>

<!--Mobile Navbar-->
    <nav class="navbar navbar-light navbar-expand-md navbar-mobile d-md-none p-0">
      <div class="nav-box position-relative w-100 p-3 pb-4">
        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/bg-nav.png' ?>" alt="header background">
        <div class="container navbar">
          <ul class="navbar-nav custom-navbar-social">
            <li class="nav-item facebook-icon pr-1">
              <a class="nav-link" href="#">
                <i class="fa fa-facebook fa-fw fa-lg"></i>
                <!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/Facebook.png' ?><!--">-->
              </a>
            </li>
            <li class="nav-item linkedin-icon px-1">

              <a class="nav-link" href="#">
                <i class="fa fa-linkedin fa-fw fa-lg"></i>
                <!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/icon-linkedin.png' ?><!--">-->
              </a>
            </li>
            <li class="nav-item slack-icon px-1">
              <a class="nav-link" href="#">
                <i class="fa fa-slack fa-fw fa-lg"></i>
                <!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/icon-slack.png' ?><!--">-->
              </a>
            </li>
            <li class="nav-item twitter-icon px-1">
              <a class="nav-link" href="#">
                <i class="fa fa-twitter fa-fw fa-lg"></i>
                <!--                  <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/icon-twitter.png' ?><!--">-->
              </a>
            </li>
          </ul>
          <div class="logo-bg bg-white">
            <a href="<?php echo get_site_url() . '/home'; ?>">
              <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/FINAL-LOGO.png' ?>" alt="" title="Yes User Logo"  style="place-self: end;">
            </a>
          </div>
          <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php yes_user_display_mobile_menu(); ?>
          </div>
        </div>
      </div>
    </nav>
<!--Mobile Navbar-->
<?php endif; ?>
