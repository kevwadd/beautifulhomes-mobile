<?php
/*
Template Name: What We Do Page
*/
?>
<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php if (has_post_thumbnail()) { ?>
	<?php 
	$feat_img = get_the_post_thumbnail_url($post->ID, 'banner-mb-400-133'); 
	$feat_img_lg = get_the_post_thumbnail_url($post->ID, 'banner-dt-1500-500');
	?>
	<div class="banner-img-slim loading">
		<div class="bg-img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)">
			<h1 class="text-center caps"><span><?php the_title(); ?></span></h1>
		</div>
	</div>
	<?php } ?>
	<article <?php post_class('single-post'); ?>>
		<div class="main-txt">
			<div class="container-fluid">
				<?php if (!has_post_thumbnail()) { ?>
				<h1><?php the_title(); ?></h1>
				<?php } ?>
				<?php the_content(); ?>
			</div>
		</div>
	</article>
	<?php get_template_part( 'parts/sections/section', 'team' ); ?>
	
	<?php get_template_part( 'parts/sections/section', 'faqs' ); ?>
	
<?php endwhile; ?>
<?php get_footer(); ?>