<?php
/**
 * Newsletter Template Part
 */
?>

<section class="py-16" style="background: linear-gradient(135deg, hsl(350 75% 45%), hsl(320 70% 50%));">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-4">
                Stay Updated with Latest Collections
            </h2>
            <p class="text-white/90 mb-8 text-lg">
                Subscribe to get special offers, free giveaways, and exclusive deals.
            </p>
            
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto" method="post" action="#newsletter-signup">
                <input
                    type="email"
                    name="newsletter_email"
                    placeholder="Enter your email"
                    required
                    class="flex-1 px-4 py-3 rounded-lg border-0 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
                <button type="submit" class="bg-white text-pink-600 hover:bg-gray-100 font-semibold px-8 py-3 rounded-lg transition-colors">
                    Subscribe
                </button>
            </form>
            
            <p class="text-white/70 text-sm mt-4">
                No spam, unsubscribe at any time.
            </p>
        </div>
    </div>
</section>