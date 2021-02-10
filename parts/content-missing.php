<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package BoneHealth
 */

?>

<div class="post-not-found mb-large">
	<?php
	if ( is_search() ) :
		?>
		<header class="article-header">
			<h1>
				<?php
				_e( 'Sorry, No Results.', 'bone_health' );
				?>
			</h1>
		</header>

		<section class="entry-content">
			<p>
				<?php
				_e( 'Try your search again.', 'bone_health' );
				?>
			</p>
		</section>

		<section class="search">
			<p>
				<?php
				get_search_form();
				?>
			</p>
		</section> <!-- end search section -->

		<?php
	else :
		?>

		<header class="article-header">
			<h1>
				<?php
				_e( 'Oops, Post Not Found!', 'bone_health' );
				?>
			</h1>
		</header>

		<section class="entry-content">
			<p>
				<?php
				_e( 'Uh Oh. Something is missing. Try double checking things.', 'bone_health' );
				?>
			</p>
		</section>

		<section class="search">
			<p>
				<?php
				get_search_form();
				?>
			</p>
		</section> <!-- end search section -->

		<?php
	endif;
	?>
</div>
