<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);

    require( 'wp-config-local.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-cruise.php' ) ) {

    // Playground Environment
    define('WP_ENV', 'cruise');
    define('WP_DEBUG', true);

    require( 'wp-config-cruise.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-prod.php' ) ) {

    // Production Environment
    define('WP_ENV', 'prod');
    define('WP_DEBUG', false);

    require( 'wp-config-prod.php' );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bw>lv1BvC&z=d@b|e &h5oc.k$]8Z|{uaYPi 3j-{@Ok9!-|EifgoRQnUD7s|-+.');
define('SECURE_AUTH_KEY',  '{2d;zwR7$uz iKNZ{A1F/A:iu!Eb28}ZjizSsXD6+nIln7|2P0XSW;}x}ohzI_ i');
define('LOGGED_IN_KEY',    '5vPMW?ux)+~f1_,pV!3&{5.-oWqEibAsu|@0(:Wo|`C5&?9-8C}DlDAqiMB]y*<T');
define('NONCE_KEY',        'e|b2N(E8.+|W8;m/uS24?hT!L,c;AoT#vq.t0Hr;@F?4&Cc6/n8(2,Wt)wyyHHs;');
define('AUTH_SALT',        'Y|]|u^d@L]E!(*-Kp]ONg:(B-3CyVT_.>qsh,%|+|D+gbuSF?O.9v!RR062#X~VJ');
define('SECURE_AUTH_SALT', 'gtP} <?c(i,Z.I|yWABBRv-4w$+R>+)5A,:oq>zX;R#}sZ|(3CPX^?r %!U59yrW');
define('LOGGED_IN_SALT',   '1FGn:[DBXTQ-O7+MbS@+3aV`qEi+2,/@7(L5(Y {]W)OR3_F+Of& L_@Y4_q0w;!');
define('NONCE_SALT',       'd?< /QeY?0cy+M.V=+vhCZ<#}Ou^#+$R9#,*-E<Z#s_ZSk]kEbQ%m]KA{B4aPh:|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
