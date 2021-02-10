<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

	<div class="content">
		<?php
		/** Header Block */
		$bg_header = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-transparent-neg.svg';
		?>

		<header class="page-header bg-blue"
				style="background: url(<?php echo $bg_header; ?>) #1b386d no-repeat 50% center; background-size: 400px">
			<div class="page-container">
				<div class="page-wrapper">
					<nav aria-label="You are here:" role="navigation">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php
							if ( function_exists( 'bcn_display' ) ) {
								bcn_display();
							}
							?>
						</div>
					</nav>
					<h1 class="page-header__title title <?php echo $main_title['title_decoration']; ?>">
						<?php _e( '<strong>Search Results for:</strong>', 'bone_health' ); ?>
						<?php echo esc_attr( get_search_query() ); ?>
					</h1>
				</div>
			</div>
		</header>

		<section class="page-container mb-large">
			<div class="page-wrapper">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>

					<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive' ); ?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</div>
		</section>
	</div>
<?php get_footer(); ?>
