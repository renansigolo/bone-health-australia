<?php
/**
 * The Navigation Bar for Mobile
 *
 * @package BoneHealth
 * */

$logo            = get_field( 'header_logo', 'option' );
$helpline_number = get_field( 'helpline_number', 'option' );
$hero_image      = get_field( 'hero_image', 'option' );
$is_front_page   = is_front_page() ? true : false;
?>

	<div class="grid-container full navbar-mobile">
		<div class="grid-x flex-container align-middle">
			<div class="cell small-7">
				<a href="<?php echo home_url(); ?>" class="navbar-mobile__phone">
					<?php echo esc_html( $helpline_number ); ?>
				</a>
			</div>
			<div class="cell small-5">
				<button type="button"
						class="button warning large expanded flex-container align-spaced navbar-mobile__button"
						data-toggle="offCanvasRight">
					<i class="fas fa-bars"></i>
					<a data-toggle="off-canvas">
						<?php _e( 'Menu', 'bone_health' ); ?>
					</a>
				</button>
			</div>
		</div>
	</div>

	<section class="navbar-mobile-logo">
		<a href="<?php echo get_home_url(); ?>">
			<img src="<?php echo esc_url( $logo['url'] ); ?>" width="330" alt="<?php echo esc_attr( $logo['alt'] ); ?>">
		</a>
	</section>

	<!-- Background Image -->
<?php if ( $is_front_page ) : ?>
	<div class="background-banner" style="background-image: url(<?php echo esc_url( $hero_image['url'] ); ?>)"></div>
<?php endif ?>
