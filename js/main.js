/**
 * RATNAASYA Theme JavaScript
 */

(function($) {
    'use strict';

    // Document ready
    $(document).ready(function() {
        
        // Newsletter form submission
        $('form[action="#newsletter-signup"]').on('submit', function(e) {
            e.preventDefault();
            
            var email = $(this).find('input[name="newsletter_email"]').val();
            
            if (email) {
                // Here you would typically send the email to your server
                alert('Thank you for subscribing! You will receive our latest updates.');
                $(this).find('input[name="newsletter_email"]').val('');
            }
        });

        // Product hover effects
        $('.product-card').hover(
            function() {
                $(this).addClass('hover');
            },
            function() {
                $(this).removeClass('hover');
            }
        );

        // Add to cart functionality (placeholder)
        $(document).on('click', '.product-card button', function(e) {
            e.preventDefault();
            var productTitle = $(this).closest('.product-card').find('h3').text();
            alert('Added "' + productTitle + '" to cart!');
        });

        // Mobile menu toggle (if you add mobile menu later)
        $('.mobile-menu-toggle').on('click', function() {
            $('.mobile-menu').toggleClass('open');
        });

        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });

        // Search form enhancement
        $('.search-form input').on('focus', function() {
            $(this).parent().addClass('focused');
        }).on('blur', function() {
            $(this).parent().removeClass('focused');
        });

    });

    // Window load
    $(window).on('load', function() {
        // Hide loading spinner if you have one
        $('.loading-spinner').fadeOut();
    });

    // Window scroll
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        
        // Add shadow to header on scroll
        if (scrollTop > 10) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
    });

})(jQuery);