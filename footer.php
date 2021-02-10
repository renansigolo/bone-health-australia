<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<?php
$footer_logo                = get_field( 'footer_logo', 'option' );
$footer_copyright           = get_field( 'footer_copyright', 'option' );
$footer_disclaimer          = get_field( 'footer_disclaimer', 'option' );
$footer_partner_logo        = get_field( 'footer_partner_logo', 'option' );
$footer_privacy_policy_link = get_field( 'footer_privacy_policy_link', 'option' );
$footer_disclaimer_link     = get_field( 'footer_disclaimer_link', 'option' );

$footer_button = get_field( 'footer_button', 'option' );
if ( $footer_button ) {
	$btn_url    = $footer_button['url'];
	$btn_title  = $footer_button['title'];
	$btn_target = $footer_button['target'] ? $footer_button['target'] : '_self';
}
?>

<?php get_template_part( 'parts/content', 'subscribe' ); ?>

<footer class="footer" role="contentinfo">
	<div class="main-container">
		<div class="grid-x">
			<div class="cell large-5">
				<a href="<?php echo home_url(); ?>">
					<img class="footer__logo" src="
					<?php echo esc_url( $footer_logo['url'] ); ?>" width="330" alt="<?php echo esc_attr( $logo['alt'] ); ?>">
				</a>

				<div class="show-for-large">
					<p class="footer__copyright">
						<?php echo $footer_copyright; ?>
					</p>
					<p class="footer__disclaimer">
						<?php echo $footer_disclaimer; ?>
					</p>
				</div>
			</div>
			<div class="cell large-2">
				<ul id="menu-footer" class="menu">
					<?php
					if ( have_rows( 'footer_links', 'option' ) ) :
						while ( have_rows( 'footer_links', 'option' ) ) :
							the_row();
							$link = get_sub_field( 'link' );
							?>
							<li>
								<a href=" <?php echo $link['url']; ?>"
								target="<?php echo esc_attr( $link['target'] ); ?>">
								<?php echo $link['title']; ?>
								</a>
							</li>
							<?php
						endwhile;
					endif;
					?>
				</ul>
			</div>
			<div class="cell large-3 flex-container align-center">
				<img class="footer__partner-logo" src="<?php echo esc_url( $footer_partner_logo['url'] ); ?>" width="186"
					 alt="<?php echo esc_attr( $footer_partner_logo['alt'] ); ?>" style="object-fit: contain;">
			</div>
			<div class="cell large-2 flex-container flex-dir-column align-middle">
				<div class="flex-container flex-dir-column">
					<a class="button warning" href="<?php echo esc_url( $btn_url ); ?>"
					   target="<?php echo esc_attr( $btn_target ); ?>">
					   <?php echo esc_html( $btn_title ); ?>
					</a>
					<div class="flex-container align-justify footer__social-media">
						<?php
						if ( have_rows( 'footer_icons', 'option' ) ) :
							while ( have_rows( 'footer_icons', 'option' ) ) :
								the_row();
								$social_network      = 'fa-' . get_sub_field( 'social_network' );
								$social_network_link = get_sub_field( 'social_network_link' );
								?>
								<a href="<?php echo $social_network_link['url']; ?>"
								   target="<?php echo esc_attr( $social_network_link['target'] ); ?>">
									<i class="fab fa-2x <?php echo $social_network; ?>"></i>
								</a>
								<?php
							endwhile;
						endif;
						?>
					</div>

					<p class="text-center footer__links">
						<a href="<?php echo esc_url( $footer_privacy_policy_link['url'] ); ?>"
						   target="<?php echo esc_attr( $footer_privacy_policy_link['target'] ); ?>">
						   <?php echo esc_html( $footer_privacy_policy_link['title'] ); ?>
						</a>
						<span>|</span>
						<a href="
						<?php echo esc_url( $footer_disclaimer_link['url'] ); ?>"
						   target="<?php echo esc_attr( $footer_disclaimer_link['target'] ); ?>">
						   <?php echo esc_html( $footer_disclaimer_link['title'] ); ?>
						</a>
					</p>
				</div>

				<div class="mobile-footer text-left hide-for-large">
					<p class="mobile-footer__copyright">
						<?php echo $footer_copyright; ?>
					</p>
					<p class="mobile-footer__disclaimer">
						<?php echo $footer_disclaimer; ?>
					</p>
				</div>
			</div>
		</div>
	</div>

</footer> <!-- end .footer -->

</div> <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php
wp_footer();
?>

</body>

</html> <!-- end page -->
