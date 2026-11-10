<?php
/**
 * Default page template. Shows the page content from the editor.
 * The four site pages use their own templates (page-home, page-about,
 * page-services, page-contact) so they render correctly even if the
 * editor content is empty.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="page-head">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php
get_footer();
