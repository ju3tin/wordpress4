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
define('DB_NAME', 'mknslcncj1ovu2if');

/** MySQL database username */
define('DB_USER', 'br5ygysrcd85ncmy');

/** MySQL database password */
define('DB_PASSWORD', 'tgxtut9i76ll1lg0');

/** MySQL hostname */
define('DB_HOST', 'irkm0xtlo2pcmvvz.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'MG^/bo&)~9r)GkG8He=UN<|_R-<HV$L~PAAlJlZnj;V~9_{9yz[vB:32I6bS^rpd');
define('SECURE_AUTH_KEY',  'VK}s{;+u/b4w+[>`^{)3UuegYzf&phwZ 2!AqH=YiNh[e}jJ;]_dMvhVH,-:DEdJ');
define('LOGGED_IN_KEY',    'jDYs!HQs/4$c;+<CI:cd}A^YrkW/TsVQ}>c/;h#*]j#^rq*W5Gi7W?#:DgXd z^=');
define('NONCE_KEY',        'VWpq`_^Ef@on;UpSj4W#Sb|`B_z*(h&num:?1&[h%I9pO&&r4w{&=lY,<3u$U3uQ');
define('AUTH_SALT',        'o*TvjIBY-PM#1x=2-#zoexKf`~qld[<*-#&^-v.!:x_t*N*u=l+|[snMk9UFIZ}^');
define('SECURE_AUTH_SALT', 'KdeOLn-`5Q3GQ0%;>7TLR.DtTL.7;Ta-Zzl&:u%AO_4y$XH]H+$^AXH-T_S.9SYR');
define('LOGGED_IN_SALT',   '.94$;KCdx-([h9v$:.{2_%Q48f, 8M^~/u[Al{|V2*:0pBmWH;+||Ht1!*<8ua}2');
define('NONCE_SALT',       '5Pr(bRK[{aOBx#[A+&.m0Gm,<x3:c7=5wzuu5~2!6DHY^/){s[s}Dw7|9q&(WwG{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'w6_';

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
