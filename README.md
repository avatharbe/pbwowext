PBWoW 3.3 Extension for phpBB
=========

Extension for phpBB 3.3 to enhance the pbWoW3 and pbTech styles with additional functionality.
Originally by PayBas. Now maintained by [avathar](https://www.avathar.be).

**Version:** 3.3.2 (24/09/2026)

#### Requirements
- phpBB 3.3.0 or higher
- PHP 8.1 or higher
- A supported style — see [Tested on](#tested-on). Other styles fall back to the generic `styles/all` stylesheet.

#### Features
- ACP module for styling options that would otherwise need template edits
- Custom logo, top header-bar, header-box links, video background and fixed background — all toggleable without touching a style
- Per-style CSS overrides, so each supported style gets styling tuned to it
- Three custom template events in the top-bar for third-party extensions
- Settings are stored in the extension's own table, so they survive style switches

#### ACP Options
Found in the ACP under `Extensions -> PBWoW`.
- **Logo** — enable/disable, image path, width and height, display size, margins
- **Top header-bar** — enable/disable, custom HTML content, optional fixed (sticky) positioning
- **Header-box custom links** — enable/disable, custom HTML inserted in-line before the FAQ link
- **Video background** — enable/disable, and whether to load it on all pages or the index only
- **Fixed background position** — stop the background (including video) scrolling with the page

#### Extension integrations
All integrations are optional soft dependencies — PBWoW works without any of them.
- [QuickStyle](https://github.com/avatharbe/QuickStyle) (avathar/quickstyle) — its style switcher renders inside the top-bar via the `quickstyle_event` template event
- [Recent Topics](https://github.com/avatharbe/RecentTopics) (avathar/recenttopics) — owns the index advertisement block. PBWoW provided this until 3.3.2; configure it now under `ACP -> Extensions -> Recent Topics`, where PBWoW still supplies the donate button styling for the supported styles.

For extension developers: the custom template events, the phpBB core events subscribed, and integration details are documented in [contrib/Events.md](contrib/Events.md).

#### Languages
Arabic, Czech, Dutch, English, French, German, German (formal), Portuguese, Russian, Slovak, Spanish, Spanish (informal), Swedish, Ukrainian

#### Tested on
pbWoW3, pbTech, pbWoW3 Heroes, pbWoW3 WotLK — the four styles shipping a dedicated stylesheet. Every other style is served by the generic `styles/all` stylesheet.

#### Installation
1. [Download the latest release](https://www.avathar.be/forum/app.php/dlext/details?df_id=37) and unzip it.
2. Copy the contents to `/ext/paybas/pbwowext/` (so that `ext.php` is at `/ext/paybas/pbwowext/ext.php`).
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `PBWoW 3.3 Extension` under "Disabled Extensions" and click `Enable`.

#### Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `PBWoW 3.3 Extension`.
3. To permanently uninstall, click `Delete Data`, then delete the `pbwowext` folder from `/ext/paybas/`.

#### Support
- [Support forum](https://www.avathar.be/forum/viewforum.php?f=16)
- [GitHub Issues](https://github.com/avatharbe/pbwowext/issues)

#### License
[![License](https://img.shields.io/github/license/avatharbe/pbwowext)](license.txt)
[GNU General Public License v2](https://opensource.org/licenses/GPL-2.0)


Originally by PayBas. Maintained by Andy Vandenberghe (Sajaki).
