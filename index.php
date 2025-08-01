<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="min-h-screen" style="background-color: hsl(var(--background));">
    <?php 
    // Include all the sections
    get_template_part('template-parts/announcement-bar');
    get_template_part('template-parts/promo-banner');
    get_template_part('template-parts/category-navigation');
    get_template_part('template-parts/hero-banner');
    
    // Product sections
    $products = get_craftybella_products();
    
    // Rakshabandhan section
    set_query_var('section_title', 'Rakshabandhan');
    set_query_var('section_subtitle', 'Thoughtful gift to your sister');
    set_query_var('section_products', $products['rakshabandhan']);
    set_query_var('view_all_link', '/collections/rakshabandhan-special');
    get_template_part('template-parts/product-section');
    
    // Premium Combos section
    set_query_var('section_title', 'Premium Combos');
    set_query_var('section_subtitle', 'Make Her Smile with These All-in-One Gift Boxes');
    set_query_var('section_products', $products['premium_combos']);
    set_query_var('view_all_link', '/collections/earrings-jhumkas-combos');
    get_template_part('template-parts/product-section');
    
    // Buy Any 10 section
    set_query_var('section_title', 'Buy Any 10 @649');
    set_query_var('section_subtitle', 'Your Faves, Your Combo, One Price');
    set_query_var('section_products', $products['buy_any_10']);
    set_query_var('view_all_link', '/collections/buy-any-10-649');
    get_template_part('template-parts/product-section');
    
    // Newsletter section
    get_template_part('template-parts/newsletter');
    ?>
</div>

<?php get_footer(); ?>