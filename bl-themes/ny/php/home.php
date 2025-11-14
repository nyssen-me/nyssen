<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php if (empty($content)): ?>
<div>
    <?php $language->p('No pages found') ?>
</div>
<?php endif ?>

<!-- Print all the content -->
<main class="content inner cf" role="main">
    
<?php foreach ($content as $page): ?>
    <article class="post post-excerpt">
        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>
        
        <!-- Page title -->
        <h2 class="post-title"><?php echo $page->title(); ?></h2>
        
        <!-- Page content until the pagebreak -->
        <div><?php echo $page->contentBreak(); ?></div>

        <!-- Shows "read more" button if necessary -->
        <?php if ($page->readMore()): ?>
        <div class="text-left">
            <a class="" href="<?php echo $page->permalink(); ?>" ><?php echo $L->get('Read more'); ?></a>
        </div>
        <?php endif ?>


        <?php
        // Embedded pages - Get pages by slug
        global $pages;
        $pageKeys = array('portfolio/the-royal-society-of-edinburgh', 'portfolio/bella-lola-bikinis');

        foreach ($pageKeys as $pageKey) {
            if ($pages->exists($pageKey)) {
                $currentPage = new Page($pageKey);
                ?>
                <div class="embedded-page">
                    <h2><?php echo $currentPage->title(); ?></h2>
                    <?php //echo $currentPage->content(); ?>

                    <!-- Page cover image -->
                    <?php if ($currentPage->coverImage()): ?>
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

                    <!-- Page content until the pagebreak -->
                    <div><?php echo $currentPage->contentBreak(); ?></div>

                    <!-- Shows "read more" button if necessary -->
                    <?php if ($currentPage->readMore()): ?>
                    <div class="text-left">
                        <a class="" href="<?php echo $currentPage->permalink(); ?>" ><?php echo $L->get('Read more'); ?></a>
                    </div>
                    <?php endif ?>

                </div>
                <?php
            }
        }
        ?>


        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
    </article>
<?php endforeach ?>

</main>