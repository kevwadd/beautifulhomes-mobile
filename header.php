<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<button id="menu-btn" class="btn btn-default btn-block">
	<div class="bar"></div>
	<div class="bar"></div>
	<div class="bar"></div>
</button>
<div id="main-nav" class="nav-closed">
	<nav id="top-nav">
		<?php wp_nav_menu(array( 
		'container' => 'false', 
		'menu' => 'Mobile main nav', 
		'menu_class'  => 'list-unstyled',
		'fallback_cb' => false 
		) ); 
		?>
	</nav>
</div>
<div id="page" class="site d-flex flex-column">
	
	<header id="masthead" class="header-normal" role="banner">
		<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><span class="sr-only"><?php bloginfo('name'); ?><br><?php bloginfo('description'); ?></span></a>
	</header><!-- #masthead -->
	
	<main id="content" class="site-content">