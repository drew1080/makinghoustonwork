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
define('DB_NAME', 'davidcob_wor7');

/** MySQL database username */
define('DB_USER', 'davidcob_wor7');

/** MySQL database password */
define('DB_PASSWORD', 'klw0EPf8');

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
define('AUTH_KEY',         ']}+~d+yRw.y)DDyeLs4LO`7VWWoR|EzU{s^Rn0~6O~R&xFtuqK]p#^}$jSwvVTCr');
define('SECURE_AUTH_KEY',  'y,YEhbt2`NR*=c)t%5d#V:?UOTG$| 5kEkX3`8S|A[<<%KVuU5^|+6_~+6!-YFQ-');
define('LOGGED_IN_KEY',    'IGI&v||q&o?Gs+/l<CN~}uM|z0o=1uu|PFu`OKfbdYQ`z*1o|!k_;]P^M[Et,4.q');
define('NONCE_KEY',        ' [*l][,V<0CuTJm?I#Pa(^<-|Hdlaeo`~[hN=8rc^K%^2aL:Bhzt>6w?T&m8bUxj');
define('AUTH_SALT',        'F`J_`1*W&<Udo$}}H&[4as2G=|~@W:[&OuUk|FpOH?k2sB5^l=;poe<:FDjAixH!');
define('SECURE_AUTH_SALT', 'qPvb~29,-2b8XJULOyJ{6)V0yqkCyq&])#s_JZSBU I}j~6$nvWC[Y:5Px,=G<;0');
define('LOGGED_IN_SALT',   '),I+<9RB2;OKaOy[1`~fSCf^JzT+w3s,aZ(|U|jJFz|*ZCdJJX*46;R2Gl G[yj<');
define('NONCE_SALT',       'Ae>PL>YB>F$KdGxT[pKpd@`TbW,>?GCy!Id_&cOd-Zn O[lb -(R+Eedk *,Fl,+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sxn_';

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
