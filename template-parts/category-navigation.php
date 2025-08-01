<?php
/**
 * Category Navigation Template Part
 */
?>

<nav class="bg-white shadow-sm border-b" style="border-color: hsl(var(--border));">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-center space-x-8 py-4 overflow-x-auto">
            <?php
            $categories = array(
                'Earrings' => '#',
                'Necklaces' => '#',
                'Rings' => '#',
                'Bracelets' => '#',
                'Bangles' => '#',
                'Anklets' => '#',
                'Combos' => '#',
                'Gift Sets' => '#',
            );
            
            foreach ($categories as $category => $link) :
            ?>
                <a href="<?php echo $link; ?>" class="text-gray-700 hover:text-yellow-500 font-medium whitespace-nowrap transition-colors">
                    <?php echo $category; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>