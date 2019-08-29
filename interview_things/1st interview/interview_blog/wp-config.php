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
define('DB_NAME', 'interview');

/** MySQL database username */
define('DB_USER', 'dbUser');

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
define('AUTH_KEY',         '*(AhO_Sw(2T]_t&`})^kx}Tg%>B7A+Dy}xGW5NDh2A^jH.s.PvaKkL Z_(,L-rev');
define('SECURE_AUTH_KEY',  'HvsH{Q.6&U+7&TyKoF,X,BrFXmeUu{[F_}Z(QKG%DP{Ix&%}S.su1?M+D&ct:BhL');
define('LOGGED_IN_KEY',    'QiS)u5bPgwdlyC2eb[O1u(c5TVu.MN9c!:B!?b8XJMvEpV%e_,+?~,*vlV5|C30A');
define('NONCE_KEY',        'd..5,7g@3m^y=u95@WBs4+O^26$6&#K`:Dfx4f|4i`w/45~:cZrjy{wsr@/7#*I!');
define('AUTH_SALT',        'ei$^61Hx(C+f6mkjZ$&p?]48gK!Dx!sU>Q<<~&gw;a]Q6euX#).c`d&jqv$~oGe[');
define('SECURE_AUTH_SALT', '1Pfqg>gKWz51d(n?zp~2P|^DFIxAs:.?f,wB=Vt|0B@w12KiV`WF!d*3d@Bx>2!v');
define('LOGGED_IN_SALT',   '~WPD>syuZ<qkixFN>qoop=J^j3JUwBYn(8[96=O*YA7UU.z nBw)Q=@^r9?T`:n}');
define('NONCE_SALT',       '3J|@D?{Ew.q9ElhBNm}H;*}=#I*_.J4o(@#9P>[qN^KG2_t+C)E<ROq% qT8wR+b');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
