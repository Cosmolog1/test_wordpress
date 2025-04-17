<?php
/*
Plugin Name: custom_css_js
Description: Ajout de fichiers CSS/JS personnalisés
*/

function cssjspersoCSS()
{
    wp_enqueue_style('custom_css_js', plugins_url('custom_css_js/custom_css/custom_css.css'));
}
function cssjspersoJS()
{
    wp_enqueue_script('custom_css_js', plugins_url('custom_css_js/custom_js/custom_js.js'));
}

if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'cssjspersoCSS', 15);
    add_action('wp_enqueue_scripts', 'cssjspersoJS', 15);
} else {


    /* Si on utilise Gutenberg */
    add_action('enqueue_block_editor_assets', 'cssjspersoGutenberg', 15);

    function cssjspersoGutenberg()
    {
        add_editor_style('cssjsperso-gut', plugins_url('custom_css_js/custom_css/custom_css.css'));
    }
}
