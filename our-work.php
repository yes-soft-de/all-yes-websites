<?php
  /* Template Name: Our Work Page*/
  get_header();

  // get Term For Custom Post Type
	$terms =	get_terms( 'yes_user_project_category', array( 'hide_empty' => 0 )); ?>

<!--Our Work-->
<div id="primary" class="content-area">
	<main id="main" class="site-main our-work background-canvas">
		<?php if ( $terms ): ?>
			<div class="our-work-filter mt-4 my-lg-0">
				<div class="row w-100">
					<div class="col-10 col-sm-11 our-work-filter-slick">
	          <?php foreach ( $terms as $term ): ?>
	            <div class="mx-auto">
	              <div class="service-box p-2 border-<?php echo esc_html( $term->slug ); ?>">
	                <h4><a href="<?php echo get_term_link( $term->slug, 'yes_user_project_category' ) ?>"><?php echo esc_html( $term->name ) ?></a></h4>
	              </div>
	            </div>
	          <?php endforeach; ?>
					</div><!--.our-work-filter-slick-->
					<div class="col-2 col-sm-1 our-work-icon m-auto">
						<i class="fa fa-bars fa-fw fa-3x"></i>
					</div>
				</div><!--.row-->
			</div><!--.our-work-filter-->
		<?php endif; ?>
		<div class="container">
			<div class="row">
        <?php
	        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
          	'post_type' => 'yes_user_project',
	          'posts_per_page' => 2,
	          'paged' => $paged
          );
          $query = new WP_Query( $args );
					if ( $query->have_posts() ):
						while ( $query->have_posts() ):
              echo '<div class="col-12 col-md-6">';
								$query->the_post();
                get_template_part( 'template-parts/content', 'our-work' );
              echo '</div>';
						endwhile;
					endif;
	        wp_reset_postdata();
				?>
				<div class="col-12">
					<!--Start Pagination Section-->
					<div class="pagination_number text-center mb-4">
						<?php echo yes_user_pagination_number( 'yes_user_project' ); ?>
					</div>
					<!--End Pagination Section-->
				</div>
			</div><!--.row-->
		</div><!--.container-->
	</main>
</div>
<!--Our Work-->

<?php get_footer(); ?>
