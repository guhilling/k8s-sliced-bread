<?php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress-user' );
define( 'DB_PASSWORD', 'wordpress-password' );
define( 'DB_HOST', 'wordpress-mysql' );
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         'Z->~t$Y,h)`#Pd&#hxUz!Pk<nL.46(U#VX4hzd3XY_cE;YERBu`}zK{nxd^6A*Jf' );
define( 'SECURE_AUTH_KEY',  'Vk6CXz{hEy^4-E@N+5z 1Xu:xj39seW4}kx;MYSi|RXUWqGR$XC+*#dO/xf$#>BT' );
define( 'LOGGED_IN_KEY',    '~YntF*<a?uw:$zVwpi1U?,`vcA.]6e]GYd@=[yp?]zmikn9bXtdTzS.<Zfr< 6pY' );
define( 'NONCE_KEY',        '{5@gR4pL}8|aKJ]51>;^$]epA:UYAXhpAK$f>]j>BnzP-]0Uk_7KzvRn-0A8@__2' );
define( 'AUTH_SALT',        'mYWnz?s.vtQ4.4t71/[N0RKVjoW18Ey?[&Xf:]BX^<yrYd-Pkg%9jw##yP 0Wbyt' );
define( 'SECURE_AUTH_SALT', 'Uw5Y*-jr6iZ4u@.o_Jk.g.x055jach/&z:pBUsHx^(o60n:]Sl?,lq0ZtC). =hN' );
define( 'LOGGED_IN_SALT',   'mCH;l4.~inf/@g<$uSVXPrK2pvG$AG<QlYNF3x?{=O`lsI,`^Z@w%8&MN/{FkPYC' );
define( 'NONCE_SALT',       'avPCiy3Z{ZzOQbWJb{n;hXmF:F6sA5kzLGmV5] AIGQ=a} ~:!aG)U*9E:<_H)Mv' );

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
