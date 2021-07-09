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
define( 'DB_NAME', 'wp_blog' );

/** MySQL database username */
define( 'DB_USER', 'primero' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'JMGm-XuY>{F*8m- B9]*g|cF)!^{|,u}*y47=?h]TAsnnS1@pvj#[6U:lFAQ*Dvy' );
define( 'SECURE_AUTH_KEY',  '(X:aju%[N*T!62(?7Z5FhbgN6 4l,MvR*LPS1Lo{O*G.Q2nA2<.X~M:}Z:pVJ6`H' );
define( 'LOGGED_IN_KEY',    'dcJ%5Gm,8T*NctZRjk3YeB(SZ2L&EAy]-5|8iXVNMzv0 _xCM`_E,AaX5_xINv{z' );
define( 'NONCE_KEY',        '!/XJ1t=uJ4aQ<<y{T#~*n->g2Pxd YJ>8.W#/Ba/nC,aVW~=gk@toDy}DZ5N:o}]' );
define( 'AUTH_SALT',        'obWRL=<RmYG|pZSrQpRdDR55~?5|,3}^{4oWq6<aN42PYd7THet}@erRADYh3+Ti' );
define( 'SECURE_AUTH_SALT', '; re{UH^n2F1SJHH(@2ub<|<QD%sI2@^XNOail5HH*}<EkdH,k>u^j+zw)1P8Q|p' );
define( 'LOGGED_IN_SALT',   '--BwbD)Ge}xgUB*v)CS*vZOsJuvmI.&|pZ%o6[x;f<QTg-b3FI&UXsC]uF$5bv>i' );
define( 'NONCE_SALT',       '$P$bI}2EosBEsm)U]<zX-O {n_DvhOsB3gp!rXg<MvsE.vx.fa{>TpV |C4_#<Lj' );

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
