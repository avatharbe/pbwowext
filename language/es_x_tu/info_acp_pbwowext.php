<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * Spanish (informal) translation
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ' « » " " …
//

$lang = array_merge($lang, array(
	// Extension modules
	'ACP_PBWOWEXT_CATEGORY'		=> 'PBWoW 3',
	'ACP_PBWOWEXT_CONFIG'			=> 'Configuración',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Esta extensión requiere PHP %1$s o superior. Estás ejecutando PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Esta extensión requiere phpBB %1$s o superior. Estás ejecutando phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Ajustes de PBWoW modificados</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Verificación de la base de datos de PBWoW',
	'PBWOW_DB_GOOD'						=> 'Tabla de configuración de PBWoW encontrada (%s)',
	'PBWOW_DB_BAD'						=> 'No se encontró la tabla de configuración de PBWoW. Asegúrate de que la tabla (%s) exista en tu base de datos de phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Intenta desactivar y volver a activar la extensión PBWoW 3. Si eso no funciona, desactiva la extensión y elimina los datos. Luego intenta activarla de nuevo.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Donar con PayPal',
	'PBWOW_DONATE'						=> 'Donar a Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Haz una donación a Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW es 100% gratuito. Es un proyecto personal en el que invierto mi tiempo y mi dinero, simplemente por diversión. Si disfrutas usando PBWoW, considera hacer una donación. Te lo agradecería mucho. Sin compromiso.',

	// CONFIG //

	'PBWOW_CONFIG_TITLE'				=> 'Configuración de PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Aquí puedes elegir algunas opciones para personalizar tu instalación de PBWoW.',

	'PBWOW_LOGO'						=> 'Logo personalizado',
	'PBWOW_LOGO_ENABLE'					=> 'Activar tu propio logo personalizado',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Al activar esta opción se usará tu propio logo personalizado para todos los estilos PBWoW instalados (excepto el estilo maestro de PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Ruta de la imagen',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Ruta de la imagen desde el directorio raíz de phpBB, por ejemplo <samp>images/logo.png</samp>.<br />Se recomienda encarecidamente usar una imagen PNG con fondo transparente.',
	'PBWOW_LOGO_SIZE'					=> 'Dimensiones del logo',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Dimensiones exactas de tu imagen de logo (Ancho x Alto en píxeles).<br />No se recomiendan imágenes de más de 350 x 200 (debido al diseño responsivo).',
	'PBWOW_LOGO_MARGINS'				=> 'Márgenes del logo',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Establece los márgenes CSS de tu logo. Esto te dará más control sobre el posicionamiento de tu imagen. Usa código CSS válido, por ejemplo <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Barra superior del encabezado',
	'PBWOW_TOPBAR_ENABLE'				=> 'Activar la barra superior del encabezado',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Al activar esta opción, se mostrará una barra personalizable de 40px de alto en la parte superior de cada página.',
	'PBWOW_TOPBAR_CODE'					=> 'Código de la barra superior del encabezado',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Introduce tu código aquí. Usa elementos &lt;span&gt; o &lt;a class="cell"&gt; para separar bloques con bordes. Para usar iconos, utiliza bloques &lt;img&gt; o define clases CSS especiales en tu hoja de estilos custom.css (recomendado).',
	'PBWOW_TOPBAR_FIXED'				=> 'Fijar en la parte superior',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Fijar la barra superior del encabezado en la parte superior de la pantalla la mantendrá visible y fija en su posición, incluso al desplazarte.<br />Esto no se aplica a dispositivos móviles. Volverá al modo predeterminado (desplazamiento) cuando se vea en pantallas pequeñas.',

	'PBWOW_HEADERLINKS'					=> 'Enlaces personalizados del encabezado',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Activar enlaces personalizados en el encabezado',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Al activar esta opción, el código HTML introducido a continuación se mostrará dentro del recuadro en la parte superior derecha de la pantalla (en línea antes del enlace de FAQ). Esto es útil para enlaces de portal y DKP (algunos de los cuales se detectarán automáticamente).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Código de enlaces personalizados del encabezado',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Introduce tus enlaces personalizados aquí. Deben estar envueltos en elementos &lt;li&gt;. Para usar iconos, define clases CSS en tu hoja de estilos custom.css.',

	'PBWOW_VIDEOBG'						=> 'Ajustes de fondo (vídeo)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Activar fondos de vídeo animados',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Los siguientes estilos de PBWoW soportan fondos de vídeo animados: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK y Xmas. Puedes activarlos para un efecto visual atractivo, o desactivarlos para ahorrar ancho de banda (o si tienes problemas).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> '¿Mostrar fondos de vídeo en todas las páginas?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Por defecto, PBWoW solo carga los fondos de vídeo (si están disponibles) en las páginas <u>index.php</u>. Puedes activarlos para todas las páginas, pero esto puede afectar la velocidad de navegación de tus visitantes (aunque generalmente no el ancho de banda de tu servidor, ya que se almacenan en caché localmente). [solo se aplica si el vídeo está activado]',

	'PBWOW_FIXEDBG'						=> 'Posición de fondo fija',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Fijar la posición del fondo (incluido el vídeo) evitará que se desplace junto con el resto del contenido. Ten en cuenta que algunos dispositivos de menor resolución no podrán mostrar la imagen de fondo completa.',
));
