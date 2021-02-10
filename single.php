<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

	<div class="content">

		<?php
		get_template_part( 'parts/content', 'header-banner' );
		?>

		<div class="inner-content grid-x grid-padding-x align-center">

			<main class="main small-12 medium-10 cell" role="main">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>
						<?php
						get_template_part( 'parts/loop', 'single' );
						?>
						<?php
				endwhile;
				else :
					?>
					<?php
					get_template_part( 'parts/content', 'missing' );
					?>
					<?php
				endif;
				?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->
		<?php
		get_template_part( 'parts/content', 'slider-post' );
		?>

	</div> <!-- end #content -->

<?php
get_footer(); ?>
