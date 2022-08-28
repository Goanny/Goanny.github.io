<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')VMF0o?,=1ZABnmuA%a%PsqKp4/let+~(X}]/*VuP)dMSfhtFSZ=:Al`sfrP:1hZ' );
define( 'SECURE_AUTH_KEY',  '!,>h*@ywo%xo!!5f9D#%WW_-(frzy8q&BopfguW?bs<s3OBMAU~_GvSe6^(Js7C1' );
define( 'LOGGED_IN_KEY',    '~nILXr_Ukuc>:7e+JGoWgxHF(({U6~Tepxn/KfM~~[ADpwclQ0v?oawr[KC&ufyJ' );
define( 'NONCE_KEY',        'v9ih#+dF#sYudk2RUYA>E4R;Lj,k$?k:J)[;x+fv(eC759$AB:E2bk<<U5<!z.mr' );
define( 'AUTH_SALT',        'a*uX(t5;;]qs`$d4/t_W(#0!4p?}Dnk7?wY5byO 3M!hx%^g,=w;%do:XVo,%m0n' );
define( 'SECURE_AUTH_SALT', 'E}Fva%e~)FV>n0/y4&!Bav85-zwU,b~L*UMfAow-ysH&~o+S]`,^xj>oP(lzjP(l' );
define( 'LOGGED_IN_SALT',   '*vwMf jBLun:C/5~~ER$#@%gjaDs7SFqie!cYtkP==O&`jnACTD(tZhhTlB;9oS(' );
define( 'NONCE_SALT',       'MQnHJo4jW9EG]g{chh%/+&YV.1xpe$kvl4hXEEy(Q04+{r`2z`e*=~H>(f-9s@cK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
