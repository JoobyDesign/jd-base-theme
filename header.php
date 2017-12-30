<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php } ?>
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 	<link rel="shortcut icon" href="<?= esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?= get_template_directory_uri(); ?>/assets/img/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?= get_template_directory_uri(); ?>/assets/img/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?= get_template_directory_uri(); ?>/assets/img/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?= get_template_directory_uri(); ?>/assets/img/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?= get_template_directory_uri(); ?>/assets/img/favicon/mstile-310x310.png" />
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header role="banner">
	<div class="row">
	  <div class="small-12 medium-4 columns">
	  	<div class="site-title">
				<a href="<?= site_url(); ?>">
					<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>
				</a>
			</div>
	  </div>
		<div class="small-12 medium-8 columns header-nav">

		</div>
	</div>

	<div class="row">

		<div class="title-bar" data-responsive-toggle="the-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">MENU</div>
		</div>

		<div class="top-bar" id="the-menu" role="navigation">
		    <div class="top-bar">

			    <?php
					wp_nav_menu( array(
						'container'      => false,
						'menu'           => 'Primary Menu',
						'menu_class'     => 'vertical medium-horizontal menu',
						'theme_location' => 'primary',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown" style="width: 100%;">%3$s</ul>',
						'fallback_cb'    => 'f6_drill_menu_fallback',
						'walker'         => new F6_DRILL_MENU_WALKER()
					) );

					?>
		    </div>

		</div>
	</div>

</header>
