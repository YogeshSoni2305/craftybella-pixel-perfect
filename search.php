<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>

<div class="container mx-auto px-4 py-8">
    <header class="page-header mb-8">
        <h1 class="text-4xl font-bold mb-4" style="color: hsl(var(--foreground));">
            <?php
            printf(esc_html__('Search Results for: %s', 'ratnaasya'), '<span class="text-pink-600">' . get_search_query() . '</span>');
            ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
        <div class="space-y-6">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md p-6'); ?>>
                    <header class="entry-header">
                        <h2 class="text-2xl font-semibold mb-2">
                            <a href="<?php the_permalink(); ?>" style="color: hsl(var(--foreground));">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="entry-meta text-sm mb-4" style="color: hsl(var(--muted-foreground));">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                            <span class="byline">by <?php the_author(); ?></span>
                        </div>
                    </header>

                    <div class="entry-summary" style="color: hsl(var(--foreground));">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="entry-footer mt-4">
                        <a href="<?php the_permalink(); ?>" class="inline-block bg-yellow-500 text-black px-4 py-2 rounded font-semibold hover:bg-yellow-400 transition-colors">
                            <?php esc_html_e('Read More', 'ratnaasya'); ?>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <?php
        the_posts_navigation(array(
            'prev_text' => esc_html__('Older posts', 'ratnaasya'),
            'next_text' => esc_html__('Newer posts', 'ratnaasya'),
        ));
        ?>

    <?php else : ?>
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Nothing found', 'ratnaasya'); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ratnaasya'); ?></p>
                
                <div class="mt-6">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>