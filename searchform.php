<?php
/**
 * Search form template
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="flex">
        <label class="sr-only" for="search-field"><?php esc_html_e('Search for:', 'ratnaasya'); ?></label>
        <input 
            type="search" 
            id="search-field" 
            class="flex-1 px-4 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-pink-500" 
            style="border-color: hsl(var(--border)); background-color: hsl(var(--background)); color: hsl(var(--foreground));"
            placeholder="<?php echo esc_attr_x('Search jewelry...', 'placeholder', 'ratnaasya'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
        />
        <button 
            type="submit" 
            class="px-6 py-2 bg-pink-600 text-white rounded-r-md hover:bg-pink-700 transition-colors"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="sr-only"><?php esc_html_e('Search', 'ratnaasya'); ?></span>
        </button>
    </div>
</form>