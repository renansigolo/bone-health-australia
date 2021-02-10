<?php
/**
 * Template part for displaying section content in page.php
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'section_content' ) :
	$section_background = 'bg-' . get_sub_field( 'block_option_background_color' );
	$section_spacing    = 'py-' . get_sub_field( 'block_option_spacing' );
	?>

	<section id="section-content" class="<?php echo $section_background; ?>">
		<div class="page-container <?php echo $section_spacing; ?>">
			<div class="page-wrapper">
				<?php
				if ( have_rows( 'content_row' ) ) :
					while ( have_rows( 'content_row' ) ) :
						the_row();
						$title_decoration = get_sub_field( 'title_decoration' );
						$title            = get_sub_field( 'title' );
						$description      = get_sub_field( 'description' );
						$mobile_image     = get_sub_field( 'mobile_image' );
						$desktop_image    = get_sub_field( 'desktop_image' );
						$button           = get_sub_field( 'button' )['link'];
						$button_color     = get_sub_field( 'button' )['link_color'];
						$row_spacing      = 'pb-' . get_sub_field( 'row_option_spacing' );
						$table            = get_sub_field( 'table' );
						?>
						<div class="<?php echo $row_spacing; ?>">
							<?php
							if ( $title ) :
								?>
								<h2 class="title <?php echo $title_decoration; ?>"><?php echo $title; ?></h2>
								<?php
							endif
							?>

							<?php
							if ( $mobile_image['url'] && $desktop_image['url'] ) :
								?>
								<img data-interchange="[<?php echo esc_url( $mobile_image['url'] ); ?>, small], [<?php echo esc_url( $desktop_image['url'] ); ?>, large]"
								src="#" alt="<?php echo esc_url( $slide_image['alt'] ); ?>" class="responsive-image">
								<?php
							endif;
							?>

							<?php
							if ( $description ) :
								?>
								<div class="description <?php echo get_sub_field( 'list_style' ); ?>">
									<?php echo $description; ?>
								</div>

								<?php
								if ( ! empty( $table ) ) {
									echo '<table class="scroll">';
									if ( ! empty( $table['caption'] ) ) {
										echo '<caption>' . $table['caption'] . '</caption>';
									}

									if ( ! empty( $table['header'] ) ) {
										echo '<thead>';
										echo '<tr>';

										foreach ( $table['header'] as $th ) {
											echo '<th>';
											echo $th['c'];
											echo '</th>';
										}

										echo '</tr>';
										echo '</thead>';
									}

									echo '<tbody>';
									foreach ( $table['body'] as $tr ) {
										echo '<tr>';

										foreach ( $tr as $td ) {
											echo '<td>';
											echo $td['c'];
											echo '</td>';
										}

										echo '</tr>';
									}

									echo '</tbody>';
									echo '</table>';
								}
								?>
								<?php
							endif
							?>

							<?php
							if ( $button ) :
								$button_url    = $button['url'];
								$button_title  = $button['title'];
								$button_target = $button['target'] ? $button['target'] : '_self';
								?>
								<a href="<?php echo esc_url( $button_url ); ?>" class="button large <?php echo esc_html( $button_color ); ?>"
								target="<?php echo esc_attr( $button_target ); ?>">
								<?php echo esc_html( $button_title ); ?>
								</a>
								<?php
							endif;
							?>
						</div>
						<?php
					endwhile;
				endif;
				?>

			</div>
		</div>
	</section>

	<?php
endif ?>
