<?php
/**
 * Single Post Template
 *
 * @package TCW
 */

get_header();
?>

<div class="container single-content">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<span class="posted-on">
						<?php echo esc_html( get_the_date() ); ?>
					</span>

					<span class="posted-by">
						<?php the_author(); ?>
					</span>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tcw' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>

			<footer class="entry-footer">
				<?php the_category( ', ' ); ?>

				<?php the_tags( '<div class="post-tags">', ', ', '</div>' ); ?>
			</footer>

		</article>

		<?php
		the_post_navigation(
			array(
				'prev_text' => '&larr; %title',
				'next_text' => '%title &rarr;',
			)
		);

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

	endwhile;
	?>

</div>

<?php
get_footer();
