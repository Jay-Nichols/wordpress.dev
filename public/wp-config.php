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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'jay_user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '=Nb>bv<#CCO$=s8/=wc4YG*v!3*3)5TJKUd>nSt,xm5W~0aGgmC#1G~Fi8+T_eX$');
define('SECURE_AUTH_KEY',  'IzPtYBP.-iwUCC8rK8?cmJXLZWrBfI6{8_GapqKM!dF`}2X/%O%Q9t/z+Yiaj1^r');
define('LOGGED_IN_KEY',    '8n9eN0:o^Z,Sd;!hI89QBjOQ8F-nL>Eo4Lk:g3ZYD3sas5AUBN197c33yj90EC]?');
define('NONCE_KEY',        'FN#mlg!=,V(u4{_l#/aJP<EJQl0m#D/nm,>tMI*zW;?6MFSoFMnEP]p*(a{eyr/k');
define('AUTH_SALT',        'b}u+PgPvo=7625KIj>lVL/Nzwf(I4pX[6+v>,,g_PF=*KUu~T0{mc,u-[eHav@Q2');
define('SECURE_AUTH_SALT', 'z0hYd({AD2DD]iODzIxuq?(O_mRH 3&Do&8-y(^>wb]`20 I1Kd9W=KjOld:I=id');
define('LOGGED_IN_SALT',   'S:tsR#DClFajhKjy`3$7L%@(wdSJ$yctAE`7xu^0q#S@FghnWPH&$X,!;VF$ued!');
define('NONCE_SALT',       'acwrN}*#Q2%iT4S<d~n;qC1):ZG udGkQm3GOx?k8t8#aI:._C2WaEHF!a)Pe>0p');

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
