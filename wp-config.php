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
define( 'DB_NAME', 'mons' );

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
define( 'AUTH_KEY',         'U /-P,F1J/h>f2mYjSPqn2=s9s=L #~MlrS!32 D1}uoh0Ci1{^1!6P~S0HV6od-' );
define( 'SECURE_AUTH_KEY',  '3=p~rV^X[X[`Scz&nr*9v/@aug/fR(,al_,Y9}G}jpjQ|ycg 6InR1j?`bd/7FLh' );
define( 'LOGGED_IN_KEY',    'ld@sTa#G*=k+O-DQjwXAj0MhCV8 -ly>I:q;]gvT< nPMeXi_>]43=u;8iG~ag1<' );
define( 'NONCE_KEY',        '!Jc6mNzor2*R0=|3RS<vi>@,:*[0dm2wO2rU+p#}Ud<GYu&o,`dCMuD&S|+uZyPE' );
define( 'AUTH_SALT',        '^F=xkC:oAaKp$z&:!oQ>4s(cjjBI&Zv.IQKGxn2LjF$|y(MO-`WIT7tWzOl4KYNQ' );
define( 'SECURE_AUTH_SALT', '*w{=Kv3XMRS+2u&0|UvpbqVTi8.mP<{/>6=|P4)`8_U:%dg5|smW1zv.jf$1YuXM' );
define( 'LOGGED_IN_SALT',   'RL2InNM}Laxk@qH2.QI+UV>tw[@]PM4LCx{S@7#H^W-&Z&3NH`00v6rJ#W*pnc^P' );
define( 'NONCE_SALT',       '$T&PXm9BNuY6o@Hnx~twvd:I/mTTSoz?/C@Bvu>3c!A2:3n01+Lm]RO~Mf[1M*7_' );

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
