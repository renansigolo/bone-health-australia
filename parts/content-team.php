<?php
/**
 * Team Component
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'team' ) :
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
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>"
										width="280" height="280" class="profile__image">
										<?php
										$desc   = get_sub_field( 'description' );
										$linked = get_sub_field( 'linkedin' );
										if ( $desc !== '' || $linked !== '' ) :
											?>
										<div class="overlay">
											<?php
											endif
										?>
											<div class="overlay__social-icons">
												<?php
												if ( get_sub_field( 'description' ) ) :
													$modal_id = 'modal-' . get_row_index();
													?>
													<a href="#" data-open="<?php echo $modal_id; ?>">
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
													<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
													rel="noopener noreferrer">
														<div class="bg-square bg-pink">
															<i class="fab fa-2x fa-linkedin text-white"></i>
														</div>
													</a>
													<?php
												endif;
												?>
											</div>

											<?php
											$desc   = get_sub_field( 'description' );
											$linked = get_sub_field( 'linkedin' );
											if ( $desc !== '' || $linked !== '' ) :
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
								<div class="media-object stack-for-small">
									<div class="media-object-section">
										<img src="<?php echo esc_url( $image['url'] ); ?>" width="200" height="200"
										class="modal__image" alt="<?php echo esc_url( $image['alt'] ); ?>">
									</div>
									<div class="media-object-section modal-content">
										<p><?php esc_html( the_sub_field( 'description' ) ); ?></p>
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

								<button class="close-button btn-close-profile" data-close aria-label="Close modal"
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
