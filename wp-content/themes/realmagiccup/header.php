<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = 'navbar-dark'; // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'realmagiccup' ); ?></a>

<div id="wrapper">
	<header>
		<nav id="header" class="navbar navbar-expand-lg <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container d-flex justify-content-between">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'realmagiccup' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="navbar" class="collapse navbar-collapse">
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
				</div><!-- /.navbar-collapse -->
				<!-- <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a> -->
				

				<div id="navbar" class="collapse navbar-collapse justify-content-lg-end">
				<div class="header__dc">
					<span class="d-none d-lg-flex">
						Dołącz na nasz serwer
					</span>
						<a target="_blank" href="/discord">
							<div class="dc-btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="105.879" height="28.936" viewBox="0 0 105.879 28.936">
									<g id="Group_3" data-name="Group 3" transform="translate(0)">
									<g id="Group_1" data-name="Group 1" transform="translate(34.086 6.056)">
										<rect id="Rectangle_4" data-name="Rectangle 4" width="3.269" height="12.958" transform="translate(11.644 0.19)" fill="#fff"/>
										<path id="Path_1" data-name="Path 1" d="M5351.125-131.571h-4.845v5.443l3.225,2.9v-5.282h1.721c1.095,0,1.635.525,1.635,1.372v4.042c0,.846-.511,1.415-1.635,1.415h-4.961v3.079h4.845c2.6.015,5.034-1.284,5.034-4.261v-4.348C5356.159-130.243,5353.722-131.571,5351.125-131.571Z" transform="translate(-5346.266 131.76)" fill="#fff"/>
										<path id="Path_2" data-name="Path 2" d="M5545.459-131.571h-4.844v5.443l3.225,2.9v-5.282h1.722c1.094,0,1.634.525,1.634,1.372v4.042c0,.846-.511,1.415-1.634,1.415H5540.6v3.079h4.859c2.6.015,5.035-1.284,5.035-4.261v-4.348C5550.494-130.243,5548.056-131.571,5545.459-131.571Z" transform="translate(-5478.701 131.76)" fill="#fff"/>
										<path id="Path_3" data-name="Path 3" d="M5402.685-127.117c-1.007-.219-1.678-.584-1.722-1.211.058-1.5,2.378-1.561,3.735-.117l2.145-1.649a5.321,5.321,0,0,0-4.421-2.072c-2.378,0-4.684,1.342-4.684,3.881,0,2.466,1.9,3.794,3.984,4.115,1.065.146,2.247.569,2.218,1.3-.088,1.386-2.948,1.313-4.247-.263l-2.072,1.941a5.679,5.679,0,0,0,4.407,2.349c2.378,0,5.02-1.372,5.122-3.881C5407.3-125.891,5404.99-126.694,5402.685-127.117Z" transform="translate(-5381.264 132.166)" fill="#fff"/>
										<path id="Path_4" data-name="Path 4" d="M5513.579-127.264c-.073-3.035-2.145-4.261-4.815-4.261h-5.18v12.958h3.312v-4.115h.584l3.006,4.115h4.086l-3.531-4.451C5512.6-123.514,5513.579-124.871,5513.579-127.264Zm-4.757,1.751H5506.9v-2.962h1.926A1.482,1.482,0,1,1,5508.822-125.513Z" transform="translate(-5453.475 131.729)" fill="#fff"/>
										<path id="Path_5" data-name="Path 5" d="M5434.209-123.234h0V-127.7c0-1.605,2.889-1.97,3.765-.365l2.67-1.08a4.8,4.8,0,0,0-4.552-2.977c-2.6,0-5.166,1.5-5.166,4.421v4.465c0,2.948,2.568,4.421,5.107,4.421a5.211,5.211,0,0,0,4.669-2.9l-2.86-1.313C5437.142-121.235,5434.209-121.672,5434.209-123.234Z" transform="translate(-5403.959 132.135)" fill="#fff"/>
										<path id="Path_6" data-name="Path 6" d="M5469.77-132.12c-2.685,0-5.355,1.459-5.355,4.45v4.421c0,2.962,2.685,4.451,5.384,4.451s5.355-1.488,5.355-4.451v-4.421C5475.154-130.646,5472.455-132.12,5469.77-132.12Zm2.1,8.872c0,.934-1.05,1.415-2.086,1.415s-2.1-.452-2.1-1.415v-4.421c0-.949,1.021-1.459,2.043-1.459,1.065,0,2.145.452,2.145,1.459Z" transform="translate(-5426.782 132.135)" fill="#fff"/>
									</g>
									<g id="Group_2" data-name="Group 2">
										<ellipse id="Ellipse_1" data-name="Ellipse 1" cx="1.488" cy="1.605" rx="1.488" ry="1.605" transform="translate(13.964 12.14)" fill="#fff"/>
										<path id="Path_7" data-name="Path 7" d="M5267.858-113.063a1.541,1.541,0,0,0-1.488,1.605,1.551,1.551,0,0,0,1.488,1.605,1.542,1.542,0,0,0,1.488-1.605A1.532,1.532,0,0,0,5267.858-113.063Z" transform="translate(-5257.732 125.203)" fill="#fff"/>
										<path id="Path_8" data-name="Path 8" d="M5261.794-151.178h-19.553a3,3,0,0,0-2.991,2.991v19.553a3,3,0,0,0,2.991,2.992h16.547l-.773-2.67,1.868,1.722,1.765,1.62,3.152,2.729v-25.945A3.018,3.018,0,0,0,5261.794-151.178Zm-5.633,18.9s-.525-.627-.963-1.167a4.626,4.626,0,0,0,2.641-1.722,8.321,8.321,0,0,1-1.678.861,10.452,10.452,0,0,1-2.116.628,10.218,10.218,0,0,1-3.78-.015,11.152,11.152,0,0,1-2.145-.627,8.641,8.641,0,0,1-1.065-.5c-.044-.029-.087-.044-.131-.073-.029-.015-.044-.029-.058-.029-.263-.146-.409-.248-.409-.248a4.563,4.563,0,0,0,2.554,1.707c-.438.555-.978,1.2-.978,1.2a5.3,5.3,0,0,1-4.451-2.2,19.263,19.263,0,0,1,2.1-8.434,7.23,7.23,0,0,1,4.086-1.517l.146.175a9.578,9.578,0,0,0-3.823,1.9s.321-.175.861-.409a11.432,11.432,0,0,1,3.312-.919,1.436,1.436,0,0,1,.249-.029,12.343,12.343,0,0,1,2.947-.029,12.139,12.139,0,0,1,4.392,1.386,9.581,9.581,0,0,0-3.634-1.838l.2-.233a7.2,7.2,0,0,1,4.086,1.517,19.266,19.266,0,0,1,2.1,8.434A5.348,5.348,0,0,1,5256.162-132.282Z" transform="translate(-5239.25 151.178)" fill="#fff"/>
									</g>
									</g>
								</svg>                      
							</div>
						</a>
					</div>
				</div>
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class=<?php if ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
