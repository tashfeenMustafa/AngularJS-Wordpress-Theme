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
define('DB_NAME', 'custom-theme');

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
define('AUTH_KEY',         '`tGXJXyo)=u](>K`E}Db?l+3Lpk5e6,Jh)fIX[g6x]2vP=T)2K(< ClZy2eJX=?O');
define('SECURE_AUTH_KEY',  'eS{ZLO7Lh=C/W<i~wL7UD.8 Ksjwai]Bh kPB?n.#GTf|9<Ljw:tR}-+RT)?bv^k');
define('LOGGED_IN_KEY',    'jfK!FH?kXK`Scc3-6|F0M-;56&1UtLV`rZ$5J8`|Q=MNQAY_bERw^qFdxfABPp+~');
define('NONCE_KEY',        '>6|j%,QTSRu=bfu=W|TMN4%yN9^M=;{Do=f};nKPGG/fzpI)-auo}v1Q+1td0MK*');
define('AUTH_SALT',        '0(17p~sGAJ04Q~1>DT{R)t|`MLYS#&%V=(RZELoP+8x1En*u?eD]nL}[AB;d!U0y');
define('SECURE_AUTH_SALT', 'fjO>i}OZ%U7?9BPjhRJM4n+`r+LTDF6@uzSS{F^&Dds4zq@j9S]@)H6#gh[ejbVl');
define('LOGGED_IN_SALT',   'R(wa.pmybT9G*q`K@cpRqjXWMmmAhjwj^xcQxT)pHjxj5!]#L?Lw0TGNaF]Y%x[I');
define('NONCE_SALT',       'MrQK:Af~X[Cz|3b~3P.UkhJ0_&9Z|f-K#|ixZv3@m2_S0wFAoJ@g:&iKQqmUjm5;');

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
