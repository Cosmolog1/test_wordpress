<?php

/*
* Plugin Name: custom_artiste
*/

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function article_custom_post_type()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(

        // Le nom au pluriel
        'name'                => _x('Artistes', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Artiste', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Artiste'),
        // Les différents libellés de l'administration
        'public'      => true,
        'hierarchical' => false,
        'has_archive' => true,
        'add_new'             => __('Ajouter'),
        'edit_item'           => __("Editer l'artiste"),
        'update_item'         => __("Modifier l'artist"),
        'search_items'        => __('Rechercher un artist'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __('Artistes'),
        'description'         => __('Tous sur artiste'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array('title', 'content', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        /* 
		* Différentes options supplémentaires
		*/
        'show_in_rest' => false,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'artistes'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type('artistes', $args);
}

add_action('init', 'article_custom_post_type', 0);
