<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<div id="primary" class="container">
            <header id="header">
                <div id="logo"><?php the_custom_logo(); ?></div>
	            <?php if ( has_nav_menu( 'top' ) ) : ?>
                <div class="navigation-top">
                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'material_simple' ); ?>">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'top',
                                'menu_id'        => 'top-menu',
                            ) ); ?>
                        </nav>
                </div><!-- .navigation-top -->
	            <?php endif; ?>
            </header>
