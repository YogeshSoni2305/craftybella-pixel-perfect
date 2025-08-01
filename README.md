# RATNAASYA WordPress Theme

A beautiful, responsive WordPress theme designed for jewelry e-commerce websites with full WooCommerce support.

## Features

✨ **Fully Responsive Design** - Looks perfect on desktop, tablet, and mobile devices
🛒 **WooCommerce Ready** - Complete e-commerce functionality out of the box
🎨 **Modern Design** - Clean, professional layout with beautiful animations
⚡ **Fast Loading** - Optimized for performance with minimal dependencies
🔧 **Customizable** - Easy to customize colors, fonts, and layout
📱 **Mobile First** - Designed with mobile users in mind
🌙 **Dark Mode Ready** - Built-in support for light and dark themes

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- WooCommerce plugin (for e-commerce functionality)

## Installation

### Method 1: Upload via WordPress Admin

1. Download the theme files as a ZIP archive
2. Go to your WordPress admin panel
3. Navigate to **Appearance > Themes**
4. Click **Add New** then **Upload Theme**
5. Choose the ZIP file and click **Install Now**
6. Activate the theme

### Method 2: FTP Upload

1. Extract the theme files
2. Upload the `ratnaasya` folder to `/wp-content/themes/`
3. Go to **Appearance > Themes** in WordPress admin
4. Activate the RATNAASYA theme

## Setup & Configuration

### 1. Install Required Plugins

For full functionality, install these recommended plugins:

- **WooCommerce** - E-commerce functionality
- **Contact Form 7** - Contact forms
- **Yoast SEO** - Search engine optimization

### 2. Import Demo Content (Optional)

The theme includes sample product data that will be automatically available after activation.

### 3. Customize Your Site

#### Logo & Branding
- Go to **Appearance > Customize > Site Identity**
- Upload your logo and set site title

#### Colors & Typography
- Navigate to **Appearance > Customize > Colors**
- Customize primary and secondary colors
- Adjust typography settings

#### Menus
- Go to **Appearance > Menus**
- Create and assign menus to:
  - Primary Menu (header navigation)
  - Footer Menu (footer links)

#### Widgets
- Navigate to **Appearance > Widgets**
- Configure footer widget areas

### 4. WooCommerce Setup

1. Install and activate WooCommerce
2. Run the WooCommerce setup wizard
3. Configure your store settings:
   - Currency and location
   - Payment gateways (PayPal, Stripe, etc.)
   - Shipping methods
   - Tax settings

## Theme Structure

```
ratnaasya/
├── style.css              # Main stylesheet with theme info
├── index.php              # Homepage template
├── header.php             # Site header
├── footer.php             # Site footer
├── functions.php          # Theme functions and features
├── woocommerce.php        # WooCommerce wrapper template
├── page.php               # Standard page template
├── single.php             # Single post template
├── archive.php            # Archive pages template
├── search.php             # Search results template
├── searchform.php         # Search form template
├── 404.php                # 404 error page
├── css/
│   └── woocommerce.css    # WooCommerce specific styles
├── js/
│   └── main.js            # Theme JavaScript
├── assets/                # Theme images and assets
├── template-parts/        # Reusable template components
│   ├── announcement-bar.php
│   ├── category-navigation.php
│   ├── hero-banner.php
│   ├── newsletter.php
│   ├── product-section.php
│   └── promo-banner.php
└── README.md              # This file
```

## Customization

### Child Theme (Recommended)

For extensive customizations, create a child theme to preserve your changes during theme updates:

1. Create a new folder: `/wp-content/themes/ratnaasya-child/`
2. Create `style.css`:

```css
/*
Theme Name: RATNAASYA Child
Template: ratnaasya
Version: 1.0
*/

@import url("../ratnaasya/style.css");

/* Your custom styles here */
```

3. Create `functions.php`:

```php
<?php
function ratnaasya_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'ratnaasya_child_enqueue_styles');
```

### Color Customization

Edit the CSS variables in `style.css`:

```css
:root {
  --ratnaasya-primary: 350 75% 45%;    /* Primary brand color */
  --ratnaasya-secondary: 45 100% 50%;  /* Secondary brand color */
}
```

### Adding Custom Sections

1. Create new template parts in `/template-parts/`
2. Include them in `index.php` or other templates:

```php
get_template_part('template-parts/your-section');
```

## Troubleshooting

### Common Issues

**Issue: WooCommerce styles not loading**
- Solution: Make sure WooCommerce plugin is activated
- Clear any caching plugins

**Issue: Images not displaying**
- Solution: Check file paths in `/assets/` folder
- Ensure proper file permissions

**Issue: Newsletter form not working**
- Solution: Install a contact form plugin like Contact Form 7
- Configure the form action in `template-parts/newsletter.php`

### Support

For theme support and customization help:
- Check WordPress documentation
- Review WooCommerce documentation
- Test with default WordPress themes to isolate issues

## Changelog

### Version 1.0
- Initial release
- Complete WooCommerce integration
- Responsive design implementation
- SEO optimization
- Performance optimization

## License

This theme is licensed under the GPL v2 or later.

## Credits

- Built with modern WordPress standards
- Uses Tailwind CSS for styling
- Icons from Heroicons
- Fonts from Google Fonts (Inter & Poppins)

---

**RATNAASYA.IN** - Crafted with ❤️ for beautiful jewelry stores
