<?php
	/*
    This is the template for the Blog Page
	*/
?>

<div class="blog-sidebar">
	<div class="sidebar-newsletter text-center mb-5">
    <div class="sidebar-newsletter-logo mt-3 mx-auto">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/FINAL-LOGO.png' ?>" alt="" title="Yes User Logo"  style="place-self: flex-end;">
    </div>
    <h3 class="h2 font-weight-bold"><?php pl_e( 'Yes user newsletter' ); ?></h3>
    <p class="lead"><?php pl_e( 'Keep in touch with all news and studies of UX Field' ) ?></p>
    <?php
      if ( is_active_sidebar( 'newsletter-sidebar' ) ) {
        dynamic_sidebar( 'newsletter-sidebar' );
      }
    ?>
  </div><!--.sidebar-newsletter-->
	<div class="sidebar-best-read">
    <h3 class="font-weight-bold mb-3"><?php pl_e( 'Best Read' ); ?></h3>
		<?php
			$args = array(
				'posts_per_page' => 4,
				'meta_key' => 'wpb_post_views_count',
				'orderby' => 'meta_value_num',
				'order' => 'DESC'
			);
			$popularpost = new WP_Query( $args );
			if ( $popularpost->have_posts() ):
				while ( $popularpost->have_posts() ) :
					$popularpost->the_post(); ?>

          <div class="sidebar-best-read-blog mb-3">
              <div class="row">
                <div class="col-4" style="place-self: center;">
                  <a href="<?php the_permalink(); ?>">
                    <img class="img-fluid" src="<?php echo yes_user_get_thumbnail(); ?>" alt="post thumbnail">
                  </a>
                </div>
                <div class="col-8">
                  <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title() ?></a></h4>
                  <span class="text-muted"><i class="fa fa-clock-o fa-fw"></i><?php the_time( 'F J, Y' ); ?></span>
                </div>
              </div><!--.row-->
          </div><!--.sidebar-best-read-blog-->

				<?php endwhile;
			endif;
		?>
	</div><!--.sidebar-best-read-->
</div>
