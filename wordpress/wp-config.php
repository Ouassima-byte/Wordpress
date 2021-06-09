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
define( 'DB_NAME', 'solicode' );

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
define( 'AUTH_KEY',         'Msn5}e:VE#N/L$jyaHyDQn,t*NW?%xbLMbyMRW7,,[ZSmy,.Z$V0*z`JO($041|F' );
define( 'SECURE_AUTH_KEY',  '-,%ByHpjsQ6e_*9~yP{rB?I>_eyN],|J,]#n*MpD?bX-?ZX4BUYo7hVdNDK!,zNI' );
define( 'LOGGED_IN_KEY',    '^XQ$4e>Sa@VgFdvywps;T :.5;yTL?;Ffx#fz:[byp#B.hb<&uv%[USJ*+@#aGBn' );
define( 'NONCE_KEY',        '8s5!}PA`GO3E!YHY)sD10R`u}(x69GQ`JP|4CMWH$qTb/-to4eZn^U?s ?_i?gfC' );
define( 'AUTH_SALT',        'U?kQ!2w,1pcpk KDR,jhPR@U AJj-DE(j!|FjQ<,|E;wEvxk^xjmJ!pzZA1JZ8#5' );
define( 'SECURE_AUTH_SALT', 'Z}:h;7c?tb HN8HhVUw@aO@Kee:du!ITNpEya+*Oe Ee[C:euisibYiu1fHl2EyQ' );
define( 'LOGGED_IN_SALT',   '=_%v<N;cH(x^R^zFTZ*9!^VL:d005[|XXl&y)iQp$F^h[1H9Dv^7k-0&7@{;s/(G' );
define( 'NONCE_SALT',       '!xI;t9oKOo&[*2~;xpHJ1k5>:RXwK:!3ogI),:B|qR}fp<v&:g:wt@1e_ML/mAe/' );

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
