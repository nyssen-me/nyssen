<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Bludit">

	<!-- Dynamic title tag -->
	<?php echo Theme::metaTagTitle(); ?>

	<!-- Dynamic description tag -->
	<?php echo Theme::metaTagDescription(); ?>

	<!-- Include Favicon -->
	<?php echo Theme::favicon('assets/img/favicon.png'); ?>

	<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('assets/css/style-min.css'); ?>

	<!-- Load Bludit Plugins: Site head -->
	<?php Theme::plugins('siteHead'); ?>
</head>

<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Header -->
	<?php include(THEME_DIR_PHP.'header.php'); ?>

	<!-- Content -->
	<?php
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


	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>


	<script>
        // Simple page preloader https://vladdenisov.github.io/simple-page-preloader/
        /* ====================================================================== */
        /* document.body.onload = function(){
            setTimeout(function() {
                var preloader = document.getElementById('loader');
                if( !preloader.classList.contains('done') )
                {
                    preloader.classList.add('done');
                }
            }, 1000)
        } */
        
        
        
        // Theme color switcher 
        // https://codepen.io/ananyaneogi/pen/zXZyMP
        /* ====================================================================== */
        const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        const currentTheme = localStorage.getItem('theme');

        if (currentTheme) {
            document.documentElement.setAttribute('data-theme', currentTheme);

            if (currentTheme === 'dark') {
                toggleSwitch.checked = true;
            }
        }

        function switchTheme(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            }
            else {        document.documentElement.setAttribute('data-theme', 'light');
                  localStorage.setItem('theme', 'light');
            }    
        }

        toggleSwitch.addEventListener('change', switchTheme, false);
        
        
        
        // Scroll to top button implementation in vanilla JavaScript (ES6 - ECMAScript 6) 
        // https://codepen.io/joshuamasen/pen/OYaYbL
        /* ====================================================================== */
        // Set a variable for our button element.
        const scrollToTopButton = document.getElementById('js-top');

        // Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
        const scrollFunc = () => {
            // Get the current scroll value
            let y = window.scrollY;

            // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
            if (y > 800) {
                scrollToTopButton.className = "top-link show";
            } else {
                scrollToTopButton.className = "top-link hide";
            }
        };

        window.addEventListener("scroll", scrollFunc);

        const scrollToTop = () => {
            // Let's set a variable for the number of pixels we are from the top of the document.
            const c = document.documentElement.scrollTop || document.body.scrollTop;

            // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
            // We'll also animate that scroll with requestAnimationFrame:
            // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                // ScrollTo takes an x and a y coordinate.
                // Increase the '10' value to get a smoother/slower scroll!
                window.scrollTo(0, c - c / 20);
            }
        };

        // When the button is clicked, run our ScrolltoTop function above!
        scrollToTopButton.onclick = function(e) {
            e.preventDefault();
            scrollToTop();
        }
                
    </script>
    <!-- <script src="assets/js/lazysizes.min.js"></script> -->


	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>