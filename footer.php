<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
</main>
<footer class="site-footer">
	<div class="container">
		<div class="site-info">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'tcw' ); ?></p>
		</div>
		<nav class="footer-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ) ); ?>
		</nav>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
