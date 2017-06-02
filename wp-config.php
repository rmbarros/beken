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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'beken');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wiyZ*Lk`+,r+.{:D6Ud_{D(Pn+j:MItxyS+Q+^D<|8k&@20X)*{ZZ(Xqir|dNf%H');
define('SECURE_AUTH_KEY',  'ben1ZSJjD8[av_m=A`dN`{M`f|bfcg|tIU6LaG,k;ftT-_y<q>}^I:k)?Vo^+VV(');
define('LOGGED_IN_KEY',    'wabi_guW7E$3&d_.=h=Lx!lRTBNjAE5]36#$75n0!E10:$0)e!=IVz<uquRs`D0/');
define('NONCE_KEY',        '>f{t-rfX,K6BNF?GwY[GJF@R9`|*bD&wgy4S`p^U<MFZHIqO~W_Mx/p<IvkNmF~9');
define('AUTH_SALT',        'u-4YyF*v]n67Z^Ek;IGM-d#`%(kwtoJPI,QQ#^,K`ZLZe+qt<L(?kBL}4Sc!j3?:');
define('SECURE_AUTH_SALT', 'Tv8w-/Oh*%W66UOK}$G0wgimka[ fIg-qrCWzA,Tk;<4nW_[Bm]t)l&rW9AFI$_B');
define('LOGGED_IN_SALT',   '@we?77*KcG(B@I?S`BxWRJbH~KI)%#hi:GmMr%^D7@E%K,c~ s6T)^nZ~mEy,>wt');
define('NONCE_SALT',       'mH}7%1UI3C8wspoA{zf{b?/mazI3].XMS!vP6G,V l<!o367u<H#!w-@@`0wL^MF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
