<?php
/**
 * The template for displaying the front-page
 */

get_header(); ?>

	<div class="content">

		<?php
		if ( have_rows( 'flexible_blocks' ) ) :
			while ( have_rows( 'flexible_blocks' ) ) :
				the_row();
				get_template_part( 'parts/content', 'hot-topic' );
				get_template_part( 'parts/content', 'cta-box' );
				get_template_part( 'parts/content', 'slider' );
			endwhile;
		endif;
		?>

		<?php
		get_template_part( 'parts/content', 'news' );
		?>

	</div> <!-- end #content -->

<?php
get_footer(); ?>
