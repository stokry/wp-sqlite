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
define('WP_HOME','example.com');
define('WP_SITEURL','example.com');
define('DB_FILE', 'wpsqlite.db');
define('DB_DIR', dirname(__FILE__).'/');
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'Q;k<~==AqblHc2EL>K-p5;@;U$0:.xvkP(QX!FQC6REqpE*%U6!QdMFi;uJ$a8_L');
define('SECURE_AUTH_KEY',  'Ex.A`j^1bs|G`|,ip@if@+vv{<jM/|45jL35O<H3m1u4OA5]0/86vN+,*kC;W^k-');
define('LOGGED_IN_KEY',    'G8d1{yAA-x :7e?,nMXy{H:zS|*GM`p0x->|yhmKcyP=++u`IEjsIhx?(sk3{9Ea');
define('NONCE_KEY',        'w@z+#w:Qf)+mB&*<y-$ORV26HK-?+tBBfU!OJ!f/C/#RZ:i;_df(Zy|&l|kzO2:O');
define('AUTH_SALT',        ' au!GNh(L8mygT]#.s=#tXE$OGKK_B:tMDc@@83I%2jrOZIprPU](k7_d@.f}7O6');
define('SECURE_AUTH_SALT', '@g{oN2lItLTS@-.fy)-l^ W47~e/0[g|F!o$5*U1sr !5c^Ygsu!-;jyU)< u3K}');
define('LOGGED_IN_SALT',   'gKrGMp23s0b-fy]Ri-[;NB;2a5h7:qGNU`W0P*,!7n2j_Df|nPd[CYUr!:Q-eX}.');
define('NONCE_SALT',       '3Ol,glpiG_S|D/s>]GkxejXCGD]+{=7x@;4Nx~cW<MW]w1CK:^SF P|pWUWr[<QV');

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