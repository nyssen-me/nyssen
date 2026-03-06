<main role="main" id="maincontent" class="wrapper">

    <section>
        <div class="container container-narrow">
            <div class="row">
                <div class="column">
        
                    <?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin ?>
                    
                    <h1 class="post-title"><?php echo $page->title(); ?></h1>
                    
                    <?php if ($page->coverImage()): ?>
                    <div class="" style="background-image: url('<?php echo $page->coverImage(); ?>'); background-repeat: no-repeat; margin: 0 auto; width: 940px;">
                        <div style="height: 300px;"></div>
                    </div>
                    <?php endif ?>
                
                    <div class="page-content"><?php echo $page->content(); ?></div>

                    <?php
                    // Next / Previous service navigation
                    global $pages;
                    $siblings = array_reverse($pages->getChildren('services'));
                    $currentIndex = array_search($page->key(), $siblings);
                    $prevPage = ($currentIndex > 0) ? new Page($siblings[$currentIndex - 1]) : null;
                    $nextPage = ($currentIndex < count($siblings) - 1) ? new Page($siblings[$currentIndex + 1]) : null;

                    if ($prevPage || $nextPage): ?>
                    <nav class="service-nav" aria-label="<?php $L->get('Services navigation'); ?>">
                        <?php if ($prevPage): ?>
                        <a class="service-nav__link service-nav__prev" href="<?php echo $prevPage->permalink(); ?>"><span><?php echo $prevPage->title(); ?></span></a>
                        <?php endif; ?>
                        <?php if ($nextPage): ?>
                        <a class="service-nav__link service-nav__next" href="<?php echo $nextPage->permalink(); ?>"><span><?php echo $nextPage->title(); ?></span></a>
                        <?php endif; ?>
                    </nav>
                    <?php endif; ?>

                    <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>
        
                </div>

                <div class="column column-25 column-offset-5"></div>
            </div>
        </div>
    </section>
</main>