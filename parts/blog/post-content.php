<?php if ( have_posts() ) : ?>

<div class="container-fluid">
	<?php while ( have_posts() ) : ?>

		<?php get_template_part( 'parts/blog/post', 'article' );  ?>
		
		<?php 
		$args = array('before' => '<div class="post-pagination"><span>Pages:</span> ','after' => '</div>', 'separator' => '<i class="fa fa-angle-right"></i>');
		wp_link_pages($args);
		?>
		
	<?php endwhile; ?>
</div>
	
<?php endif; ?>