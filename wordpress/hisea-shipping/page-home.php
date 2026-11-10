<?php
/**
 * Template Name: HiSea Home
 * Description: Home page. Hero, services at a glance, Why to Choose Us, testimonials.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
$hisea = hisea_contact_details();
?>

<section class="hero">
	<div class="container">
		<p class="eyebrow">HiSea Shipping Pakistan</p>
		<h1>International Shipping and Freight Forwarding</h1>
		<p class="lead">Hi Sea Shipping offers a complete range of integrated global logistics solutions: Import and Export services via air, land and sea freight, door to door cross border delivery, warehousing and distribution, and packing and relocation.</p>
		<p>
			<a class="btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get A FREE Quote</a>
			<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Our Services</a>
		</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<p class="eyebrow">Our Services</p>
		<h2>Booking our cargo to the future</h2>
		<div class="grid grid-4">
			<div class="card service-card"><p class="icon">Sea Freight</p><h3>Sea Freight</h3><p>One stop logistical solution for all types of cargo movement by sea.</p></div>
			<div class="card service-card"><p class="icon">Air Freight</p><h3>Air Freight</h3><p>Full range of services for all kinds of air shipments.</p></div>
			<div class="card service-card"><p class="icon">Land Freight</p><h3>Land Freight</h3><p>Overland transportation covering all destinations, with a well-established network of operations.</p></div>
			<div class="card service-card"><p class="icon">Warehousing</p><h3>Warehousing</h3><p>Excellent Warehousing and Distribution Services, with a dedicated spacious warehouse in Karachi.</p></div>
			<div class="card service-card"><p class="icon">Cargo Management</p><h3>Cargo Management</h3><p>Project Cargo Services, including planning and scheduling the movement of project and over-dimensional cargo.</p></div>
			<div class="card service-card"><p class="icon">Movers and Packers</p><h3>Movers and Packers</h3><p>Packing, local movement, wooden ply boxes, wooden crates, wooden pallets and household shipments.</p></div>
			<div class="card service-card"><p class="icon">Customs Clearance</p><h3>Customs Clearance</h3><p>Customs Clearance Services for Export and Import consignments.</p></div>
			<div class="card service-card"><p class="icon">Door to Door</p><h3>Door to Door</h3><p>Inland point delivery up to the consignee door, with close co-ordination with overseas agent partners.</p></div>
		</div>
		<p style="margin-top: 24px;"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">See all services &rarr;</a></p>
	</div>
</section>

<section class="section section-soft">
	<div class="container">
		<p class="eyebrow">Why to Choose Us</p>
		<h2>Thinking the way forward</h2>
		<p>Our purpose is to establish psychological proximity of our customer with maximum satisfaction. We strive to build relationship based on mutual trust, respect and transparency. Our focus would be to spread the vicinity of our well trusted brand values globally by enhancing our goodwill and reputation.</p>
		<ul class="why-list">
			<li>Goods Packaging</li>
			<li>Destination Possibilities</li>
			<li>Goods Tracking System</li>
			<li>High Protection</li>
		</ul>
	</div>
</section>

<section class="section">
	<div class="container">
		<p class="eyebrow">What Our Clients Say</p>
		<h2>All what customers said about us</h2>
		<div class="grid">
			<div class="testimonial">
				<blockquote>&ldquo;Best shipping service anyone can provide out of Pakistan for furniture and other products.&rdquo;</blockquote>
				<cite>Babar Nawaz</cite>
			</div>
			<div class="testimonial">
				<blockquote>&ldquo;Superb, Efficient and Excellent Service Providers..&rdquo;</blockquote>
				<cite>Deep Sea Love</cite>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
