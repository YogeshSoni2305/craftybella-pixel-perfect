<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="container mx-auto px-4 py-8">
    <header class="page-header mb-8">
        <?php
        the_archive_title('<h1 class="text-4xl font-bold mb-4" style="color: hsl(var(--foreground));">', '</h1>');
        the_archive_description('<div class="archive-description" style="color: hsl(var(--muted-foreground));">', '</div>');
        ?>
    </header>

    <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="p-6">
                        <header class="entry-header">
                            <h2 class="text-xl font-semibold mb-2">
                                <a href="<?php the_permalink(); ?>" style="color: hsl(var(--foreground));">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="entry-meta text-sm mb-4" style="color: hsl(var(--muted-foreground));">
                                <span class="posted-on"><?php echo get_the_date(); ?></span>
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
                <h1 class="page-title"><?php esc_html_e('Nothing here', 'ratnaasya'); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location.', 'ratnaasya'); ?></p>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>