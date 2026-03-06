<main role="main" id="maincontent" class="wrapper">

    <section>
        <div class="container container-narrow padding-top">
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
        
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container container-narrow padding-top-none">
            <div class="row">
                <div class="column">

                    <?php
                    global $pages;
                    $serviceChildren = $pages->getChildren('services');
                    usort($serviceChildren, function($a, $b) {
                        return (new Page($a))->position() - (new Page($b))->position();
                    });
                    if (!empty($serviceChildren)):
                    ?>
                    <ul class="services-list">
                        <?php foreach ($serviceChildren as $childKey):
                            $childPage = new Page($childKey);
                        ?>
                        <li>
                            <h3><a href="<?php echo $childPage->permalink(); ?>"><?php echo $childPage->title(); ?></a></h3>
                            <?php if ($childPage->description()): ?>
                            <p><?php echo $childPage->description(); ?></p>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>


                    <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>

                </div>
            </div>
        </div>
    </section>

</main>