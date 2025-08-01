<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<div class="container mx-auto px-4 py-8">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>
            <header class="entry-header mb-8">
                <h1 class="text-4xl font-bold mb-4" style="color: hsl(var(--foreground));">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="entry-content prose prose-lg max-w-none" style="color: hsl(var(--foreground));">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ratnaasya'),
                    'after'  => '</div>',
                ));
                ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>