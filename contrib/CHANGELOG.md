## Changelog

##### 3.3.2 24/09/2026
- [CHG] Rewrite README to match the Recent Topics layout — split Features from ACP Options, document extension integrations, and drop the advertisement block that no longer ships
- [FIX] Add `pointer-events: none` to `#video-background` — the WebKit `z-index: auto` reset promoted the decorative layer into the `z-index: 0` layer, where it swallowed clicks on static content such as a style's footer (#28)
- [CHG] Remove the Index Advertisement Block (`ads_index_enable` / `ads_index_code`) — the feature is provided by avathar/recenttopics via its own `rt_ads_enable` / `rt_ads_code` settings (#30)
- [CHG] Remove the `avathar.recenttopicsav.modify_ads_code` listener — Recent Topics dispatches `avathar.recenttopics.modify_ads_code`, so it never fired
- [CHG] Add `release_3_3_2` migration dropping the two advertisement rows from `pbwowext_config`
- [NEW] Add PBTech-specific donate button styling with Heroes image and light-adapted blue gradient border
- [FIX] Fix broken `sql_multi_insert` call in `release_3_2_data` migration
- [FIX] Add missing VCHAR length specifier in `release_3_2_schema` migration
- [FIX] Add missing `public` visibility to `get_pbwow_config()` and `set_pbwow_config()` in ACP module
- [CHG] Clean up CSS comments across all style overrides

##### 3.3.1 02/04/2026
- [NEW] Listen to `avathar.recenttopicsav.modify_ads_code` event to provide advertisement block content to Recent Topics instead of assigning `ADS_INDEX_CODE` directly (#26)
- [CHG] Minimum PHP version raised to 8.1
- [FIX] Remove redundant `.misc-block.advertisement` CSS rule — covered by avathar/recenttopicsav

##### 3.3.0 01/03/2026
- [FIX] Fix `\phpbb\db\tools\tools` type hint to `tools_interface` for phpBB 3.3 compatibility
- [FIX] Replace deprecated `extract()` with explicit variable access in pbwowstyle
- [FIX] Replace deprecated `sizeof()` with `count()`
- [FIX] Fix deprecated `create_extension_metadata_manager()` usage
- [NEW] Add `ext.php` version gate requiring phpBB 3.3.0+
- [NEW] Add 12 language translations (ar, cs, de, de_x_sie, es, es_x_tu, nl, pt, ru, sk, sv, uk)
- [DEL] Remove custom ACP version checker (redundant with phpBB 3.3 built-in extension manager)
- [DEL] Move gaming avatar and rank toggle settings to RankPostStyling extension
- [DEL] Remove Travis CI configuration
- [CHG] Minimum PHP version raised to 7.1.3
- [CHG] Minimum phpBB version raised to 3.3.0

##### 3.2.8 07/07/2020
- [FIX] support small rank icons.
- [FIX] support phpBB 3.3

##### 3.2.7 04/07/2020
- [NEW] add support for bbguild avatars and small rank icons. 

##### 3.2.6 11/05/2018
- [FIX] fix curl https links, migrations dependency issue

##### 3.2.5 01/04/2018
- [FIX] set z-index for video div due to some links not clickable

##### 3.2.4 24/12/2017
- [FIX] pbwow3_wotlk support
- [FIX] prosilver support

##### 3.2.3 13/12/2017
- [FIX] pbwow3_heroes support

##### 3.2.2 12/10/2017
- [FIX] #16 moved pbwowext css & assets to extension except style-dependent elements (video assets, premium backgrounds...)
- [CHG] #17 Converted to Twig syntax
- [FIX] #18 fixed the video display
- [FIX] #19 fixed the "fixed" background display
  
##### 3.2.1 09/09/2017
- [UPG] Fix for responsibe view in Topbar  
- [FIX] Versioncheck fix  

##### 3.2.0 03/09/2017
- [UPG] #4 compatible with pbWoW 3.2.1
- [DEL] #3 removed battle.NET avatars and profile fields. to be moved to another extension.    
 
##### 3.0.5b 30/12/2016
- [FIX] fix in migrations

##### 3.0.5 18/12/2016
- [FIX] ACP now correctly sets the version color to red when extension is not up to date. 
- [FIX] Blizzard Static Render Domains Update 

##### 3.0.4 13/11/2016
- [FIX] fix for phpbb 3.1.10

##### 3.0.3 13/11/2016
- [NEW] now uses phpbb native version_helper class to fetch latest version info in ACP.
- [NEW] added Demon hunter class for WoW
- [CHG] Level cap changed to 110
- [NEW] added uninstall feature

