<?php
	/*
		=============================
			STANDARD POST FORMAT
		=============================
	*/
?>
<article id="post-<?php the_ID();?>" <?php post_class('pt-0');?>>
	<div class="container">
		<header class="entry-header px-4">
			<span class="text-uppercase mr-3"><?php the_category( ' ' ); ?></span>
			<span class="text-uppercase read_time"><?php echo get_post_meta( get_the_ID(), 'read_time', true); ?></span>
			<?php the_title( '<h1 class="entry-title mt-3 mt-md-4">', '</h1>' ); ?>
		</header>
		<hr class="my-4 my-md-5">
		<div class="top-author-box">
			<div class="row">
				<div class="col-3 col-lg-2">
					<?php $avatar_image = get_avatar_data(get_the_author_meta('id'))['url']; ?>
					<img class="img-fluid" src="<?php echo $avatar_image; ?>" alt="Avatar Image" >
				</div>
				<div class="col-7 col-lg-8">
					<h4 class="text-uppercase mb-4"><?php echo get_the_author_meta( 'first_name') . ' ' . get_the_author_meta( 'last_name' );  ?></h4>
					<p class="lead font-weight-normal"><?php echo get_the_author_meta( 'description' ); ?></p>
				</div>
				<div class="col-2 align-self-lg-center">
					<div class="share-icon border mx-auto pl-2 pr-3 py-3">
						<i class="fa fa-share-alt fa-fw"></i>
					</div>
				</div>
			</div><!--.row-->
		</div><!--.top-author-box-->
		<hr class="my-4 my-md-5">
	</div><!--.container-->
	<div class="col-12 col-lg-10 mx-auto">
		<div class="entry-content">
			<div class="row">
				<div class="col-12 col-md-7 col-xl-8">
					<?php the_content(); ?>
					<div class="tags text-uppercase mb-4">
						<?php
							if (has_tag()) {
								the_tags( pll_('Tags '), ' ');
							}
						?>
					</div>
				</div>
				<div class="col-12 col-md-5 col-xl-4">
					<div class="first-side">
						<?php
							get_sidebar('blog');
						?>
					</div>
				</div>
			</div><!--.row-->
		</div><!--.entry-content-->
	</div><!--.col-10-->
	<div class="top-author-box mt-4 bg-bright-grey pt-3 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-3 col-lg-2">
					<?php $avatar_image = get_avatar_data(get_the_author_meta('id'))['url']; ?>
					<img class="img-responsive" src="<?php echo $avatar_image; ?>" alt="Avatar Image" >
				</div>
				<div class="col-9 col-lg-10">
					<h4 class="text-uppercase mb-4"><?php pl_e( 'About The Author' ) ?></h4>
					<p class="lead font-weight-normal"><?php echo get_the_author_meta( 'description' ); ?></p>
				</div>
			</div><!--.row-->
		</div>
	</div><!--.top-author-box-->
</article>
