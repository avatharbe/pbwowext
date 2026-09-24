<?php
/**
 *
 * @package PBWoW Extension
 * German translation
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

$lang = array_merge($lang, array(
	// Extension modules
	'ACP_PBWOWEXT_CATEGORY'		=> 'PBWoW 3',
	'ACP_PBWOWEXT_CONFIG'			=> 'Konfiguration',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Diese Erweiterung benötigt PHP %1$s oder höher. Du verwendest PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Diese Erweiterung benötigt phpBB %1$s oder höher. Du verwendest phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>PBWoW-Einstellungen geändert</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'PBWoW Datenbankprüfung',
	'PBWOW_DB_GOOD'						=> 'PBWoW-Konfigurationstabelle gefunden (%s)',
	'PBWOW_DB_BAD'						=> 'Keine PBWoW-Konfigurationstabelle gefunden. Stelle sicher, dass die Tabelle (%s) in deiner phpBB-Datenbank vorhanden ist.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Versuche die PBWoW 3 Erweiterung zu deaktivieren und erneut zu aktivieren. Wenn das nicht funktioniert, deaktiviere die Erweiterung und lösche die Daten. Versuche sie dann erneut zu aktivieren.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Spenden über PayPal',
	'PBWOW_DONATE'						=> 'An PBWoW spenden',
	'PBWOW_DONATE_SHORT'				=> 'Eine Spende an PBWoW leisten',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW ist 100% kostenlos. Es ist ein Hobbyprojekt, in das ich meine Zeit und mein Geld investiere, einfach aus Freude daran. Wenn dir PBWoW gefällt, ziehe bitte eine Spende in Betracht. Ich würde mich sehr darüber freuen. Ohne Bedingungen.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'PBWoW-Konfiguration',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Hier kannst du einige Optionen auswählen, um deine PBWoW-Installation anzupassen.',

	'PBWOW_LOGO'						=> 'Eigenes Logo',
	'PBWOW_LOGO_ENABLE'					=> 'Eigenes Logo-Bild aktivieren',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Hiermit wird dein eigenes Logo für alle installierten PBWoW-Styles aktiviert (außer dem PBWoW Master-Style).',
	'PBWOW_LOGO_SRC'					=> 'Bildquellpfad',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Bildpfad unterhalb deines phpBB-Stammverzeichnisses, z.B. <samp>images/logo.png</samp>.<br />Es wird dringend empfohlen, ein PNG-Bild mit transparentem Hintergrund zu verwenden.',
	'PBWOW_LOGO_SIZE'					=> 'Logo-Abmessungen',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Exakte Abmessungen deines Logo-Bildes (Breite x Höhe in Pixeln).<br />Bilder größer als 350 x 200 werden nicht empfohlen (wegen des responsiven Layouts).',
	'PBWOW_LOGO_MARGINS'				=> 'Logo-Abstände',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Lege die CSS-Abstände (Margins) deines Logos fest. Dies ermöglicht eine bessere Kontrolle über die Positionierung deines Bildes. Verwende gültige CSS-Angaben, z.B. <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Obere Kopfleiste',
	'PBWOW_TOPBAR_ENABLE'				=> 'Obere Kopfleiste aktivieren',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Durch Aktivierung dieser Option wird eine 40px hohe, anpassbare Leiste am oberen Rand jeder Seite angezeigt.',
	'PBWOW_TOPBAR_CODE'					=> 'Code der oberen Kopfleiste',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Gib deinen Code hier ein. Verwende &lt;span&gt;- oder &lt;a class="cell"&gt;-Elemente, um Blöcke mit Rahmen zu trennen. Für Icons verwende entweder &lt;img&gt;-Blöcke oder definiere spezielle CSS-Klassen in deinem custom.css-Stylesheet (besser).',
	'PBWOW_TOPBAR_FIXED'				=> 'Am oberen Rand fixieren',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Das Fixieren der oberen Kopfleiste am oberen Bildschirmrand hält sie sichtbar und an Ort und Stelle, auch beim Scrollen.<br />Dies gilt nicht für mobile Geräte. Auf kleinen Bildschirmen wird automatisch auf den Standardmodus (scrollend) zurückgeschaltet.',

	'PBWOW_HEADERLINKS'					=> 'Benutzerdefinierte Links in der Kopfbox',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Benutzerdefinierte Links in der Kopfbox aktivieren',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Durch Aktivierung dieser Option wird der unten eingegebene HTML-Code in der Box oben rechts auf dem Bildschirm angezeigt (in der Zeile vor dem FAQ-Link). Dies ist nützlich für Portal- und DKP-Links (von denen einige automatisch erkannt werden).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Code für benutzerdefinierte Kopflinks',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Gib deine benutzerdefinierten Links hier ein. Diese sollten in &lt;li&gt;-Elementen eingebettet sein. Für Icons definiere bitte CSS-Klassen in deinem custom.css-Stylesheet.',

	'PBWOW_VIDEOBG'						=> '(Video-)Hintergrund-Einstellungen',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Animierte Videohintergründe aktivieren',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Die folgenden PBWoW-Styles unterstützen animierte Videohintergründe: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK und Xmas. Du kannst diese für einen tollen Effekt aktivieren oder deaktivieren, um Bandbreite zu sparen (oder bei Problemen).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Videohintergründe auf allen Seiten anzeigen?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Standardmäßig lädt PBWoW die Videohintergründe (falls verfügbar) nur auf <u>index.php</u>-Seiten. Du kannst sie für alle Seiten aktivieren, aber dies kann die Surfgeschwindigkeit deiner Besucher beeinträchtigen (in der Regel jedoch nicht die Serverbandbreite, da sie lokal zwischengespeichert werden). [gilt nur, wenn Video aktiviert ist]',

	'PBWOW_FIXEDBG'						=> 'Feste Hintergrundposition',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Das Fixieren der Hintergrundposition (einschließlich Video) verhindert, dass der Hintergrund mit dem restlichen Inhalt mitscrollt. Beachte, dass einige Geräte mit niedriger Auflösung möglicherweise nicht das gesamte Hintergrundbild anzeigen können.',
));
