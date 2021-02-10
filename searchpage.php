<?php
/**
 * The template for displaying the Search pages
 * Template Name: Search Page
 */

get_header(); ?>

<div class="content" id="search-page">
	<?php get_template_part( 'parts/content', 'header-banner' ); ?>
	<div class="inner-content grid-x grid-padding-x mb-large align-center">
		<main class="main small-12 medium-10 cell" role="main">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>

					<?php get_search_form(); ?>

					<?php
				endwhile;
			endif;
			?>
		</main>
	</div>
</div> <!-- end #content -->

<?php
get_footer(); ?>
