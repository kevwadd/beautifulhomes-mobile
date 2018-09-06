<?php if ( have_posts() ) : ?>
<div class="post-filters">
	<div class="container-fluid">
		<div class="row">
			<div class="pagination-links">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
		<div class="row">	
			<div class="col-6">
				<?php get_template_part( 'parts/blog/cats', 'dropdown' );  ?>
			</div>
			
			<div class="col-6">
				<?php get_template_part( 'parts/blog/archive', 'dropdown' );  ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>