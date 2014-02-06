<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php if ( is_active_sidebar( 'sidebar-footer-menu' ) ) : ?>

<?php endif; ?>


		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php
if ( is_front_page() ) {
     get_sidebar( 'main' ); 
}
?>
	<div id="footer_bottom">
			<div class="site-info"><div class="scroll-to-top"><a href="#top">&uArr;&nbsp;nach oben</a></div>
				<?php dynamic_sidebar( 'sidebar-footer-menu' ) ?>
			<!-- .site-info -->
	</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>