<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="pagewrap">
    <header>
        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo of_get_option( 'zd_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
			<nav>
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</nav>
	</header>