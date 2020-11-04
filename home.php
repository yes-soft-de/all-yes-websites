<?php
	/*
    This is the template for the Blog Page
	*/
?>
<?php get_header(); ?>

<!-- Blog Section	-->
<div id="primary" class="content-area">
	<main id="main" class="site-main blog-main background-canvas" role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="d-none d-md-block col-md-4">
						<?php get_sidebar(); ?>
				</div>
				<div class="col-12 col-md-8 blog-posts">
					<div class="row">
						<?php
	            if ( have_posts() ):
								while ( have_posts() ):
									the_post();
	                get_template_part( 'template-parts/content', get_post_format() );
								endwhile;
							endif;
	          ?>
					</div><!--.row-->
				</div><!--.col-12-->
				<div class="col-12 d-md-none">
					<?php get_sidebar(); ?>
				</div>
        <div class="col-12">
          <!--Start Pagination Section-->
          <div class="pagination_number text-center mb-4 mt-5">
		        <?php echo yes_user_pagination_number(); ?>
          </div>
          <!--End Pagination Section-->
        </div>
      </div><!--.row-->
		</div><!--.container-fluid-->
	</main>
</div>
<!-- Blog Section	-->

<?php get_footer(); ?>
