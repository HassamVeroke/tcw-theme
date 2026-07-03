<?php
/**
 * 404 Template
 *
 * @package TCW
 */

get_header();
?>

<section class="error-404 not-found">
	<div class="container">

		<div class="error-content">

			<span class="error-code">404</span>

			<h1 class="page-title">
				<?php esc_html_e( 'Page Not Found', 'tcw' ); ?>
			</h1>

			<p class="page-description">
				<?php esc_html_e( 'Sorry, the page you are looking for does not exist or has been moved.', 'tcw' ); ?>
			</p>

			<div class="error-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Back to Home', 'tcw' ); ?>
				</a>
			</div>

			<div class="error-search">
				<?php get_search_form(); ?>
			</div>

		</div>

	</div>
</section>

<?php
get_footer();
