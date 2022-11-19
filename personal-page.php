<?php
/**
 * @package personal-page
 * @version 1.7.2
 */
/**
 * Plugin Name:  Personal Page
 * Plugin URI:   https://wordpress.org/plugins/personal-page/
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Kane
 */


function getName()
{
    $name = 'Castillano, Kane Erryl G. || Bachelor of Science in Information Technology  || June 15, 2022';
    return $name;
}

function getPicture()
{
    echo <<<HTML
    <html>
    <body>
    <img src="https://static.vecteezy.com/system/resources/previews/000/350/111/non_2x/vector-male-student-icon.jpg" alt="Boy Graduate" width="400" height="200">
    </body>
    </html>
    HTML;

}
function spotifyPlaylist()
{ 
    echo <<<HTML
    <html>
    <body>
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/6tta89nDrBhjnINqayj1Sa?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </body>
    </html>
    HTML;
}




function personal_page_activate()
{
    error_log('Personal Page Plugin is now activated');
}

function personal_page_deactivate()
{
    error_log('Personal Page Plugin is now deactivated');
}

register_activation_hook( __FILE__, 'personal_page_activate' );
register_deactivation_hook( __FILE__, 'personal_page_deactivate' );
add_shortcode( 'getName', 'getName' );
add_shortcode( 'getPicture', 'getPicture' );
add_shortcode( 'spotifyPlaylist', 'spotifyPlaylist' );