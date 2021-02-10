<?php
/**
 * Find a Service Page
 *
 * @package BoneHealth
 */

if ( get_row_layout() === 'find_service' ) : ?>

<div class="page-container py-medium">
	<div class="page-wrapper">
		<section class="find-service" id="find-service">
			<div class="grid-x grid-margin-x grid-margin-y">
				<div class="cell small-12">
					<h2 class="text-blue mb-medium title first-bold">Find a Bone Health Service Near You</h2>
					<?php echo apply_shortcodes( '[wpsl]' ); ?>
				</div>
			</div>
		</section>
	</div>
</div>

<script>
function styleTitle() {
	// Replaces the first word with bold
	const allTitles = document.querySelectorAll('.title')
	for (const title of allTitles) {
		// Change the first word to bold
		if (title.className.includes('first-bold')) {
			const wordsArray = title.innerHTML.trim().split(' ')
			const firstWord = `<strong>${wordsArray.shift()}</strong> `
			title.innerHTML = firstWord + wordsArray.join(' ')
		}
		// // Change the whole setence to bold
		if (title.className.includes('all-bold')) {
			title.style.fontWeight = 'bold'
		}
	}
}
styleTitle()
</script>

<?php endif; ?>
