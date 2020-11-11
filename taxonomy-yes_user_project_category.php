<?php get_header(); ?>

<!--Our Services Page -->
<?php
	// get Term For Custom Post Type
	$request_uri = explode('/', $_SERVER['REQUEST_URI']);
	$terms =	get_terms( 'yes_user_project_category', array( 'hide_empty' => 0 ));
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main services-page background-canvas">
		<div class="container-fluid">
			<div class="row">
				<div class="col-4 col-lg-3 mx-auto">
					<ul class="list-unstyled">
							<?php foreach ( $terms as $term ):
								$style = ($term->slug == $request_uri[2] ? 'style="transform: translateX(30px);"' : ''); ?>
								<li class="mb-3" <?php echo $style; ?>>
									<div class="service-box text-center p-2 border-<?php echo esc_html( $term->slug ); ?>">
										<h4><?php echo esc_html( $term->name ) ?></h4>
									</div>
								</li>
							<?php endforeach; ?>
					</ul>
				</div>
				<div class="col-8 px-5">
					<div class="service-tax-content">
						<div class="service-content-img pull-right mx-5 text-center">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/tab.png' ?>" alt="category image">
							<a href="https://wa.me/96171575052" class="whatsapp-contact"><i class="fa fa-whatsapp fa-fw fa-lg"></i><?php pl_e('Whatsapp') ?></a>
						</div>
						<?php foreach ( $terms as $term ):
							if ($term->slug == $request_uri[2]): ?>
							<p><?php echo esc_html( $term->description ); ?></p>
						<?php endif; endforeach; ?>
					</div>
				</div><!--.col-8-->

				<div class="col-3 mx-auto mt-5 blog-sidebar">
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
				<div class="col-8 px-5 mt-5">
          <div class="service-project-blog our-work">
						<h3 class="mb-4"><?php pl_e( 'Related Project' ) ?></h3>
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'post_type' => 'yes_user_project',
								'posts_per_page' => 1,
								'paged' => $paged
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ):
								while ( $query->have_posts() ):
									echo '<div class="col-12 pl-0">';
									$query->the_post();
									get_template_part( 'template-parts/content', 'our-work' );
									echo '</div>';
								endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div><!--.service-project-blog-->
				</div><!--.col-8-->
        <div class="col-12">
          <!--Start Pagination Section-->
<!--          <div class="pagination_number text-center mb-4 mt-5">-->
<!--						--><?php //echo yes_user_pagination_number( 'yes_user_project' ); ?>
<!--          </div>-->
          <!--End Pagination Section-->
        </div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</main>
</div>
<!--Our Services -->

<?php get_footer(); ?>
