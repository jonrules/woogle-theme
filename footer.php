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
		<div class="row">
			<div class="col l6 s12">
				<!-- <h5 class="white-text">Footer Content</h5> 
				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>  -->
			</div>
			<div class="col l4 offset-l2 s12">
				<!--  <h5 class="white-text">Links</h5>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?> -->
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
