<footer class="footer wrapper">
    <div class="container container-wide padding-short">

        <hr>

        <div class="row footer-main">

            <!-- Copyright, source code and accessibility policy -->
            <div class="column">
                <ul class="footer-list">
                    <li>&copy; <?php echo date('Y'); ?> SD Nyssen</li>
                    <li><a href="<?php echo DOMAIN_BASE; ?>accessibility-statement">Accessibility statement</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="column column-offset-5">
                <h2 class="footer-title">Contact</h2>
                <address>
                    <a href="mailto:sergiduran@nyssen.me">sergiduran<!--antispam code-->@<!--va-bene-->nyssen.me</a>
                </address>
            </div>

            <!-- Social Networks -->
            <div class="column column-offset-5 footer-social">
                <h2 class="footer-title">Social media</h2>
                <ul class="footer-list">
                    <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
                        <li><a rel="me" href="<?php echo $site->{$key}(); ?>"><?php echo ($key == 'linkedin') ? 'LinkedIn' : $label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <!-- a11y webring -->
        <nav class="a11y-webring-club" aria-labelledby="a11y-webring-club">
            <h2 id="a11y-webring-club" class="footer-title">a11y-webring.club</h2>
            <p>This site is a member of the <a rel="external" href="https://a11y-webring.club/">a11y-webring.club</a>.</p>
            <ul class="footer-list">
                <li><a rel="external" referrerpolicy="strict-origin" href="https://a11y-webring.club/prev">Previous website</a></li>
                <li><a rel="external" referrerpolicy="strict-origin" href="https://a11y-webring.club/random">Random website</a></li>
                <li><a rel="external" referrerpolicy="strict-origin" href="https://a11y-webring.club/next">Next website</a></li>
            </ul>
        </nav>

        <a class="top-link hide" href="#top" id="js-top" aria-label="Back to top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" aria-hidden="true"><path d="M12 6H0l6-6z"/></svg>
            <span class="screen-reader-text">Back to top</span>
        </a>

    </div>
</footer>
