<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inisiasi_FTI_UAJY_2019
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'inisiasi-fti'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="header-branding">
					<div class="header-image">
						<?php the_custom_logo(); ?>
					</div>
					<div class="header-lembaga-logo">
						<div class="header-lembaga-logo--entity">
							<img src="/assets/uajy.png">
						</div>
						<div class="header-lembaga-logo--entity">
							<img src="/assets/sema-fti.png">
						</div>
						<div class="header-lembaga-logo--entity">
							<img src="/assets/hmti.png">
						</div>
						<div class="header-lembaga-logo--entity">
							<img src="/assets/himaforka.png">
						</div>
						<div class="header-lembaga-logo--entity">
							<img src="/assets/himsi.png">
						</div>
					</div>
				</div>

				<div class="selamat-datang">
					<img src="/assets/head.png">
				</div>

				<!--<?php
					if (is_front_page() && is_home()) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$inisiasi_fti_description = get_bloginfo('description', 'display');
				if ($inisiasi_fti_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $inisiasi_fti_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div> .site-branding -->
			</div>

			<div class="custnav">
				<nav id="site-navigation" class="main-navigation customnavbar">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
				</nav>
			</div><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">