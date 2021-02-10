<?php
/**
 * The template part for displaying the subscribe banner
 *
 * @package BoneHealth
 */

$show_subscribe_banner = get_field( 'show_subscribe_banner', 'option' );
if ( $show_subscribe_banner ) :
	?>
	<section class="subscribe">
		<div class="main-container">
			<div class="grid-x">
				<div class="cell large-12 text-center">
					<h2 class="subscribe__title title first-bold">Subscribe to News</h2>
				</div>

				<?php echo apply_shortcodes( '[contact-form-7 id="181" title="Subscribe to News"]' ); ?>

				<div class="cell large-12 text-center disclaimer">
					<h6>This site is protected by reCAPTCHA and the Google
						<a href="https://policies.google.com/privacy">Privacy Policy</a> and
						<a href="https://policies.google.com/terms">Terms of Service</a> apply.
					</h6>
				</div>
			</div>

		</div>
	</section>
	<?php
endif; ?>
