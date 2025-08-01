<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<div class="container mx-auto px-4 py-8">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>
            <header class="entry-header mb-8">
                <h1 class="text-4xl font-bold mb-4" style="color: hsl(var(--foreground));">
                    <?php the_title(); ?>
                </h1>
                
                <div class="entry-meta text-sm" style="color: hsl(var(--muted-foreground));">
                    <span class="posted-on">
                        <?php echo get_the_date(); ?>
                    </span>
                    <span class="byline">
                        by <?php the_author(); ?>
                    </span>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail mb-8">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded-lg')); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content prose prose-lg max-w-none" style="color: hsl(var(--foreground));">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ratnaasya'),
                    'after'  => '</div>',
                ));
                ?>
            </div>

            <footer class="entry-footer mt-8">
                <?php
                $categories_list = get_the_category_list(esc_html__(', ', 'ratnaasya'));
                if ($categories_list) {
                    printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'ratnaasya') . '</span>', $categories_list);
                }

                $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'ratnaasya'));
                if ($tags_list) {
                    printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'ratnaasya') . '</span>', $tags_list);
                }
                ?>
            </footer>
        </article>

        <?php
        the_post_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ratnaasya') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ratnaasya') . '</span> <span class="nav-title">%title</span>',
        ));

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>