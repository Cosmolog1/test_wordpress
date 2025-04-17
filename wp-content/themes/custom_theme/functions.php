<?php
add_shortcode('artiste_price', 'simplon_artiste_price');

function simplon_artiste_price()
{
    //permet de récuperer un evaleur dynamique définie par acf
    $price = get_field("prix_du_billet");
    return "<p>" . $price . "</p>";
}
