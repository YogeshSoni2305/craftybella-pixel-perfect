<?php
/**
 * RATNAASYA Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function ratnaasya_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ratnaasya'),
        'footer' => __('Footer Menu', 'ratnaasya'),
    ));
    
    // Add WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'ratnaasya_setup');

// Enqueue styles and scripts
function ratnaasya_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('ratnaasya-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap', array(), null);
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('ratnaasya-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ratnaasya_scripts');

// Register widget areas
function ratnaasya_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'ratnaasya'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in your footer.', 'ratnaasya'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'ratnaasya_widgets_init');

// Custom product data (in a real WordPress theme, this would come from WooCommerce or custom post type)
function get_ratnaasya_products() {
    return array(
        'rakshabandhan' => array(
            array(
                'id' => '1',
                'title' => 'Royal Rakshabandhan Gift Hamper',
                'price' => '₹ 649.00',
                'original_price' => '₹ 1,349.00',
                'discount' => '52%',
                'image' => get_template_directory_uri() . '/assets/gift-hamper.jpg',
            ),
            array(
                'id' => '2',
                'title' => 'Rakshabandhan Edition with 9 Oxidised Beauties & Chocolate',
                'price' => '₹ 699.00',
                'original_price' => '₹ 1,599.00',
                'discount' => '56%',
                'image' => get_template_directory_uri() . '/assets/earrings-set.jpg',
            ),
            array(
                'id' => '3',
                'title' => 'Raakhi Sparkle Set – 12 Piece Oxidised Gift Hamper',
                'price' => '₹ 799.00',
                'original_price' => '₹ 1,799.00',
                'discount' => '56%',
                'image' => get_template_directory_uri() . '/assets/gift-hamper.jpg',
            ),
            array(
                'id' => '4',
                'title' => 'Rakshabandhan Luxury Jewellery Gift Hamper',
                'price' => '₹ 849.00',
                'original_price' => '₹ 1,999.00',
                'discount' => '58%',
                'image' => get_template_directory_uri() . '/assets/jewelry-collection.jpg',
            ),
            array(
                'id' => '5',
                'title' => 'Rakshabandhan Queen\'s Gift Hamper',
                'price' => '₹ 1,249.00',
                'original_price' => '₹ 2,799.00',
                'discount' => '55%',
                'image' => get_template_directory_uri() . '/assets/gift-hamper.jpg',
                'is_out_of_stock' => true,
            ),
        ),
        'premium_combos' => array(
            array(
                'id' => '6',
                'title' => 'The Royal Traditional Combo Hamper',
                'price' => '₹ 599.00',
                'original_price' => '₹ 1,299.00',
                'discount' => '54%',
                'image' => get_template_directory_uri() . '/assets/jewelry-collection.jpg',
            ),
            array(
                'id' => '7',
                'title' => 'Lavish Jewellery Combo Hamper For Her With Personalised Card!',
                'price' => '₹ 499.00',
                'original_price' => '₹ 899.00',
                'discount' => '44%',
                'image' => get_template_directory_uri() . '/assets/gift-hamper.jpg',
            ),
            array(
                'id' => '8',
                'title' => 'Premium Royal Traditional Combo Hamper by RATNAASYA',
                'price' => '₹ 999.00',
                'original_price' => '₹ 1,999.00',
                'discount' => '50%',
                'image' => get_template_directory_uri() . '/assets/earrings-set.jpg',
            ),
            array(
                'id' => '9',
                'title' => 'Luxury Jewellery Combo hamper With Ferrero Rocher for Her!',
                'price' => '₹ 799.00',
                'original_price' => '₹ 1,999.00',
                'discount' => '60%',
                'image' => get_template_directory_uri() . '/assets/jewelry-collection.jpg',
            ),
            array(
                'id' => '10',
                'title' => 'Elegant Korean Jewellery Gift Hamper Perfect Gift!',
                'price' => '₹ 1,099.00',
                'original_price' => '₹ 2,799.00',
                'discount' => '61%',
                'image' => get_template_directory_uri() . '/assets/gift-hamper.jpg',
                'is_out_of_stock' => true,
            ),
        ),
        'buy_any_10' => array(
            array(
                'id' => '11',
                'title' => 'Black gem work oxidised heavy jhumka',
                'price' => '₹ 99.00',
                'original_price' => '₹ 399.00',
                'discount' => '75%',
                'image' => get_template_directory_uri() . '/assets/jhumka-sample.jpg',
            ),
            array(
                'id' => '12',
                'title' => 'Peacock Grace oxidise Jhumka',
                'price' => '₹ 99.00',
                'original_price' => '₹ 199.00',
                'discount' => '50%',
                'image' => get_template_directory_uri() . '/assets/earrings-set.jpg',
            ),
            array(
                'id' => '13',
                'title' => 'Oxidise circle drop quality jhumka',
                'price' => '₹ 99.00',
                'original_price' => '₹ 229.00',
                'discount' => '57%',
                'image' => get_template_directory_uri() . '/assets/jhumka-sample.jpg',
            ),
            array(
                'id' => '14',
                'title' => 'Sunflower Oxidised Jhumka',
                'price' => '₹ 99.00',
                'original_price' => '₹ 199.00',
                'discount' => '50%',
                'image' => get_template_directory_uri() . '/assets/earrings-set.jpg',
            ),
            array(
                'id' => '15',
                'title' => 'Pearl Swirl German Silver Jhumki Earrings',
                'price' => '₹ 99.00',
                'original_price' => '₹ 199.00',
                'discount' => '50%',
                'image' => get_template_directory_uri() . '/assets/jhumka-sample.jpg',
            ),
        ),
    );
}

// Add custom body classes
function ratnaasya_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    if (is_woocommerce()) {
        $classes[] = 'woocommerce-page';
    }
    return $classes;
}
add_filter('body_class', 'ratnaasya_body_classes');

// WooCommerce customizations
function ratnaasya_woocommerce_setup() {
    // Remove default WooCommerce sidebar
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    
    // Change number of products per row
    add_filter('loop_shop_columns', function() {
        return 4;
    });
    
    // Change number of products per page
    add_filter('loop_shop_per_page', function() {
        return 20;
    });
}
add_action('after_setup_theme', 'ratnaasya_woocommerce_setup');

// Custom WooCommerce template modifications
function ratnaasya_woocommerce_product_thumbnails() {
    return 4;
}
add_filter('woocommerce_product_thumbnails_columns', 'ratnaasya_woocommerce_product_thumbnails');

// Add custom WooCommerce styles
function ratnaasya_woocommerce_styles() {
    if (is_woocommerce() || is_cart() || is_checkout()) {
        wp_enqueue_style('ratnaasya-woocommerce', get_template_directory_uri() . '/css/woocommerce.css', array(), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'ratnaasya_woocommerce_styles');
?>