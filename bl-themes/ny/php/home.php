<main role="main" id="maincontent" class="wrapper">

    <section>
        <div class="container">
            <div class="row">
                <div class="column">

                    <h1 class="site-title"><?php echo $site->slogan(); ?></h1>
                    <h2 class="description"><?php echo $site->description(); ?></h2>
                
                </div>
            </div>
        </div>
    </section>


    <?php if (empty($content)): ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="column">
                    <?php $language->p('No pages found') ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>


    
    <?php foreach ($content as $page): // Print all the content ?>
    <section>
        <div class="container padding-top-none">
            <div class="row">
                <div class="column">

                    <?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin ?>
                    
                    <!-- <h2 class="page-title"><?php echo $page->title(); ?></h2> -->
                    
                    <div><?php echo $page->contentBreak(); // Page content until the pagebreak ?></div>

                    <?php if ($page->readMore()): // Shows "read more" button if necessary ?>
                        <a class="button" href="<?php echo $page->permalink(); ?>" ><?php echo $L->get('Read more'); ?></a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container padding-top-none">
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


    <section>
        <div class="container">
            <div class="row">
                <div class="column">

                    <ul class="portfolio-list">
                        <?php
                        // Embedded pages - Get pages by slug
                        global $pages;
                        $pageKeys = array(
                            'portfolio/the-royal-society-of-edinburgh', 
                            'portfolio/bella-lola-bikinis', 
                            'portfolio/edetària-organic-grenache-wines',
                            'portfolio/tour-of-the-borders'
                        );
                        foreach ($pageKeys as $pageKey) {
                            if ($pages->exists($pageKey)) {
                                $currentPage = new Page($pageKey);
                                ?>
                                <li>
                                    <h2><?php echo $currentPage->title(); ?></h2>
                                    
                                    
                                    <?php if ($currentPage->coverImage()): // Page cover image ?>
                                        <?php
                                        // Get image path - coverImage() returns URL, we need the file path
                                        $imageUrl = $currentPage->coverImage();
                                        $imagePath = str_replace(DOMAIN_BASE, PATH_ROOT, $imageUrl);
                                        
                                        // Get image dimensions
                                        $imageSize = @getimagesize($imagePath);
                                        $width = $imageSize ? $imageSize[0] : '';
                                        $height = $imageSize ? $imageSize[1] : '';
                                        ?>
                                        <img src="<?php echo $currentPage->coverImage(); ?>" 
                                            alt="<?php echo $currentPage->title(); ?>"
                                            class="cover-image"
                                            <?php if ($width && $height): ?>
                                            width="<?php echo $width; ?>"
                                            height="<?php echo $height; ?>"
                                            <?php endif; ?>>
                                    <?php endif; ?>


                                    <?php if ($currentPage->description()): ?>
                                        <p class="excerpt"><?php echo $currentPage->description(); ?></p>
                                    <?php endif; ?>
                                    
                                    
                                    <?php if ($currentPage->readMore()): // Page content until the pagebreak ?>
                                        <div><?php echo $currentPage->contentBreak(); ?></div>
                                        <a class="button" href="<?php echo $currentPage->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
                                    <?php else: ?>
                                        <div><?php echo $currentPage->content(); ?></div>
                                    <?php endif; ?>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>


                    <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>

                </div>
            </div>
        </div>
    </section>
    <?php endforeach ?>

</main>