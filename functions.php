<?php
	/**
	* Enqueue scripts and styles.
	*/
	//echo '<pre>';print_r(get_theme_file_path());echo '</pre>';
	require get_theme_file_path( '/inc/scripts.php' );
	
	function pagination_bar() {
    global $wp_query;
    
    //echo '<pre>';print_r($wp_query);echo '</pre>';
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        $links = paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => '<i class="fa fa-arrow-left"></i>',
            'next_text' => '<i class="fa fa-arrow-right"></i>',
        ));
        
		echo '<nav class="post-paging">';
        echo ($links);
        echo'</nav>';
    }
	}
?>