<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u3N=ly6kzpr&9ey_`M!Z3SmQl0-6+.^&m9)T{-/*f,<%Jw9KHrbl2rzk&ER<):ps');
define('SECURE_AUTH_KEY',  '~Co)*_f1;lxZFTl*g`<cd*+9=8:FdI$O<Lf$VPQ$s76VgVowTpY`aTrQ.T1)UC;)');
define('LOGGED_IN_KEY',    'rLU;nrn8DKMj61a]K&,P4aZG,PZM#15c.P|B[&r`V}.>ycChzhJ t+_Y7T|#-xKd');
define('NONCE_KEY',        'gi%SUPCLELUViZvpXT.bGukBnfC[*Ja&t_fj5!xo.%J_})s-nQTcD:y{c~m ^UN#');
define('AUTH_SALT',        '*,i =~ENP_:o~}z4VowYF HJ?b2D#OkEk%m7%R2g|/-FaW|kZ,zR]0XMfZi2`klu');
define('SECURE_AUTH_SALT', '3%bR#ATSDY6{W1=~%bH*:Y<<MS|Qsz]_A)8FFJdbRRR.3g9mFZx[gT%AC5-I>,F$');
define('LOGGED_IN_SALT',   'N)Ah)Uit4c@ROV( ]zaZnu7U+HBrFJ1Jh&R_Q$zsNd}oLV*$1*67rLYkPl`uIR1{');
define('NONCE_SALT',       'dNFn*;TF27iXZcoYMux##C)_ge1j$~+Q-nfg0K_~8)NM4T1psD%h]Kong,]Cuptq');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**
 * The base configuration for WordPress
 * ...
 * @package WordPress
 */

// Force l'affichage des erreurs PHP.
@ini_set('display_errors', 'On');
// Désactive l'interception des erreurs fatales
define('WP_DISABLE_FATAL_ERROR_HANDLER', true); // 5.2 and later
// Active le mode de déboggage
//define('WP_DEBUG', true);
// Affiche les erreurs de Wordpress
//define('WP_DEBUG_DISPLAY', true);
  // ** MySQL settings - You can get this info from your web host ** //
