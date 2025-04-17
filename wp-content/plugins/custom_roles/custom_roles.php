<?php
/*
* Plugin Name: Custom roles
*/
// add_action(
//     'init',
//     function () {
//         $ver = 42; // Incrementally update each time this code is changed.

//         // Check if this has been run already.
//         if ($ver <= get_option('myplugin_roles_version')) {
//             return;
//         }

// Add a Corrector role.
function custom_roles_add_role()
{
    $editorRoleCapabilities = get_role('editor')->capabilities;
    add_role('musician', 'Musician', $editorRoleCapabilities);

    $authorRoleCapabilities = get_role('author')->capabilities;
    add_role('artiste', 'Artiste', $authorRoleCapabilities);
}
function custom_roles_remove_role()
{
    remove_role('musician');
    remove_role('artiste');
    remove_role('artiste');
}
register_activation_hook(__FILE__, 'custom_roles_add_role');
register_deactivation_hook(__FILE__, 'custom_roles_remove_role');



        // add_role(
        //     'corrector',
        //     'Corrector',
        //     [
        //         'read'                 => true,
        //         'edit_posts'           => true,
        //         'edit_others_posts'    => true,
        //         'edit_private_posts'   => true,
        //         'edit_published_posts' => true,
        //         'read_private_posts'   => true,
        //         'edit_pages'           => false,
        //         'edit_others_pages'    => false,
        //         'edit_private_pages'   => false,
        //         'edit_published_pages' => false,
        //         'read_private_pages'   => true,
        //     ]
        // );

        // // Update the version to prevent this running again.
        // update_option('myplugin_roles_version', $ver);
//     },



// );
