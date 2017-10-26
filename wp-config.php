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
define('DB_NAME', 'jorge');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'ox3RZ%EK9&imNCNyl&KtUwHjM9~aaL w)tM99K*N`Vcw=lqnO#5D/s9yTD! _yAQ');
define('SECURE_AUTH_KEY', 'fT2#p:y1Rs{8y)(M:^4AH>}{7zTL?BApiS?`z:l0yjh]|%`sIOOs<@D4>nSR ,lX');
define('LOGGED_IN_KEY', '$&`|s%:YLY>,Av#w~D<S}33KuONE # rLB5(Ga<BK?q^:[esDK^MIOwJ;fff)dWe');
define('NONCE_KEY', 'WsWUq?7BU+cCTkDyYf%^k{{5cg ;NDDD*hZHdsLhhb]cQnAjSSO}TFG}a)69 V)@');
define('AUTH_SALT', '_&^4</t@.aw ey,1l95{92Y2)?*e,0`gZ<I*N9b0d:]-jDS`QzP[$!r/U:1ST7Hx');
define('SECURE_AUTH_SALT', 'QKxz]ks}leZ*>d{<b-QqH;3ZQ5M(aEMa?v]Mvra/pBb_O#O&*azFeOhQXgBnR_eb');
define('LOGGED_IN_SALT', '}GZJ/hd%(RG~Da&uj]4`TmQ, j/C;:V#./:Z<yc?eC<`l[{rxXBW@Ge=r0eU>HE$');
define('NONCE_SALT', '%$hOhV#_@q{F]{EL2&+Ru!?qHZc1ayz>]=hAp~|#>!PQ>[~MMuO&*}6XjZ0X*W7F');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

