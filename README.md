# CraftyBella WordPress Theme

A pixel-perfect WordPress theme based on the CraftyBella.in website, converted from React to PHP.

## Installation

1. Copy all theme files to your WordPress themes directory: `/wp-content/themes/craftybella/`
2. Copy the actual image files from the React project to the `assets/` directory
3. Activate the theme in WordPress Admin → Appearance → Themes
4. Customize the theme through WordPress Customizer

## Features

- Pixel-perfect clone of CraftyBella.in homepage
- Responsive design using Tailwind CSS
- Product showcase sections
- Newsletter subscription
- SEO optimized
- WordPress standard compliant

## File Structure

```
craftybella/
├── style.css              # Main stylesheet with theme info
├── functions.php          # Theme functionality
├── index.php             # Main template
├── header.php            # Header template
├── footer.php            # Footer template
├── js/
│   └── main.js           # Custom JavaScript
├── assets/               # Image assets
│   ├── earrings-set.jpg
│   ├── gift-hamper.jpg
│   ├── hero-banner.jpg
│   ├── jewelry-collection.jpg
│   └── jhumka-sample.jpg
└── template-parts/       # Reusable template parts
    ├── announcement-bar.php
    ├── promo-banner.php
    ├── category-navigation.php
    ├── hero-banner.php
    ├── product-section.php
    └── newsletter.php
```

## Customization

- Product data is stored in `functions.php` in the `get_craftybella_products()` function
- Colors and styling can be modified in `style.css`
- Layout changes can be made in the respective template files

## Requirements

- WordPress 5.0+
- PHP 7.4+
- No additional plugins required (theme includes all functionality)

## Notes

- Images need to be copied manually from the React project
- The theme uses Tailwind CSS via CDN for easy maintenance
- Product data is hardcoded - in production, you might want to use WooCommerce or custom post types

---

## Original React Project Info

**URL**: https://lovable.dev/projects/0a6ab804-dab8-4906-8e9c-3ab98baa48dc

This WordPress theme was converted from the original React project built with Vite, TypeScript, React, shadcn-ui, and Tailwind CSS.
