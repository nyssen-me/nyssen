# Deployment Notes

The site is built and edited locally, then published by FTP (FileZilla). Bludit is installed on both servers, and each install keeps its own settings in `bl-content/databases/`.

| | Local | Live |
|---|---|---|
| URL | `http://nyssen/` | `https://nyssen.me/` |
| Server | WAMP64 | Web host (FTP) |

## What to upload

- **Theme:** the changed files in `bl-themes/ny/`.
- **CSS:** let Prepros compile `bl-themes/ny/assets/css/style-min.css` first, as that's the file `index.php` loads. Then upload it with the changed `src/` files. To make browsers fetch the new CSS, increase the `?ver=` number on the stylesheet link in `bl-themes/ny/index.php` and upload that too.
- **Page content:** the changed `bl-content/pages/<slug>/index.txt` files.
- **Media:** any new files in `bl-content/uploads/`, such as cover images in `uploads/pages/<page uuid>/`.
- **Sitemap:** `sitemap.xml` in the site root is a static file, as Bludit's sitemap plugin only rebuilds when pages are saved in the live admin. When you add, remove or rename a public page, update `sitemap.xml` and upload it. Change a page's `<lastmod>` date when its content changes noticeably.
- **Page list:** `bl-content/databases/pages.php`, only when you've added, removed or renamed a page locally, or changed its settings (title, description, template, position, cover image, status). It replaces the live page list, so don't upload it if pages were edited in the live admin.

## Never upload

These files are different on each server. Uploading the local copies breaks the live site or replaces its logins.

- `bl-content/databases/site.php`: holds the site URL. The local copy says `http://nyssen`, and on the live site that turns every link and stylesheet into a local address (blocked as "Mixed Content").
- `bl-content/databases/users.php`: the admin login. The local copy would replace the live password.
- `bl-content/databases/security.php` and `syslog.php`: login security and logs.
- `bl-content/databases/plugins/`: plugin settings, which may hold credentials (for example `contact3`).
- `bl-content/workspaces/` and `bl-content/tmp/`: runtime data and temporary files.
- `bl-kernel/`, `bl-plugins/`, `bl-languages/`: Bludit core. Only upload these when updating Bludit itself.

## If the live site shows local URLs

If pages load without styles, or the browser console shows "Mixed Content" with `http://nyssen/...`, the local `site.php` was uploaded. To fix it:

1. Download the live `bl-content/databases/site.php`.
2. Set the URL line to `"url": "https:\/\/nyssen.me",`. Keep the escaped slashes and don't add a slash at the end.
3. Upload it and hard-refresh the browser (Ctrl+F5).

The live site URL also decides the canonical tags (Canonical plugin), so use the domain search engines should see.

## After each upload

- Open https://nyssen.me/ and the pages you changed. Check the styles load and the browser console shows no errors.
- Check both themes with the theme switcher.
- Commit the same changes to GitHub (`origin`: github.com/nyssen-me/nyssen).
