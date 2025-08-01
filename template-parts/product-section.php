<?php
/**
 * Product Section Template Part
 */

$section_title = get_query_var('section_title');
$section_subtitle = get_query_var('section_subtitle');
$section_products = get_query_var('section_products');
$view_all_link = get_query_var('view_all_link');
?>

<section class="py-16" style="background-color: hsl(var(--background));">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: hsl(var(--foreground));">
                <?php echo esc_html($section_title); ?>
            </h2>
            <p class="text-lg" style="color: hsl(var(--muted-foreground));">
                <?php echo esc_html($section_subtitle); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-8">
            <?php foreach ($section_products as $product) : ?>
                <div class="product-card group cursor-pointer">
                    <div class="aspect-square relative overflow-hidden rounded-t-lg">
                        <img 
                            src="<?php echo esc_url($product['image']); ?>" 
                            alt="<?php echo esc_attr($product['title']); ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <?php if (isset($product['discount']) && $product['discount']) : ?>
                            <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                <?php echo esc_html($product['discount']); ?> OFF
                            </div>
                        <?php endif; ?>
                        <?php if (isset($product['is_out_of_stock']) && $product['is_out_of_stock']) : ?>
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                                <span class="text-white font-bold text-lg">Out of Stock</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sm mb-2 line-clamp-2" style="color: hsl(var(--foreground));">
                            <?php echo esc_html($product['title']); ?>
                        </h3>
                        <div class="flex items-center space-x-2">
                            <span class="font-bold text-lg" style="color: hsl(var(--foreground));">
                                <?php echo esc_html($product['price']); ?>
                            </span>
                            <?php if (isset($product['original_price']) && $product['original_price']) : ?>
                                <span class="text-sm line-through" style="color: hsl(var(--muted-foreground));">
                                    <?php echo esc_html($product['original_price']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <?php if (!isset($product['is_out_of_stock']) || !$product['is_out_of_stock']) : ?>
                            <button class="w-full mt-3 bg-yellow-500 text-black py-2 rounded font-semibold hover:bg-yellow-400 transition-colors">
                                Add to Cart
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="<?php echo esc_url($view_all_link); ?>" class="inline-block bg-pink-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-pink-700 transition-colors">
                View All Products
            </a>
        </div>
    </div>
</section>