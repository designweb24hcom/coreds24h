<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mega_Store
 */

?>

	</div><!-- #content -->
	<!-- Footer Start -->
    <footer id="colophon" class="site-footer footer" role="contentinfo">
    	<?php if(get_theme_mod('mega_store_show_footer_widgets', true)): ?>
        <div class="container-fluid footer-widgets">
            <div class="container">
				<div class="row ms-widgets">
					<?php 
						$footer_widget  = array(
							'name' 			=> esc_html__( 'Footer Widget Area', 'mega-store' ),
							'id' 			=> 'footer-widget-area',
							'description' 	=> esc_html__( 'footer widget area', 'mega-store' ),
							'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 widget footer-widget">',
							'after_widget'  => '</div>',
							'before_title'  => '<div class="widget-heading"><h3 class="widget-title">',
							'after_title'   => '</h3></div>',
						);

					   if ( is_active_sidebar( 'footer-widget-area' ) ) {
							 dynamic_sidebar( 'footer-widget-area'); 
						 }else{ 
							the_widget('WP_Widget_Calendar', 'title='.esc_attr__('Calendar', 'mega-store'), $footer_widget);
							the_widget('WP_Widget_Categories', null, $footer_widget);
							the_widget('WP_Widget_Pages', null, $footer_widget);
							the_widget('WP_Widget_Archives', null, $footer_widget);
						} 
					?>
				</div>
            </div>
        </div>
    	<?php endif; ?>
        <div class="conatainer-fluid footer-bar">
            <div class="container">
                <div class="col-md-6 col-sm-6 footer-copy">
                    <p>&copy; <?php echo esc_html(date_i18n(__('Y', 'mega-store'))).' '; bloginfo( 'name' ); ?> | <?php printf( esc_html__( 'Theme by %1$s', 'mega-store' ),  '<a href="'.esc_url('https://www.themefarmer.com').'" rel="designer">Theme Farmer</a>' ); ?></p>
                </div>
                <div class="col-md-6 col-sm-6 footer-right">
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
    <!-- Footer End -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
