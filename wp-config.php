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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'a{/nNYpkf`I2A&ODwu&6M>h8l`MlQa9Tw??N{l^[`0C8.NEf[nX%8Gp_nk_gcMp+' );
define( 'SECURE_AUTH_KEY',  ' ITLQ6l$0ANYTD%M4 Je`,M`^e`=2!%+P`*_sHfm7K9ZCj`jmL#[+KGJicd9z<&b' );
define( 'LOGGED_IN_KEY',    '7:UMf)$c{R,Y:QFuTrPel2OgmT=<_28.Jy:K$7IF(`fr?:|-Czg_d)9;0&)!ITz8' );
define( 'NONCE_KEY',        'WWN^Xp_}I,niB+swlL*UVE8{/7%{?v{Fdrls+EJpAyKm&1}gw-vojcwhU}M@3Xvo' );
define( 'AUTH_SALT',        'H@7teK7*3*Wxt*h2$tWq2>C8]3Jqf!81S}EzJnx6lsu|iFQJJX^HQt?y#wSil8F]' );
define( 'SECURE_AUTH_SALT', 'ndLq# ;L!.k?vD6CvHH9$gtPz27y^iUNH5exg21Qi;-nPLm)f.ud{j.bY8^x,S[.' );
define( 'LOGGED_IN_SALT',   '(q10me{}|`ee;(<-trbw*t5pT?Kp#2 lPXE^/^.%PFSs,l[>!3xvfTZM|BluR:^E' );
define( 'NONCE_SALT',       '`[&hgeudCo%%O1>.7j_]oT2/+H*zmh$%O,vsaPj$;G_=vcHxEMP^P<VXb8z 4j*)' );

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
