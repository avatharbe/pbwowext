<?php
/**
 *
 * @package PBWoW Extension
 * Spanish translation
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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

$lang = array_merge($lang, array(
	// Extension modules
	'ACP_PBWOWEXT_CATEGORY'		=> 'PBWoW 3',
	'ACP_PBWOWEXT_CONFIG'			=> 'Configuración',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Esta extensión requiere PHP %1$s o superior. Está ejecutando PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Esta extensión requiere phpBB %1$s o superior. Está ejecutando phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Configuración de PBWoW modificada</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Verificación de la base de datos de PBWoW',
	'PBWOW_DB_GOOD'						=> 'Tabla de configuración de PBWoW encontrada (%s)',
	'PBWOW_DB_BAD'						=> 'No se encontró la tabla de configuración de PBWoW. Asegúrese de que la tabla (%s) exista en su base de datos de phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Intente desactivar y volver a activar la extensión PBWoW 3. Si eso no funciona, desactive la extensión y elimine los datos. Luego intente activarla de nuevo.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Donar mediante PayPal',
	'PBWOW_DONATE'						=> 'Donar a Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Realizar una donación a Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW es 100% gratuito. Es un proyecto personal en el que invierto mi tiempo y dinero, simplemente por diversión. Si disfruta usando PBWoW, considere realizar una donación. Se lo agradecería mucho. Sin compromiso alguno.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'Configuración de PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Aquí puede elegir algunas opciones para personalizar su instalación de PBWoW.',

	'PBWOW_LOGO'						=> 'Logotipo personalizado',
	'PBWOW_LOGO_ENABLE'					=> 'Activar su propia imagen de logotipo personalizado',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Al activar esta opción, se utilizará su propio logotipo personalizado en todos los estilos PBWoW instalados (excepto el estilo maestro de PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Ruta de origen de la imagen',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Ruta de la imagen dentro del directorio raíz de phpBB, por ejemplo <samp>images/logo.png</samp>.<br />Se recomienda encarecidamente utilizar una imagen PNG con fondo transparente.',
	'PBWOW_LOGO_SIZE'					=> 'Dimensiones del logotipo',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Dimensiones exactas de su imagen de logotipo (Ancho x Alto en píxeles).<br />No se recomiendan imágenes de más de 350 x 200 (debido al diseño adaptable).',
	'PBWOW_LOGO_MARGINS'				=> 'Márgenes del logotipo',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Establezca los márgenes CSS de su logotipo. Esto le dará mayor control sobre la posición de su imagen. Utilice marcado CSS válido, por ejemplo <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Barra superior de encabezado',
	'PBWOW_TOPBAR_ENABLE'				=> 'Activar la barra superior de encabezado',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Al activar esta opción, se mostrará una barra personalizable de 40px de alto en la parte superior de cada página.',
	'PBWOW_TOPBAR_CODE'					=> 'Código de la barra superior de encabezado',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Introduzca su código aquí. Utilice elementos &lt;span&gt; o &lt;a class="cell"&gt; para separar bloques con bordes. Para usar iconos, utilice bloques &lt;img&gt; o defina clases CSS especiales dentro de su hoja de estilos custom.css (recomendado).',
	'PBWOW_TOPBAR_FIXED'				=> 'Fijar en la parte superior',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Fijar la barra superior de encabezado en la parte superior de la pantalla la mantendrá visible y en su lugar, incluso al desplazarse.<br />Esto no se aplica a dispositivos móviles. Volverá al modo predeterminado (con desplazamiento) cuando se visualice en pantallas pequeñas.',

	'PBWOW_HEADERLINKS'					=> 'Enlaces personalizados del cuadro de encabezado',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Activar enlaces personalizados en el cuadro de encabezado',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Al activar esta opción, el código HTML introducido a continuación se mostrará dentro del cuadro en la parte superior derecha de la pantalla (en línea antes del enlace de FAQ). Esto es útil para enlaces de portal y DKP (algunos de los cuales se detectarán automáticamente).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Código de enlaces personalizados del encabezado',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Introduzca sus enlaces personalizados aquí. Deben estar envueltos en elementos &lt;li&gt;. Para usar iconos, defina clases CSS dentro de su hoja de estilos custom.css.',

	'PBWOW_VIDEOBG'						=> 'Configuración de fondo (vídeo)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Activar fondos de vídeo animados',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Los siguientes estilos de PBWoW admiten fondos de vídeo animados: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK y Xmas. Puede activarlos para obtener un efecto atractivo, o desactivarlos para ahorrar ancho de banda (o si tiene problemas).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> '¿Mostrar fondos de vídeo en todas las páginas?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'De forma predeterminada, PBWoW solo carga los fondos de vídeo (si están disponibles) en las páginas de <u>index.php</u>. Puede activarlos para todas las páginas, pero esto puede afectar la velocidad de navegación de sus visitantes (aunque en general no el ancho de banda de su servidor, porque se almacenan en caché localmente). [solo se aplica si el vídeo está activado]',

	'PBWOW_FIXEDBG'						=> 'Posición de fondo fija',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Fijar la posición del fondo (incluido el vídeo) evitará que se desplace junto con el resto del contenido. Tenga en cuenta que algunos dispositivos de menor resolución no podrán mostrar la imagen de fondo completa.',
));
