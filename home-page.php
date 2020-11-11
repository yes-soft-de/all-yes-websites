<?php
	/* Template Name: Home Page*/
	get_header(); ?>

<!--Start Service Section-->
<?php
  $terms =	get_terms( 'yes_user_project_category', array( 'hide_empty' => 0 ));
	if ( $terms ): ?>
  <article class="services">
    <div class="container">
      <div class="row">
        <?php foreach ( $terms as $term ): ?>
          <div   class="col-12 col-sm-6 col-lg-4 mx-auto">
            <div class="service-box mb-3 mb-md-5 p-2 p-md-4 service-slide-box border-<?php echo esc_html( $term->slug ); ?>">
              <h4><?php echo esc_html( $term->name ) ?></h4>
              <p class="text-white"><?php echo esc_html( $term->description ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div><!--.row-->
    </div>
  </article>
<?php endif; ?>
<!--End Service Section-->

<!--Yes User Company-->
<article class="yes-user-company">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-5">
				<h2 class="h1"><?php pl_e( 'Yes User' ) ?></h2>
				<span class="d-inline-block my-2"><?php pl_e( 'Yes Soft Company' ) ?></span>
				<p class="yes-user-desc"><?php pl_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque debitis dicta dolorem esse facere harum id incidunt iste minima nesciunt, odit quae quasi quibusdam similique soluta sunt vel voluptates?' ) ?></p>
			</div>
			<div class="col-12 col-md-6 col-lg-7">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/About-us-2.gif' ?>" alt="">
			</div>
		</div>
	</div>
</article>
<!--Yes User Company-->

<!--Delivering Best Service-->
<article class="deliver-service bg-white">
	<div class="container">
		<h2 class="font-weight-bold mb-3"><?php pl_e( 'Delivering best services in UI and UX field' ) ?></h2>
		<p class="mb-5"><?php pl_e( 'We\'re the first multi-purpose design kit solutions for businesses. We help help your bridge gaps between your layouts, templates and developers to empower all involved' ) ?></p>
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-3 mx-auto text-center text-lg-left">
				<div class="card border-0">
					<div class="card-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/phone-icon.png' ?>" alt="best service icon">
					</div>
					<div class="card-body px-0">
						<h4 class="card-title font-weight-bold"><?php pl_e('Support'); ?></h4>
						<p class="card-text"><?php pl_e( 'Delivering faster and more personalized support with shared screens and cool design systems for Figma' ) ?></p>
						<a href="#" class="card-button font-weight-bold py-2 px-3 d-none"><?php pl_e('Learn more') ?></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 mx-auto text-center text-lg-left">
				<div class="card border-0">
					<div class="card-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/analyze.png' ?>" alt="best service icon">
					</div>
					<div class="card-body px-0">
						<h4 class="card-title font-weight-bold"><?php pl_e( 'Personal Studies' ) ?></h4>
						<p class="card-text"><?php pl_e('Identify qualified customers with easy-to-use live chat messaging and Al-based Sales Bot') ?></p>
						<a href="#" class="card-button font-weight-bold py-2 px-3 d-none"><?php pl_e('Learn more');?></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 mx-auto text-center text-lg-left">
				<div class="card border-0">
					<div class="card-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/electric.png' ?>" alt="best service icon">
					</div>
					<div class="card-body px-0">
						<h4 class="card-title font-weight-bold"><?php pl_e( 'Coponents-driven' ) ?></h4>
						<p class="card-text"><?php pl_e('Delivering faster and more personalized support with shared screens and cool design systems for Figma') ?></p>
						<a href="#" class="card-button font-weight-bold py-2 px-3 d-none"><?php pl_e('Learn more');?></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 mx-auto text-center text-lg-left">
				<div class="card border-0">
					<div class="card-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/like.png' ?>" alt="best service icon">
					</div>
					<div class="card-body px-0">
						<h4 class="card-title font-weight-bold"><?php pl_e( 'All in one place' ) ?></h4>
						<p class="card-text"><?php pl_e('You can toggle to any icon within instances and customize outlined stroke to more bolder or lighter') ?></p>
						<a href="#" class="card-button font-weight-bold py-2 px-3 d-none"><?php pl_e('Learn more');?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
<!--Delivering Best Service-->

<!--Our Team-->
<article class="our-team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-4 mb-4 mx-auto">
				<div class="team-item">
					<div class="row w-100">
						<div class="col">
							<div class="team-member-image mx-auto">
								<img class="img-responsive rounded-circle" src="<?php echo get_template_directory_uri() . '/images/team/photo-1.jpg' ?>" alt="team member image">
							</div>
						</div>
						<div class="col px-xl-0 text-sm-center text-xl-left" style="place-self: center">
							<h2 class="h1"><?php pl_e( 'Salma arar' ); ?></h2>
							<h4 class="font-weight-bold"><?php pl_e( 'Graphic Design' ) ?></h4>
						</div>
					</div>
				</div><!--.team-item-->
			</div>
			<div class="col-12 col-sm-6 col-md-4 mb-4 mx-auto">
				<div class="team-item">
					<div class="row w-100">
						<div class="col">
							<div class="team-member-image mx-auto">
								<img class="img-responsive rounded-circle" src="<?php echo get_template_directory_uri() . '/images/team/photo-2.jpg' ?>" alt="team member image">
							</div>
						</div>
						<div class="col px-xl-0 text-sm-center text-xl-left" style="place-self: center">
							<h2 class="h1"><?php pl_e( 'Maks Lop' ); ?></h2>
							<h4 class="font-weight-bold"><?php pl_e( 'Graphic Design' ) ?></h4>
						</div>
					</div>
				</div><!--.team-item-->
			</div>
			<div class="col-12 col-sm-6 col-md-4 mb-4 mx-auto">
				<div class="team-item">
					<div class="row w-100">
						<div class="col">
							<div class="team-member-image mx-auto">
								<img class="img-responsive rounded-circle" src="<?php echo get_template_directory_uri() . '/images/team/photo-3.jpg' ?>" alt="team member image">
							</div>
						</div>
						<div class="col px-xl-0 text-sm-center text-xl-left" style="place-self: center">
							<h2 class="h1"><?php pl_e( 'Mikel Smeth' ); ?></h2>
							<h4 class="font-weight-bold"><?php pl_e( 'Graphic Design' ) ?></h4>
						</div>
					</div>
				</div><!--.team-item-->
			</div>
		</div>
	</div>
</article>
<!--Our Team-->

<!--Our Projects-->
<article class="our-projects">
	<div class="container">
    <?php
	    $args = array(
		    'post_type' => 'yes_user_project',
		    'posts_per_page' => 2
	    );
	    $query = new WP_Query( $args );
	    if ( $query->have_posts() ):
		    while ( $query->have_posts() ):
			    $query->the_post(); ?>

	    		<div id="project_content_<?php the_ID(); ?>" class="project-content">
            <div class="row">
              <div class="col-12 col-sm-5 col-md-4 col-lg-3 align-self-sm-center align-self-lg-start mb-3 first_image">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/lamp.jpg' ?>" alt="browser tab">
              </div>
              <div class="d-none d-md-block col-md-2 arrow_image px-0 text-center" style="place-self: center;">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/icons/Header-Left.png' ?>" alt="arrow">
              </div>
              <div class="col-12 col-sm-7 col-md-6 col-lg-7">
                <?php the_title( '<h3 class="h2 font-weight-bold">', '</h3>') ?>
                <?php echo yes_user_get_terms( $post->ID, 'yes_user_project_category' ); ?>
                <p class="lead"><?php echo get_the_excerpt(); ?></p>
              </div>
              <div class="col-12 col-sm-5 col-md-4 col-lg-3 align-self-sm-center align-self-lg-start second_image">
                <img class="img-fluid" src="<?php echo yes_user_get_thumbnail() ?>" alt="browser tab">
              </div>
            </div>
          </div><!--.project-content-->

		    <?php endwhile; endif; wp_reset_postdata(); ?>

<!--      <div class="project-content">-->
<!--        <div class="row">-->
<!--          <div class="col-12 col-sm-5 col-md-4 col-lg-3 align-self-sm-center align-self-lg-start mb-3">-->
<!--            <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/lamp.jpg' ?><!--" alt="browser tab">-->
<!--          </div>-->
<!--          <div class="d-none d-md-block col-md-2 px-0 text-center" style="place-self: center;">-->
<!--            <img class="img-fluid" src="--><?php //echo get_template_directory_uri() . '/images/icons/Header-Left.png' ?><!--" alt="arrow">-->
<!--          </div>-->
<!--          <div class="col-12 col-sm-7 col-md-6 col-lg-7">-->
<!--            <h3 class="h2 font-weight-bold">Project Name</h3>-->
<!--            <h5 class="border-green-blue" data-test="testString">--><?php //pl_e( 'UI & UX Design') ?><!--</h5>-->
<!--            <p class="lead">Alex is passionate digital product designer with over 10 years of UI/UX experience. He has worked together with both boutique design ...</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
	</div>
</article>
<!--Our Projects-->

<!--Affordable Price-->

<!--Affordable Price-->

<?php get_footer(); ?>
