<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
                    <p>This website is under the patronage of the Immaculate Heart of Mary</p>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'kqsa', '<a href="" rel="designer">Kristenn</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
