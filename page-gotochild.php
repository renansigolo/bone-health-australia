<?php
/**
 * Template Name: Go to first child
 *
 * This is the template that displays all pages by default.
 */

?>


<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$pagekids   = get_pages( 'child_of=' . $post->ID . '&sort_column=menu_order' );
		$firstchild = $pagekids[0];
		$permalink  = get_permalink( $firstchild->ID );
		echo 'Loading...';
	}
}
?>

<script>
	window.location.replace("<?php echo $permalink; ?>");
</script>";
