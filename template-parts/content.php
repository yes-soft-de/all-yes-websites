<?php
	/*
		=============================
			STANDARD POST FORMAT
		=============================
	*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'py-0 mb-4'); ?>>
  <header class="entry-header">
    <img class="img-fluid" src="<?php echo yes_user_get_thumbnail(); ?>" alt="post thumbnail">
  </header>
  <div class="entry-content bg-white p-3">
    <?php the_title( '<h2 class="entry-title"><a href="' . get_the_permalink() . '">', '</a></h2>' ); ?>
    <div class="row align-items-center mt-3">
      <div class="category-parent-box">
	      <?php echo yes_user_get_categories(); ?>
      </div>
	    <div class="time-parent-box">
        <span class="text-muted"><i class="fa fa-clock-o fa-fw"></i><?php the_time( 'F J, Y' ); ?></span>
      </div>
    </div>
  </div>
</article>
