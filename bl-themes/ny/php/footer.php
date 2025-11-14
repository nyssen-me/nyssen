<footer class="footer wrapper">
        <div class="container container-wide padding-bottom-none">

            <div class="row first-row">
                <div class="column">

                    <p>Interested in collaborating? Please email me at <a href="mailto:sergiduran@nyssen.me" title="Send an email to Sergi">sergiduran<!--antispam code-->@<!--va-bene-->nyssen.me</a> and I’ll reply the soonest possible. <del>Are you in a hurry? Then skype me at <a href="skype:sergi.loup?call" title="Call Sergi via Skype">sergi.loup</a> or, if you have the chance, lets meet over a coffee <a href="https://goo.gl/maps/XbvKVRR814oA1MfA9" title="Panaderia Can Font in Sant Pere Pescador" target="_blank" aria-label="(opens in new tab)">here</a></del>.</p>

                    <p>Need to know a bit more about me? Visit my <a href="https://www.linkedin.com/in/sergiduran" title="Sergi in Linkedin" target="_blank" aria-label="(opens in new tab)">Linkedin</a>, <a href="https://twitter.com/nyssen_me" title="Sergi in Twitter" target="_blank" aria-label="(opens in new tab)">Twitter</a> and <a href="https://www.instagram.com/nyssen.me/" title="Sergi in Instagram" target="_blank" aria-label="(opens in new tab)">Instagram</a> accounts or our Sokvist <a href="http://sokvist.com/en/about/" title="Sokvist About us page" target="_blank" aria-label="(opens in new tab)">About page</a>.</p>
                    
                    <ul class="subfooter">
                        <li><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/" title="Creative Commons licence Attribution-NonCommercial 4.0 International" target="_blank" aria-label="(opens in new tab)">CC BY-NC</a></li>
                        <li><a href="https://bitbucket.org/sokvistweb/nyssen/" title="Source Code for nyssen.me website" target="_blank" aria-label="(opens in new tab)">Source Code</a></li>
                        <li><a href="accessibility.html" title="Accessibility Policy page">Accessibility Policy</a></li>
                    </ul>
                    
                    <a class="top-link hide" href="" id="js-top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
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