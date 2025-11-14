<main class="content inner cf" role="main">
    <article class="post post-excerpt">
        
        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>
        
        <!-- Page title -->
        <h1 class="post-title"><?php echo $page->title(); ?></h1>
        
        <!-- Page cover image -->
        <?php if ($page->coverImage()): ?>
        <div class="" style="background-image: url('<?php echo $page->coverImage(); ?>'); background-repeat: no-repeat; margin: 0 auto; width: 940px;">
            <div style="height: 300px;"></div>
        </div>
        <?php endif ?>
    
        <!-- Page content -->
        <div class="page-content"><?php echo $page->content(); ?></div>
        
        
        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
        
    </article>
</main>