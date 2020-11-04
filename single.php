<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main blog-main" role="main">
		<div class="container">
			<?php
				// Check If There Is A Post In Database
				if (have_posts()) {
					while (have_posts()) {
						the_post(); ?>

		        <div class="single-post p-4 mt-5">
							<?php if (current_user_can('administrator')) : ?>
								<?php edit_post_link('Edit <i class="fa fa-pencil fa-fw"></i>'); ?>
							<?php endif; ?>
		          <h2 class="single-post-header m-0">
		            <a href="#"><?php the_title(); ?></a>
		          </h2>
		          <div class="single-post-detail my-2">
		                    <span class="post-auther mr-3">
		                        <i class="fa fa-user fa-fw"></i><a href="#"><?php echo get_the_author() ?></a>
		                    </span>
		            <span class="post-date mr-3">
		                <i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
		            </span>
		            <span class="post-comment">
		                  <i class="fa fa-comments fa-fw"></i>
		                <?php comments_popup_link( pll_('0 Comment'), pll_('One Comment'), '% ' . pll_('Comments'), '', pll_('disabled Comment') ); ?>
		              </span>
		          </div>
							<?php if (has_post_thumbnail()) : ?>
		            <div class="single-post-img">
									<?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail', 'alt' => 'Post Image']); ?>
		            </div>
							<?php endif; ?>
		          <hr>
		          <div class="post-content mt-3">
								<?php the_content(); ?>
		          </div>
		          <p class="post-categories">
		            <i class="fa fa-tags fa-fw"></i><?php pl_e( 'Categories' ) ?> :
								<?php
									// Print The Categories
									the_category(', ');
									echo '<br />';
									// Check If There Is Tags Or Not
									if (has_tag()) {
										echo '<i class="fa fa-tags fa-fw"></i> ';
										the_tags();
									} else {
										echo '<i class="fa fa-tags fa-fw"></i>' . pll_( 'Tags: There\'s No Tags For This Post' );
									}
								?>
		          </p>
		        </div>
						<?php
					} // End While Loop
				} // End Check For Having Post

				// Start Comments Section
				comments_template();
				// End Comments Section
			?>
		</div>
	</main>
</div>

<?php get_footer(); ?>
