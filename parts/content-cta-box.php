<?php
/**
 * CTA Box Component
 *
 * @package BoneHealth
 * */

if ( get_row_layout() === 'cta_box' ) :
	$bg_card            = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-transparent-neg.svg';
	$highlight_card     = get_sub_field( 'highlight_card' );
	$highlight_card_btn = $highlight_card['button'];
	$grid_size          = is_front_page() ? 'small-12' : 'medium-10';
	?>

	<style>
		.cta-card {
			background: url(<?php echo $bg_card; ?>) #1b386d;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
	</style>

	<section class="cta-box page-container">
		<div class="grid-x grid-margin-x grid-margin-y align-center 
		<?php echo $grid_size; ?>" data-equalizer data-equalize-on="medium">
			<div class="cell large-4" data-equalizer-watch>
				<div class="card cta-card">
					<div class="card-section">
						<?php
						if ( $highlight_card['title'] ) :
							?>
							<h2 class="card__title title 
								<?php echo $highlight_card['title_decoration']; ?>">
								<?php echo $highlight_card['title']; ?>
							</h2>
							<?php
						endif
						?>
					</div>
					<?php
					if ( $highlight_card_btn ) :
						?>
						<div class="card-footer">
							<a class="button large expanded warning"
							href="<?php echo esc_url( $highlight_card_btn['url'] ); ?>" target="<?php echo esc_html( $highlight_card_btn['target'] ); ?>">
							<?php echo esc_html( $highlight_card_btn['title'] ); ?>
							</a>
						</div>
						<?php
					endif
					?>
				</div>
			</div>
			<div class="cell large-8 cta-box__boxes" data-equalizer-watch>
				<div class="grid-x grid-margin-x grid-margin-y align-center align-self-middle">
					<?php
					if ( have_rows( 'cards' ) ) :
						while ( have_rows( 'cards' ) ) :
							the_row();
							$card_image       = get_sub_field( 'card_image' );
							$card_link        = get_sub_field( 'card_link', 'option' );
							$card_link_url    = $card_link['url'];
							$card_link_title  = $card_link['title'];
							$card_link_target = $card_link['target'] ? $card_link['target'] : '_self';
							?>
							<a class="cell small-6 medium-auto highlight-card" href="<?php echo esc_url( $card_link_url ); ?>" target="<?php echo esc_attr( $card_link_target ); ?> ">
								<img src="<?php echo esc_url( $card_image['url'] ); ?>" width="108" height="140"alt="<?php echo esc_url( $card_image['alt'] ); ?>">
								<h5>
									<?php the_sub_field( 'card_title' ); ?>
								</h5>
							</a>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
endif; ?>
