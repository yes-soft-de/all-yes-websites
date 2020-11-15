<?php
	/*
			This is the template for the Archive
	*/
?>
<?php get_header() ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main post-archive blog-main background-canvas" role="main">
    <header class="archive-header mb-4 mb-md-5 text-center">
			<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
    </header>
    <div class="container">
      <div class="row">
        <?php
          if ( have_posts() ):
            while( have_posts() ):
              echo '<div class="col-12 col-sm-11 col-md-8 mx-auto">';
              the_post();
              get_template_part( 'template-parts/content', 'archive' );   // ex : template-parts/content-page.php
              echo '</div>';
            endwhile;
          endif;
        ?>
      </div>
		</div>
	</main>
</div><!--#primary-->

<?php get_footer() ?>
