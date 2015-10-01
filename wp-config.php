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
define('DB_NAME', 'rotaract_db');

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
define('AUTH_KEY', '{_Zik{+,|h;;..AaziCn=vWlIdwE|TGI,<*ShUM?[1S|eDqd`9+,`)ZN>H+>#1J>');
define('SECURE_AUTH_KEY', 'N)Bh@u#-|W-A@tRg.PhMFM3_is/p*D{jxEzkWUO]UF^@U(bUi+1K2lIc>BC^Xb,c');
define('LOGGED_IN_KEY', 'Ctak5?*=~ `Ve5q8(BDKSi<#[K})nu|u;5B/bh#,E4jzr=w-x>ho=b{FWD_u]afY');
define('NONCE_KEY', 'pA|=Lf3mBOnA-9!- %LX7-Ns|gfWng3u$%{pkPT$mt)Gdn|4o#Tm=hFA:e86%7,b');
define('AUTH_SALT', 'Z&43b<+Z4NT|hC+(^s;V|@G5oMYx:1|J2{a/`4MKL/{v=f,`]@D@~uE>ji?oZxd%');
define('SECURE_AUTH_SALT', 'V?xDRT8RtM9oEpx<Z+fEd:4($>8U8s-] x+PPNN|N|-{+HVr}?LlV0D}nD[4|2:x');
define('LOGGED_IN_SALT', '.y,e{+vrBxKt#W(eWe>D@tm/`U*6/j>s~inQT76;_=_+l}F9R3F#m`TW3}S?uzJ5');
define('NONCE_SALT', ']dmWBmX0It/![qkg|s}Vn@ba;Z^Q}/+RZ6ajv+&1(}+q J ^y+ZHtS==#@<!%daT');

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

