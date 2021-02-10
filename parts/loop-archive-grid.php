<?php
/**
 * The template part for displaying a grid of posts
 *
 * @package BoneHealth
 */

?>

<?php
$wp_query->current_post
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">
	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<div class="featured-image" itemprop="text">
			<?php the_post_thumbnail( 'medium', array( 'class' => 'featured-image-medium' ) ); ?>
		</div> <!-- end article section -->

		<div class="article-header">
			<h3 class="title">
				<?php the_title(); ?>
			</h3>
			<div style="color: #000">
				<?php get_template_part( 'parts/content', 'byline' ); ?>
			</div>
		</div> <!-- end article header -->
	</a>
</article> <!-- end article -->
<!--End Grid -->
