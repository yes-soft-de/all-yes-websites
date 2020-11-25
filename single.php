<?php get_header(); ?>

<div id="primary" class="content-area bg-white">
	<main id="main" class="site-main blog-main" role="main">
<!--		<div class="container">-->
			<?php
				// Check If There Is A Post In Database
				if (have_posts()):
					while (have_posts()):
						the_post();
						wpb_set_post_views(get_the_ID());
						get_template_part('template-parts/single', get_post_format());
          endwhile;
        endif;
      ?>
<!--		</div>-->
	</main>
</div>

<?php get_footer(); ?>
