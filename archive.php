<?php
/**
 * Archive Template
 *
 * @package TCW
 */

get_header();
?>

<div class="container archive-content">

	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header>

	<?php if ( have_posts() ) : ?>

		<div class="posts-grid">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-card' ); ?>>

					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" class="post-thumbnail">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
					<?php endif; ?>

					<div class="post-content">

						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="entry-meta">
							<?php echo esc_html( get_the_date() ); ?>
						</div>

						<div class="entry-excerpt">
							<?php the_excerpt(); ?>
						</div>

						<a class="read-more" href="<?php the_permalink(); ?>">
							<?php esc_html_e( 'Read More', 'tcw' ); ?>
						</a>

					</div>

				</article>

			<?php endwhile; ?>

		</div>

		<?php
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'tcw' ),
				'next_text' => __( 'Next', 'tcw' ),
			)
		);
		?>

	<?php else : ?>

		<p><?php esc_html_e( 'No posts found.', 'tcw' ); ?></p>

	<?php endif; ?>

</div>

<?php
get_footer();
