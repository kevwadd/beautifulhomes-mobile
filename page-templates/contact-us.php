<?php
/*
Template Name: Contact us
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
		<div class="container-fluid">
			<div class="contact-info">
				<div class="contact-item text-center">
					<h3>For words</h3>
					<p class="lrg-txt">Karen Wilson</p>
					<a href="mailto:" class="btn btn-light btn-lg btn-block"><i class="fa fa-envelope pull-left"></i>karen@beautifulhomesnorth.co.uk</a>
				</div>
				<div class="contact-item text-center">
					<h3>For photography</h3>
					<p class="lrg-txt">Katie Lee</p>
					<a href="mailto:" class="btn btn-light btn-lg btn-block"><i class="fa fa-envelope pull-left"></i>katie@beautifulhomesnorth.co.uk</a>
				</div>
			</div>
		</div>
	</article>
	<?php 
	$form = get_field('form');
	if (!empty($form)) { ?>
	<section id="form-section" class="page-section">
		<h2 class="header-caps text-center"><span>Send us a message</span></h2>
		<div class="container-fluid">	
			<?php gravity_form($form, false, false, false, '', false); ?>
	</section>
	<?php } ?>
<?php endwhile; ?>
<?php get_footer(); ?>