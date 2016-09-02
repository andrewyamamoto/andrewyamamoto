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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'andrewyamamoto');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PR,0+`nJ59O y-@-/dO<:n0]lW%zFBK*,a1~FfdA)azr-O*m@Je!^R|@2d,qNI,U');
define('SECURE_AUTH_KEY',  ' S.[-cA@h1*|Tj*D#exT8CbsJ28y6;K;}$j|]F$_a+><`p!nYW?WM7Uv~>:$txU`');
define('LOGGED_IN_KEY',    'CoAZ|dr8p6f;:~`,1JxEY IY{#amZYfNouj>R=D+yiDZ m>E4+Hk>}-@.*);PFnR');
define('NONCE_KEY',        '*GAF,Qt5?UG[e+ Mu+XoD;cy@J|W7D-27m^#q|D}nCuVr-7oA),15QPg!h:R%s>$');
define('AUTH_SALT',        '-je+LPse5AvG0{]}6A0>-!Tq/.$#QVcuO]1nF%HcV@R&` dW`h*w %mNmBkF:E0e');
define('SECURE_AUTH_SALT', 'w$m-J5#O(x/Q-+]%y MJxzE!ernHuomlt~gy51e@3kNe:EU(Y4V$*dVq>JFUqQo`');
define('LOGGED_IN_SALT',   'hZQn3Rqf?|7mCv_)b%pQ>KHdiQC~6DE(S2-e1g1a|H&#Ur{1LIULnspc[&8cysYd');
define('NONCE_SALT',       '*bRQnv0?1(I(:?+m7o<k y~ih5Xp}tdET:jq`2!#|$SN:s|$q^&+F.Q{1!_13Y<T');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
