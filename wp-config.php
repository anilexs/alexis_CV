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
define( 'DB_NAME', 'projet_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'w2ntYP55Wo^=%sYX6#+,;E2a.yr3m1lG{!HN89)tr@J5AyPMH0N^aTeQ_,jb*cO`' );
define( 'SECURE_AUTH_KEY',  'O~wwm[Hxg+#;nq]^tei|-ci$BeHpSfV<O;<pT2pS6/]u}3aL.AICG}35kw}MJf@$' );
define( 'LOGGED_IN_KEY',    '!d!6}f(%6uV`7I_H L&x=_7yYw@ub0-TJ0`/f5@E,?/KP14u!~D$cW^vjHnB4oNP' );
define( 'NONCE_KEY',        '^9+5U?hQvP*fUFJ}h}A`uShURj`pD-wbSQc0c58Ay SJu6 l|ns5>rArKe%gxGFd' );
define( 'AUTH_SALT',        '8l,)`@jmSVy1syXWOS9-0N5,k}P67`s3?tBf].zoA{Nh%@5>Kr>xf(u;6XSeYna`' );
define( 'SECURE_AUTH_SALT', 'XDZq#y/#p4_sX#nA*A!=(`ym|]^BX7h3)R!=JD&*DI.fgDHaWf,kCmW!iQl.lX,f' );
define( 'LOGGED_IN_SALT',   'SnJ6$pV Q`Q:9ajX-8m.X+F9V2YJdg(axl/yiL6L~eP)>? J5K51;VEIGLHd92F<' );
define( 'NONCE_SALT',       ';Cx$A1n5Yg0W`1Gl,#)!hzF,H{q6|79ev:?^1&DTfWRm4mAXN6wY|$%v5WBKwQJ!' );
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
