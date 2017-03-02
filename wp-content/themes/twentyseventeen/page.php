<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

 <main class="content-wrapper">

		<section class="content" id="introduction">
			<?php the_field( 'introductie' ); ?>
		</section>

		<section class="flex-wrapper">

			<div class="content-block">
				<?php the_field( 'evenement_1_foto' ); ?>
				<?php the_field( 'evenement_1' ); ?>
			</div>

			<div class="content-block">
				<?php the_field( 'evenement_2_foto' ); ?>
				<?php the_field( 'evenement_2' ); ?>			
			</div>

			<div class="content-block">
				<?php the_field( 'evenement_3_foto' ); ?>
				<?php the_field( 'evenement_3' ); ?>			
			</div>

		</section>

		<section class="photo-slider">
		</section>

</main>

<?php get_footer();
