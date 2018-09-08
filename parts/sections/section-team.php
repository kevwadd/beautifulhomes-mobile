<?php
$team_img_id = get_field('team_img', 'options');
$team_img = wp_get_attachment_image_src($team_img_id, 'medium'); 
//echo '<pre>';print_r($team_img);echo '</pre>';
$team_biogs = get_field('team_biogs', 'options');	
?>

<section id="team-section" class="page-section">
	<h2 class="header-caps text-center"><span>Meet the team</span></h2>
	<img src="<?php echo $team_img[0]; ?>" class="img-fluid team-img">
	<div class="container-fluid">
	<?php foreach ($team_biogs as $k => $biog) { ?>
	<h4><?php echo $biog['name']; ?></h4>
	<h5><?php echo $biog['role']; ?></h5>
	<p><?php echo $biog['biog']; ?></p>
	<?php if ($k == 0) { ?>
	<hr>
	<?php } ?>
	<?php } ?>
	</div>
</section>
