<?php
	/*
			This is the template for the Page
	*/
?>
<?php get_header() ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<?php
				if ( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content', 'page' );   // ex : template-parts/content-page.php
					endwhile;
				endif;
			?>
		</div>
	</main>
</div><!--#primary-->

<?php get_footer() ?>
