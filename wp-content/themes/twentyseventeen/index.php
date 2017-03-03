<?php /**Template Name: Home Page

* @package WordPress
* @subpackage Twenty_Seventeen

*/

get_header();
global $post;
$post = get_page(13);
?>


	<nav class="menu-wrapper">
		<div class="menu">
			<img src="<?php echo get_bloginfo('siteurl'); ?>/wp-content/themes/twentyseventeen/images/logo.svg" border=0>
		</div>
	</nav>
	 
	<header class="header" style="background-image:url('<?php the_field( 'header_foto' ); ?>')">
		<div class="header-title">
			<a
				class="button" id="button-filmpje"
				href="https://www.youtube.com/watch?v=AG0YhgIWWn4&feature=youtu.be" target="_blank"
				>Bekijk het filmpje</a>
			<h1><?php the_field( 'header_tekst' ); ?></h1>				
		</div>
	</header>

	<main class="content-wrapper">

		<section class="introduction">
			<?php the_field( 'introductie' ); ?>
		</section>

		<section class="events-wrapper">

		<h1 class="heading">Eerstvolgende edities</h1>

		<div class="events">
			<div class="content-block">
				<div class="content-block-image" style="background-image:url('<?php the_field( 'evenement_1_foto' ); ?>')"></div>
				<div class="content-block-text">
					<h4>Datum</h4>
					<p><?php the_field( 'evenement_1_datum' ); ?></p>
					<h4>Tijd</h4>
					<p><?php the_field( 'evenement_1_tijd' ); ?></p>
					<h4>Locatie</h4>
					<p><?php the_field( 'evenement_1_locatie' ); ?></p>

					<?php if( get_field('evenement_1_geweest') ): ?>
						<p id="evenement_geweest">Dit evenement heeft reeds plaatsgevonden</p>
					<?php endif; ?>
					<a
						class="button"
						href="<?php the_field( 'evenement_1_facebook_link' ); ?>" target="_blank"
					>Meld je aan op Facebook</a>
				</div>
			</div>

			<div class="content-block">
				<div class="content-block-image" style="background-image:url('<?php the_field( 'evenement_2_foto' ); ?>')"></div>
				<div class="content-block-text">
					<h4>Datum</h4>
					<p><?php the_field( 'evenement_2_datum' ); ?></p>
					<h4>Tijd</h4>
					<p><?php the_field( 'evenement_2_tijd' ); ?></p>
					<h4>Locatie</h4>
					<p><?php the_field( 'evenement_2_locatie' ); ?></p>

					<?php if( get_field('evenement_2_geweest') ): ?>
						<p id="evenement_geweest">Dit evenement heeft reeds plaatsgevonden</p>
					<?php endif; ?>
					<a
						class="button"
						href="<?php the_field( 'evenement_2_facebook_link' ); ?>" target="_blank"
					>Meld je aan op Facebook</a>
				</div>
			</div>

			<div class="content-block">
				<div class="content-block-image" style="background-image:url('<?php the_field( 'evenement_3_foto' ); ?>')"></div>
				<div class="content-block-text">
					<h4>Datum</h4>
					<p><?php the_field( 'evenement_3_datum' ); ?></p>
					<h4>Tijd</h4>
					<p><?php the_field( 'evenement_3_tijd' ); ?></p>
					<h4>Locatie</h4>
					<p><?php the_field( 'evenement_3_locatie' ); ?></p>

					<?php if( get_field('evenement_3_geweest') ): ?>
						<p id="evenement_geweest">Dit evenement heeft reeds plaatsgevonden</p>
					<?php endif; ?>
					<a
						class="button"
						href="<?php the_field( 'evenement_3_facebook_link' ); ?>" target="_blank"
					>Meld je aan op Facebook</a>
				</div>
			</div>
		</div>
	</section>

	<section class="pictures">
		<h1 class="heading">Sfeerimpressie</h1>
		<?php the_field( 'carousel_code' ); ?>
	</section>

	<section class="photo-slider">
	</section>

</main>

<?php get_footer();
