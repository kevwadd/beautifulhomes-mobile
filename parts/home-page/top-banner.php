<?php
$banner_post_args = array(
	'posts_per_page'   => 1
);
$banner_post = get_posts($banner_post_args);
$author_id = $banner_post[0]->post_author;
$feat_img = get_the_post_thumbnail_url($banner_post[0]->ID, 'thumbnail');
$feat_img_lg = get_the_post_thumbnail_url($banner_post[0]->ID, 'full');
$words_by = get_field('words_by', $banner_post[0]->ID);
$photos_by = get_field('photos_by', $banner_post[0]->ID);
$cats = get_the_category( $banner_post[0]->ID );
//echo '<pre>';print_r($cats);echo '</pre>';
//echo '<pre>';print_r($words_by);echo '</pre>';	
?>

<section id="hp-banner" class="top-banner">
	<div class="banner-img loading">
		<div class="img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
	</div>
	<div class="banner-txt d-flex flex-column">
		<div class="cat-label caps text-center"><span><?php echo $cats[0]->name; ?></span></div>
		<div class="headline d-flex flex-column">
			<a href="<?php echo get_permalink($banner_post[0]->ID); ?>" class="d-flex align-self-center"><?php echo get_the_title($banner_post[0]); ?></a>
		</div>
		<div class="post-meta">
			<?php if (!empty($words_by)) { ?>
			Words: <?php echo $words_by['display_name']; ?>
			<?php } else { ?>
			Words: <?php the_author_meta( 'display_name' , $author_id ); ?><br>
			<?php } ?>
			<?php if (!empty($photos_by)) { ?>
			 | Photography: <?php echo $photos_by['display_name']; ?><br>
			<?php } ?>
			<?php echo get_the_date( 'F j, Y', $banner_post[0]->ID ); ?>
		</div>
	</div>
</section>