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
define('DB_NAME', 'wptest');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'liverdan');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Matu$1604');

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
define('AUTH_KEY',         'a<G!0<Gr5owHj`{vDz3Qh&D=(nQvk]r&TSYmo3o@$<qbM0b!AAYQ(#.cQU8~Ib:a');
define('SECURE_AUTH_KEY',  '8.xdzqI:)5h`=le~B= cRvd@:iCD[MZyM~Dr*~Ze<;r?Rxn0pXC%!I@hc^__+[-v');
define('LOGGED_IN_KEY',    '#&oju4;8wh#20j}{B_`8!Z&S&jAUG:L b{)U).[.di#]MKZ;r*w*,QZAqx~s0`iK');
define('NONCE_KEY',        'l&o0;!%/o.X>Rr$/c0C~%*lg R@e,Gs=yZK3thjBY)fY?R>^1+$lm_KdLkc(MQuL');
define('AUTH_SALT',        '4Gk/!.IsXLg-T|-n!7dx;rH,WKRDW}7f0+]Ao$I|IT|oBe[tFrdvX<sZ_)0`syN|');
define('SECURE_AUTH_SALT', '=zXAyvxHA*pBTwF8 6O$eZ)OEING_x_iZJb:J1ceo-HWTz;,LO)]PL<KOdf6^O^%');
define('LOGGED_IN_SALT',   's2XBDX7Vg}#p5vj3?6Hz6je}YqPdEq1M:3JcmOph0Tkg@f er?!dl{bxPJ=dET~/');
define('NONCE_SALT',       '/{X?-Vihl hv{fsgT |K7Kf/rrc!~]o:K)FejNCw EH3CKN)~IvkMuj.%W<D8W/i');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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