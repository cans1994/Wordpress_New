<?php

/**
 * composer
 */

// chargement de l'autoloading de composer
$autoloadphp = get_template_directory() . '/vendor/autoload.php';
if (file_exists($autoloadphp))
    require $autoloadphp;

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define('DISALLOW_FILE_EDIT', true);

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set('Europe/Paris');
// choix du réglage régional
setlocale(LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-15');

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles()
{
    // chargement d'un fichier CSS
    //wp_enqueue_style('style', get_stylesheet_directory_uri() . 'css/main.css', []);
    // chargement de bootstrap (CSS)
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', []);
    // chargement du style.css
    wp_enqueue_style('style', get_stylesheet_uri(), []);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

/**
 * JS
 */


// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script()
{
    // chargement d'un fichier JS
    //wp_enqueue_script('my-theme-main', get_stylesheet_directory_uri() . '/js/main.js', []);
    // chargement de bootstrap (JS)
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', []);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_script');

/**
 * fonctionnalités du thème
 */


function my_theme_menu_class($classes)
{
    $classes[] = 'nav_item';
    return $classes;
}

function my_theme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

// activation de la fonctionnalité des balises HTML5
add_theme_support('html5');
// activation de la fonctionnalité du titre du site
add_theme_support('title-tag');
// activation de la fonctionnalité des vignettes
add_theme_support('post-thumbnails');
//activation de la fonctionnalité du menu
//add_theme_support('menus');
//activation de la fonctionnalité du logo
add_theme_support('custom-logo');

register_nav_menu('header', 'En tête du menu');

register_nav_menu('footer', 'Pied de page');


add_filter('nav_menu_css_class', 'my_theme_menu_class');

add_filter('nav_menu_link_attributes', 'my_theme_menu_link_class');
