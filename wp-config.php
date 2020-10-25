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
define( 'DB_NAME', 'Ferry' );

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
define( 'AUTH_KEY',         ',WO>)INET$zO{sCN>5X]1:8<:SDy>0>b=x, %R5tz3~# < `kUFGUq@S ppZq6D-' );
define( 'SECURE_AUTH_KEY',  ' -IHm7PI8Xb4[{$,$}Y;i/[l)i6SSL@~1;>T{U9ubfhJW7ET{Y?k7^Hf_{i?/Pl|' );
define( 'LOGGED_IN_KEY',    'pbiStH{~8ZPvHW 2XBHqLvx4m&Q:Nb>`DyJ%k>[it?u=9Q(OT/ 5ruhGmQAGK@.]' );
define( 'NONCE_KEY',        'qZVc* =1f9H$LqrK{VEcyxujD]cjPpl{F.igG2x`TmVSu[TC&G/;Ds^Wqg<jzknM' );
define( 'AUTH_SALT',        '8[ ^R@,mWWGXLk.V[@^R @Rpw=>cIDxR#G(}F2>%,9xiE{ypoAyeQc;]8~e=Pt*U' );
define( 'SECURE_AUTH_SALT', '}odNg<1e@0QsdwQ]{T_&a]u42!x~m<9{ex/MaP0dbhgq(m&IpN<6]Dl6TNdo$,Z_' );
define( 'LOGGED_IN_SALT',   '%<gV=P)PkHk/dRT<*-,e~+D8%m>L_6J3t2RioVaMz_#1s;<Mx@o!AsyF}Gi6#596' );
define( 'NONCE_SALT',       '>&8k|R>Ozel>tO!)/&N5=?9p|nIpc(Dk2@|86MN,uS n|~=_i/^As^t21NY|Z_~w' );

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
