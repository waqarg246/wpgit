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
define( 'DB_NAME', 'u113319438_react_app' );

/** Database username */
define( 'DB_USER', 'u113319438_react_app' );

/** Database password */
define( 'DB_PASSWORD', 'U113319438_react_app' );
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
define( 'AUTH_KEY',         '-HEEN|^z70-#rpnrS,suWnaayZ)s{l 1Q7.hjka7L?}Kga,HO<FnCoRkQbWwvyg+' );
define( 'SECURE_AUTH_KEY',  't:=uI6).l^Ad1aXr-z[]3XAQ=_^w(2BC)?n5v_:,@(j?3Y??R(_bR~J&tMmKe[:,' );
define( 'LOGGED_IN_KEY',    '/$G${N9%VSJyl( [aYtD@=V0R(=*dT=t|liqB,BFF4kyd;*KLs3sq20O>!q_Q(t[' );
define( 'NONCE_KEY',        '6@F*{W/m`,*$T}C1HHc])2b:+J`*!T>sZWfA{mF6SAF8(j<fDRtPt:`8+vi~z6$P' );
define( 'AUTH_SALT',        'VEa`zYcD<4m&Y^3g:IBnaG{4{S@VnATDXfeTA_bj[c2(LT,+@N)a]&HW6id~l9A+' );
define( 'SECURE_AUTH_SALT', '/c?,$^8],3:hq,<t|i;=D(Jbsjl2%/5/[t^Mqw(1Ot:;xc(W!n |F)got76MDP2]' );
define( 'LOGGED_IN_SALT',   'cyn>G{B*YPUBRee6  CKnC?3~uT6[S7bw1/C@q6ln_EP^uctU;nO}mbh+xHsJ]Tp' );
define( 'NONCE_SALT',       '?>DYeR`2l6.J7]Lp/<,kjQFP.#VZsRYj<2$>:>b]Nauv:(ywRyo2kh4M#&JH6Z%8' );

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

