<?php /* Template Name: Test */ ?>
<?php get_header(); ?>
<div class="container pt-5">
	<div class="col-12 col-md-8 blog-posts">
		<div class="row">
			<?php
				$posts = get_posts(array(
				      'post_type' => 'post',  //use actual post type
				      'meta_query' => array(
				          'relation' => 'or',
				          array(
				              'key' => '_products_value_key', // name of custom field
				              'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
				              'compare' => 'LIKE'
				          ),
//				          array(
//				              'key' => 'associated_contact', // name of custom field
//				              'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
//				              'compare' => 'LIKE'
//				          )
				      )
				  ));?>
				<?php if( $posts ): ?>
                            <ul>
                            <?php foreach( $posts as $post ): ?>
                                <li>
                                    <?php echo get_the_title( $post->ID ); ?>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif;
//				$the_query = new WP_Query( $args );

//				if ( $the_query->have_posts() ):
//					while ( $the_query->have_posts() ):
//						$the_query->the_post();
//						get_template_part( 'template-parts/content', get_post_format() );
//					endwhile;
//				endif;
			?>
		</div><!--.row-->
	</div><!--.col-12-->
</div>
<?php get_footer(); ?>

