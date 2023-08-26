<?php

/*

Plugin Name: Dot Plugin
Plugin URI: dotplugin.com
AUthor: Sakib
Author URI: sakib.com
Description: My first plugin.
Version: 1.0.0

*/

add_action('wp_footer', 'myFunction');
function myFunction()
{
    ?>

    <div class="scroll-to-top">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>

    <?php
}
;

add_action('wp_enqueue_scripts', 'plugin_styles');
function plugin_styles()
{
    wp_enqueue_style('plugin-fontawesome', PLUGINS_URL('css/fontawesome.min.css', __FILE__));

    wp_enqueue_style('plugin-custom', PLUGINS_URL('css/custom.css', __FILE__));

    wp_enqueue_script('plugin-custom-js', PLUGINS_URL('scripts/custom.js', __FILE__), array('jQuery'), '', false);
}
;