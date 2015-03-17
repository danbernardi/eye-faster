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
		<div class="row">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo of_get_option( 'zd_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>" /></a>
			</div>
			<nav>
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</nav>
			<div class="login">
			    <ul>
			        <li><a href="#" class="join btn"><?php _e('Join Now / Login', 'zd'); ?></a></li>
			    </ul>
			</div>
		</div>
		
	</header>