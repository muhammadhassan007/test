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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         ':Lv;uE53|emc[P*1kz/g|U8hM~x/(ltu 3I=~enzoqo=J8_-uZy_NI*NciPK$)~x' );
define( 'SECURE_AUTH_KEY',  'iFl #gf8U9GJPacHMr>#9p?pD=E0!BX!<?;RA:SqPD_^NG$@I/x+NLlZg&ydfQuF' );
define( 'LOGGED_IN_KEY',    't.m#`v=R%*n?#jJt-T*I0ud$=JzEABSFX@5W(DMm9Aj$SzsE_ok+zUPqJixhCZdf' );
define( 'NONCE_KEY',        ';vHQYk:;>dq)Xz|bym:jC.DL8l#rC5%GKuVAI9 U_!=2zT2)L&GbE4;vnZ2b*{y>' );
define( 'AUTH_SALT',        'TEZ]F+m7F. S_nww>k)N8f=~r`9%&nE.NXv|XK@OGq5F:>xmV-Z~m>/xY/l9_Jja' );
define( 'SECURE_AUTH_SALT', '*T0XXq8M/HzF,%a3G(XK98x`tVg(`wklJpBp&&oS3W~DOd?u4bUn4p=QAKhq<gyi' );
define( 'LOGGED_IN_SALT',   '^q8qeD*I3ClVB@Ym3;y *jI{<DH*yURS~<OZ?`9o?$mS7t:IK@K(%~mt>wq[-4@*' );
define( 'NONCE_SALT',       '55LrjEs72iNwfn[!Y$l9Oj3UzsN&:>$ZAaDJ#/bo1[ ;!pQe;Y|_e%|QDk6ly_N%' );

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
