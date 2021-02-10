// Theme Functions
(function ($) {
	// console.log('jQuery version', jQuery.fn.jquery)
	/** Display different title styles */
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
			// Change the whole setence to bold
			if (title.className.includes('all-bold')) {
				title.style.fontWeight = 'bold'
			}
		}
	}
	$('#offCanvasRight').on('opened.zf.offCanvas', function () {

	})
	/** Change the background color for the submenu on the mobile nav */
	function changeMobileMenuBackground() {
		const menuButton = document.querySelector('.navbar-mobile__button')
		let mobileBg = document.querySelector('#offCanvasRight')
		let mobileLogo = document.querySelector('#mobile-logo')
		let logoOrange = $('.logo-orange')
		let logoWhite = $('.logo-white')
		let donateButton = $('#btn-donate')
		const closeButton = document.querySelector('#menu-close-button')
		const menuItems = document.querySelectorAll('#nav-menu .is-drilldown-submenu-parent')

		closeButton.addEventListener('click', function () {
			mobileBg.style.backgroundColor = '#1b386d'
			mobileLogo.src = `${window.location.origin}/wp-content/themes/bone-health/assets/images/logo/bone-health-icon.svg`
			donateButton.animate({ opacity: 'show' })
		})
		menuButton.addEventListener('click', function () {
			toggleMobileMenu()
		})

		$('#nav-menu').on('open.zf.drilldown', function () {
			mobileBg.style.backgroundColor = '#298bcf'
			logoOrange.hide()
			logoWhite.show()
			mobileBg.style.backgroundColor = '#298bcf'
			mobileLogo.src = `${window.location.origin}/wp-content/themes/bone-health/assets/images/logo/bone-health-icon-neg.svg`
			donateButton.hide()
		});

		$('#nav-menu').on('hide.zf.drilldown', function () {
			logoWhite.hide()
			logoOrange.show()
			mobileBg.style.backgroundColor = '#1b386d'
			mobileLogo.src = `${window.location.origin}/wp-content/themes/bone-health/assets/images/logo/bone-health-icon.svg`
			donateButton.show()
		});

		function toggleMobileMenu() {
			for (const menuItem of menuItems) {
				menuItem.addEventListener('click', function () {
					const isExpanded = this.getAttribute('aria-expanded')
					if (isExpanded === 'true') {
						this.children[1].childNodes[0].childNodes[0].innerHTML = this.getAttribute('aria-label')
					}
				})
			}
		}
	}

	/** Toogle Search Input in the Navbar */
	const searchIcon = $('#search-icon');
	const navbarSearch = $('#navbar-search');

	function showSearchBar() {
		searchIcon.animate({ opacity: 0 }, 500)
		navbarSearch.css({ opacity: 0, display: 'flex' }).animate({ opacity: 1 }, 500);
	}

	function hideSearchBar() {
		navbarSearch.animate({ opacity: 0 }, 500)
		searchIcon.css({ opacity: 0, display: 'block' }).animate({ opacity: 1 }, 500);
	}

	searchIcon.on('click', function () {
		showSearchBar()
	})

	$('.navbar-corporate').on('mouseleave', function () {
		const iconOpacity = searchIcon.css("opacity");
		if (iconOpacity === '0') {
			hideSearchBar()
		}
	})

	styleTitle()
	changeMobileMenuBackground()
})(jQuery)
