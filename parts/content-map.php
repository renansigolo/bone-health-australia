<?php
/**
 * Map Component
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'map' ) :
	// $block_direction = get_sub_field('block_direction');
	$map_note           = get_sub_field( 'note' );
	$map_card           = get_sub_field( 'map_card' );
	$map_card_btn_color = $map_card['button']['link_color'];
	$map_card_btn       = $map_card['button']['link'];
	$card_bg_url        = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-transparent-neg.svg';
	$card_bg            = $map_card['background_color'] === 'bg-blue' ? '#1b386d' : '#298bcf';
	?>

	<div class="map-container">
		<div class="page-container py-medium">
			<div class="page-wrapper">
				<section class="map">
					<div class="grid-x grid-margin-x grid-margin-y">
						<div class="cell large-5">
							<div class="card" style="background: url(
							<?php echo $card_bg_url; ?>) <?php echo $card_bg; ?>
							 no-repeat center; background-size: cover;">
								<div class="card-section">
									<h2 class="card__title title 
										<?php echo $map_card['title_decoration']; ?>">
										<?php echo $map_card['title']; ?>
									</h2>
									<h5>
										<?php echo esc_html( $map_card['description'] ); ?>
									</h5>
								</div>
								<?php
								if ( $map_card_btn ) :
									?>
									<div class="card-footer">
										<a class="button large expanded <?php echo esc_html( $map_card_btn_color ); ?>"
										href="<?php echo esc_url( $map_card_btn['url'] ); ?>"
										target="<?php echo esc_html( $map_card_btn['target'] ); ?>">
											<?php echo esc_html( $map_card_btn['title'] ); ?>
										</a>
									</div>
									<?php
								endif;
								?>
							</div>
						</div>
						<div class="cell large-7">
							<div class="responsive-embed map__embed">
								<iframe src="https://onero.academy/locations" width="700px" height="600px"></iframe>
								<div class="tve_iframe_cover"></div>
								<div class="tve_iframe_cover"></div>
								<div class="tve_iframe_cover"></div>
								<div class="tve_iframe_cover"></div>
							</div>
						</div>

						<div class="cell small-12">
							<p>
							<?php echo $map_note; ?>
							</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php
endif; ?>
