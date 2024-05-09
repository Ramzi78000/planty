<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$BWBsF6E)u24]Q`]e)6Kog-o*|qBhtrOlTEx4d+OldnP2!<AunKqW&8Habu=gJN<' );
define( 'SECURE_AUTH_KEY',  '7o2R=N|?SS%5evm#_fH_8OLj)Who/*d3Oo_l0B;,zv?ybZ2E tV1;r00wh$+]cxO' );
define( 'LOGGED_IN_KEY',    ')*tnMfm`?0bUUhJ`#33T@}-Svb(k5Leey`7xeWJ{ad2!42#q%Bw)5c9@%1>;R{sT' );
define( 'NONCE_KEY',        '~(?NI^9c_9gug-vR1,!TrV91]kLCz|#p=/|43^>{2F7LU5sm;-xY4A.~HKe}*(NT' );
define( 'AUTH_SALT',        'a25%ex$Fa`V%&RHK36-p5iTf Wbs|H7eOggH NBt0mtJFVXZ.m$`{`+,$0B?.Ms-' );
define( 'SECURE_AUTH_SALT', 'GDIa[xS^mi=G/qPBc>*UnBvwlgTAe(@:S3V5^L~gF$5s4Cf5Z].2ge-yj~k$|[;7' );
define( 'LOGGED_IN_SALT',   ':7DL%TR+=Uo|;/x_X_r qtUw*CF4Ar1ee#3qiy)*r &BO!%}0.b=tZF.$!xR(-ap' );
define( 'NONCE_SALT',       'FC}u6wtl8<Xa/uF>C4}*<vvUuYv;:y<GsgYx=4QFW`8;Q$[U-~ 0($fqYX.lE@sS' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
