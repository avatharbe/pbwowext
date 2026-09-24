<?php
/**
 *
 * @package PBWoW Extension
 * Dutch translation
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
	'ACP_PBWOWEXT_CONFIG'		=> 'Configuratie',

	// Extension requirements
	'EXTENSION_REQUIRES_330'	=> 'Deze extensie vereist phpBB 3.3.0 of hoger.',

	'LOG_PBWOW_CONFIG'			=> '<strong>PBWoW-instellingen gewijzigd</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'PBWoW Databasecontrole',
	'PBWOW_DB_GOOD'						=> 'PBWoW-configuratietabel gevonden (%s)',
	'PBWOW_DB_BAD'						=> 'Geen PBWoW-configuratietabel gevonden. Controleer of de tabel (%s) bestaat in uw phpBB-database.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Probeer de PBWoW 3 extensie uit te schakelen en opnieuw in te schakelen. Als dat niet werkt, schakel de extensie uit en verwijder de gegevens. Probeer deze vervolgens opnieuw in te schakelen.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Doneer via PayPal',
	'PBWOW_DONATE'						=> 'Doneer aan Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Doe een donatie aan Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW is 100% gratis. Het is een hobbyproject waar ik mijn tijd en geld aan besteed, puur voor de lol. Als je het leuk vindt om PBWoW te gebruiken, overweeg dan om een donatie te doen. Dat zou ik zeer waarderen. Geheel vrijblijvend.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'PBWoW Configuratie',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Hier kunt u een aantal opties kiezen om uw PBWoW-installatie aan te passen.',

	'PBWOW_LOGO'						=> 'Aangepast logo',
	'PBWOW_LOGO_ENABLE'				=> 'Uw eigen aangepaste logo-afbeelding inschakelen',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Hiermee wordt uw eigen aangepaste logo ingeschakeld voor alle geinstalleerde PBWoW-stijlen (behalve de PBWoW-hoofdstijl).',
	'PBWOW_LOGO_SRC'					=> 'Bronpad van de afbeelding',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Afbeeldingspad onder uw phpBB-hoofdmap, bijv. <samp>images/logo.png</samp>.<br />Het wordt sterk aangeraden om een PNG-afbeelding met een transparante achtergrond te gebruiken.',
	'PBWOW_LOGO_SIZE'					=> 'Logo-afmetingen',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Exacte afmetingen van uw logo-afbeelding (Breedte x Hoogte in pixels).<br />Afbeeldingen groter dan 350 x 200 worden afgeraden (vanwege responsieve lay-out).',
	'PBWOW_LOGO_MARGINS'				=> 'Logo-marges',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Stel de CSS-marges van uw logo in. Dit geeft meer controle over de positionering van uw afbeelding. Gebruik geldige CSS-opmaak, bijv. <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Bovenste headerbalk',
	'PBWOW_TOPBAR_ENABLE'				=> 'De bovenste headerbalk inschakelen',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Door deze optie in te schakelen wordt een aanpasbare balk van 40px hoog bovenaan elke pagina weergegeven.',
	'PBWOW_TOPBAR_CODE'					=> 'Bovenste headerbalk-code',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Voer uw code hier in. Gebruik &lt;span&gt; of &lt;a class="cell"&gt; elementen om blokken met randen te scheiden. Om iconen te gebruiken, kunt u &lt;img&gt;-blokken gebruiken of speciale CSS-klassen definieren in uw custom.css stylesheet (beter).',
	'PBWOW_TOPBAR_FIXED'				=> 'Vastgezet bovenaan',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Door de bovenste headerbalk vast te zetten aan de bovenkant van het scherm, blijft deze zichtbaar en op zijn plaats, zelfs bij het scrollen.<br />Dit geldt niet voor mobiele apparaten. De balk keert terug naar de standaard (scrollende) modus op kleine schermen.',

	'PBWOW_HEADERLINKS'					=> 'Aangepaste links in het headervak',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Aangepaste links in het headervak inschakelen',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Door deze optie in te schakelen wordt de hieronder ingevoerde HTML-code weergegeven in het vak rechtsboven in het scherm (op dezelfde regel voor de FAQ-link). Dit is handig voor portaal- en DKP-links (waarvan sommige automatisch worden gedetecteerd).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Aangepaste headerlinks-code',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Voer hier uw aangepaste links in. Deze moeten in &lt;li&gt;-elementen worden geplaatst. Om iconen te gebruiken, definieert u CSS-klassen in uw custom.css stylesheet.',

	'PBWOW_VIDEOBG'						=> '(Video-)achtergrondinstellingen',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Geanimeerde video-achtergronden inschakelen',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'De volgende PBWoW-stijlen ondersteunen geanimeerde video-achtergronden: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK en Xmas. U kunt deze inschakelen voor een gaaf effect, of uitschakelen om bandbreedte te besparen (of als u problemen ondervindt).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Video-achtergronden op alle pagina\'s weergeven?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Standaard laadt PBWoW de video-achtergronden (indien beschikbaar) alleen op <u>index.php</u>-pagina\'s. U kunt ze voor alle pagina\'s inschakelen, maar dit kan de surfsnelheid van uw bezoekers beinvloeden (maar over het algemeen niet uw serverbandbreedte, omdat ze lokaal worden gecacht). [geldt alleen als video is ingeschakeld]',

	'PBWOW_FIXEDBG'						=> 'Vaste achtergrondpositie',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Door de achtergrondpositie (inclusief video) vast te zetten, wordt voorkomen dat deze meescrollt met de rest van de inhoud. Houd er rekening mee dat sommige apparaten met een lagere resolutie de volledige achtergrondafbeelding mogelijk niet kunnen weergeven.',
));
