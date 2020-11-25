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
		<h3 class="h2 font-weight-bold px-2"><?php pl_e( 'Yes user newsletter' ); ?></h3>
		<p class="lead px-2"><?php pl_e( 'Keep in touch with all news and studies of UX Field' ) ?></p>
		<?php
			if ( is_active_sidebar( 'newsletter-sidebar' ) ) {
				dynamic_sidebar( 'newsletter-sidebar' );
			}
		?>
	</div><!--.sidebar-newsletter-->
	<div class="sidebar-best-read">
		<?php
			$args = array(
				'posts_per_page' => 3,
				'meta_key' => 'wpb_post_views_count',
				'orderby' => 'meta_value_num',
				'order' => 'DESC',
				'post_status' => 'publish'
			);
			$popularpost = new WP_Query( $args );
			if ( $popularpost->have_posts() ):
				echo '<h5 class="text-uppercase font-weight-normal mb-2">'. pll_( 'Trending Articles' ) . '</h5>';
				while ( $popularpost->have_posts() ) :
					$popularpost->the_post(); ?>

          <div class="sidebar-trending-article mb-5">
            <span class="text-uppercase mr-3 my-2 d-inline-block font-weight-normal"><?php the_category( ' ' ); ?></span>
            <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
          </div>

				<?php endwhile;
			endif;
		?>
	</div><!--.sidebar-best-read-->
</div>
