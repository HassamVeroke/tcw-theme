<?php
/**
 * Main Index Template
 *
 * @package TCW
 */

get_header();
?>

<div class="container content-area">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title(
							sprintf(
								'<h2 class="entry-title"><a href="%s" rel="bookmark">',
								esc_url( get_permalink() )
							),
							'</a></h2>'
						);
					endif;
					?>
				</header>

				<div class="entry-content">
					<?php
					if ( is_singular() ) {
						the_content();
					} else {
						the_excerpt();
					}
					?>
				</div>

			</article>

		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>

	<?php else : ?>

		<p><?php esc_html_e( 'No posts found.', 'tcw' ); ?></p>

	<?php endif; ?>

</div>

<?php
get_footer();
