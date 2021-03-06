<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Makes it possible to edit translations in the backoffice
// @see /wp-admin/tools.php?page=codestyling-localization/codestyling-localization.php
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'com_amandinemeyer');

/** MySQL database username */
define('DB_USER', 'amandine_dba');

/** MySQL database password */
define('DB_PASSWORD', 'UjkatNiquok7');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '6)Gq2X)Smc?82IGzk)Q,DoE^4_e*3@ ~3iRWn^0AW<k9oqVBq~1x=R}`vzc|NJRI');
define('SECURE_AUTH_KEY',  '/+NVdz!sLP19qQ_6H*|( JyCm%iS=kS)-Jg[!IYO6QqE64#d)+b+0[||*Hm;n_^(');
define('LOGGED_IN_KEY',    'oa=3zY]2!hKy@u?N^:bW+y@rlvn9~+SQHhcw)sGYM*pfOV$y~h4I5c{39R@6syLV');
define('NONCE_KEY',        'gS#pT$)_Rl5jX?>>o|hG`Fq =2k3 i}`)UpE;NNf!dVpnra$iKcG)!KF7ba>q*}1');
define('AUTH_SALT',        'tsKNk~pA=m$|NFs,e={bL i6Xv5( hA`iDv Bg?:}V6|#}_xD?J0k>D>TAzvcj=g');
define('SECURE_AUTH_SALT', '|?cCmNt92oa2~B#dUv5ib2_+!NC2a~Ek@E+<:&+t]0)|r}Rbc# T*Y-ob3(T{+?B');
define('LOGGED_IN_SALT',   '6ceM3ERJ@:`53,}&{#TH2dQPV7|Mq7fxeamL2ZC05t$XN|-DT6[zE )*SWrr,~=a');
define('NONCE_SALT',       'B~{< e>x2_vlxRuEyJj/}Vl~P9A`!*;|TkxieqF;bu)U_7NGx;8?4o}eA1cY-CLm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
