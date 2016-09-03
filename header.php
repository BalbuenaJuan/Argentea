<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#222">
	<meta name="description" content="Bienvenidos a mi Blog donde hablo de cosas que me interesan o hago. En el futuro algunos artículos pueden ser removidos, para
	centrarlo en un blog de desarrollo.">
	<title>Blog Juan</title>
	<link rel="shortcut icon" href="<?php bloginfo(template_directory);?>/img/ico.ico">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>"/>
</head>
<body>
<header>
	<nav>
	<label for="menuSelector" class="u-menuSelector">
		<img src="<?php bloginfo('template_directory'); ?>/img/menu.png" alt="menu" class="menu--mobileNav" />
 	</label>
	<input type="checkbox" id="menuSelector">

		<?php wp_nav_menu( array(
				"theme_location" => "header-menu",
				"menu_class" => "header__nav--menu"
		) ); ?>
	
	</nav>
	<div class="home"><a href="<?php bloginfo('url'); ?>"><img class="ancla--header2" src="<?php bloginfo('template_directory'); ?>/img/juan.jpg" /></a></div>
	<img class="avatar--landing" src="<?php bloginfo('template_directory'); ?>/img/juan-avatar.jpg " alt="Avatar Juan">
    <h1 class="header__text--Uno"><a class="ancla--header"  href="<?php   bloginfo('url');   ?>">Juan Balbuena | Web Developer</a></h1>
    <h2 class="subHeader">~ Desarrollo Software / Libros ~</h2>
		<div class="redes">
			<a class="anchor--redes" href="https://www.facebook.com/juan.balbuenagonzalez" target="_blank"><span class="icon-facebook3"</span></a>
			<a class="anchor--redes" href="https://twitter.com/__balbuenajuan" target="_blank"><span class="icon-twitter3"></span></a>
			<a class="anchor--redes" href="https://github.com/BalbuenaJuan" target="_blank"><span class="icon-github"></span></a>
    </div>

	<?php wp_head(); ?>
		
</header>
