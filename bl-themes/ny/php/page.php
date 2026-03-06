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


                    <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>
        
                </div>
            </div>
        </div>
    </section>
</main>