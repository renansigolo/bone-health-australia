<?php
/**
 * Video Modal
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'video' ) :
	// $grid_size = is_front_page() ? ' small-12' : ' medium-10';
	$section_background = 'bg-' . get_sub_field( 'background_color' );
	$section_spacing    = 'py-' . get_sub_field( 'spacing' );
	?>

	<!-- Team Section -->
	<div class="<?php echo $section_background; ?>">
		<section class="page-container">
			<div class="page-wrapper">
				<div class="team grid-x grid-margin-x grid-margin-y <?php echo $section_spacing; ?>">
					<?php
					if ( have_rows( 'staff' ) ) :
						while ( have_rows( 'staff' ) ) :
							the_row();
							$image = get_sub_field( 'image' );
							?>
							<div class="cell large-4">
								<div class="card profile">
									<div class="profile__content text-center">
										<img src="<?php echo esc_url( $image['url'] ); ?>" width="280" height="280"
										class="profile__image" alt="<?php echo esc_url( $image['alt'] ); ?>">
										<?php
										$video  = get_sub_field( 'video' );
										$linked = get_sub_field( 'linkedin' );
										if ( $video !== '' || $linked !== '' ) :
											?>
										<div class="overlay">
											<?php
											endif
										?>
											<div class="overlay__social-icons">
												<?php
												if ( get_sub_field( 'video' ) ) :
													?>
													<a href="#" data-open="modal-<?php echo get_row_index(); ?>">
														<div class="bg-square bg-cyan">
															<i class="fas fa-2x fa-plus text-white"></i>
														</div>
													</a>
													<?php
												endif;
												?>
												<?php
												$link = get_sub_field( 'linkedin' );
												if ( $link ) :
													$link_url    = $link['url'];
													$link_title  = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" rel="noopener noreferrer">
														<div class="bg-square bg-pink">
															<i class="fab fa-2x fa-linkedin text-white"></i>
														</div>
													</a>
													<?php
												endif;
												?>
											</div>
											<?php
											$video  = get_sub_field( 'video' );
											$linked = get_sub_field( 'linkedin' );
											if ( $video !== '' || $linked !== '' ) :
												?>
										</div>
												<?php
									endif
											?>

										<div>
											<h4 class="profile__title">
											<?php esc_html( the_sub_field( 'title' ) ); ?>
											</h4>
											<p class="profile__subtitle">
											<?php esc_html( the_sub_field( 'subtitle' ) ); ?>
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="reveal modal" id="modal-<?php echo get_row_index(); ?>" data-reveal>
								<div class="flex-container align-center" style="flex-direction: column;">
									<div style="text-align: -webkit-center;">
										<div class="modal-header-video">
											<?php the_sub_field( 'video' ); ?>
										</div>
									</div>
									<div class="modal-content">
										<p>
										<?php esc_html( the_sub_field( 'description' ) ); ?>
										</p>
										<div class="profile__header">
											<h4>
											<?php esc_html( the_sub_field( 'title' ) ); ?>
											</h4>
											<h6>
											<?php esc_html( the_sub_field( 'subtitle' ) ); ?>
											</h6>
										</div>
									</div>
								</div>

								<button class="close-button btn-close-video" data-close aria-label="Close modal"
										type="button">
									<span aria-hidden="true"><i class="fas fa-times"></i></span>
								</button>
							</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</section>
	</div>

	<?php
endif;
?>
