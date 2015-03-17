<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ef');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'K+8`OU`x{Vq9yLT]_l,/n*92>*<gbb#L-WZJP-^uLAK):S,-zzS)%Vi4xeusCzvV');
define('SECURE_AUTH_KEY',  '8[=oZTdyvWBL`3_?<s+}[Jz0l./>9J,5<4eV|I4{zNm;:-wL|(A>fpA7,-`8x,@8');
define('LOGGED_IN_KEY',    '#|K;ebwxL;F)L<1[507G>ABB_#kZ6~hJz:q!P1x1vE[!J`@d6+!9zr7ZHLj72:MG');
define('NONCE_KEY',        'xeDQtp]xL64$5+W_X_]WrB[ 2o?)cMF&)h*E~Uqk`jUG<@$zv-08w,IsqT):|npI');
define('AUTH_SALT',        'rc(aDH|/cdIcLJu}DRF{xVsu-,xRayOn&Ip8e+w85+Ovcvo^0N.{+7-F=uWT*r*y');
define('SECURE_AUTH_SALT', '`V5@a)a;LvpQ 5#qyK7~,Z|qYy9,Viw!/iF=PS9#O`!O44%>2qk1S}aJNsf:#bMU');
define('LOGGED_IN_SALT',   'e-S)GlAWjG$1}e-n5C_@90C@_s9pEsSv%-QuePK USkWTdF>:t@zl?*n)pb]#X(=');
define('NONCE_SALT',       's6T]qkug|kU[|kX-%*ILu<.<az3|2{],kknN- i<i--}-KcAL T09SA?=_~qzdi4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ef_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
