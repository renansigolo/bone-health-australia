<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package BoneHealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="https://schema.org/WebPage">

	<?php get_template_part( 'parts/content', 'header-banner' ); ?>

	<div class="entry-content" itemprop="text">
		<?php
		if ( have_rows( 'flexible_blocks' ) ) :
			while ( have_rows( 'flexible_blocks' ) ) :
				the_row();
				get_template_part( 'parts/content', 'hot-topic' );
				get_template_part( 'parts/content', 'cta-box' );
				get_template_part( 'parts/content', 'slider' );
				get_template_part( 'parts/content', 'section-content' );
				get_template_part( 'parts/content', 'team' );
				get_template_part( 'parts/content', 'video' );
				get_template_part( 'parts/content', 'accordion' );
				get_template_part( 'parts/content', 'map' );
				get_template_part( 'parts/content', 'section-with-icons' );
				get_template_part( 'parts/content', 'social-image' );
				get_template_part( 'parts/content', 'find-service' );
				get_template_part( 'parts/content', 'tabs' );
			endwhile;
		endif;
		?>

	</div> <!-- end article section -->

</article> <!-- end article -->
