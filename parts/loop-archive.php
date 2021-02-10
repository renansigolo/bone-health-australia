<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 *
 * @package BoneHealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-medium' ); ?> role="article">
	<header class="article-header">
		<h2>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="text">
		<div class="search-results">
			<div style="cursor: pointer;" onclick="redirectTo('<?php the_permalink(); ?>')">
				<?php the_excerpt(); ?>

				<?php
				if ( ! $excerpt ) {
					the_field( 'excerpt' );
				}
				?>
			</div>
		</div>
	</section> <!-- end article section -->
</article> <!-- end article -->
