<?php
/**
 * Hot Topic Component
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'hot_topic' ) :
	$block_direction = get_sub_field( 'block_direction' );
	$topic           = get_sub_field( 'block_content' )['topic'];
	$card            = get_sub_field( 'block_content' )['highlight_card'];
	$card_btn_color  = $card['button']['link_color'];
	$card_btn        = $card['button']['link'];
	$card_bg_url     = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-transparent-neg.svg';
	$card_bg         = $card['background_color'] === 'bg-blue' ? '#1b386d' : '#298bcf';
	$section_spacing = 'py-' . get_sub_field( 'spacing' );
	$grid_size       = is_front_page() ? 'small-12' : 'medium-10';
	?>

	<section class="hot-topic page-container
	<?php
	if ( $grid_size === 'small-12' ) {
		echo 'mb-large';
	} else {
		echo $section_spacing;
	}
	?>
	">
		<div class="grid-x align-center">
			<div class="cell 
			<?php echo $grid_size; ?>">
				<div class="grid-x grid-margin-x align-center 
				<?php echo esc_html( $block_direction ); ?>">
					<div class="cell large-8" style="background-image: url(
					<?php echo esc_url( $topic['image']['url'] ); ?>);">
						<?php
						if ( $topic['title'] || $topic['subtitle'] ) :
							?>
							<div class="description-tag">
								<h5 class="description-tag__title">
									<?php echo esc_html( $topic['title'] ); ?>
								</h5>
								<p class="description-tag__description">
									<?php echo esc_html( $topic['subtitle'] ); ?>
								</p>
							</div>
							<?php
						endif;
						?>
					</div>
					<div class="cell large-4">
						<div class="card"
							 style="background: url(<?php echo $card_bg_url; ?>) <?php echo $card_bg; ?> no-repeat center; background-size: cover;">
							<div class="card-section">
								<h2 class="card__title title 
									<?php echo $card['title_decoration']; ?>">
									<?php echo $card['title']; ?>
								</h2>
								<h5 class="card__description">
									<?php echo esc_html( $card['description'] ); ?>
								</h5>
							</div>
							<?php
							if ( $card_btn ) :
								?>
								<div class="card-footer">
									<a class="button large expanded <?php echo esc_html( $card_btn_color ); ?>"
									   href="<?php echo esc_url( $card_btn['url'] ); ?>"
									   target="<?php echo esc_html( $card_btn['target'] ); ?>">
										<?php echo esc_html( $card_btn['title'] ); ?>
									</a>
								</div>
								<?php
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif; ?>
