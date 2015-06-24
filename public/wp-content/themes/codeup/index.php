<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main-image-banner" class="main-image-banner">
			<div class="main-image-text group">
				<h1 class="main-image-text-element">Title of My Site</h1>
				<p class="main-image-text-element">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. 
				</p>
			</div>
			<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paul-octavious-1920x1200.jpg"/> -->
		</div>
		<div class="color-line grey"></div>
		<div class="texture-line"></div>
		<main id="main" class="site-main group" role="main">

		<div class="main-box">
			<div class="circle"></div>
			<h2>Box Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt. </p>
		</div>
		<div class="main-box">
			<div class="circle"></div>
			<h2>Box Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt. </p>
		</div>
		<div class="main-box">
			<div class="circle"></div>
			<h2>Box Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt. </p>
		</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
