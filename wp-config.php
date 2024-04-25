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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Turki' );

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
define( 'AUTH_KEY',         'y$AZ!Xp*gy.tH8.q|Hw?+XMhLYo2:*yGy`N#@Kc W(e|5TOF1UU!vGgny1U5JC&M' );
define( 'SECURE_AUTH_KEY',  'bm<ZYHuTdu{T~|3oj|Su1R5f%WGNOb3onpmwu^&^7#;(y:(0M`ZB?d sdR%R#l-$' );
define( 'LOGGED_IN_KEY',    'y4JJmQSJcy/4$<wMqMpoEGv9Hb<3j@uGyIzC0%xaXVU(!CtN(o56b;+[Y3^joz_R' );
define( 'NONCE_KEY',        ')jt)f>#,&{cGJTIZ3gEai~,lUkB(k/i=s.b1t)FP7DR)%Kr=3e2fzZ1oRAs*cU-D' );
define( 'AUTH_SALT',        'DG?1IQ`95Zfp]::.S3J}D7~S~JP6_)D?ENcG{.}C;5}zF{^j#1E2|R:dyAwj%fee' );
define( 'SECURE_AUTH_SALT', 'qS8A+1FTWfu5=* jv-)mA DWfcFh5oE{zVL[GF#f=U`KrLb%<Zgl5jN.wyzUP6_r' );
define( 'LOGGED_IN_SALT',   'FowE(=NYfKBC|5`bQJ#LB:~Q?zt7sCAre[8(zj~NAXJoPlA0<s*_[2cofJ~?}Uf_' );
define( 'NONCE_SALT',       '@Y1U&G2 AQsZ@8Y!~VQ!aB(oO3;{yj*H*rl8z?R*M::NJa<K!Z;D,iz_R!]H9 Vj' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
