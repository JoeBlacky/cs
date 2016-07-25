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
define('DB_NAME', 'creative_seo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'uAo2+*1x/JV;!SOKxVNj+w`5SID/@7PRrdUu.f-6,<sn|NI3Qi&9?VmQvtM>3O(3');
define('SECURE_AUTH_KEY',  'L:6CP7VY}d=Ki/i!!w(/Z{4rEy43yQ.A7Z1Pgv?AQ0kWw}+wTf-/iTzrm24VNv9v');
define('LOGGED_IN_KEY',    'rC2?e{H^EzxMa#.S~ywLoFZC|,%3[`breNVbLB{HXWnvb{>Q5>(svLtRSoT>yNFu');
define('NONCE_KEY',        'uP!*t!-q)vg[A?y!Py9 403UqQA|k[f7%aMOXh#}r4EuQa*fR*B W&9St<{)T:(x');
define('AUTH_SALT',        '+I@:NZ(OYT l 5,dtD]JV1?KXvaR35Oox1*g*{`XYEj Ed=|FaMd2W+<I<r,a$.7');
define('SECURE_AUTH_SALT', 'IYN9QJBd:o,^{e-sD0e$zo,@EGSEa=L><jvRG{snzf^9,13}{`jg>Pd XA5@{q!]');
define('LOGGED_IN_SALT',   's0h>CjrT|bvg|+aI)pqdVX-CPJIi3+o^({{>6yA-#Az*doHkZt;L5RfmnKHb}LDR');
define('NONCE_SALT',       'R@6Q`;&U.O;Ax4iMYHYmZsKkIdcvbnt7B`YVWbCE|V7Xu~D4s@KPp]wWRoG;9+UQ');

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


/** Turning off Contact Form 7's CSS */
define ('WPCF7_LOAD_CSS', false);