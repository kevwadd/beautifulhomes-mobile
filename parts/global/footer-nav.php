<?php 
$rate_my_rooms_pg = get_page_by_path('rate-my-rooms');
$work_with_us_pg = get_page_by_path('work-with-us');
?>
<a href="<?php echo get_permalink($rate_my_rooms_pg->ID); ?>" class="flex-fill"><i class="fa fa-star fa-lg"></i><span><?php echo get_the_title($rate_my_rooms_pg->ID); ?></span></a>
<a href="<<?php echo get_permalink($work_with_us_pg->ID); ?>" class="flex-fill"><i class="fa fa-handshake-o fa-lg"></i><span>Work<br>with us</span></a>
<a href="mailto:<?php echo $main_email; ?>" class="flex-fill"><i class="fa fa-envelope fa-lg"></i><span>Get in<br>touch</span></a>
<a href="#" data-toggle="modal" id="search-btn" data-target="#search-modal" target="_blank" class="flex-fill"><i class="fa fa-search fa-lg"></i><span>Search<br>Blog</span></a>