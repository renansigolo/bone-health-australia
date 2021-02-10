<?php
/**
 * Accordion Block
 *
 * @package BoneHealth
 * */

if ( get_row_layout() === 'accordion' ) :
	$color = get_sub_field( 'color' );
	$topic = get_sub_field( 'block_content' )['topic'];

	$highlight_card           = get_sub_field( 'block_content' )['highlight_card'];
	$highlight_card_btn_color = $highlight_card['button']['link_color'];
	$highlight_card_btn       = $highlight_card['button']['link'];

	$bg_card = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-neg.svg';
	?>

	<!-- Start Accordion Section -->
	<div class="page-container">
		<div class="page-wrapper mb-large">
			<section class="accordion-block">
				<div class="grid-y">
					<ul class="accordion" data-accordion>
						<?php
						if ( have_rows( 'accordion_items' ) ) :
							while ( have_rows( 'accordion_items' ) ) :
								the_row();
								?>
								<li class="accordion-item  <?php the_sub_field( 'bg_color' ); ?>" data-accordion-item>
									<!-- Accordion tab title -->
									<a href="#" class="accordion-title">
									<?php the_sub_field( 'accordion_title' ); ?>
									</a>

									<!-- Accordion tab content -->
									<div class="accordion-content" data-tab-content>
										<?php
										if ( have_rows( 'content_repeater' ) ) :
											while ( have_rows( 'content_repeater' ) ) :
												the_row();
												$accordion_image = get_sub_field( 'image' );
												$summary_link    = get_sub_field( 'summary' );
												$guidelines_link = get_sub_field( 'guidelines' );
												$description     = get_sub_field( 'description' );
												?>

												<div class="grid-x grid-margin-x mb-medium">
													<div class="cell large-4 text-center">
														<img class="accordion-content__image" src="<?php echo esc_url( $accordion_image['url'] ); ?>"
														width="300" height="420" alt="<?php echo esc_url( $accordion_image['alt'] ); ?>">
													</div>
													<div class="cell large-8">
														<h2 class="accordion-content__title title 
															<?php the_sub_field( 'title_decoration' ); ?>">
															<?php the_sub_field( 'title' ); ?>
														</h2>
														<?php
														if ( $description ) :
															?>
															<div class="accordion-content__description">
																<?php echo $description; ?>
															</div>
															<?php
														endif;
														?>
														<?php
														if ( $summary_link ) :
															?>
															<a href="<?php echo esc_url( $summary_link['url'] ); ?>"
															target="<?php echo esc_attr( $summary_link['target'] ); ?>"
															class="button large primary accordion-content__button">
																<?php echo esc_html( $summary_link['title'] ); ?>
															</a>
															<br/><br/>
														<?php endif; ?>
														<?php
														if ( $guidelines_link ) :
															?>
															<a href="<?php echo esc_url( $guidelines_link['url'] ); ?>"
															target="<?php echo esc_attr( $guidelines_link['target'] ); ?>"
															class="button large primary accordion-content__button">
																<?php echo esc_html( $guidelines_link['title'] ); ?>
															</a>
															<?php
														endif;
														?>
													</div>
												</div>
												<?php
											endwhile;
										endif;
										?>
									</div>
								</li>
								<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</section>
		</div>
	</div>
	<?php
endif; ?>
