<?php if ( have_posts() ) : ?>
<div class="post-filters">
	<?php get_template_part( 'parts/blog/cats', 'dropdown' );  ?>
	<?php get_template_part( 'parts/blog/archive', 'dropdown' );  ?>
	<?php pagination_bar(); ?>	
</div>
<?php endif; ?>