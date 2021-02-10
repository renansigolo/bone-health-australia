<?php
/**
 * Slider
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'slider' ) :
	$title_decoration   = get_sub_field( 'title_decoration' );
	$slides_per_view    = get_sub_field( 'slides_per_view' );
	$title              = get_sub_field( 'title' );
	$slide              = get_sub_field( 'slide' );
	$total_slides       = array();
	$section_background = 'bg-' . get_sub_field( 'background_color' );
	$section_spacing    = 'py-' . get_sub_field( 'spacing' );
	$grid_size          = is_front_page() ? 'small-12' : 'medium-10';
	?>
	<div class="<?php echo $section_background; ?>">
		<section class="related-news main-container">
			<div class="grid-x align-center <?php echo $section_spacing; ?>
			 <?php
				if ( $grid_size == 'medium-10' ) {
					echo 'grid-margin-x';
				}
				?>
				" style="width: 100%">
				<div class="cell <?php echo $grid_size; ?>">
					<?php
					if ( $title ) :
						?>
						<div class="cell small-12 text-center">
							<h2 class="related-news__title title <?php echo $title_decoration; ?>">
								<?php echo $title; ?>
							</h2>
						</div>
						<?php
					endif
					?>

					<div class="my-slider">
						<?php
						if ( have_rows( 'slide' ) ) :
							while ( have_rows( 'slide' ) ) :
								the_row();
								$slide_image = get_sub_field( 'image' );
								?>
								<div>
									<?php
									$link = get_sub_field( 'link' );
									if ( $link ) :
										$link_url    = $link['url'];
										$link_title  = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
									<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
										<?php
										endif
									?>
										<div class="card">
											<img src="<?php echo esc_url( $slide_image['url'] ); ?>"
												alt="<?php echo esc_url( $slide_image['alt'] ); ?>"
												class="slider-image"
												<?php
												if ( $slides_per_view === 1 ) {
													echo 'style="height: 500px"';
												}
												?>
												>
											<div class="card-section">
												<h3 class="card-title text-center title <?php echo the_sub_field( 'title_decoration' ); ?>">
													<?php echo the_sub_field( 'title' ); ?>
												</h3>
												<p class="card-description">
													<?php echo the_sub_field( 'description' ); ?>
												</p>
											</div>
										</div>
										<?php
										if ( $link ) :
											?>
									</a>
											<?php
								endif
										?>
								</div>
								<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script type="module">
		var slider = tns({
			container: '.my-slider',
			slideBy: 'page',
			autoplay: false,
			gutter: 32,
			autoplayHoverPause: true,
			speed: 800,
			autoHeight: true,
			nav: true,
			navPosition: 'bottom',
			controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			responsive: {
				"350": {
					items: 1,
					controls: false,
				},
				"1024": {
					items: <?php echo $slides_per_view; ?>,
					controls: true,
				}
			},
		});
	</script>
	<?php
endif; ?>
