<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white border-b" style="border-color: hsl(var(--border));">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <h1 class="text-2xl font-bold text-yellow-500 font-bold tracking-wider" style="font-family: 'Poppins', sans-serif;">
                    <a href="<?php echo home_url(); ?>">RATNAASYA.IN</a>
                </h1>
            </div>

            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 max-w-xl mx-8">
                <div class="relative w-full">
                    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                        <input
                            type="text"
                            name="s"
                            placeholder="Search for jewelry..."
                            value="<?php echo get_search_query(); ?>"
                            class="w-full px-4 py-2 pl-10 border rounded-md focus:outline-none focus:ring-2"
                            style="border-color: hsl(var(--border)); background-color: hsl(var(--background)); color: hsl(var(--foreground));"
                        />
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </form>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center space-x-4">
                <button class="hidden md:flex items-center justify-center p-2 rounded-md hover:bg-gray-100 transition-colors">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </button>
                <button class="relative flex items-center justify-center p-2 rounded-md hover:bg-gray-100 transition-colors">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-yellow-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
                        0
                    </span>
                </button>
                <button class="relative flex items-center justify-center p-2 rounded-md hover:bg-gray-100 transition-colors">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"></path>
                        <path d="M4 7v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7"></path>
                        <path d="M10 12h4"></path>
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-yellow-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
                        0
                    </span>
                </button>
            </div>
        </div>
    </div>
</header>