<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'lemoises' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'yuZ}6*qGxc^u`:yRv&.*H^o!>I UPB9X]upy.4A4[6uma{/iZafo._N.]8p]sG1v' );
define( 'SECURE_AUTH_KEY', 'g.7W,6`d]6F?my+|H^(9p{P5p(8L5yZgMH[M``w+s<urj@fovy]c9`Xd4v^?+EE=' );
define( 'LOGGED_IN_KEY', '&`7nvlIz*05LXk.-^,`1VZ_O`RSa8r[9%h[{^1E5@sZ )U30)rxQA;NHsg8nsvw)' );
define( 'NONCE_KEY', 'RZE[N}G`u@k|1C^Wu@7a:?`veKv]aqZh,Mp;@3g%DBgzw}qt;*W10_7$3qiSOy%n' );
define( 'AUTH_SALT', 'Lr^<t;cA)Mc% +.TFFmFQq&.up&FRie+[2oW1Q&&-K~9A6|0K(QU5AAI]4_f/uQb' );
define( 'SECURE_AUTH_SALT', 'gqW7&2l]{6H9_{Hau-7>oXqys0YF ckdn,*Ey_>0y-AkqS0rc1d#cU+3G_[ec+X0' );
define( 'LOGGED_IN_SALT', 'QI=nAHPY3N@^zh@bdU[DZ7&~X]=RXa tshLNfo2;wy{[+_UxGMmvV9yOZ]W,g/Du' );
define( 'NONCE_SALT', '(qT?-)kAe6pw$t?K;wz5e0W7xi/1a;Nb0 vp~i=05oa-2]N-$zs:fnw<rUkhtkZ^' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

