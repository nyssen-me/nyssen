# Accessibility Requirements

This project **prioritizes accessibility**. All code must maintain these standards.

## Core Standards

- Semantic HTML5 markup (use appropriate elements: `<nav>`, `<main>`, `<section>`, `<article>`, `<header>`, `<footer>`, etc.)
- ARIA labels and roles where native semantics are insufficient
- Keyboard navigation support (all interactive elements must be reachable and operable via keyboard)
- Screen reader compatibility (meaningful alt text, logical heading hierarchy, visible focus indicators)

## Theme Switcher

The site has no accessibility tools panel or overlay: it must be accessible as it is. The only user setting is a light/dark theme switcher in the header:

- Defaults to the system setting (`prefers-color-scheme`)
- Icon-only native `<button>` with `aria-pressed`; its accessible name "Dark theme" is in a visually hidden span
- Hidden until JavaScript runs, so it never appears as a broken control
- Every colour combination must meet WCAG 2.2 AA contrast in both themes

## Code Guidelines

- Always add `alt` attributes to images (empty `alt=""` for decorative images)
- Use `<button>` for actions, `<a>` for navigation — never use `<div>` or `<span>` as interactive elements
- Ensure sufficient colour contrast (WCAG 2.2 AA minimum)
- Do not rely on colour alone to convey information
- Provide visible focus styles — do not suppress `outline` without a replacement
- Use `aria-label` or `aria-labelledby` on landmarks and controls that lack visible text labels
- Prefer native HTML controls over custom widgets; if custom, implement full ARIA pattern

## Accessibility review

Project settings for the `a11y-review` and `contrast-check` Claude skills.

### Where things are

- Templates: `bl-themes/ny/index.php` (wraps every page and holds all the inline JavaScript) and `bl-themes/ny/php/`. A page's template is the `"template"` field in `bl-content/databases/pages.php`; when it's empty, `page.php` is used.
- CSS source: `bl-themes/ny/assets/css/src/`, imported by `style.css`.
- Content: HTML in `bl-content/pages/<slug>/index.txt`.

### What to skip

- `bl-kernel/`, `bl-plugins/`, `bl-languages/` (Bludit core)
- `HTML/`, `HTML-v2/` (old prototypes)
- `style-min.css` (Prepros output)
- `bl-content/pages/autosave-*`
- `header-old.php`, `home-old.php`, `home-old2.php` (kept for reference)

### Rendered site

`http://nyssen/` when WAMP is running. Pages are at `http://nyssen/<slug>`.

### Existing conventions

- **Hidden text:** `.visually-hidden` (`helpers.css`). `.screen-reader-text` is an older equivalent that also shows on focus; prefer `.visually-hidden` in new code.
- **Focus:** a global `*:focus-visible` rule in `general.css` draws a 0.3rem `--accent-color` outline. Components only need their own focus style if they override it.
- **Reduced motion:** a `@media (prefers-reduced-motion: reduce)` block in `general.css` turns off CSS transitions and smooth scrolling. JavaScript animation is not covered by it.
- **Skip link:** `header.php` links to `#maincontent`. Every page template's `<main>` must have that `id`.
- **Theme switcher:** the model for any new toggle (see above).
- **Headings:** templates print the page title as the `<h1>`, so content headings start at `<h2>`. The footer uses `<h2>` headings.
- **Root font size:** 62.5%, so `1rem` = 10px and `2.4rem` = 24px.

### Contrast check settings

Run from the repository root:

```
powershell -NoProfile -ExecutionPolicy Bypass -File "$HOME/.claude/skills/contrast-check/contrast.ps1" -Css bl-themes/ny/assets/css/style.css -TokensOnly
```

`-TokensOnly` applies the colour rules in [CLAUDE.md](../CLAUDE.md):
- components use only `--bg-color`, `--font-color` and `--accent-color`
- no palette variables and no hardcoded colours

The dark theme is detected automatically from `@media (prefers-color-scheme: dark)` and `:root[data-theme="dark"]`, which must define the same values.
