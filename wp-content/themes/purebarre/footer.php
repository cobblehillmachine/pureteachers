<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

			<!-- </div> -->
		</div>
		<div id="footer">
			<div class="mid-cont">
				<div id="footer-nav"><?php wp_nav_menu( array( 'menu' => 'Footer Menu' ) ); ?></div>
				<div id="social-cont">
					<a id="facebook" href="https://www.facebook.com/PureBarre" class="social-icon" target="_blank"></a>
					<a id="twitter" href="https://twitter.com/Pure_Barre" class="social-icon" target="_blank"></a>
					<a id="instagram" href="http://instagram.com/pure_barre" class="social-icon" target="_blank"></a>
				</div>
				<div id="copyright">&copy; 2013 Pure Barre, All Rights Reserved</div>
			</div>
		</div>
<?php wp_footer(); ?>

</body>
</html>