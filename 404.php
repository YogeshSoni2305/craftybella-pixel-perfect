<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="container mx-auto px-4 py-16">
    <section class="error-404 not-found text-center">
        <header class="page-header mb-8">
            <h1 class="text-6xl font-bold mb-4" style="color: hsl(var(--ratnaasya-primary));">404</h1>
            <h2 class="text-3xl font-semibold mb-4" style="color: hsl(var(--foreground));">
                <?php esc_html_e('Oops! That page can&rsquo;t be found.', 'ratnaasya'); ?>
            </h2>
        </header>

        <div class="page-content max-w-2xl mx-auto">
            <p class="text-lg mb-8" style="color: hsl(var(--muted-foreground));">
                <?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ratnaasya'); ?>
            </p>

            <div class="mb-8">
                <?php get_search_form(); ?>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mt-12">
                <div>
                    <h3 class="text-xl font-semibold mb-4" style="color: hsl(var(--foreground));">
                        <?php esc_html_e('Popular Categories', 'ratnaasya'); ?>
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Earrings', 'ratnaasya'); ?></a></li>
                        <li><a href="#" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Necklaces', 'ratnaasya'); ?></a></li>
                        <li><a href="#" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Rings', 'ratnaasya'); ?></a></li>
                        <li><a href="#" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Bracelets', 'ratnaasya'); ?></a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4" style="color: hsl(var(--foreground));">
                        <?php esc_html_e('Quick Links', 'ratnaasya'); ?>
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo home_url(); ?>" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Home', 'ratnaasya'); ?></a></li>
                        <li><a href="<?php echo home_url('/shop'); ?>" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Shop', 'ratnaasya'); ?></a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('About Us', 'ratnaasya'); ?></a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-pink-600 hover:text-pink-700"><?php esc_html_e('Contact', 'ratnaasya'); ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-12">
                <a href="<?php echo home_url(); ?>" class="inline-block bg-pink-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-pink-700 transition-colors">
                    <?php esc_html_e('Return to Homepage', 'ratnaasya'); ?>
                </a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>