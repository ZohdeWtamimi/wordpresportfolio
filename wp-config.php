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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'k/ 2}=w9|VF{43LhEwJH#gf8JwS]rqLT(x5%K(jS_jt-D%F20w <qCC?[_pN%XBq' );
define( 'SECURE_AUTH_KEY',  '<H1:#_#4MoCf~Hn`bxN6x-)Fkfz KFBNQ7Ik3&//?V@MrTg7emjjEKQ{EEm!{89D' );
define( 'LOGGED_IN_KEY',    'nDxRdw5wEbLF>mD9j-;NgY%fW_2+at*9j?D(U(}]!c9B| %EkMla/D:?Lm.*>$]#' );
define( 'NONCE_KEY',        'nUP(-Kc6vox/G%X0H%qRFY_*Bv+pOeYXaaQLXAE*r+BK0b@X0=;77}.QJk_#h<XM' );
define( 'AUTH_SALT',        '+KUOg3J<JR4Sh>hOh//6U8tE~5K{rIv8TNCXw%1&Rh`K}t#V%+uPn|qH6dAhE5Va' );
define( 'SECURE_AUTH_SALT', '9OPA<[,]RuO5*s>m8{?5U65GxO3AO6X]AXu|Xls6yL!f,JH0a:hFVUfwx0%oLCnx' );
define( 'LOGGED_IN_SALT',   '!EreW87vQMV*pUCZ(sjd_5;Ckt7U$>~Y?)Nzd:mBF2i<-r`|7:}3U7:ncxQs/L5$' );
define( 'NONCE_SALT',       'vLK6z?fyu_=N:lP9nOTj},!*=?w3zl8.:E5lJsX*A~[tXv%U;E]S0,L*8P=>m6F#' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
