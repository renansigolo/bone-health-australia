<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: https://jointswp.com/docs/off-canvas-menu/
 *
 * @package BoneHealth
 */

?>

<?php
$bone_health_icon     = get_template_directory_uri() . '/assets/images/logo/bone-health-icon.svg';
$bone_health_icon_neg = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-neg.svg';
?>

<div class="off-canvas position-right mobile-menu" id="offCanvasRight" data-off-canvas data-transition="overlap">

	<!-- Close button -->
	<button class="close-button" id="menu-close-button" aria-label="Close menu" type="button" data-close>
		<span aria-hidden="true"><i class="fas fa-times"></i></span>
	</button>

	<div class="grid-container full">
		<div class="grid-x grid-margin-y">
			<div class="cell small-12 text-center">
				<img src="<?php echo $bone_health_icon; ?>" class="mobile-menu__logo" id="mobile-logo" width="86" alt="Bone Health Icon">
			</div>
			<div class="cell small-12">
				<?php echo nav_menu(); ?>
			</div>
			<div class="cell small-12">
				<button type="button" class="button warning expanded" id="btn-donate">Donate</button>
			</div>
		</div>
	</div>
</div>
