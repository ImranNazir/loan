<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader animsition">
	<header class="header">
		<!--------------- Header Top ---------------->
		<section class="header-top padding-top-10 padding-bottom-10 text-center-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<?php do_action('themetim_header_social'); ?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<ul class="list-inline header-info text-right">
							<?php do_action('themetim_header_account'); ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--------------- Header Bottom ---------------->
		<section class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!--------------- Primary Menu ---------------->
						<nav class="navbar navbar-default text-uppercase primary-menu">
							<div class="logo pull-left">
								<?php
								if (get_theme_mod('site_logo') != '') : ?>
									<a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" class="img-responsive" alt="" /></a>
								<?php else : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
								<?php endif ?>
							</div>
							<div class="text-right mini-cart-search pull-right">
								<ul class="list-inline margin-bottom-0">
									<li>
										<a class="search" href="#" data-toggle="modal" data-target="#search-pop"><i class="fa fa-search"></i></a>
									</li>
									<li>
										<?php
										if ( class_exists( 'WooCommerce' ) ) : if(get_theme_mod( 'cart_enable', '1' )) :
											?>
											<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-basket"></i> <?php echo WC()->cart->get_cart_total(); ?> <span class="badge"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
											<?php
										endif; endif; ?>
									</li>
								</ul>
							</div>
							<div class="navbar-header pull-right">
								<button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="navbar-collapse" class="navbar-collapse collapse pull-right">
								<?php
								if ( has_nav_menu( 'primary' ) ) :
									wp_nav_menu( array('menu'              => 'primary', 'theme_location'    => 'primary', 'depth'             => 5, 'container'         => '', 'menu_id' 			=> 'primary-menu', 'container_class'   => 'collapse navbar-collapse', 'container_id'      => 'bs-example-navbar-collapse-1', 'menu_class'        => 'nav navbar-nav', 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback', 'walker'            => new wp_bootstrap_navwalker()));
								else: echo '<p class="margin-top-10 pull-left text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Primary Menu</a> </p>';
								endif; ?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
	</header>
	<?php if ( class_exists( 'WooCommerce' ) && !is_front_page()) {?>
		<!--------------- Woo Breadcrumb ---------------->
		<section class="breadcrumb-wrap text-capitalize">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php woocommerce_breadcrumb(); ?>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
	<!-- Search Modal -->
	<div class="modal fade search-pop" id="search-pop" tabindex="-1" role="dialog" aria-labelledby="request-a-quote">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form role="search" method="get" class="search-fix position-relative" action="<?php echo home_url( '/' ); ?>">
						<input type="search" class="search-field form-control"
							   placeholder="<?php echo esc_attr_x( 'Search', 'themetim' ) ?>"
							   value="<?php echo get_search_query() ?>" name="s" />
						<button type="submit" class="btn"><i class="fa fa-long-arrow-right fa-2x"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>