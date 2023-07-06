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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'bcf~pd-k`NGEPh=Gm[Jsz[Oy](8r2?zM33Yp$lS4^0e +.Z/c[:hQaeM`[Z9`E~h' );
define( 'SECURE_AUTH_KEY',  '9pp qqY[:+A^V9H6q9}:~is=y_^~T[0CTnsM`L}3*#Um, UPsT)z9^jDhwO>K!Hx' );
define( 'LOGGED_IN_KEY',    'aB9_N<e{).*U^uwVQrpC1)]vzkA_7L9WiHcH0hgsgJ?%)9KdY?dkGVAA!<F>5 %d' );
define( 'NONCE_KEY',        'iQWfeY%IM{WF0z5 uQcPC3Z5.kLV@7,Z-h:Yw*r_-9P*wpyp)F1+s{2Fk^{V-=c(' );
define( 'AUTH_SALT',        'Q^xjh6nt#P.fJG!{|4H QSaH9+~Z7&Va%hS0FOJm7f/B|L@|$p,)}Y:%Oe4eMtMk' );
define( 'SECURE_AUTH_SALT', 'VZE$#0/9KDIKzHsU Flp%+][Rk#C>}r7$Y$.e+3_Jg]O: K]$T;+KG5qqMar7l,a' );
define( 'LOGGED_IN_SALT',   'w`mN{iy=5,yh031Bv,30}<g|8p!d[=_Pf;Qw+1hck@%:5.6Z93$1u^jq;^<L T71' );
define( 'NONCE_SALT',       'Gd;$u<WO=n]!!F9g2S8YvA})3J!:Uc%x,qWk<gpWCYi_~KoEKHA[#{MY(/!BH_[{' );

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
