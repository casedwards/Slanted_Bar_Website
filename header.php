<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			<!-- Logo -->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <!-- Makes it a link to home -->
			<div id="a-circle"><div><?php $startofname = substr((get_bloginfo ('name')),0, 1);print $startofname;?></div> <!-- this div is made a circle in CSS, first letter of the site title is pulled out and put in the middle by the PHP -->
			
			</div><?php $endofname = substr((get_bloginfo ('name')),1, 20);print $endofname;?></a></h1> <!-- The reminder of the site name is printed out here -->
			
			<p class="site-description"><?php echo(get_bloginfo('description', 'display')); ?>
			<!-- /Logo -->	
			<!-- Banner -->
			<div id="banner">
						
			</div> 
			<!-- /Banner -->
			
			<nav class="site-nav">
				
				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
		</header><!-- /site-header -->