<?php
$post_args = array(
	'posts_per_page'   => 6,
	'offset'          => 1
);
$hp_posts = get_posts($post_args);
//echo '<pre>';print_r($posts);echo '</pre>';
?>

<section id="hp-posts" class="post-grid page-section">
	<h2 class="header-caps text-center"><span>Recent blog articles</span></h2>
		<?php
		global $post;
		foreach ( $hp_posts as $post ) : setup_postdata( $post ); ?>
		<?php
		$feat_img_lg = get_the_post_thumbnail_url($post->ID, 'large');	
		?>
		<a href="<?php the_permalink(); ?>" class="grid-img-link">
			<span class="img" style="background-image: url(<?php echo $feat_img_lg; ?>)"></span>	
			<span class="headline"><?php the_title(); ?></span>			
		</a>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		
</section>