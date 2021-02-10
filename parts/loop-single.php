<?php
/**
 * Template part for displaying a single post
 *
 * @package BoneHealth
 */

$permalink    = get_permalink();
$twitter_url  = 'https://twitter.com/share?ref_src=twsrc%5Etfw?text=&url=Bone%20Health%20Australia%20website%20' . $permalink;
$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $permalink . '&amp;src=sdkpreparse';
$mail_url     = 'mailto:email@example.com?subject=Healthy%20Bones%20Australia%3A%20' . esc_html( get_the_title() ) . "&body=Hey%20there%2C%0D%0A%0D%0ACheck%20out%20this%20page%20I've%20found%20on%20the%20Bone%20Health%20Australia%20website%3A%20" . $permalink;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

	<section class="entry-content mb-large" itemprop="text">
		<div class="mb-medium">
			<div class="page-wrapper">
				
				<?php the_post_thumbnail( 'full', array( 'class' => 'featured-image-full' ) ); ?>

				<div class="social-icons">
					<div class="flex-container align-right">
						<a href="<?php echo $twitter_url; ?>"
						class="text-cyan" data-show-count="false" rel="noopener noreferrer">
							<i class="fab fa-2x fa-twitter-square"></i>
						</a>
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						<a href="<?php echo $facebook_url; ?>"
						class="text-cyan mx-small" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-2x fa-facebook-square"></i>
						</a>
						<a href="<?php echo $mail_url; ?>"
						class="text-cyan" target="_blank" rel="noopener noreferrer">
							<i class="fas fa-2x fa-paper-plane"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bone_health' ),
				'after'  => '</div>',
			)
		);
		?>
	</footer> <!-- end article footer -->

</article> <!-- end article -->
