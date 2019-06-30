<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inisiasi_FTI_UAJY_2019
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer-title has-text-centered">
			<div class="footer-c-logo">
				<?php
				the_custom_logo(); ?>
			</div>
			<!--<p class="footer-title--text">
				Take a Chance, Make a Change
			</p>-->
		</div>
	</div>
	<div class="columns">
		<div class="column">
			<div class="site-info-footer">
				<span class="upper-section">
					Made with
					<span style="color: #c51104; font-size: 1.5em; vertical-align:middle;">❤</span>
					by <strong style="color: #b3b3b3">Sie. Multimedia dan Dokumentasi</strong>
				</span>
				<br>
				<span class="hak-cipta">Hak cipta © 2019 oleh Panitia Inisiasi FTI UAJY 2019</span>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>