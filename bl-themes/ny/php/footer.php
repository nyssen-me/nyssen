<footer class="footer wrapper">
    <div class="container container-wide">

        <hr>

        <div class="row first-row">
            <div class="column">

                <ul class="subfooter">
                    <li><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/" title="Creative Commons licence Attribution-NonCommercial 4.0 International" target="_blank" aria-label="(opens in new tab)">CC BY-NC</a></li>
                    <li><a href="https://bitbucket.org/sokvistweb/nyssen/" title="Source Code for nyssen.me website" target="_blank" aria-label="(opens in new tab)">Source Code</a></li>
                    <li><a href="accessibility.html" title="Accessibility Policy page">Accessibility Policy</a></li>
                </ul>

                <a class="top-link hide" href="#top" id="js-top" aria-label="Back to top">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" aria-hidden="true"><path d="M12 6H0l6-6z"/></svg>
                    <span class="screen-reader-text">Back to top</span>
                </a>


                <!-- Social Networks -->
                <div class="copyright">
                    <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
                        <a href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div class="copyright">
                    <?php //echo $site->footer(); ?>
                    Powered by <a target="_blank" class="" href="https://www.bludit.com">Bludit</a>
                </div>
            </div>
        </div>

    </div>
</footer>
