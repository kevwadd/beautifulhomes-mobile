<?php the_post(); ?>
<?php
$feat_img = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feat_img_lg = get_the_post_thumbnail_url($post->ID, 'large');	
$words_by = get_field('words_by');
$photos_by = get_field('photos_by');
//$article_imgs = get_field('article_imgs');
?>
<article <?php post_class('single-post'); ?>>
		<h1 class="headline"><?php the_title(); ?></h1>
		<div class="post-meta caps">
			<div><i class="fa fa-calendar"></i>  <?php echo get_the_date( 'F j, Y', $top_post ); ?></div>
			<div><i class="fa fa-tag"></i>  <?php the_category(','); ?></div>
			<div><i class="fa fa-pencil"></i> 
			<?php if (!empty($words_by)) { ?>
			<?php echo $words_by['display_name']; ?>
			<?php } else { ?>
			<?php the_author_meta( 'display_name' , $author_id ); ?>
			<?php } ?></div>
			<?php if (!empty($photos_by)) { ?>
			<div><i class="fa fa-camera"></i>  <?php echo $photos_by['display_name']; ?></div>
			<?php } ?>
		</div>
		<div class="main-txt">
			<?php the_content(); ?>
		</div>		
</article>
