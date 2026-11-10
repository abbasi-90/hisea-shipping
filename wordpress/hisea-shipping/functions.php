<?php
/**
 * HiSea Shipping theme functions.
 *
 * Clean rebuild from scratch. No external requests: fonts are self-hosted
 * in assets/fonts/, no Google Fonts, no remote scripts.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup: title tag, logo, menus, thumbnails, Elementor support.
 */
function hisea_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 56,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hisea-shipping' ),
		'footer'  => __( 'Footer Menu', 'hisea-shipping' ),
	) );

	// Elementor Free compatibility: tell Elementor this theme supports it,
	// and register the standard header/footer locations when Elementor is active.
	add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'hisea_setup' );

/**
 * Elementor theme locations (header / footer), only when Elementor is active.
 */
function hisea_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_location( 'header' );
	$elementor_theme_manager->register_location( 'footer' );
}
add_action( 'elementor/theme/register_locations', 'hisea_elementor_locations' );

/**
 * Enqueue the theme stylesheet only. Fonts are declared with @font-face
 * inside style.css and load from assets/fonts/ in this theme.
 */
function hisea_scripts() {
	wp_enqueue_style( 'hisea-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'hisea_scripts' );

/**
 * Quote form: name, email, message. Sends to info@hiseashipping.com
 * using wp_mail(). This is the built-in form, so no form plugin is required.
 * If the site owner prefers Contact Form 7, the form in page-contact.php
 * can be replaced with the Contact Form 7 shortcode instead.
 */
function hisea_quote_form_handler() {
	if ( ! isset( $_POST['hisea_quote_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['hisea_quote_nonce'] ) ), 'hisea_quote' ) ) {
		wp_safe_redirect( add_query_arg( 'quote', 'error', wp_get_referer() ? wp_get_referer() : home_url( '/contact/' ) ) );
		exit;
	}

	$name    = isset( $_POST['hisea_name'] ) ? sanitize_text_field( wp_unslash( $_POST['hisea_name'] ) ) : '';
	$email   = isset( $_POST['hisea_email'] ) ? sanitize_email( wp_unslash( $_POST['hisea_email'] ) ) : '';
	$message = isset( $_POST['hisea_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['hisea_message'] ) ) : '';

	if ( '' === $name || '' === $email || '' === $message || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'quote', 'error', wp_get_referer() ? wp_get_referer() : home_url( '/contact/' ) ) );
		exit;
	}

	$to      = 'info@hiseashipping.com';
	$subject = 'New quote request from ' . $name . ' - HiSea Shipping';
	$body    = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}\n";
	$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );

	wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'quote', 'sent', wp_get_referer() ? wp_get_referer() : home_url( '/contact/' ) ) );
	exit;
}
add_action( 'admin_post_nopriv_hisea_quote', 'hisea_quote_form_handler' );
add_action( 'admin_post_hisea_quote', 'hisea_quote_form_handler' );

/**
 * Shared contact details, used by header, footer and the Contact page,
 * so the address and phone number only exist in one place.
 */
function hisea_contact_details() {
	return array(
		'phone_display' => '+92 321 449 9420',
		'phone_link'    => '+923214499420',
		'phone_alt'     => '92-42-3578 2192-3',
		'email'         => 'info@hiseashipping.com',
		'address'       => 'M2-14 Eden Tower, Main Boulevard Gulberg III, Lahore, Pakistan',
		'warehouse'     => 'Dedicated warehouse in Karachi, Pakistan',
	);
}
