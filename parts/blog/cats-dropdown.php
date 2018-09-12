<?php 
$cats_args = array(
	'exclude'		=> 1,
	'hide_empty'    => 1,
	'hierarchical'  => 0
);
	
$cats = get_categories($cats_args);
//echo '<pre>';print_r($archives);echo '</pre>';
?>
<?php if ($cats) { ?>
<div class="dropdown">
  <button class="btn-block dropdown-toggle" type="button" id="dropdownCatsButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Blog Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownCatsButton">
	  <?php foreach ($cats as $cat) { 
		$category_id = 	$cat->term_id;
		?>
		<a class="dropdown-item<?php echo (is_category( $category_id )) ? ' active':'' ; ?>" href="<?php echo get_category_link( $category_id ); ?>"><?php echo get_cat_name($category_id); ?></a>
	<?php } ?>
  </div>
</div>
<?php } ?>