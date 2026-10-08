<main role="main" id="maincontent" class="wrapper home">

    <section>
        <div class="container container-narrow padding-short padding-bottom-none">
            <div class="row">
                <div class="column">

                    <h1 class="site-title"><?php echo $site->title(); ?></h1>
                    <p class="description"><?php echo $site->slogan(); ?></p>
                
                </div>
                <div class="column column-25"></div>
            </div>
        </div>
    </section>

    
    <?php foreach ($content as $page): // Print all the content ?>
    <section>
        <div class="container container-narrow padding-top-none">
            <div class="row">
                <div class="column">

                    <?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin ?>
                    
                    <!-- <h2 class="page-title"><?php echo $page->title(); ?></h2> -->
                    
                    <div><?php echo $page->contentBreak(); // Page content until the pagebreak ?></div>

                    <?php if ($page->readMore()): // Shows "read more" button if necessary ?>
                        <a class="button" href="<?php echo $page->permalink(); ?>" ><?php echo $L->get('Read more'); ?></a>
                    <?php endif ?>
                </div>
                <div class="column column-25"></div>
            </div>
        </div>
    </section>


    <?php
    global $pages;
    $serviceChildren = $pages->getChildren('services');
    usort($serviceChildren, function($a, $b) {
        return (new Page($a))->position() - (new Page($b))->position();
    });
    ?>
    <section<?php if (!empty($serviceChildren)) echo ' aria-labelledby="services-label"'; ?>>
        <div class="container container-narrow padding-top-none">
            <div class="row">
                <div class="column">

                    <?php
                    if (!empty($serviceChildren)):
                        $servicesPage = new Page('services');
                    ?>
                    <!-- Not a heading: the service titles below are the h2s -->
                    <p id="services-label" class="section-label"><?php echo $servicesPage->title(); ?></p>
                    
                    <ul class="services-list">
                        <?php foreach ($serviceChildren as $childKey):
                            $childPage = new Page($childKey);
                        ?>
                        <li>
                            <h2><a href="<?php echo $childPage->permalink(); ?>"><?php echo $childPage->title(); ?></a></h2>
                            <?php if ($childPage->description()): ?>
                            <p><?php echo $childPage->description(); ?></p>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container container-narrow padding-top-none">
            <div class="row">
                <div class="column">

                <?php
                    // Embedded pages - Get pages by slug
                    global $pages;
                    $pageKeys = array(
                        'about'
                    );
                    foreach ($pageKeys as $pageKey) {
                        if ($pages->exists($pageKey)) {
                            $currentPage = new Page($pageKey);
                            ?>

                                <h2><?php echo $currentPage->title(); ?></h2>


                                <?php if ($currentPage->description()): ?>
                                    <p class="excerpt"><?php echo $currentPage->description(); ?></p>
                                <?php endif; ?>
                                
                                
                                <?php if ($currentPage->readMore()): // Page content until the pagebreak ?>
                                    <div><?php echo $currentPage->contentBreak(); ?></div>
                                    <a class="button" href="<?php echo $currentPage->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
                                <?php else: ?>
                                    <div><?php echo $currentPage->content(); ?></div>
                                <?php endif; ?>

                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>


    
    <?php endforeach ?>

</main>