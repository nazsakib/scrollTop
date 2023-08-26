(function ($) {
    jQuery(document).ready(function () {
        jQuery(window).scroll(function () {
            var difHigh = jQuery(window).scrollTop();

            if (difHigh > 100) {
                jQuery(".scroll-to-top").fadeIn();
            } else {
                jQuery(".scroll-to-top").fadeOut();
            }
        });

        jQuery(".scroll-to-top a").on("click", function () {
            jQuery("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
    });
})(jQuery);
