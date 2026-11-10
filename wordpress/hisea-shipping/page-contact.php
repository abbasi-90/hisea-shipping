<?php
/**
 * Template Name: HiSea Contact
 * Description: Contact page with the quote form. The form is built into
 * the theme and sends to info@hiseashipping.com (see functions.php).
 * If you prefer Contact Form 7, replace the form below with your
 * Contact Form 7 shortcode.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
$hisea = hisea_contact_details();
$quote = isset( $_GET['quote'] ) ? sanitize_text_field( wp_unslash( $_GET['quote'] ) ) : '';
?>

<div class="page-head">
	<div class="container">
		<p class="eyebrow">Contact</p>
		<h1>Request a quote</h1>
		<p>Make the world go round and revolution business.</p>
	</div>
</div>

<section class="section">
	<div class="container contact-grid">
		<div>
			<?php if ( 'sent' === $quote ) : ?>
				<div class="form-notice"><strong>Thank you.</strong> Your quote request has been sent. We will get back to you soon.</div>
			<?php elseif ( 'error' === $quote ) : ?>
				<div class="form-notice error"><strong>Please check the form.</strong> Fill in your name, a valid email address and your message, then try again.</div>
			<?php endif; ?>

			<form class="quote-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<?php wp_nonce_field( 'hisea_quote', 'hisea_quote_nonce' ); ?>
				<input type="hidden" name="action" value="hisea_quote">
				<p>
					<label for="hisea-name">Name *</label>
					<input type="text" id="hisea-name" name="hisea_name" required>
				</p>
				<p>
					<label for="hisea-email">Email *</label>
					<input type="email" id="hisea-email" name="hisea_email" required>
				</p>
				<p>
					<label for="hisea-message">Message *</label>
					<textarea id="hisea-message" name="hisea_message" required></textarea>
				</p>
				<p><button type="submit" class="btn">Get A FREE Quote</button></p>
			</form>
			<p style="color: #5a6b78;">Quote requests are sent to <?php echo esc_html( $hisea['email'] ); ?>.</p>
		</div>

		<div>
			<div class="contact-block">
				<h3>Head Office</h3>
				<p><?php echo esc_html( $hisea['address'] ); ?></p>
			</div>
			<div class="contact-block">
				<h3>Call Us Now</h3>
				<p>
					<a href="tel:<?php echo esc_attr( $hisea['phone_link'] ); ?>"><?php echo esc_html( $hisea['phone_display'] ); ?></a><br>
					<?php echo esc_html( $hisea['phone_alt'] ); ?>
				</p>
			</div>
			<div class="contact-block">
				<h3>Email</h3>
				<p><a href="mailto:<?php echo esc_attr( $hisea['email'] ); ?>"><?php echo esc_html( $hisea['email'] ); ?></a></p>
			</div>
			<div class="contact-block">
				<h3>Warehouse</h3>
				<p><?php echo esc_html( $hisea['warehouse'] ); ?></p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
