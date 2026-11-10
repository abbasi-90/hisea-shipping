<?php
/**
 * Footer.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$hisea = hisea_contact_details();
?>
</main>

<section class="cta-band">
	<div class="container">
		<div class="cta-text">
			<h2>Request a quote</h2>
			<p>Make the world go round and revolution business. Tell us what you need to move and where it needs to go.</p>
		</div>
		<a class="btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get A FREE Quote</a>
	</div>
</section>

<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div>
				<h3>About Us</h3>
				<p>Hi Sea Shipping is an international Shipping and Freight Forwarding company that offers a complete range shipping services like sea freight, air freight and land freight, Packing, Relocation, Warehousing and Custom brokerage, by providing the highest levels of customer satisfaction to our customers.</p>
			</div>
			<div>
				<h3>Useful Links</h3>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'fallback_cb'    => 'wp_page_menu',
					'container'      => false,
				) );
				?>
			</div>
			<div>
				<h3>Head Office</h3>
				<p><?php echo esc_html( $hisea['address'] ); ?></p>
				<p>
					<a href="mailto:<?php echo esc_attr( $hisea['email'] ); ?>"><?php echo esc_html( $hisea['email'] ); ?></a><br>
					<a href="tel:<?php echo esc_attr( $hisea['phone_link'] ); ?>"><?php echo esc_html( $hisea['phone_display'] ); ?></a><br>
					<?php echo esc_html( $hisea['phone_alt'] ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> HiSea Shipping. All rights reserved.</span>
			<span>Shipping Pakistan</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
