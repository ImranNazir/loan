<?php

/**
 * Load SiteOrigin Widgets.
 */
if ( class_exists( 'SiteOrigin_Widget' ) ) {
    require get_template_directory() . '/inc/widget/our-process/our-process.php';
    require get_template_directory() . '/inc/widget/contact-details/contact-details.php';
    require get_template_directory() . '/inc/widget/testimonial/testimonial.php';
    require get_template_directory() . '/inc/widget/brand/brand.php';
    require get_template_directory() . '/inc/widget/pricing/pricing.php';
    require get_template_directory() . '/inc/widget/fact/fact.php';
    require get_template_directory() . '/inc/widget/portfolio/portfolio.php';
    require get_template_directory() . '/inc/widget/team/team.php';
    require get_template_directory() . '/inc/widget/service/service.php';
    require get_template_directory() . '/inc/widget/editor/editor.php';
    require get_template_directory() . '/inc/widget/camera-slider/camera-slider.php';
}