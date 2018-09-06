<?php if ( have_posts() ) : ?>
<section id="section-posts" class="post-grid page-section">
	<?php while ( have_posts() ) : ?>

		<?php get_template_part( 'parts/blog/loop', 'item' );  ?>

	<?php endwhile; ?>
</section>
<?php else : ?>
<section class="no-posts-message page-section">
	<div class="container-fluid">
	<?php get_template_part( 'parts/blog/no', 'posts' );  ?>
	</div>
</section>
<?php endif; ?>