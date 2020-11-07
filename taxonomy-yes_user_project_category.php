<?php get_header(); ?>

<!--Our Services Page -->
<div id="primary" class="content-area">
	<main id="main" class="site-main services-page background-canvas">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3 mx-auto">
					<ul class="list-unstyled">
						<li>
							<div class="service-box text-center p-2 border-ux-studies">
								<h4>Ux Studies</h4>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-8 px-5">
					<div class="service-tax-content">
						<div class="service-content-img pull-right mx-5">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/tab.png' ?>" alt="category image">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores et non nostrum omnis quis quisquam rerum voluptatem. Culpa delectus doloremque illo modi neque quibusdam, voluptatibus. Consequatur maiores officiis sapiente voluptas. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use. </p>
					</div>
				</div><!--.col-8-->

				<div class="col-3 mx-auto">

				</div>
				<div class="col-8 px-5">
					<h3 class=""><?php pl_e( 'Related Project' ) ?></h3>
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
				</div><!--.col-8-->
			</div><!--.row-->
		</div><!--.container-fluid-->
	</main>
</div>
<!--Our Services -->

<?php get_footer(); ?>
