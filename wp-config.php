<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'obvious_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UGPDZ4W~Cd}wG/O0h/6xz ,.p*uo*qL_S$v:uMb65Dck{zuafvo)?rz#&rZT%r- ');
define('SECURE_AUTH_KEY',  'O-dW/xOfQ04J`[l+YA6S[5h(E/}>wO{NZ0zIPIF8(x(UgL9<M>^M|}s!$}bBB`m~');
define('LOGGED_IN_KEY',    'm$vpCkf_]jodJhfsUM)%t-Tv2xB?Eqbhbyw[&c)k0qwJ6&rdg@vI`Tj;|Lf2,.ey');
define('NONCE_KEY',        'L}$S_2%a^S^a!ox}[,^]ox-3*_XhHEm&|F3/q5OhnR@[HzCKzE*m139Y$^G$05qC');
define('AUTH_SALT',        '8tr8PugPR&-v?Jc.gM,QID@M(`ZaCokDX 1Y%:.QUIK 3u;-K;pMWVdou=DgPi?$');
define('SECURE_AUTH_SALT', 'H{6MgudM),@1DD2RWZBw[%0[[atpqR8 TsZDQ<_OpEB_NS+*L?s&jfy!shy-5D(/');
define('LOGGED_IN_SALT',   '-9WKTg.-0lfPV)KMc1@Wm4V2jKq[o}pAr/whH6g;+i&2&fU|jMP;3qv;O`JC~y3G');
define('NONCE_SALT',       'A:s]d{t@LPWz?=jcSx2I4%7ZI$`SkDD&7xtR&?u3~sqYH8eb~Y4>)hm~mB>_gnC{');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ob_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');