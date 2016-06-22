<div class="related-posts wrapper">
	<?php
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

	$args=array(
	'tag__in' => $tag_ids,
	'post__not_in' => array($post->ID),
	'showposts'=>3,  // Number of related posts that will be shown.
	'caller_get_posts'=>1
	);
	$my_query = new wp_query($args);
	if( $my_query->have_posts() ): ?>
		<h2>Related Posts</h2>
		<div class="row cells3">
		<?php while ($my_query->have_posts()):
		$my_query->the_post();
		if(has_post_thumbnail()):?>
			<div class="cell related-post">
				<div class="relatedposts-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			</div>
		<?php endif; endwhile; wp_reset_query(); ?>
		</div>
	<?php endif; }?>
</div>