<?php
/**
 * Main template file. Used for the blog / posts index if one is ever added.
 * The four site pages use their own page templates.
 *
 * @package HiSea_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<div class="page-head">
	<div class="container">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p>No posts found.</p>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
