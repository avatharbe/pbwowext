<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * German (formal) translation
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
	'ACP_PBWOWEXT_CONFIG'			=> 'Konfiguration',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Diese Erweiterung benötigt PHP %1$s oder höher. Sie verwenden PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Diese Erweiterung benötigt phpBB %1$s oder höher. Sie verwenden phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>PBWoW-Einstellungen geändert</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'PBWoW-Datenbankprüfung',
	'PBWOW_DB_GOOD'						=> 'PBWoW-Konfigurationstabelle gefunden (%s)',
	'PBWOW_DB_BAD'						=> 'Keine PBWoW-Konfigurationstabelle gefunden. Stellen Sie sicher, dass die Tabelle (%s) in Ihrer phpBB-Datenbank vorhanden ist.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Versuchen Sie, die PBWoW-3-Erweiterung zu deaktivieren und erneut zu aktivieren. Falls das nicht funktioniert, deaktivieren Sie die Erweiterung und löschen Sie die Daten. Versuchen Sie dann, sie erneut zu aktivieren.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Mit PayPal spenden',
	'PBWOW_DONATE'						=> 'An PBWoW spenden',
	'PBWOW_DONATE_SHORT'				=> 'Eine Spende an PBWoW leisten',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW ist zu 100% kostenlos. Es ist ein Hobbyprojekt, in das ich meine Zeit und mein Geld investiere, einfach aus Freude an der Sache. Wenn Ihnen PBWoW gefällt, ziehen Sie bitte eine Spende in Betracht. Ich würde mich sehr darüber freuen. Ganz ohne Gegenleistung.',

	// CONFIG //

	'PBWOW_CONFIG_TITLE'				=> 'PBWoW-Konfiguration',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Hier können Sie verschiedene Optionen auswählen, um Ihre PBWoW-Installation anzupassen.',

	'PBWOW_LOGO'						=> 'Benutzerdefiniertes Logo',
	'PBWOW_LOGO_ENABLE'					=> 'Eigenes benutzerdefiniertes Logo aktivieren',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Durch die Aktivierung dieser Option wird Ihr eigenes benutzerdefiniertes Logo für alle installierten PBWoW-Styles verwendet (außer dem PBWoW-Master-Style).',
	'PBWOW_LOGO_SRC'					=> 'Pfad zur Bilddatei',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Bildpfad ausgehend vom phpBB-Stammverzeichnis, z.B. <samp>images/logo.png</samp>.<br />Es wird dringend empfohlen, ein PNG-Bild mit transparentem Hintergrund zu verwenden.',
	'PBWOW_LOGO_SIZE'					=> 'Logo-Abmessungen',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Genaue Abmessungen Ihres Logo-Bildes (Breite x Höhe in Pixeln).<br />Bilder größer als 350 x 200 werden nicht empfohlen (aufgrund des responsiven Layouts).',
	'PBWOW_LOGO_MARGINS'				=> 'Logo-Abstände',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Legen Sie die CSS-Abstände (Margins) Ihres Logos fest. Dies gibt Ihnen mehr Kontrolle über die Positionierung Ihres Bildes. Verwenden Sie gültige CSS-Angaben, z.B. <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Obere Kopfleiste',
	'PBWOW_TOPBAR_ENABLE'				=> 'Obere Kopfleiste aktivieren',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Durch die Aktivierung dieser Option wird eine 40px hohe, anpassbare Leiste am oberen Rand jeder Seite angezeigt.',
	'PBWOW_TOPBAR_CODE'					=> 'Code der oberen Kopfleiste',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Geben Sie hier Ihren Code ein. Verwenden Sie &lt;span&gt;- oder &lt;a class="cell"&gt;-Elemente, um Blöcke mit Rahmen voneinander zu trennen. Für Icons verwenden Sie entweder &lt;img&gt;-Blöcke oder definieren Sie spezielle CSS-Klassen in Ihrer custom.css-Datei (empfohlen).',
	'PBWOW_TOPBAR_FIXED'				=> 'Am oberen Rand fixieren',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Durch das Fixieren der oberen Kopfleiste bleibt diese sichtbar und an ihrer Position verankert, auch beim Scrollen.<br />Dies gilt nicht für mobile Geräte. Bei kleinen Bildschirmen wird die Leiste automatisch auf den Standardmodus (mitscrollend) zurückgesetzt.',

	'PBWOW_HEADERLINKS'					=> 'Benutzerdefinierte Links in der Kopfzeile',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Benutzerdefinierte Links in der Kopfzeile aktivieren',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Durch die Aktivierung dieser Option wird der unten eingegebene HTML-Code im Feld oben rechts auf dem Bildschirm angezeigt (in der Zeile vor dem FAQ-Link). Dies ist nützlich für Portal- und DKP-Links (einige davon werden automatisch erkannt).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Code für benutzerdefinierte Kopfzeilen-Links',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Geben Sie hier Ihre benutzerdefinierten Links ein. Diese sollten in &lt;li&gt;-Elemente eingebettet sein. Für Icons definieren Sie bitte CSS-Klassen in Ihrer custom.css-Datei.',

	'PBWOW_VIDEOBG'						=> 'Einstellungen für (Video-)Hintergrund',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Animierte Video-Hintergründe aktivieren',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Die folgenden PBWoW-Styles unterstützen animierte Video-Hintergründe: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK und Xmas. Sie können diese für einen besonderen Effekt aktivieren oder deaktivieren, um Bandbreite zu sparen (oder bei Problemen).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Video-Hintergründe auf allen Seiten anzeigen?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Standardmäßig lädt PBWoW die Video-Hintergründe (falls verfügbar) nur auf <u>index.php</u>-Seiten. Sie können diese für alle Seiten aktivieren, was jedoch die Surfgeschwindigkeit Ihrer Besucher beeinträchtigen kann (die Server-Bandbreite wird in der Regel nicht beeinflusst, da die Videos lokal zwischengespeichert werden). [gilt nur, wenn Video aktiviert ist]',

	'PBWOW_FIXEDBG'						=> 'Fixierte Hintergrundposition',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Durch das Fixieren der Hintergrundposition (einschließlich Video) wird verhindert, dass der Hintergrund mit dem restlichen Inhalt mitscrollt. Beachten Sie, dass einige Geräte mit niedrigerer Auflösung möglicherweise nicht das gesamte Hintergrundbild anzeigen können.',
));
