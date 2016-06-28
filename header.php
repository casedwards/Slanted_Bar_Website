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
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div id="a-circle"><div>A</div></div>ndre Edwards</a></h1>
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