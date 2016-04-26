<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'templateDB4uoga');

/** MySQL database username */
define('DB_USER', 'templateDB4uoga');

/** MySQL database password */
define('DB_PASSWORD', '2G7PJaUr4');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



// define('WP_HOME', 'http://www.template.dev');
// define('WP_SITEURL', 'http://www.template.dev');




/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TqeXPH6;ME7.$um<^yqjXQ$umbTMAfXPIA{,$vncUMFgYQJB3}UME7>$B3},yr');
define('SECURE_AUTH_KEY',  '$nb$rfUMAmbTIA3{ME3{.y>$vjYzrgUJB33>MFr>@vkYRJB4}UNF70,@B4}!zrk@');
define('LOGGED_IN_KEY',    'WL91]~xD1[_wph_OmeWLD6].+p5ha*tlXPE6;<*um2<TxqeXPH6MA3X.LE6{.+qib');
define('NONCE_KEY',        'aOH5;_A2]*xqeXPHH6;THALE6<$umb<+umeTLqeXPE6;MA3{^yq{,yrjjXPIAfXM');
define('AUTH_SALT',        'k>^vncUMrgYQJ70:!-sgZ-skkcRJC4[!zo|~hZSK91dVKC4:|@81[!-oh~KleWODD');
define('SECURE_AUTH_SALT', 'F0VNC4}!zB4}|zrg|@vkcVJhZOG81|KC1[~wo4[!wog!-GdSKD5:_H91]~wph:_-s');
define('LOGGED_IN_SALT',   '3>$vB>^unf^yrfYQ,@vkcUJogYNF70YQF7>^B3}^zng@wkdVNC4}|Nz0>!vogVs');
define('NONCE_SALT',       '|G4:|zs[~wldWKphaOG9:ZSG81|~C5[_-oheSLD2]_+p5;#-tldW+phaSL9XPHA;<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
