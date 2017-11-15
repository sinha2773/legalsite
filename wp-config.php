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
define('DB_NAME', 'southside');

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
define('AUTH_KEY',         'TGOe.Iu4B8}~@R`78S}Es7=z@QIg]VPUV3ybM8exlbI/+]qA+6v2&m2e(!w<jD8E');
define('SECURE_AUTH_KEY',  'CH?$w:^/Ft8cN%q Sr^lK<np=P=w(=q59GV5UhrD:Oy|JZ`KI~%pkiR-f,Ku8G/#');
define('LOGGED_IN_KEY',    '=v!c{xw^m%{]`s,>(j(8~fgSWUB>FafWRswGl;9EU48o*ER:=P ,@9HJ)pftP}@E');
define('NONCE_KEY',        'P>Np}EjL%#,SRWIbCnH4/pu@fvZ%ou]n1qG<(gS2=Od*M4p1I<v`zAXkURZ:9QK%');
define('AUTH_SALT',        '5i/t)?nUKzAD0?K_1V1<0Y}Tki%i-rP[qIBoLzmeAyb5Ec~D7oJhQ>5UwN9hv6QJ');
define('SECURE_AUTH_SALT', 'Z_GCu7Z98D;H|dKbG)|&6)9? LpXR6scvFJNTd{b}EC_FffO|-()R^fyU3/sDuIn');
define('LOGGED_IN_SALT',   '2v8bq;RD:v=F>K7Qe%_0U0qdF/%KR~Y$AQfwfMr$nsp.1u-X<CTU*IZ0k<:TKIXP');
define('NONCE_SALT',       'Ys`jGjJ5=1lM=X%i4s;Xr|L@$%Tb1.@m0Vx`kFqY|UI^13$&gn}CITn1U4V3y6tQ');

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
