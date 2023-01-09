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
define( 'DB_NAME', 'school_db' );

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
define( 'AUTH_KEY',         'Xm~PYg9@,Bl]~:q;QTDz#5vg2*~*y0<PgkeX`YS1j.^^:sQ{[r7op*u>W>cqEnNT' );
define( 'SECURE_AUTH_KEY',  'Ph{8j&yhC,M!^ +ekCY7o[;ZT7_lvF,]WaniRK)}++$T{ErRT.=I.{fi2 ,,~+9y' );
define( 'LOGGED_IN_KEY',    'rEOansPCV c}j&zv|8_yI?M(^]Uep1huBPn9801jI?6#fg0R^{`g($h,xo1/[,-)' );
define( 'NONCE_KEY',        'I%`h%<~uZ9Ud}|3vNZK,vukH!3UFH)vt.A1XyAn6zl$jR7otF?/;.E]=hPI=jjOd' );
define( 'AUTH_SALT',        ';=VYv@0A?:9D%{l[GVvg-IhzI:+^gG0$UC6*&=w+}RE>E0cRnb;l0!Hi`]W2RfY[' );
define( 'SECURE_AUTH_SALT', '{MwSBh7Vx96f&AATNtOJ^[T*L<O*U-w(ex67hM(#[j;f~YI/D[2^etA_{x?<X6W)' );
define( 'LOGGED_IN_SALT',   '7~eq>%r0=Ly2.&)$pW6glN8[y$!eP_r;Z${TpjpbABSLVi$#,q,9@~.yZ!m#`G-l' );
define( 'NONCE_SALT',       '4dVGhOVWk-FvyfJ>n1(2HP>.fp%nA?u!|C>*Ye*>fghfx3+WL7-3snv|TebFsh2j' );

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
