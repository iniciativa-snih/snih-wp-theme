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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;700&display=swap" rel="stylesheet"> 

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
						<a href="<?php echo home_url(); ?>">
						<?php // merlin_site_logo(); ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.53 16.86"><g id="Vrstva_5" data-name="Vrstva 5"><path d="M25,12.31H23.8V4.39H25Z"/><path d="M30.64,6.68a2.29,2.29,0,0,1,.7,1.1A4.09,4.09,0,0,1,31.53,9v3.3H30.36V9.39A3.17,3.17,0,0,0,30,7.91a1.21,1.21,0,0,0-1.18-.61,1.38,1.38,0,0,0-1.09.46,2.12,2.12,0,0,0-.42,1.46v3.09H26.19V6.37h1v.71A2.4,2.4,0,0,1,28,6.43a2.73,2.73,0,0,1,1.14-.22A2.13,2.13,0,0,1,30.64,6.68Z"/><path d="M33.81,5.4H32.66V4.28h1.15Zm0,6.91H32.66V6.37h1.15Z"/><path d="M36.06,12.07a2.6,2.6,0,0,1-1-1.11,3.78,3.78,0,0,1-.35-1.62,3.69,3.69,0,0,1,.36-1.63,2.51,2.51,0,0,1,1-1.11,2.9,2.9,0,0,1,1.53-.4,3.13,3.13,0,0,1,1.17.22,2.4,2.4,0,0,1,.89.63,2.34,2.34,0,0,1,.51,1L39,8.34a1.48,1.48,0,0,0-.56-.77,1.45,1.45,0,0,0-.89-.28,1.43,1.43,0,0,0-1.23.56,2.55,2.55,0,0,0-.42,1.49,2.5,2.5,0,0,0,.43,1.5,1.44,1.44,0,0,0,1.22.55,1.46,1.46,0,0,0,.89-.25A1.63,1.63,0,0,0,39,10.4l1.16.28a2.5,2.5,0,0,1-1,1.33,3.12,3.12,0,0,1-3.16.06Z"/><path d="M42,5.4H40.84V4.28H42Zm0,6.91H40.84V6.37H42Z"/><path d="M48,7.91a5.22,5.22,0,0,1,0,.74v3.66h-1v-.86a2.34,2.34,0,0,1-.89.77,2.85,2.85,0,0,1-1.25.25,2.31,2.31,0,0,1-1.09-.24,1.68,1.68,0,0,1-.68-.64,1.72,1.72,0,0,1-.23-.9,1.75,1.75,0,0,1,1.4-1.76c.28-.08.6-.15,1-.22l1.49-.22.18,0a1.29,1.29,0,0,0-.34-.92,1.47,1.47,0,0,0-1-.28,1.58,1.58,0,0,0-.88.23,1.16,1.16,0,0,0-.53.7l-1.07-.33A2.21,2.21,0,0,1,44,6.64a2.84,2.84,0,0,1,1.64-.44,3.33,3.33,0,0,1,1.4.28,1.78,1.78,0,0,1,.85.86A1.88,1.88,0,0,1,48,7.91Zm-2.09,3.46a1.75,1.75,0,0,0,.58-.44,1.54,1.54,0,0,0,.29-.57,3.5,3.5,0,0,0,.12-.93l-.15,0-1.2.19a6.43,6.43,0,0,0-.72.16,1.72,1.72,0,0,0-.6.34.74.74,0,0,0-.22.54.78.78,0,0,0,.28.61,1.16,1.16,0,0,0,.8.24A1.94,1.94,0,0,0,45.94,11.37Z"/><path d="M50.73,7.29v2.94a2.83,2.83,0,0,0,0,.45.67.67,0,0,0,.1.3.72.72,0,0,0,.37.32,1.63,1.63,0,0,0,.58.1,4.6,4.6,0,0,0,.69-.06v1a5.48,5.48,0,0,1-.94.1,2.69,2.69,0,0,1-1.07-.2,1.35,1.35,0,0,1-.69-.62,1.75,1.75,0,0,1-.18-.53,6,6,0,0,1,0-.67V7.29H48.43V6.37h1.14V4.72h1.16V6.37h1.76v.92Z"/><path d="M54.59,5.4H53.44V4.28h1.15Zm0,6.91H53.44V6.37h1.15Z"/><path d="M58.61,12.31H57.44L55.29,6.37h1.16L58,10.87l1.57-4.5h1.16Z"/><path d="M65.81,7.91a5.22,5.22,0,0,1,0,.74v3.66h-1v-.86a2.34,2.34,0,0,1-.89.77,2.85,2.85,0,0,1-1.25.25,2.27,2.27,0,0,1-1.08-.24,1.65,1.65,0,0,1-.69-.64,1.72,1.72,0,0,1-.23-.9,1.75,1.75,0,0,1,1.4-1.76c.28-.08.6-.15,1-.22l1.49-.22.18,0a1.29,1.29,0,0,0-.34-.92,1.47,1.47,0,0,0-1-.28,1.58,1.58,0,0,0-.88.23,1.16,1.16,0,0,0-.53.7L60.9,7.87a2.21,2.21,0,0,1,.85-1.23,2.84,2.84,0,0,1,1.64-.44,3.33,3.33,0,0,1,1.4.28,1.78,1.78,0,0,1,.85.86A1.88,1.88,0,0,1,65.81,7.91Zm-2.09,3.46a1.75,1.75,0,0,0,.58-.44,1.54,1.54,0,0,0,.29-.57,3.5,3.5,0,0,0,.12-.93l-.15,0-1.2.19a6.43,6.43,0,0,0-.72.16,1.72,1.72,0,0,0-.6.34.73.73,0,0,0-.21.54.78.78,0,0,0,.27.61,1.18,1.18,0,0,0,.8.24A1.94,1.94,0,0,0,63.72,11.37Z"/><path d="M70,12.18a2.84,2.84,0,0,1-1.13-.85A2.7,2.7,0,0,1,68.3,10l1.2-.18a2,2,0,0,0,.42.82,1.94,1.94,0,0,0,.73.53,2.47,2.47,0,0,0,.95.18,2.56,2.56,0,0,0,.89-.15,1.63,1.63,0,0,0,.65-.44,1,1,0,0,0,.23-.67.85.85,0,0,0-.26-.66,1.73,1.73,0,0,0-.73-.38l-2-.6a3.19,3.19,0,0,1-1.25-.67,1.71,1.71,0,0,1-.49-1.32A2,2,0,0,1,69,5.28a2.17,2.17,0,0,1,1-.78,4,4,0,0,1,2.89,0,2.81,2.81,0,0,1,1.06.8,3,3,0,0,1,.59,1.25l-1.23.21A1.67,1.67,0,0,0,72.93,6a1.7,1.7,0,0,0-.68-.5,2.28,2.28,0,0,0-1.65,0,1.43,1.43,0,0,0-.57.4.93.93,0,0,0-.21.59.73.73,0,0,0,.34.66,3.08,3.08,0,0,0,.89.39l1.47.41a6.26,6.26,0,0,1,1,.35,2.09,2.09,0,0,1,.76.64,1.87,1.87,0,0,1,.33,1.15,2.12,2.12,0,0,1-.41,1.32,2.48,2.48,0,0,1-1.1.82,3.92,3.92,0,0,1-1.52.28A3.81,3.81,0,0,1,70,12.18Z"/><path d="M79.79,6.68a2.29,2.29,0,0,1,.7,1.1A4.41,4.41,0,0,1,80.67,9v3.3H79.51V9.39a3.05,3.05,0,0,0-.33-1.48A1.2,1.2,0,0,0,78,7.3a1.4,1.4,0,0,0-1.1.46,2.18,2.18,0,0,0-.41,1.46v3.09H75.33V6.37h1v.71a2.31,2.31,0,0,1,.83-.65,2.73,2.73,0,0,1,1.14-.22A2.13,2.13,0,0,1,79.79,6.68Z"/><path d="M83,12.31H81.81V6.37H83Zm.65-7.92-.56,1.1H81.88l.56-1.1Z"/><path d="M88.65,6.68a2.29,2.29,0,0,1,.7,1.1A4.41,4.41,0,0,1,89.53,9v3.3H88.37V9.39A3.05,3.05,0,0,0,88,7.91a1.2,1.2,0,0,0-1.17-.61,1.4,1.4,0,0,0-1.1.46,2.18,2.18,0,0,0-.41,1.46v3.09H84.19V4.39h1V7.08a2.4,2.4,0,0,1,.83-.65,2.73,2.73,0,0,1,1.14-.22A2.13,2.13,0,0,1,88.65,6.68Z"/><rect x="6.95" y="13.63" width="1.35" height="3.23"/><rect x="12.85" y="10.22" width="1.35" height="3.23" transform="translate(-3.49 17.63) rotate(-60)"/><rect x="11.91" y="4.35" width="3.23" height="1.35" transform="translate(-0.7 7.44) rotate(-30)"/><rect x="6.95" width="1.35" height="3.23"/><rect x="1.05" y="3.41" width="1.35" height="3.23" transform="translate(-3.49 4) rotate(-60)"/><rect x="0.11" y="11.16" width="3.23" height="1.35" transform="translate(-5.69 2.45) rotate(-30)"/><rect x="6.95" y="13.63" width="1.35" height="3.23"/></g></svg>
						</a>
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
					<?php // merlin_site_title(); ?>
					<?php // merlin_site_description(); ?>
					<div class="header-widgets">

						<?php // Display Header Widgets
						if(is_front_page()) { ?>
							<aside id="text-4" class="header-widget widget_text">			
								<div class="textwidget">
									<h1>Věda otevírá Česko
										<span class="heart"></span>
									</h1>
									<div>Prosazujeme ověřená řešení v boji s epidemií.<br>
									Jsme tým vědců, odborníků, ale bez vás to nezvládneme.</div>
								</div>
							</aside>
						<?php } else { ?>
							<h1 class="subpage-heading"><?php the_title(); ?></h1>
						<?php } ?>


						<?php
						// if ( is_active_sidebar( 'header' ) ) :

						// 		dynamic_sidebar( 'header' );

						// endif; ?>

				</div><!-- .header-widgets -->
				</div>

			</div><!-- .header-main -->



			<?php // Display Custom Header Image
			merlin_header_image(); ?>

		</header><!-- #masthead -->

		<div id="content" class="site-content container clearfix">
