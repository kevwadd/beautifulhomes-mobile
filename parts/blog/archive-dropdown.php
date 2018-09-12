<?php 
$archives_args = array(
	'type'          => 'monthly',
	'limit'         => '12',
	'format'        => 'a',
	'echo'			=> 0
);
	
$archives = wp_get_archives($archives_args);
//echo '<pre>';print_r($archives);echo '</pre>';
?>
<?php if ($archives) { ?>
<div class="dropdown">
  <button class="btn-block dropdown-toggle" type="button" id="dropdownArchiveButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Blog Archives
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownArchiveButton">
	<?php echo $archives; ?>
  </div>
</div>
<?php } ?>