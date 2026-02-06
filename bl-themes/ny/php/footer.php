<aside 
    class="accessibility-widget-panel" 
    id="accessibility-panel" 
    role="dialog"
    aria-label="Accessibility Settings"
    aria-hidden="true"
    data-open="false">

    <!-- Panel Header with Close Button -->
    <div class="widget-panel-header">
        <div class="widget-panel-wrapper">
            <h2 class="widget-panel-title">Accessibility Tools</h2>
            <button class="widget-close-btn" 
                    type="button" 
                    aria-label="Close accessibility panel"
                    title="Close (Esc)">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="m8.382 17.025-1.407-1.4L10.593 12 6.975 8.4 8.382 7 12 10.615 15.593 7 17 8.4 13.382 12 17 15.625l-1.407 1.4L12 13.41z"/>
                </svg>
            </button>
        </div>
    </div>
    
    <div class="accessibility-widget-content">
        
        <!-- Display Modes Section -->
        <section class="widget-section" aria-labelledby="display-modes-heading">
            <h2 id="display-modes-heading" class="widget-section-heading">Display Modes</h2>
            <div class="display-modes" role="radiogroup" aria-labelledby="display-modes-heading">
                <button 
                    id="btn-light" 
                    class="theme-button" 
                    role="radio"
                    aria-checked="true"
                    aria-label="Light Mode"
                    data-theme="light">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M11 4V1h2v3zm0 19v-3h2v3zm9-10v-2h3v2zM1 13v-2h3v2zm17.7-6.3-1.4-1.4 1.75-1.8 1.45 1.45zM4.95 20.5 3.5 19.05l1.8-1.75 1.4 1.4zm14.1 0-1.75-1.8 1.4-1.4 1.8 1.75zM5.3 6.7 3.5 4.95 4.95 3.5 6.7 5.3zM12 18q-2.5 0-4.25-1.75T6 12t1.75-4.25T12 6t4.25 1.75T18 12t-1.75 4.25T12 18"/>
                    </svg>
                    <span>Light Mode</span>
                </button>
                <button 
                    id="btn-dark" 
                    class="theme-button" 
                    role="radio"
                    aria-checked="false"
                    aria-label="Dark Mode"
                    data-theme="dark">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M12 21q-3.75 0-6.375-2.625T3 12t2.625-6.375T12 3q.35 0 .688.025t.662.075q-1.025.725-1.638 1.888T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q1.375 0 2.525-.613T20.9 10.65q.05.325.075.662T21 12q0 3.75-2.625 6.375T12 21"/>
                    </svg>
                    <span>Dark Mode</span>
                </button>
                <button 
                    id="btn-contrast" 
                    class="theme-button" 
                    role="radio"
                    aria-checked="false"
                    aria-label="High Contrast Mode"
                    data-theme="contrast">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M12.003 21q-1.866 0-3.51-.708-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857.709 3.509-.708 3.51-1.924 2.859-2.856 1.925-3.509.709m.497-1.017q3.09-.202 5.295-2.459T20 12t-2.185-5.505T12.5 4.017z"/>
                    </svg>
                    <span>High Contrast</span>
                </button>
                <button 
                    id="btn-greyscale" 
                    class="theme-button" 
                    role="radio"
                    aria-checked="false"
                    aria-label="Greyscale Mode"
                    data-theme="greyscale">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16">
                        <path d="M16 0h-4v16h4zM6 4h4v12H6zM0 8h4v8H0z"/>
                    </svg>
                    <span>Greyscale</span>
                </button>
            </div>
        </section>
        
        <!-- Text Controls Section -->
        <section class="widget-section" aria-labelledby="text-controls-heading">
            <h2 id="text-controls-heading" class="widget-section-heading">Text Controls</h2>
            <div class="text-controls" role="radiogroup" aria-labelledby="text-controls-heading">
                <button 
                    data-font="normal" 
                    role="radio"
                    aria-checked="true" 
                    aria-label="Normal Font Size">
                    <span class="font-preview font-preview--normal">A</span>
                    <span>Normal</span>
                </button>
                <button 
                    data-font="large" 
                    role="radio"
                    aria-checked="false" 
                    aria-label="Large Font Size">
                    <span class="font-preview font-preview--large">A</span>
                    <span>Large</span>
                </button>
                <button 
                    data-font="bold" 
                    role="radio"
                    aria-checked="false" 
                    aria-label="Bold Text">
                    <span class="font-preview font-preview--bold">A</span>
                    <span>Bold</span>
                </button>
            </div>
        </section>
        
        <!-- Visual Aids Section -->
        <section class="widget-section" aria-labelledby="visual-aids-heading">
            <h2 id="visual-aids-heading" class="widget-section-heading">Visual Aids</h2>
            <div class="visual-aids">
                <button 
                    class="js__cursor-toggle visual-aid-toggle" 
                    type="button" 
                    aria-pressed="false" 
                    aria-label="Toggle large cursor">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M19.97 9.039 3.108 3.114l5.925 16.863 3.378-4.728 5.773 5.773 2.829-2.828-5.774-5.775z"/>
                    </svg>
                    <span class="toggle-text">Large Cursor</span>
                </button>
                <button 
                    class="js__links-toggle visual-aid-toggle" 
                    type="button" 
                    aria-pressed="false" 
                    aria-label="Toggle link highlighting">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M4.222 19.778a4.98 4.98 0 0 0 3.535 1.462 5 5 0 0 0 3.536-1.462l2.828-2.829-1.414-1.414-2.828 2.829a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.829-2.828-1.414-1.414-2.829 2.828a5.006 5.006 0 0 0 0 7.071m15.556-8.485a5.01 5.01 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0L9.879 7.051l1.414 1.414 2.828-2.829a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.829 2.828 1.414 1.414z"/>
                        <path fill="currentColor" d="m8.464 16.95-1.415-1.414 8.487-8.486 1.414 1.415z"/>
                    </svg>
                    <span class="toggle-text">Highlight Links</span>
                </button>
                <button 
                    class="js__images-toggle visual-aid-toggle" 
                    type="button" 
                    aria-pressed="false" 
                    aria-label="Toggle image visibility">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M6 17h12l-3.75-5-3 4L9 13zm-3 4V3h18v18zm5.5-11q.625 0 1.063-.437T10 8.5t-.437-1.062T8.5 7t-1.062.438T7 8.5t.438 1.063T8.5 10"/>
                    </svg>
                    <span class="toggle-text">Hide Images</span>
                </button>
                <button 
                    class="js__reading-mask-toggle visual-aid-toggle" 
                    type="button" 
                    aria-pressed="false" 
                    aria-label="Toggle reading mask">
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM23 4H1v17h22zm-2 15h-9V6h9z"/>
                    </svg>
                    <span class="toggle-text">Reading Mask</span>
                </button>
            </div>
        </section>

        <!-- Reset Button -->
        <button 
            id="resetButton" 
            class="reset-button" 
            type="button"
            aria-label="Reset all accessibility settings to defaults">
            <span>Reset All Settings</span>
        </button>

        <!-- Footer Links -->
        <div class="widget-footer">
            <a href="/accessibility-user-guide" class="widget-footer-link">
                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 2H5c-1.11 0-2 .9-2 2v16c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2M9 4h2v5l-1-.75L9 9zm10 16H5V4h2v9l3-2.25L13 13V4h6z"/>
                </svg>
                <span>User Guide</span>
            </a>
            <a href="/accessibility-statement" class="widget-footer-link">
                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8"/>
                </svg>
                <span>Accessibility Statement</span>
            </a>
        </div>
    </div>
</aside>


<footer class="footer wrapper">
    <div class="container container-wide">

        <hr>

        <div class="row first-row">
            <div class="column">

                <p>Interested in collaborating? Please email me at <a href="mailto:sergiduran@nyssen.me" title="Send an email to Sergi">sergiduran<!--antispam code-->@<!--va-bene-->nyssen.me</a> and I’ll reply the soonest possible. <del>Are you in a hurry? Then skype me at <a href="skype:sergi.loup?call" title="Call Sergi via Skype">sergi.loup</a> or, if you have the chance, lets meet over a coffee <a href="https://goo.gl/maps/XbvKVRR814oA1MfA9" title="Panaderia Can Font in Sant Pere Pescador" target="_blank" aria-label="(opens in new tab)">here</a></del>.</p>

                <p>Need to know a bit more about me? Visit my <a href="https://www.linkedin.com/in/sergiduran" title="Sergi in Linkedin" target="_blank" aria-label="(opens in new tab)">Linkedin</a>, <a href="https://twitter.com/nyssen_me" title="Sergi in Twitter" target="_blank" aria-label="(opens in new tab)">Twitter</a> and <a href="https://www.instagram.com/nyssen.me/" title="Sergi in Instagram" target="_blank" aria-label="(opens in new tab)">Instagram</a> accounts or our Sokvist <a href="http://sokvist.com/en/about/" title="Sokvist About us page" target="_blank" aria-label="(opens in new tab)">About page</a>.</p>
                
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