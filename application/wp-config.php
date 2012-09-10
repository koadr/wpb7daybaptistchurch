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
define('DB_NAME', 'wpb_seventh_day_baptist_church_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DH;[0O;KI#4/[]O/TuFoT|2Nw+#&.u+33,+~xvNiY(03bI|[N~f2@OTC2[RZj0Jd');
define('SECURE_AUTH_KEY',  'VhG:+ SEPz).(J-+o[/vg%z0Wzk,quE9@kThq0xdTpQF)TZy(7gup[c4{(fg{D3-');
define('LOGGED_IN_KEY',    '3+|YH[@GiVDz4sKREiVAw(v2*NRl~D#Jt<.,q_Hvy#g`Z(>ss9wF0 JM&;217atB');
define('NONCE_KEY',        'ht5NF}}L+!zxM=D+`jI )cl^l+9F_A^0k)@ne%O<LE/#WcRY*^gFE;e?LY !H1pL');
define('AUTH_SALT',        '-H;>cygi>aiaeLlC|W3ZSJAu!Z7#?&&Oth}F-fk9_39(]fDz)X=&|+dR</[<(|P$');
define('SECURE_AUTH_SALT', 'Wwz|]5ASAxX;<Pg(R{~8s/{a|B)vY=p!35`(V^u,Uh,B*eUIS~0i=D/jNRt80%2+');
define('LOGGED_IN_SALT',   'M-slD^Z6fzl*S)*.)@uUW]$ZRy|CNtblwzh#1ENc~B,wTtHBPXSQ=6:&C?{? Nm ');
define('NONCE_SALT',       'S-i_Mq%{CgXu?-JVO+h-s~tCKEibxz6K=-bqiQi/-lk .M5uwj4@9L/r`/#W4PN&');

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

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
