<?php the_post(); ?>
<?php
$feat_img = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feat_img_lg = get_the_post_thumbnail_url($post->ID, 'large');	
$words_by = get_field('words_by');
$photos_by = get_field('photos_by');
?>
<a href="<?php the_permalink(); ?>" class="grid-img-link d-flex">
	<span class="img" style="background-image: url(<?php echo $feat_img_lg; ?>)"></span>	
	<span class="headline align-self-center"><?php the_title(); ?></span>			
</a>