<?php
	/*
		=============================
			OUR WORK CONTENT
		=============================
	*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<img class="img-responsive" src="<?php echo yes_idea_get_thumbnail(); ?>" alt="post thumbnail">
	</header>
	<div class="entry-content py-3">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<p><?php echo get_the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="card-button font-weight-bold py-1 px-2 bg-white"><?php pl_e('Learn more') ?></a>
	</div>
</article>

