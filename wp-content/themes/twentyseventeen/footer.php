<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer class="footer-wrapper">

			<section class="footer">
				<div id="footer-logos">
					<h4>De Human Library wordt mede mogelijk gemaakt door</h4>
					<p>
						<img src="<?php echo get_bloginfo('siteurl'); ?>/wp-content/themes/twentyseventeen/images/europ-logo-zwart.png" border=0>
						<img src="<?php echo get_bloginfo('siteurl'); ?>/wp-content/themes/twentyseventeen/images/hl-logo-zwart.png" border=0>
						<img src="<?php echo get_bloginfo('siteurl'); ?>/wp-content/themes/twentyseventeen/images/eu-logo-zwart.png" border=0>
					</p>
				</div>
				<div>
					<h4>Contact</h4>
					<p>
						Heb je een vraag over de Human Library, mail Lot Feijen op lot@en-maes.nl.
					</p>
				</div>

				<div>
					<h4>Over de Human Library</h4>
					<p>
					De Human Library wordt georganiseerd door de plaatselijke EDIC. Deze Europe Direct Informatie Centra verstrekken algemene informatie over de Europese Unie en organiseren evenementen die het Europees bewustzijn verhogen en actief Europees burgerschap stimuleren. 
					</p>
				</div>
			</section>

		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
