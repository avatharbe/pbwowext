# PBWoW Extension — Events & Integration Points

## What are phpBB events?

phpBB is built around an *event system*. At hundreds of specific moments during a page request — when the page header is being assembled, when the footer is rendering — phpBB fires a named event and passes a bag of data along with it. Extensions register *listeners* that subscribe to these events by name. When the event fires, phpBB calls each listener in turn, letting it read and modify the data before the next step runs.

This means extensions never need to modify phpBB core files or the pbWoW3 style files directly.

There are two kinds of events:

**PHP events** fire inside phpBB's PHP code. Your extension subscribes by writing a listener class that implements `EventSubscriberInterface` and declaring which event names map to which methods.

**Template events** fire inside phpBB's Twig templates. Your extension hooks in simply by placing an HTML file at `styles/<style>/template/event/<event_name>.html`. phpBB automatically includes that file at the matching point in the page. Template events are also *emitted* by extensions — PBWoW Extension fires several custom template events inside the top-bar so that other extensions can inject content there without touching the template files.

---

## 1. Custom Template Events Emitted (Public API)

These are the events that PBWoW Extension deliberately fires so that *other* extensions can inject content into the top-bar without modifying any PBWoW files.

**Changing anything listed here is a breaking change and requires a major version bump.**

---

### 1.1 `top_bar_links_before`

**What this event is for:** Fires at the very start of the top-bar `<ul>` link list, before the quickstyle switcher slot and the user-defined top-bar code. Use this to prepend items to the top-bar.

- **Placement:** `styles/all/template/event/overall_header_body_before.html`, inside the top-bar `<ul>`
- **Since:** 3.2.2
- **Known listeners:** none

---

### 1.2 `quickstyle_event`

**What this event is for:** A dedicated hook point inside the top-bar for a style or theme switcher widget. Fires between `top_bar_links_before` and the user-defined `TOPBAR_CODE`.

**Example use case:** A quickstyle extension that lets users switch between pbWoW3 child themes (Legion, WotLK, Battlecry) directly from the top-bar.

- **Placement:** `styles/all/template/event/overall_header_body_before.html`, inside the top-bar `<ul>`
- **Since:** 3.2.2
- **Known listeners:** none

---

### 1.3 `top_bar_links_after`

**What this event is for:** Fires at the end of the top-bar `<ul>` link list, after the user-defined `TOPBAR_CODE`. Use this to append items to the top-bar.

- **Placement:** `styles/all/template/event/overall_header_body_before.html`, inside the top-bar `<ul>`
- **Since:** 3.2.2
- **Known listeners:** none

---

## 2. phpBB Core Events Used Internally

This section lists every phpBB event that PBWoW Extension subscribes to in order to deliver its own functionality. These are not part of the public API — they are internal implementation details.

### 2.1 PHP Events (`event/stylelistener.php`)

| Event | Handler method | What it does |
|---|---|---|
| `core.page_header` | `page_header()` | Calls `pbwowstyle::global_style_append()` on every page load — assigns all PBWoW template variables (logo, top-bar, video background, header links, body CSS class) |

### 2.2 Template Events

PBWoW Extension hooks into three phpBB core template events to inject its styles and markup at the right points in the page lifecycle.

| Template Event | File | What it does |
|---|---|---|
| `overall_header_head_append` | `event/overall_header_head_append.html` | Includes the PBWoW CSS stylesheet and injects custom logo dimension styles into the page `<head>` |
| `overall_header_body_before` | `event/overall_header_body_before.html` | Renders the top-bar (with links and user-defined code) and the video background container before the page body opens |
| `overall_footer_copyright_prepend` | `event/overall_footer_copyright_prepend.html` | Adds the PBWoW attribution line before the phpBB copyright footer |
