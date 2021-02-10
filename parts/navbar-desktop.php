<?php
/**
 * The Navigation Bar for Desktop
 *
 * @package BoneHealth
 */

$logo                = get_field( 'header_logo', 'option' );
$helpline_text       = get_field( 'helpline_text', 'option' );
$helpline_number     = get_field( 'helpline_number', 'option' );
$hero_image          = get_field( 'hero_image', 'option' );
$related_links_about = get_field( 'related_links_about', 'option' );
$title_about         = get_field( 'title_about', 'option' );
$title_hcp           = get_field( 'title_hcp', 'option' );
$icon_hospital       = get_field( 'find_service_image', 'option' );
$chevron_down        = get_template_directory_uri() . '/assets/images/icons/chevron-down-solid.svg';
$is_front_page       = is_front_page() ? true : false;
$page_id             = get_the_ID();
?>
<style>
	#wpsl-widget-categories {
		background-image: none;
		background: url(<?php echo $chevron_down; ?>) no-repeat right #fff;
		background-size: 16px;
		background-position-x: 200px;
		-webkit-appearance: none;
	}
</style>
	<!-- Top Navbar -->
	<div class="navbar-corporate">
		<section class="grid-container">
			<div class="grid-x align-center">
				<div class="cell small-12 xlarge-10 navbar-menu">
					<div class="grid-x">
						<div class="cell small-9">
							<form role="search" method="get" id="navbar-search" 
								class="search-form flex-container align-center"
								action="<?php echo home_url( '/' ); ?>">
								<input type="search" placeholder="Search" name="s" value="<?php echo get_search_query(); ?>">
								<button type="submit" class="button secondary" style="max-height: 42px;"
										id="navbar-btn-search"
										value="<?php echo esc_attr_x( 'Search', 'bone_health' ); ?>">
								Search
								</button>
							</form>
						</div>

						<div class="cell small-3 navbar-corporate__links">
							<ul class="dropdown menu navbar-menu__list"
								style="justify-content: flex-end; flex-wrap: nowrap;"
								data-dropdown-menu>
								<?php if ( ! is_search() ) : ?>
									<i class="fas fa-search" id="search-icon"></i>
								<?php endif ?>
								<li style="max-width: 120px;">
									<a href="#" id="title-about">
										<?php echo esc_html( $title_about ); ?>
									</a>
									<!-- Dropdown Box Starts here -->
									<?php
									if ( have_rows( 'related_links_about', 'option' ) ) :
										?>
										<ul class="menu">
											<?php
											while ( have_rows( 'related_links_about', 'option' ) ) :
												the_row();
												$link = get_sub_field( 'link' );
												if ( $link ) :
													$link_url    = $link['url'];
													$link_title  = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<li>
														<a href="<?php echo esc_url( $link_url ); ?>"
														target="<?php echo esc_attr( $link_target ); ?>">
														<?php echo esc_html( $link_title ); ?>
														</a>
													</li>
													<?php
												endif;
											endwhile;
											?>
										</ul>
										<?php
									endif;
									?>
								</li>
								<li style="max-width: 120px;">
									<a href="#" id="title-hcp">
									<?php echo esc_html( $title_hcp ); ?></a>
									<!-- Dropdown Box Starts here -->
									<?php
									if ( have_rows( 'related_links_hcp', 'option' ) ) :
										?>
										<ul class="menu">
											<?php
											while ( have_rows( 'related_links_hcp', 'option' ) ) :
												the_row();
												$link = get_sub_field( 'link' );
												if ( $link ) :
													$link_url    = $link['url'];
													$link_title  = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<li>
														<a href="<?php echo esc_url( $link_url ); ?>"
														target="<?php echo esc_attr( $link_target ); ?>">
														<?php echo esc_html( $link_title ); ?>
														</a>
													</li>
													<?php
												endif;
											endwhile;
											?>
										</ul>
										<?php
									endif;
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="navbar-header">
		<div class="grid-container">
			<div class="grid-x navbar-header__grid">
				<div class="cell small-4">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo esc_url( $logo['url'] ); ?>" width="330"
						alt="<?php echo esc_attr( $logo['alt'] ); ?>">
					</a>
				</div>
				<div class="cell small-offset-1 small-3 navbar-header__helpline">
					<h5>
						<?php echo esc_html( $helpline_text ); ?>
						<br/>
						<span style="font-size: 48px;">
			<?php echo esc_html( $helpline_number ); ?>
		  </span>
					</h5>
				</div>
				<div class="cell small-2 navbar-header__donate">
					<?php
					$cta_button = get_field( 'cta_button', 'option' );
					if ( $cta_button ) :
						$cta_button_url    = $cta_button['url'];
						$cta_button_title  = $cta_button['title'];
						$cta_button_target = $cta_button['target'] ? $cta_button['target'] : '_self';
						?>
						<a href="<?php echo esc_url( $cta_button_url ); ?>"
						target="<?php echo esc_attr( $cta_button_target ); ?>"
						class="button warning large">
						<?php echo esc_html( $cta_button_title ); ?>
						</a>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Background Image -->
<?php
if ( $is_front_page ) :
	?>
	<div class="background-banner" style="background-image: url(<?php echo esc_url( $hero_image['url'] ); ?>)">
	<?php endif ?>
		<section class="grid-container" id="navbar-menu">
			<div class="grid-x">
				<div class="cell small-10 navbar-menu">
					<ul class="dropdown menu text-center navbar-menu__list" data-dropdown-menu data-closing-time="1000">
						<?php
						while ( have_rows( 'mega_menu', 'option' ) ) :
							the_row();
							?>
							<?php
							$title = get_sub_field( 'title' );
							$image = get_sub_field( 'image' );
							?>
							<li>
								<a href="#" class="first-links">
								<?php echo esc_html( $title ); ?>
								</a>
								<!-- Dropdown Box Starts here -->
								<ul class="menu">
									<div class="submenu__wrapper">
										<div class="submenu__image">
											<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
										</div>
										<div class="submenu__content">
											<h2 class="title first-bold">
											<?php echo esc_html( $title ); ?>
											</h2>
											<div class="links">
												<?php
												while ( have_rows( 'related_links' ) ) :
													the_row();
													$link = get_sub_field( 'link' );
													if ( $link ) :
														$link_url    = $link['url'];
														$link_title  = $link['title'];
														$link_target = $link['target'] ? $link['target'] : '_self';
														?>
														<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
															<?php echo esc_html( $link_title ); ?>
															<i class="fas fa-chevron-right"></i></a>
														<?php
													endif;
												endwhile;
												?>
											</div>
										</div>
									</div>
								</ul>
							</li>
							<?php
						endwhile;
						?>
						<?php
						if ( $page_id !== 561 ) :
							?>
							<li role="none" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true"
								aria-label="Find a Service">
								<a href="#" class="first-links" role="menuitem">Find a Service</a>

								<!-- Dropdown Box Starts here -->
								<ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu=""
									role="menubar">
									<div class="submenu__wrapper">
										<div class="submenu__image">
											<img src="<?php echo $icon_hospital['url']; ?>" alt="Icon hospital">
										</div>
										<div class="submenu__content">
											<h2 class="title first-bold"><strong>Find</strong> a Service</h2>
											<form action="/osteoporosis-you/find-a-health-service/#find-service"
											method="get" onkeydown="return event.key !== 'Enter';">
												<div class="links" id="find-services" style="min-width: 300px;">
													<?php dynamic_sidebar( 'sidebar1' ); ?>
												</div>
											</form>
										</div>
									</div>
								</ul>
							</li>
							<?php
						endif;
						?>
					</ul>
				</div>
			</div>
		</section>
	<?php if ( $is_front_page ) : ?>
	</div>
	<?php endif ?>
