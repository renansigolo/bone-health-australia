<?php
/**
 * The template part for displaying an author byline
 *
 * @package BoneHealth
 */

?>

<p class="byline">
	<?php
	printf(
		__( 'Posted on %1$s', 'bone_health' ),
		get_the_time( __( 'F j, Y', 'bone_health' ) )
	);
	?>
</p>
