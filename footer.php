<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>

	</div><!-- .site-content -->
</main><!-- #main -->

<footer id="footer" class="page-footer">
	<div class="container">
		<div class="row white-text">
			<div class="col s12">
				<?php strip_tags( wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'items_wrap' => '%3$s', 'echo' => false ) ), '<a>' ); ?>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			&copy; <?php echo esc_html( date( 'Y' ) ); ?> Patterns In the Cloud
			<!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
