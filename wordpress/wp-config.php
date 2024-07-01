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
define( 'DB_NAME', 'Grooveyard' );

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
define( 'AUTH_KEY',         '!e7yvgll~[a6Bk{Ys85ojKh.plt4QxjiE~Qw?cMt2|yae3LlIi[{=kaINK;:akPP' );
define( 'SECURE_AUTH_KEY',  '=vG<w]9&XNEn2+@Kk%Lr[(3Y?,Mri^6LEtWf`u[;:^cezOv|k|eFH@fAhx.u~Agj' );
define( 'LOGGED_IN_KEY',    'j7+sVOh a?6G!Om1VzmDS*Wo6;SEqo`<9N<y|DZ;DXd+t-Tgw6|>88.9X[,fnR!:' );
define( 'NONCE_KEY',        '}w1Uy_~R_6|s9(p3G)MN )n20cs)s2EbgnJcFd[0VFB~)Rlw6=QRsBI(s]r6eGKY' );
define( 'AUTH_SALT',        'gMackf/:@(%#*iLg%s1xX*fb.:bDq35IIQy(T7*|Glxl?m-io~VgU90OPJ|WsX;U' );
define( 'SECURE_AUTH_SALT', 'S]{#H?`Np2]9K-jCFvbz}O`b:B=PFRgH;~5U<#E8$,@Q7Yth0)+5nx)U3p<u85*m' );
define( 'LOGGED_IN_SALT',   'D8.J49-L*_xF8lWu7>/hi:(wOj_f<nN8F}1EIC$8n(>-)u a-O!Bfa.%MQ1zzmoY' );
define( 'NONCE_SALT',       '$I[h;@*eb8ZDN&]:}l[ibjWG?W}T%2wNF]`*ZT&?#Mp*O}|OHXgRti1[W[]D_H[j' );

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
