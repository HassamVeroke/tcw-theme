<?php
/**
 * Front Page Template
 *
 * @package TCW
 */

get_header();
?>

<div class="tcw-homepage">
	<?php get_template_part( 'template-parts/hero' ); ?>

	<section class="homepage-content container">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>
	</section>
</div>

<?php
get_footer();
