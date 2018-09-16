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
define('DB_NAME', 'softupcl_bordintex');

/** MySQL database username */
define('DB_USER', 'softupcl_master');

/** MySQL database password */
define('DB_PASSWORD', 'Digital.1719@');

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
define('AUTH_KEY',         '<7pnsV_[4Q$N?vtnHIlBJ*7Jw%MIKyQ.fI+WF,]WPx.dBNsOcu^rX/P?}7O(!gD3');
define('SECURE_AUTH_KEY',  '4s6S:Yv,wNI2e{^1R0^B2V7W[(G3>W{8.jfArL,8{F=uXU;xc.C!y-Y$,I9R03wy');
define('LOGGED_IN_KEY',    'm.#rHVYvr5w50_re(R8q/[HAH^+4C 2%N.[!~f~@^V(_O6glqz]j-BBEe>pz7X1D');
define('NONCE_KEY',        '=6Fr@5=sQakVM4x@sT$9gL2][h?c/r0~]-Fye Jn{Q39<IK*O_63g5{K{*Ga+U$%');
define('AUTH_SALT',        '8)oyU+1=,ZC$Pvqz{uE`6phz$:%Ohyo,7e%wg4q5u>YI~tzQD@=rPV##@0$7xhe0');
define('SECURE_AUTH_SALT', 'BYVqRYi`vfd 3%B=3QC)`@cw{9~f@m@;Z|Mq^y7(KEfVSdPR;JC:i~?iK>C&#:~G');
define('LOGGED_IN_SALT',   'iF3o:C_Ol7YaC62g8rlE*Mb-9/Tekl>o>`YcCum,p [S/u_7-h$W5G$Qok*mx :-');
define('NONCE_SALT',       '5ozoPT|}oyhnN:kX,|`mtlu7zqz7?857(-;o:#UBF<(8xhUY|{q1x,QhCsKSv* j');

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
