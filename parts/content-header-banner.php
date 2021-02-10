<?php
/**
 * Header Block
 *
 * @package BoneHealth
 * */

$bg_header = get_template_directory_uri() . '/assets/images/logo/bone-health-icon-transparent-neg.svg';
$main      = get_field( 'main' );
?>

<header class="page-header bg-blue"
		style="background: url(<?php echo $bg_header; ?>) #1b386d no-repeat 50% center; background-size: 400px">
	<div class="page-container">
		<div class="page-wrapper">
			<nav aria-label="You are here:" role="navigation">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php
					if ( function_exists( 'bcn_display' ) ) {
						bcn_display();
					}
					?>
				</div>
			</nav>
			<?php
			if ( $main['title'] ) {
				echo '<h1 class="page-header__title title ' . $main['title_decoration'] . ' ?>">';
				echo $main['title'];
				echo '</h1>';
			} else {
				echo '<h1 class="page-header__title title first-bold">';
				the_title();
				echo '</h1>';
			}
			?>
		</div>
	</div>
</header>
