<?php
/**
 * Template Name: Grid
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<?php
$post_id     = get_the_ID();
$category_id = '';

// If the page is Media
if ( $post_id === 557 ) {
	$category_id = '6';
} else {
	// If the page is News
	$category_id = '5';
}

?>

	<div class="content">

		<?php
		get_template_part( 'parts/content', 'header-banner' );
		?>

		<section class="page-container">
			<div class="page-wrapper align-center mb-large">

				<div class="grid-3">
					<?php
					global $wp_query;

					$args = array(
						'category'       => $category_id, // must use category id for this field
						'posts_per_page' => - 1,
					); // get all posts

					$posts = get_posts( $args );
					foreach ( $posts as $post ) :
						get_template_part( 'parts/loop', 'archive-grid' );
					endforeach;

					?>
				</div>

			</div> <!-- end #inner-content -->
		</section>

	</div> <!-- end #content -->

<?php
get_footer(); ?>
