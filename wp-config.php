<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apolitika' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0NHtO3B9SdL6@P!;>Ht5I4GWgCYy:5c5Va]$o%It%FKaxN[NZt!X:53q0V?m0DDm' );
define( 'SECURE_AUTH_KEY',  'e,+{Qu)%0Rs)3]/s0 @=U&h;s(+yj4^6.B|mAxB-n&&]V$WfirlJD:;:oPZp{RqR' );
define( 'LOGGED_IN_KEY',    'v8$>Zl)qIebBtrV!R29W?jp#GIekJsk;m.pMm ;#UK@*s8zU*rIx!j3|F$F )<4s' );
define( 'NONCE_KEY',        'hHKguo7<Xn]98+aHx ~TXBGzbx;:fz,4slpZN!?yK$79M>*%.m9G[U)}*B.GP74O' );
define( 'AUTH_SALT',        '+@xna;%)xq{?G6SVh[XcSe#6~SLc Wm^JL4;7)ZNS(}~DUlAl,{hIm3$VR/0W)U`' );
define( 'SECURE_AUTH_SALT', '$0*H/~a&C<GYGbKD0UH[6pe}&*TzTT/s:e>T;(hdN/)7xQhD!de3n[2uqY}<%o5_' );
define( 'LOGGED_IN_SALT',   'C8Kn/]Ga{i6ZMhzqK#?t>.]0.HYRWbd|jK*2S*%q|7P8t[6Vc%-zl-hSfo9p@nlI' );
define( 'NONCE_SALT',       '.-=t6FOmi{g:j2y4O|=U-3)6d;l:=5Suo1;txsN1bX^F`qGi-DfS($fl#Y/Yo/5h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
