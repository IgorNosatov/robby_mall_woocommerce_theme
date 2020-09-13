<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RobbyMall
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php robby_mall_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->


</article><!-- #post-<?php the_ID(); ?> -->
