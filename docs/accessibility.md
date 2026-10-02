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
