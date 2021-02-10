<?php
/**
 * Template part for displaying title and description content in page.php
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'social_image' ) :
	$image = get_sub_field( 'image' );
	?>

	<section id="social-image">
		<div class="page-container mb-medium">
			<div class="page-wrapper">
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" height="480">
			</div>
		</div>
	</section>

	<?php
endif ?>
