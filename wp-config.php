<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'tN!#fRp3}DRGvLO3E68hyf8Qrmcg![P hB56,XV@8<&{u#W~Ve6p49&?N^@_Y-^c' );
define( 'SECURE_AUTH_KEY',  'ghoZK^_,SN|13?U_nZ4SbP|E[m`7 U?R `D%4(X(h9j-Zd9I:EbIrB$oymXV~)|j' );
define( 'LOGGED_IN_KEY',    '$gb;c)#qYD@ab? S9Z4S2N~0W0lqRhjDNt{ypeq~lb5~df8cV=zfpj_M u$;gIGP' );
define( 'NONCE_KEY',        '>+vKn2MV0UK<4)r+8Q J(|,gYi2)E%1=Ykb~J$.*&Pf$I}%T:T,mj!+x]_m?W S~' );
define( 'AUTH_SALT',        'Fw[zfq3Nepgor@SFurPR-N+4bQdhA*9lu.1.h,B2MIM;dGx]^^35fWUg??+@[VXj' );
define( 'SECURE_AUTH_SALT', 'CxP6$`e,9rST`N)M$&51W 697iTSk~w/%6zd)qKFl5G!SSw$-LyK(oP=4j?9*u4J' );
define( 'LOGGED_IN_SALT',   'LQmm,2S51|lnOH.uujR[0>=x[$?1kw`ImiSS.8sZ7DxV]DrF{sZ+VCa&w>>hfZXW' );
define( 'NONCE_SALT',       'JNq6j/fgIrg-l^@1RZo&:F?Qfx$HMTkM5b1z5Ns$jryTRJXap< }b{TCzn5V$e>J' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
