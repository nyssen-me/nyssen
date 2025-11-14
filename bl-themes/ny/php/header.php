<!-- loader 
<div class="loader-body" id="loader" role="status" aria-live="polite">
	<div class="loader"></div>
</div>
 /loader -->

<!-- Welcome message -->
<header class="site-header text-center">
    <div class="text-center">

		<h1 class="logo"><a href="../" title="Home"><?php echo $site->title(); ?></a></h1>

        <div class="line">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><path d="M337.3 448c-7.4-1.8-13.2-4.2-17.4-7.3-4.3-2.9-7.1-6.3-8.6-9.9-1.5-3.7-2.2-7.4-2.2-11 0-6.3 1.9-11.9 5.7-16.8 3.8-4.9 9.4-7.3 16.6-7.3 5.4 0 10.1 1.5 13.9 4.6 3.8 3.1 6.9 6.5 9.3 10.2 2.6 4 5.1 8.5 7.3 13.5 2 4.6 3.7 8.3 5 11.2 40.4-25.4 71.9-63.7 88.6-109.1-11.1 8.8-21.8 15.9-32 21.3-12.2 6.5-26.1 9.7-41.8 9.7-14.1 0-25.3-4.1-33.6-12.3-8.2-8.2-12.4-18.9-12.4-32.1 0-3.5.3-7.7.9-12.6.6-4.9 2-12.1 4.2-21.6l17.2-68.9c1.6-6.6 2.9-12.4 3.7-17.3.9-4.9 1.3-9.7 1.3-14.2 0-8.2-1.4-13.7-4.1-16.5-2.7-2.7-8.3-4.1-16.6-4.1-3.2 0-7.4.6-12.3 1.9-5 1.2-8.9 2.2-11.7 3l3.3-14.2c11.5-5.2 21.6-9.1 30.4-11.8 8.8-2.7 15.8-4 21.1-4 11.8 0 20.5 2.6 26.2 7.9 5.7 5.3 8.5 13.2 8.5 23.8 0 2.6-.3 6.3-.9 10.8-.6 4.6-1.5 9.1-2.6 13.7l-20 80.6c-1.5 6.2-2.7 12-3.7 17.3-1 5.4-1.5 9.5-1.5 12.3 0 9.9 2.4 17.7 7.2 23.4 4.8 5.7 11.8 8.6 21.1 8.6 10.8 0 21.3-2.6 31.5-7.9 8-4.1 15.6-9.5 22.8-16 4.8-18 7.4-36.8 7.4-56.3 0-120.4-97.6-218-218-218s-218 97.6-218 218 97.6 218 218 218c32.3 0 62.9-7.1 90.5-19.7-1.7-.3-3.1-.6-4.3-.9zM300 341.1c-13.3 5.3-23.6 9.2-31 11.6-7.4 2.4-14.8 3.6-22.4 3.6-11.8 0-20.7-3.1-26.6-9.2-5.9-6.1-8.9-13.7-8.9-22.7 0-3.2.3-6.8.9-10.7.6-3.9 1.5-8.5 2.9-13.8l21.8-82.4c1.6-6.3 2.9-12.1 3.9-17.2 1-5.2 1.4-9.3 1.4-12.4 0-9.9-2.3-17.7-7-23.4-4.7-5.7-11.6-8.6-20.8-8.6-8.9 0-18.9 2.9-30 8.8-11.1 5.9-21.5 14.5-31.3 25.7l-37.7 162.2H73.9L107 209.4c.7-3.5 1.8-8.7 3.2-15.4 1.4-6.7 2.1-12.1 2.1-16.2 0-8.3-1.4-13.8-4.2-16.6-2.8-2.8-8.4-4.2-16.9-4.2-3.3 0-7.4.6-12.4 1.7s-9 2-11.8 2.8l3.3-14.1c11.5-5.2 21.7-9 30.6-11.5 8.9-2.5 16.5-3.8 22.9-3.8 11.7 0 20 3.2 25.1 9.5 5 6.3 7.7 15.1 8 26.3h1.3c16.1-13 30.1-22.6 41.8-28.8 11.7-6.3 25.1-9.4 40-9.4 14.1 0 25.1 4.1 33 12.3 8 8 12 18.8 12 32 0 2.7-.4 7.4-1.2 14.2-.8 6.8-2.1 13.5-3.9 20.1l-18.6 71c-1.3 4.7-2.6 10.1-3.9 16.3-1.3 6.1-1.9 10.9-1.9 14.3 0 8.4 1.8 14.1 5.5 17.1 3.7 3 9.7 4.5 18.1 4.5 2.8 0 6.8-.5 12-1.4 5.2-1 9.2-1.9 12-3l-3.1 14z"/></svg>
        </div>

        <h2 class="description"><?php echo $site->slogan(); ?></h2>


		<nav class="menu">
            <ul>
                <?php 
                // Get current page key
                $currentKey = isset($page) ? $page->key() : '';
                
                // Display static pages (pages) that are not children
                foreach ($staticContent as $staticPage): 
                    if (empty($staticPage->parentKey())): 
                        $activeClass = ($currentKey == $staticPage->key()) ? 'active' : '';
                        ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activeClass; ?>" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
                        </li>
                    <?php endif;
                endforeach;
                ?>
            </ul>
        </nav>

        <!-- <nav class="menu">
            <ul>
                <?php 
                // Include HOMEPAGE to menu - Combine static and non-static pages
                // Get current page
                global $pages;
                
                // Get current page key
                $currentKey = isset($page) ? $page->key() : '';

                // Get non-static pages
                $nonStaticPages = $pages->getList(1, -1, true, false, false, false, false);
                
                // Get static pages
                $staticPages = $pages->getList(1, -1, true, true, false, false, false);
                
                // Combine both arrays and remove duplicates
                $allPageKeys = array_unique(array_merge($nonStaticPages, $staticPages ));
                
                foreach ($allPageKeys as $pageKey):
                    if ($pages->exists($pageKey)):
                        $menuPage = new Page($pageKey);
                        
                        // Only show parent pages (not children)
                        if (empty($menuPage->parentKey())):
                            $activeClass = ($currentKey == $menuPage->key()) ? 'active' : '';
                            ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $activeClass; ?>" href="<?php echo $menuPage->permalink(); ?>"><?php echo $menuPage->title(); ?></a>
                            </li>
                        <?php 
                        endif;
                    endif;
                endforeach;
                ?>
            </ul>
        </nav> -->


		<div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
            <em>Dark Mode</em>
        </div>
        
        <!-- <div class="intro">
        
            <h2><?php echo $site->description(); ?></h2>

		</div> -->


    </div>
</header>


