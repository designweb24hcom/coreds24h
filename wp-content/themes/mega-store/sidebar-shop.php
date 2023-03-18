<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mega_Store
 */
if(mega_store_woocommerce_layout() !== 'col-md-12'){
	?>

	<aside id="secondary" class="col-md-3 col-sm-12 col-xs-12 mgs-sidebar" role="complementary">
	<?php
	if (is_active_sidebar( 'woocommerce-widget-area' ) ) {
		 dynamic_sidebar( 'woocommerce-widget-area' ); 
	}else{

		$args = array(
			'name'          => esc_html__( 'WooCommerce Sidebar', 'mega-store' ),
			'id'            => 'woocommerce-widget-area',
			'widget_id'     => 'woocommerce-widget-area',
			'class'         => 'woocommerce-widget-area',
			'description'   => esc_html__( 'WooCommerce Widget Area', 'mega-store' ),
			'before_widget' => '<div id="%1$s" class="woocommerce-widget sidebar-widget widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<div class="widget-heading"><h3 class="widget-title">',
	        'after_title'   => '</h3></div>',
		);
		if(mega_store_is_wc()){
			
			the_widget('WC_Widget_Product_Categories', 'title='.esc_html__('Categories', 'mega-store'), $args);
			the_widget('WC_Widget_Price_Filter', 'title='.esc_html__('Price Filter', 'mega-store'), $args);
			the_widget('WC_Widget_Cart', 'title='.esc_html__('Cart', 'mega-store'), $args);
			the_widget('WC_Widget_Recently_Viewed', 'title='.esc_html__('Recently Viewed Products', 'mega-store'), $args);
			the_widget('WC_Widget_Top_Rated_Products', 'title='.esc_html__('Top Rated Products', 'mega-store'), $args);
			
		}

	}
	?>
	</aside><!-- #secondary -->
<?php 
}