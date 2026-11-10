<?php
/**
 * Header.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$hisea = hisea_contact_details();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
	<div class="container">
		<span>Call Us Now <a href="tel:<?php echo esc_attr( $hisea['phone_link'] ); ?>"><?php echo esc_html( $hisea['phone_display'] ); ?></a></span>
		<span><a href="mailto:<?php echo esc_attr( $hisea['email'] ); ?>"><?php echo esc_html( $hisea['email'] ); ?></a></span>
		<span class="spacer"></span>
		<span>Head Office: Lahore, Pakistan</span>
	</div>
</div>

<header class="site-header">
	<div class="container">
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">HiSea <span>Shipping</span><span class="tagline">Shipping Pakistan</span></a>
		<?php endif; ?>

		<nav class="main-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'hisea-shipping' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'fallback_cb'    => 'wp_page_menu',
				'container'      => false,
			) );
			?>
		</nav>

		<a class="btn header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get A FREE Quote</a>
	</div>
</header>

<main id="main">
