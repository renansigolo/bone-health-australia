<?php
/**
 * Tabs Component
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'tabs' ) :
	$grid_size = is_front_page() ? ' small-12' : ' medium-10'; ?>

	<!-- Team Section -->
	<section class="page-container">
		<div class="page-wrapper">
			<div class="team mb-large">
				<ul class="tabs" data-tabs id="team-tabs">
					<?php
					if ( have_rows( 'team' ) ) :
						while ( have_rows( 'team' ) ) :
							the_row();
							$index = get_row_index();
							?>
							<li class="tabs-title 
							<?php
							if ( $index === 1 ) {
								echo 'is-active';
							}
							?>
							">
								<a href="#panel
								<?php echo $index; ?>"
								aria-selected="
								<?php
								if ( $index === 1 ) {
									echo 'is-active';
								}
								?>
								">
									<?php echo get_sub_field( 'title' ); ?>
								</a>
							</li>
							<?php
						endwhile;
					endif;
					?>
				</ul>

				<div class="tabs-content" data-tabs-content="team-tabs">
					<?php
					if ( have_rows( 'team' ) ) :
						while ( have_rows( 'team' ) ) :
							the_row();
							$team_index = get_row_index();
							?>
							<div class="tabs-panel 
							<?php
							if ( $team_index === 1 ) {
								echo 'is-active';
							}
							?>
							" id="panel<?php echo $team_index; ?>">
								<div class="grid-x grid-margin-x">
									<?php
									if ( have_rows( 'staff' ) ) :
										while ( have_rows( 'staff' ) ) :
											the_row();
											$staff_id = str_replace( ' ', '_', get_sub_field( 'title' ) );
											$staff_id = strtolower( $staff_id );
											$modal_id = 'modal-' . $staff_id;
											$title    = esc_html( get_sub_field( 'title' ) );
											$image    = get_sub_field( 'image' );
											?>

											<div class="cell large-4">
												<div class="card profile">
													<div class="profile__content text-center">
														<img src="<?php echo esc_url( $image['url'] ); ?>"
															alt="<?php echo esc_url( $image['alt'] ); ?>"
															width="280" height="280"
															class="profile__image">
														<div class="overlay">
															<div class="overlay__social-icons">
																<?php
																if ( get_sub_field( 'description' ) ) :
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
																	<a href="<?php echo esc_url( $link_url ); ?>"
																	target="<?php echo esc_attr( $link_target ); ?>"
																	rel="noopener noreferrer">
																		<div class="bg-square bg-pink">
																			<i class="fab fa-2x fa-linkedin text-white"></i>
																		</div>
																	</a>
																	<?php
																endif;
																?>
															</div>
														</div>

														<div>
															<h4 class="profile__title">
															<?php echo $title; ?>
															</h4>
															<p class="profile__subtitle">
															<?php esc_html( the_sub_field( 'subtitle' ) ); ?>
															</p>
														</div>
													</div>
												</div>
											</div>

											<div class="reveal modal" id="<?php echo $modal_id; ?>" data-reveal>
												<div class="media-object stack-for-small">
													<div class="media-object-section">
														<img src="<?php echo esc_url( $image['url'] ); ?>"
														alt="<?php echo esc_url( $image['alt'] ); ?>" width="200" height="200"
														class="modal__image">
													</div>
													<div class="media-object-section modal-content">
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
												<button class="close-button btn-close-profile" data-close
														aria-label="Close modal" type="button">
													<span aria-hidden="true"><i class="fas fa-times"></i></span>
												</button>
											</div>
											<?php
										endwhile;
									endif;
									?>
								</div>
							</div>
							<?php
						endwhile;
					endif
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
endif; ?>
