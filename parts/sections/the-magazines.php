<?php 
$comp_slides = get_field('comp_slides', 'options');
//echo '<pre>';print_r($comp_slides);echo '</pre>';
?>
<section id="the-magazines" class="logos-section page-section">
	<h2 class="header-caps text-center"><span>The Magazines</span></h2>
	<div class="container-fluid">
		<?php foreach ($comp_slides as $k => $slide) { ?>
		<div class="row">
				<div class="col-4">
					<?php
					$img_1 = wp_get_attachment_image_src($slide['mag_logo_1'], 'full'); 	
					?>
					<a href="<?php echo $slide['mag_website_1']; ?>" target="_blank" style="background-image: url(<?php echo $img_1[0]; ?>)" class="block">
						<span class="sr-only"><?php echo $slide['mag_name_1']; ?></span>	
					</a>
				</div>
				<div class="col-4">
					<?php
					$img_2 = wp_get_attachment_image_src($slide['mag_logo_2'], 'full'); 	
					?>
					<a href="<?php echo $slide['mag_website_2']; ?>" target="_blank" style="background-image: url(<?php echo $img_2[0]; ?>)" class="block">
						<span class="sr-only"><?php echo $slide['mag_name_2']; ?></span>	
					</a>
				</div>
				<div class="col-4">
					<?php
					$img_3 = wp_get_attachment_image_src($slide['mag_logo_3'], 'full'); 	
					?>
					<a href="<?php echo $slide['mag_website_3']; ?>" target="_blank" style="background-image: url(<?php echo $img_3[0]; ?>)" class="block">
						<span class="sr-only"><?php echo $slide['mag_name_3']; ?></span>	
					</a>
				</div>
		</div>
		<?php } ?>
	</div>
</section>