<main role="main" id="maincontent" class="wrapper">

    <section>
        <div class="container container-narrow padding-short">
            <div class="row reverse">
                <div class="column">
        
                    <?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin ?>
                    
                    <h1 class="page-title page-title-service"><?php echo $page->title(); ?></h1>

                    <div class="page-content"><?php echo $page->content(); ?></div>


                    <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>
        
                </div>

                <div class="column column-25 column-offset-5">

                    <?php
                    // Cover image (decorative). SVGs are printed inline so they can use
                    // currentColor and var(--accent-color) and follow the light/dark theme.
                    if ($page->coverImage()):
                        $coverFile = PATH_UPLOADS_PAGES . $page->uuid() . DS . $page->coverImage(false);
                        if (strtolower(pathinfo($coverFile, PATHINFO_EXTENSION)) === 'svg' && is_file($coverFile)): ?>
                    <div class="service-image" aria-hidden="true">
                        <?php echo preg_replace(array('/<\?xml.*?\?>/s', '/<!DOCTYPE[^>]*>/i'), '', file_get_contents($coverFile)); ?>
                    </div>
                        <?php else: ?>
                    <img class="service-image" src="<?php echo $page->coverImage(); ?>" alt="">
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="row">
                <div class="column">

                    <?php
                    // Next / Previous service navigation
                    global $pages;
                    $siblings = array_reverse($pages->getChildren('services'));
                    $currentIndex = array_search($page->key(), $siblings);
                    $prevPage = ($currentIndex > 0) ? new Page($siblings[$currentIndex - 1]) : null;
                    $nextPage = ($currentIndex < count($siblings) - 1) ? new Page($siblings[$currentIndex + 1]) : null;

                    if ($prevPage || $nextPage): ?>
                    <nav class="service-nav" aria-label="More services">
                        <?php if ($prevPage): ?>
                        <a class="service-nav__link service-nav__prev" href="<?php echo $prevPage->permalink(); ?>"><span><span class="visually-hidden">Previous service: </span><?php echo $prevPage->title(); ?></span></a>
                        <?php endif; ?>
                        <?php if ($nextPage): ?>
                        <a class="service-nav__link service-nav__next" href="<?php echo $nextPage->permalink(); ?>"><span><span class="visually-hidden">Next service: </span><?php echo $nextPage->title(); ?></span></a>
                        <?php endif; ?>
                    </nav>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
</main>