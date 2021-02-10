<?php
/**
 * Section with Icons
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'section_with_icons' ) :
	$title_decoration = get_sub_field( 'title_decoration' );
	$section_spacing  = 'pb-' . get_sub_field( 'spacing' );
	?>

	<section class="page-container section-with-icons <?php echo $section_spacing; ?>">
		<div class="page-wrapper">
			<h2 class="title <?php echo $title_decoration; ?>">
				<?php
				if ( the_sub_field( 'title' ) ) {
					;
				}
				?>
			</h2>

			<div class="description">
				<?php
				if ( the_sub_field( 'description' ) ) {
					;
				}
				?>
			</div>

			<div class="grid-x grid-margin-x grid-margin-y">
				<?php
				if ( have_rows( 'icons_grid' ) ) :
					while ( have_rows( 'icons_grid' ) ) :
						the_row();
						$image = get_sub_field( 'image' );
						?>
						<div class="cell small-12 large-auto cell-item">
							<img src="<?php echo esc_url( $image['url'] ); ?>"
								class="cell-item__image" width="108" height="140"
								alt="<?php echo esc_url( $image['alt'] ); ?>">
							<h5 class="cell-item__description">
								<?php the_sub_field( 'description' ); ?>
							</h5>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
	<?php
endif; ?>
