<?php
/**
 * Hero Banner Template Part
 */
?>

<section class="relative overflow-hidden bg-gradient-to-r from-pink-500 to-purple-600 text-white">
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Discover Beautiful
                    <span class="text-yellow-400">Jewelry</span>
                </h1>
                <p class="text-xl mb-8 text-white/90">
                    Traditional and contemporary designs crafted with love. Find the perfect piece for every occasion.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <button class="bg-yellow-500 text-black px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-colors">
                        Shop Now
                    </button>
                    <button class="border border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-pink-600 transition-colors">
                        View Collections
                    </button>
                </div>
            </div>
            <div class="text-center">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/hero-banner.jpg" 
                    alt="Beautiful Jewelry Collection" 
                    class="rounded-lg shadow-2xl max-w-full h-auto"
                    style="max-height: 500px; object-fit: cover;"
                />
            </div>
        </div>
    </div>
</section>