<?php
/**
 *
 * @package PBWoW Extension
 * Swedish translation
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
	'ACP_PBWOWEXT_CONFIG'			=> 'Konfiguration',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Det här tillägget kräver PHP %1$s eller högre. Du kör PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Det här tillägget kräver phpBB %1$s eller högre. Du kör phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>PBWoW-inställningar ändrade</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'PBWoW-databaskontroll',
	'PBWOW_DB_GOOD'						=> 'PBWoW-konfigurationstabell hittad (%s)',
	'PBWOW_DB_BAD'						=> 'Ingen PBWoW-konfigurationstabell hittades. Kontrollera att tabellen (%s) finns i din phpBB-databas.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Försök att inaktivera och återaktivera tillägget PBWoW 3. Om det inte fungerar, inaktivera tillägget och radera data. Försök sedan aktivera det igen.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Donera via PayPal',
	'PBWOW_DONATE'						=> 'Donera till Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Ge en donation till Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW är 100% gratis. Det är ett hobbyprojekt som jag lägger min tid och mina pengar på, bara för nöjes skull. Om du tycker om att använda PBWoW, vänligen överväg att ge en donation. Jag skulle verkligen uppskatta det. Inga villkor.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'PBWoW-konfiguration',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Här kan du välja olika alternativ för att anpassa din PBWoW-installation.',

	'PBWOW_LOGO'						=> 'Anpassad logotyp',
	'PBWOW_LOGO_ENABLE'					=> 'Aktivera din egen anpassade logotypbild',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Detta aktiverar din egen anpassade logotyp för alla installerade PBWoW-stilar (förutom PBWoW-huvudstilen).',
	'PBWOW_LOGO_SRC'					=> 'Sökväg till bildkälla',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Bildsökväg under din phpBB-rotkatalog, t.ex. <samp>images/logo.png</samp>.<br />Vi rekommenderar starkt att du använder en PNG-bild med transparent bakgrund.',
	'PBWOW_LOGO_SIZE'					=> 'Logotypens dimensioner',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Exakta dimensioner för din logotypbild (bredd x höjd i pixlar).<br />Bilder större än 350 x 200 rekommenderas inte (på grund av responsiv layout).',
	'PBWOW_LOGO_MARGINS'				=> 'Logotypens marginaler',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Ställ in CSS-marginalerna för din logotyp. Detta ger dig mer kontroll över placeringen av din bild. Använd giltig CSS-notation, t.ex. <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Övre sidhuvudsfält',
	'PBWOW_TOPBAR_ENABLE'				=> 'Aktivera det övre sidhuvudsfältet',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Genom att aktivera detta alternativ visas ett 40px högt anpassningsbart fält högst upp på varje sida.',
	'PBWOW_TOPBAR_CODE'					=> 'Kod för övre sidhuvudsfältet',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Ange din kod här. Använd &lt;span&gt;- eller &lt;a class="cell"&gt;-element för att separera block med ramar. För att använda ikoner, använd &lt;img&gt;-block eller definiera speciella CSS-klasser i din custom.css-stilmall (bättre).',
	'PBWOW_TOPBAR_FIXED'				=> 'Fixera högst upp',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Att fixera det övre sidhuvudsfältet högst upp på skärmen håller det synligt och låst på plats, även vid scrollning.<br />Detta gäller inte mobila enheter. Det återgår till standardläget (scrollning) vid visning på små skärmar.',

	'PBWOW_HEADERLINKS'					=> 'Anpassade länkar i sidhuvudsfältet',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Aktivera anpassade länkar i sidhuvudsfältet',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Genom att aktivera detta alternativ visas HTML-koden som angetts nedan inuti rutan uppe till höger på skärmen (i raden före FAQ-länken). Detta är användbart för portal- och DKP-länkar (vissa upptäcks automatiskt).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Kod för anpassade sidhuvudslänkar',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Ange dina anpassade länkar här. Dessa bör vara inslagna i &lt;li&gt;-element. För att använda ikoner, vänligen definiera CSS-klasser i din custom.css-stilmall.',

	'PBWOW_VIDEOBG'						=> 'Bakgrundsinställningar (video)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Aktivera animerade videobakgrunder',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Följande PBWoW-stilar stöder animerade videobakgrunder: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK och Xmas. Du kan aktivera dessa för en häftig effekt, eller inaktivera dem för att spara bandbredd (eller om du har problem).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Visa videobakgrunder på alla sidor?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Som standard laddar PBWoW bara videobakgrunder (om tillgängliga) på <u>index.php</u>-sidor. Du kan aktivera dem för alla sidor, men detta kan påverka dina besökares surfhastighet (men generellt inte din servers bandbredd, eftersom de cachas lokalt). [gäller bara om video är aktiverat]',

	'PBWOW_FIXEDBG'						=> 'Fixerad bakgrundsposition',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Att fixera bakgrundspositionen (inklusive video) förhindrar att den scrollar med resten av innehållet. Tänk på att vissa enheter med lägre upplösning inte kommer att kunna visa hela bakgrundsbilden.',
));
