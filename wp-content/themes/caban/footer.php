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
 * @version 1.2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-desktop-4">
					<h3><?php the_field('footer_big_text', 'option') ?></h3>
					<h5><?php the_field('footer_caption', 'option') ?></h5>
					<h5><?php the_field('footer_contact_email', 'option') ?></h5>
				</div>
				<div class="col-desktop-5 offset-desktop-3">
					<?php gravity_form(2) ?>
				</div>
			</div>
			<div class="copyright row">
				<h6><?php the_field('footer_copyright_text', 'option') ?></h6>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/style.css" />
<script type="text/javascript" src="//fast.fonts.net/jsapi/8b9a970d-446d-49a7-acf7-d0afa8d64c92.js"></script>

</body>
</html>
