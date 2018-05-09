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
define('DB_NAME', 'headless');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')<ZXkv_swZ2/Ga5w;+E+o-+?R;<!5^b`sP|.iT1rFkMR?_7Mo93_*J;Hf-]^Y+xP');
define('SECURE_AUTH_KEY',  '*uR6&3[LG-Kgup1E&z*i$AO(=V2(jQ#CAZ@]>5j(PhE07`xobTv4lh@*tHDN!$:6');
define('LOGGED_IN_KEY',    '=K%pyJx<x2tl=/6m$LO(4HShGo>KSn|UW+ts(p%pyep-FD~ZyA?@.obxGC=74=pG');
define('NONCE_KEY',        '1$@{[c}( ;2{YS_FsJ8^l4+.pNa&^.i02w9rQ|H<#JA7XT?/*b.mU%wH7NYks-!0');
define('AUTH_SALT',        'vE%12nOt//z{=hZypI(is:ap~bn%&PJ{];!93_Y$Ie95np,11:QK-h#mLj2jVK8*');
define('SECURE_AUTH_SALT', 'S<3NSQry9kszN*V%ox1glZsxc..!o91oc!*kNkqf xCC[U:_Qi@FDlt}ZqN=XT?,');
define('LOGGED_IN_SALT',   'mB@z-oE~L@n*+S-m?m*wh_fSrdpVFP/JtE (n9hL/dg;v9whMB}Z6<?ZJLD99Y$K');
define('NONCE_SALT',       '/m~sj.y5a(gn]ZE`a^KR$7dI6kU-@@nf/O]SEAA%X,_k&$+&%]wDceZ:f_2J5X>w');

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
