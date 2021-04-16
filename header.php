<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Merlin
 */

// Get Theme Options from Database
$theme_options = merlin_theme_options();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '156814846272508');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=156814846272508&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'merlin' ); ?></a>

		<header id="masthead" class="site-header clearfix" role="banner">

			<!-- <div id="header-top" class="header-bar-wrap">

				<?php get_template_part( 'template-parts/header-bar' ); ?>

			</div> -->

			<div class="header-main">

				<div class="header-main__nav">
					<div id="logo" class="site-branding">

						<?php merlin_site_logo(); ?>

					</div><!-- .site-branding -->



					<nav id="main-navigation" class="primary-navigation navigation" role="navigation">
					<?php
						// Display Main Navigation
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'main-navigation-menu',
							'echo' => true,
							'fallback_cb' => 'merlin_default_menu',
											) );
					?>
					</nav><!-- #main-navigation -->
				</div>

				<div class="intro">
					<?php merlin_site_title(); ?>
					<?php merlin_site_description(); ?>
					<div class="header-widgets">

						<?php // Display Header Widgets
						if ( is_active_sidebar( 'header' ) ) :

								dynamic_sidebar( 'header' );

						endif; ?>

				</div><!-- .header-widgets -->
				</div>

			</div><!-- .header-main -->



			<?php // Display Custom Header Image
			merlin_header_image(); ?>

		</header><!-- #masthead -->

		<div id="content" class="site-content container clearfix">
