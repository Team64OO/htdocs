<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'phpdb' );

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
define( 'AUTH_KEY',         'w2o#pTR[f?kQkk8quyG14,tV>k3u58I8cK]Z*H8ayW4?K=ch-7Mo/Cyq20?C%pT$' );
define( 'SECURE_AUTH_KEY',  '&~>.j4_i0~)8D!+.J/@;}$)~i5CaA#CT+-*LMapyOZGKn)-%7p*m`N$`HJKWg_zG' );
define( 'LOGGED_IN_KEY',    '}i!Ss7)Wh+{WB4ZkKFb=TY57/;<Gbt.xsH,8t^coa,*J.Lflj78m#;*ox2Vq|H71' );
define( 'NONCE_KEY',        '#>Ul)0xY$9N2Ii))E!)3&DhS&j#cg3/5L`~])MC#F)o D.kqM.z@:FMpFzjUS#@U' );
define( 'AUTH_SALT',        'F.I5gs9+zRu98Gj&8C0%>IaE^QVZ&#K5:[mWPW%8qj =V#j*0x:`a.dq:-HElefj' );
define( 'SECURE_AUTH_SALT', 'Yuz^guh6G?eV8+tT[xyZBdC0@SS/p320BJxSk0tD-)7@OOSuw]w6QNrJ5z+._%F6' );
define( 'LOGGED_IN_SALT',   ' $^fA 9> |1hm+U(AfBW2<+[EFq mLFydUIzAD#KFD=*g}(`h|yx?a}-)6NR8g3_' );
define( 'NONCE_SALT',       '$F^4{QC!.D>[urj*`N[R0H04eY5-VIM,^lQ{@9d!ub+DV|f)JZ!-Udox;kccYRA=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
