<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Bludit">

	<?php echo Theme::metaTagTitle(); // Dynamic title tag ?>

	<?php echo Theme::metaTagDescription(); // Dynamic description tag ?>

	<link rel="shortcut icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/apple-touch-icon-precomposed.png">

	<?php echo Theme::css('assets/css/style.css?ver=1.12'); ?>

    <link rel="canonical" href="https://nyssen.me/">

    <!-- Prevent theme flash - applies saved theme before render (no saved theme = system theme) -->
    <script>
        try {
            var theme = localStorage.getItem('theme');
            if (theme === 'light' || theme === 'dark') {
                document.documentElement.setAttribute('data-theme', theme);
            }
        } catch (e) {}
    </script>

	<?php Theme::plugins('siteHead'); // Load Bludit Plugins: Site head ?>
</head>

<body id="top">

	<?php // Load Bludit Plugins: Site Body Begin
    Theme::plugins('siteBodyBegin'); ?>

	<?php // Header
    include(THEME_DIR_PHP.'header.php'); ?>

	<?php // Content
    if ($WHERE_AM_I == 'page') {
        // Check if page has a custom template
        $template = $page->template();
        $templateFile = THEME_DIR_PHP . $template . '.php';
        
        // Use custom template if it exists, otherwise use default page.php
        if (file_exists($templateFile)) {
            include($templateFile);
        } else {
            include(THEME_DIR_PHP . 'page.php');
        }
    } else {
        include(THEME_DIR_PHP . 'home.php');
    }
    ?>


	<?php // Footer
    include(THEME_DIR_PHP.'footer.php'); ?>


	<script>

        // Theme switcher (light/dark, defaults to the system theme)
        (function() {
            const button = document.getElementById('js-theme-toggle');
            if (!button) return;

            const root = document.documentElement;
            const systemDark = window.matchMedia('(prefers-color-scheme: dark)');

            // A saved choice (data-theme) wins over the system theme
            const isDark = () => root.dataset.theme ? root.dataset.theme === 'dark' : systemDark.matches;

            const updateButton = () => {
                button.setAttribute('aria-pressed', isDark() ? 'true' : 'false');
            };

            button.addEventListener('click', () => {
                const theme = isDark() ? 'light' : 'dark';
                root.dataset.theme = theme;
                try {
                    localStorage.setItem('theme', theme);
                } catch (e) {}
                updateButton();
            });

            // Keep the button in sync if the system theme changes
            systemDark.addEventListener('change', updateButton);

            updateButton();
            button.hidden = false;
        })();


        // Scroll to top button
        (function() {
            const button = document.getElementById('js-top');
            if (!button) return;

            const SCROLL_THRESHOLD = 800;

            // Show/hide button based on scroll position
            const toggleButtonVisibility = () => {
                const isVisible = window.scrollY > SCROLL_THRESHOLD;
                button.classList.toggle('show', isVisible);
                button.classList.toggle('hide', !isVisible);
            };

            // Use passive listener for better scroll performance
            window.addEventListener('scroll', toggleButtonVisibility, { passive: true });

            // Scroll to top on click
            button.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Initial state check
            toggleButtonVisibility();
        })();
                
    </script>
    <!-- <script src="assets/js/lazysizes.min.js"></script> -->

	<?php // Load Bludit Plugins: Site Body End
    Theme::plugins('siteBodyEnd'); ?>

</body>
</html>